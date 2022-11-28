<?php

namespace App\Http\Controllers;

use App\Models\Announcement;

use Illuminate\Http\Request;

use App\Models\AnnouncementFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class M_AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $data = Announcement::latest()->paginate(5);

        $user = Auth::guard('bod');
        //dd($user->user()->username);
        $username = $user->user()->username;

        return view('bodpanel.m_announcements.index', compact('data', 'username'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //dd('angelo');
        return view('bodpanel.m_announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'subject' => 'required',
        //     'severity' => 'required',
        //     'p_tag' => 'required',
        //     'v_tag' => 'required',
        //    // 'status' => 'required',
        // ]);

        //auth Current Login User ID 
        $userID = Auth::guard('bod')->id();

        $box = $request->all();
        $a_Values =  array();
        parse_str($box['serializedform'], $a_Values);

        $announcement = new Announcement;
        $announcement->subject = $a_Values['subject'];
        $announcement->description = $a_Values['description'];
        $announcement->director_id = $userID;
        $announcement->severity = $a_Values['severity'];
        $announcement->tag = $a_Values['p_tag'];
        $announcement->status = $a_Values['status'];

        $announcement->save();

        $imagesArray = $request->AttachmentArray;
        if ($imagesArray != null || $imagesArray > 0) {
            for ($x = 0; $x < count($imagesArray); $x++) {
                $dirty_image_64 = $imagesArray[$x]['Content'];
                $image_64 = str_replace(['"', "'"], "",  $dirty_image_64); //your base64 encoded data
                $dirty_extension = $imagesArray[$x]['MimeType'];
                $extension = str_replace(['image', "/"], "",  $dirty_extension);
                $replace = substr($image_64, 0, strpos($image_64, ',') + 1);
                // find substring fro replace here eg: data:image/png;base64,
                $image = str_replace($replace, '', $image_64);
                $image = str_replace(' ', '+', $image);
                $imageName = 'announcement_' . $announcement['id'] . '_' . $x .'_'.time() . '.' . $extension; //ID of iaccouncement
              
                Storage::disk('annoucement_images')->put($imageName, base64_decode($dirty_image_64));
               
                $announcements_files = new AnnouncementFile;
                $announcements_files->announcement_id = $announcement['id'];
                $announcements_files->title = $imagesArray[$x]['FileName'];
                $announcements_files->filename = $imageName;
                $announcements_files->type = $imagesArray[$x]['MimeType'];;
                $announcements_files->filedirectory = 'annoucement_images';
                $announcements_files->tag = $a_Values['v_tag'];

                $announcements_files->save();
            }
        } //else dd("null");

       // dd("sucess");

        return redirect()->route('m_announcement.index')->with('success', 'Announcement Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $m_announcement)
    {
        //
        //dd($announcement);
        $announcements_files = AnnouncementFile::where('announcement_id', $m_announcement['id'])->get();
       // dd($announcements_files);
        return view('bodpanel.m_announcements.show', compact('m_announcement', 'announcements_files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $m_announcement)
    {
        //
        //dd($m_announcement);
        $announcements_files = AnnouncementFile::where('announcement_id', $m_announcement['id'])->get();
        return view('bodpanel.m_announcements.edit', compact('m_announcement', 'announcements_files'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        // $request->validate([
        //     'subject' => 'required',
        //     'severity' => 'required',
        //     'p_tag' => 'required',
        //     'v_tag' => 'required',
        //     'status' => 'required',

        //     'bod_announcement_file' =>  'required|image|mimes:jpg,png,jpeg,gif,svg,pdf,doc,docx|max:10240'
        // ]);

        // $bod_announcement_file = $request->hidden_bod_announcement_file;

        // if ($request->$bod_announcement_file != '') {
        //     //image upload
        //     $file_name = $request->bod_announcement_file->getClientOriginalName() . time() . '.' . $request->bod_announcement_file->image->getClientOriginalExtension();
        //     request()->bod_image->move(public_path('images/announcements'), $file_name);
        //     $path = '/images/announcements' . $file_name;
        //     $title = $request->bod_announcement_file->getClientOriginalName();
        //     $filetype = $request->bod_announcement_file->image->getClientOriginalExtension();
        // }

        // //auth Current Login User ID 
        // $userID = Auth::guard('bod')->id;
        // //var_dump($userID);

        // $announcement = Announcement::find($request->hidden_id);
        // $announcement->subject = $request->subject;
        // $announcement->description = $request->description;
        // $announcement->director_id = $userID;
        // $announcement->severity = $request->severity;
        // $announcement->tag = $request->p_tag;
        // $announcement->status = $request->status;

        // $announcement->save();

        // $announcements_files = $bod_announcement_file;

        // //anouncement id
        // $announcements_files->announcement_id = $announcement['id'];
        // $announcements_files->filedirectory = $path;
        // $announcements_files->title = $title;
        // $announcements_files->type = $filetype;
        // $announcements_files->filedirectory = $path;
        // //tag
        // $announcements_files->tag = $request->v_tag;

        // $announcements_files->save();


        //auth Current Login User ID 
        $userID = Auth::guard('bod')->id();

        //dd($request);

        $box = $request->all();
        $a_Values =  array();
        parse_str($box['serializedform'], $a_Values);
        
       // dd($a_Values);
 
        $announcement = Announcement::find($a_Values['hidden_id']);
        $announcement->subject = $a_Values['subject'];
        $announcement->description = $a_Values['description'];
        $announcement->director_id = $userID;
        $announcement->severity = $a_Values['severity'];
        $announcement->tag = $a_Values['p_tag'];
        $announcement->status = $a_Values['status'];

        $announcement->save();

        $imagesArray = AnnouncementFile::where('announcement_id',$announcement->id)->get();
       // dd($imagesArray);
        
        if ($imagesArray != null || $imagesArray > 0) {
            for ($x = 0; $x < count($imagesArray); $x++) {
               
               
                $announcements_files = AnnouncementFile::find($imagesArray[$x]['id']);
             //   dd($announcements_files);
                $announcements_files->tag = $a_Values['v_tag'];

                $announcements_files->save();
            }
        } //else dd("null");

       // dd("sucess");

       return redirect()->route('m_announcement.index')->with('success', 'Announcement Edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $m_announcement)
    {
        //
        //dd("DELETE".$m_announcement);
        $m_announcement->delete();
        return redirect()->route('m_announcement.index')->with('success', 'Announcement deleted successfully');
    }
}
