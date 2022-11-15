<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BODMember;
use App\Models\BODRole;
use Illuminate\Support\Facades\Hash;

class BODMembersController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    private static function getData()
    {
        return [
            [
                'DirectorID' => 1,
                'HoaID' => 123,
                'UserName' => 'AngeloXD13',
                'FirstName' => 'Angelo',
                'MiddleInitial' => 'B',
                'LastName' => 'Dionisio',
                'Email' => 'Dionisio@gmail.com',
                'PhoneNumber' => '09123456789',
                'Password' => '12345',
                'Position' => 'CEO',
                'Tag' => 'Active',
                'Remarks' => '',
            ],
            [
                'DirectorID' => 2,
                'HoaID' => 124,
                'UserName' => 'jovet123',
                'FirstName' => 'Jovet',
                'MiddleInitial' => 'B',
                'LastName' => 'Catapang',
                'Email' => 'Catapang@gmail.com',
                'PhoneNumber' => '09123456789',
                'Password' => '12345',
                'Position' => 'CTO',
                'Tag' => 'Not Active',
                'Remarks' => '',
            ]

        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = BODMember::latest()->paginate(5);
        //dd($data);
        return view('adminpanel.bodmembers.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminpanel.bodmembers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:t2_boardofdirector',
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:t2_boardofdirector',
            'phonenumber' => 'required|unique:t2_boardofdirector',
            'password' => 'required',
            'bod_image' =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $file_name = 'bod_image_' . time() . '.' . request()->bod_image->getClientOriginalExtension();
        request()->bod_image->move(public_path('Images'), $file_name);
        $path = '/Images/' . $file_name;

        $BODMember = new BODMember;

        $BODMember->hoa_id = $request->hoa_id;
        $BODMember->username = $request->username;
        $BODMember->firstname = $request->firstname;
        $BODMember->middleinitial = $request->middleinitial;
        $BODMember->lastname = $request->lastname;
        $BODMember->email = $request->email;
        $BODMember->phonenumber = $request->phonenumber;

        $hashed = Hash::make($request->password);
        $BODMember->password = $hashed;

        //$BODMember->password = $request->password;

        $BODMember->position = $request->position;
        $BODMember->tag = $request->tag;
        $BODMember->remarks = $request->remarks;
        // $BODMember->bod_image = $request->bod_image ;
        $BODMember->bod_image = $path;

        $BODMember->save();
        
        $this->store_role($BODMember);

        return redirect()->route('bodmember.index')->with('success', 'Student Added successfully.');
    }

    public function store_role(BODMember $bodmember)
    {
        $bodrole = new BODRole;

        // $bodrole->m_announcements = $request->m_announcements ;
        // $bodrole->m_hoaMembers = $request->m_hoaMembers ;
        // $bodrole->m_infos = $request->m_infos ;
        // $bodrole->m_complaints = $request->m_complaints ;
        // $bodrole->m_requests = $request->m_requests ;
        // $bodrole->m_gallery = $request->m_gallery ;

        $bodrole->director_id = $bodmember['id'];
        $bodrole->m_announcements = 0;
        $bodrole->m_hoaMembers = 0;
        $bodrole->m_infos = 0;
        $bodrole->m_complaints = 0;
        $bodrole->m_requests = 0;
        $bodrole->m_gallery = 0;

        $bodrole->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BODMember $bodmember)
    {
        return view('adminpanel.bodmembers.show', compact('bodmember'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BODMember $bodmember)
    {
        //
        //dd($bodmember);
        return view('adminpanel.bodmembers.edit', compact('bodmember'));
    }

    public function edit_role(BODMember $bodmember)
    {
        //
        //$bodmember = BODMember::find($request->hidden_id);
        //dd($bodmember);
        
        $bodrole = BODRole::where('director_id',$bodmember['id'])->first();
        //dd($bodrole);
        return view('adminpanel.bodmembers.edit_role', compact('bodrole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BODMember $bodmember)
    {
        //
        $request->validate([
            'username' => 'required|unique:t2_boardofdirector,UserName,' . $bodmember->id,
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:t2_boardofdirector,email,' . $bodmember->id,
            'phonenumber' => 'required|unique:t2_boardofdirector,PhoneNumber,' . $bodmember->id,
            'bod_image' =>  '_sometimes|required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);



        $bodmember = BODMember::find($request->hidden_id);

        $bodmember->hoa_id = $request->hoa_id;
        $bodmember->username = $request->username;
        $bodmember->firstname = $request->firstname;
        $bodmember->middleinitial = $request->middleinitial;
        $bodmember->lastname = $request->lastname;
        $bodmember->email = $request->email;
        $bodmember->phonenumber = $request->phonenumber;

        if($request->password != null){
            $hashed = Hash::make($request->password);
            $bodmember->password = $hashed;
        };
       
        $bodmember->position = $request->position;
        $bodmember->tag = $request->tag;
        $bodmember->remarks = $request->remarks;
        // $BODMember->bod_image = $request->bod_image ;

        //picture
        $file_name = $request->hidden_bod_image;
        if ($request->bod_image != '') {
            $file_name = 'bod_image_' . time() . '.' . request()->bod_image->getClientOriginalExtension();
            request()->bod_image->move(public_path('Images'), $file_name);
            $path = '/Images/' . $file_name;
            $bodmember->bod_image = $path;
        }

        $bodmember->save();

        return redirect()->route('bodmember.index')->with('success', 'BOD Updated successfully.');
    }

    public function update_role(Request $request, BODRole $bodrole)
    {
        //

        $bodrole = BODRole::find($request->hidden_id);

        $bodrole->m_announcements = $request->m_announcements;
        $bodrole->m_hoaMembers = $request->m_hoaMembers;
        $bodrole->m_infos = $request->m_infos;
        $bodrole->m_complaints = $request->m_complaints;
        $bodrole->m_requests = $request->m_requests;
        $bodrole->m_gallery = $request->m_gallery;

        $bodrole->save();

        return redirect()->route('bodmember.index')->with('success', 'BOD Role Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BODMember $bodmember)
    {
        //
        $bodmember->delete();

        return redirect()->route('bodmember.index')->with('success', 'BOD Data deleted successfully');
    }
}
