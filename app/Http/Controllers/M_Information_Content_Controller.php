<?php

namespace App\Http\Controllers;

use App\Models\InformationContent;
use App\Models\InformationCategory;
use App\Models\InformationFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class M_Information_Content_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::guard('bod');
        //dd($user->user()->username);
        $username = $user->user()->username;
        $categories = InformationCategory::all();
        $data = InformationContent::latest()->get();
        return view('bodpanel.m_informations.index', compact('data', 'categories', 'username'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        //
      
        $categories = InformationCategory::all();
        //dd($categories);
        return view('bodpanel.m_informations.create', compact('categories'));
    }

    public function createbod()
    {
        dd("createBod");
        $categories = InformationCategory::all();
        //dd($categories);
        return view('bodpanel.m_informations.create_bod', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'subject' => 'required',
        //     'severity' => 'required',
        //     'p_tag' => 'required',
        //     'v_tag' => 'required',a_Values
        //    // 'status' => 'required',
        // ]);


        $box = $request->all();
        $i_Values =  array();
        parse_str($box['serializedform'], $i_Values);

        //dd($i_Values);

        $category = InformationCategory::where('title', $i_Values['category'])->first();
        //dd($category);

        $infomation = new InformationContent;
        // dd($category->id);
        $infomation->i_catergory_id = $category->id;
        $infomation->heading1 = $i_Values['heading1'];
        $infomation->heading2 = $i_Values['heading2'];
        $infomation->heading3 = $i_Values['heading3'];
        $infomation->heading4 = $i_Values['heading4'];
        $infomation->heading5 = $i_Values['heading5'];

        $infomation->save();

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
                $imageName = 'information_' . $infomation['id'] . '_' . $x . '_' . time() . '.' . $extension; //ID of iaccouncement

                Storage::disk('information_images')->put($imageName, base64_decode($dirty_image_64));

                $information_files = new InformationFile;
                $information_files->i_content_id = $infomation['id'];
                $information_files->title = $imagesArray[$x]['FileName'];
                $information_files->filename = $imageName;
                $information_files->type = $imagesArray[$x]['MimeType'];
                $information_files->filedirectory = 'information_images';

                $information_files->save();
            }
        } //else dd("null");

        // dd("sucess");

        return redirect()->route('m_information.index')->with('success', 'Information Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InformationContent  $informationContent
     * @return \Illuminate\Http\Response
     */
    public function show(InformationContent $m_information)
    {
        //
        $information_files = InformationFile::where('i_content_id', $m_information['id'])->get();
        $categories = InformationCategory::all();
       //dd($m_information);
        return view('bodpanel.m_informations.show', compact('m_information', 'information_files', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InformationContent  $informationContent
     * @return \Illuminate\Http\Response
     */
    public function edit(InformationContent $m_information)
    {
         //dd($m_announcement);
         $information_files = InformationFile::where('i_content_id', $m_information['id'])->get();
         $categories = InformationCategory::all();
         return view('bodpanel.m_informations.edit', compact('m_information', 'information_files','categories'));
    }

    public function edit_bod(InformationContent $m_information)
    {
         //dd($m_announcement);
         $information_files = InformationFile::where('i_content_id', $m_information['id'])->get();
         $categories = InformationCategory::all();
         return view('bodpanel.m_informations.edit_bod', compact('m_information', 'information_files','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InformationContent  $informationContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $box = $request->all();
        $i_Values =  array();
        parse_str($box['serializedform'], $i_Values);

        //dd($i_Values);

        //dd($category);

        $infomation = InformationContent::find($i_Values['hidden_id']);
        // dd($category->id);
       
        $infomation->heading1 = $i_Values['heading1'];
        $infomation->heading2 = $i_Values['heading2'];
        $infomation->heading3 = $i_Values['heading3'];
        $infomation->heading4 = $i_Values['heading4'];
        $infomation->heading5 = $i_Values['heading5'];

        $infomation->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InformationContent  $informationContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformationContent $m_information)
    {
        //
        $m_information->delete();
        return redirect()->route('m_information.index')->with('success', 'Information deleted successfully');
    }
}
