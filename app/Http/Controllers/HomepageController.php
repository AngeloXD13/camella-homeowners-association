<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announcement;
use App\Models\AnnouncementFile;
use App\Models\InformationContent;
use App\Models\InformationCategory;
use App\Models\InformationFile;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET PUBLIC ANNOUNCEMENTS AND ACTIVE ANNOUNCEMENTS
        $public_announcements = Announcement::where([['tag', 'public'], ['status', 'active']])->latest()->get()->toJson();
        // dd($public_announcements);
        $announcements_files = AnnouncementFile::all()->toJson();
        // dd($announcements_files);

        //GET BODINFORMATION ONLY AND ALL PIC
        //$categories = InformationCategory::all();
        $bodmembers = InformationContent::where('i_catergory_id', '1')->get()->toJson();
        //dd($bodmembers);
        $information_files = InformationFile::all()->toJson();

        return view('homepage.home', compact('public_announcements', 'announcements_files', 'bodmembers', 'information_files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
