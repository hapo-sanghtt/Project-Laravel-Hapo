<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use App\Http\Requests\MemberRequest;
use App\Http\Requests\SaveMember;
use Illuminate\Http\Request;
use App\Member;
use App\Project;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Response;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::all();
        return view('members.index', ['members' => $member]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        return view('members.create', ['projects' => $projects]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        if (request() -> has('image')) {
            $imageupload = request()->file('image');
            $imagepath = 'public\upload';
            $image = Storage::put($imagepath, $imageupload);
            $image = str_replace('public', 'storage', $image);
            Member::create([
                'image' => $image,
                'name' => $request['name'],
                'gender' => $request['gender'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'address' => $request['address'],
                'password' => Hash::make($request['password']),
                'role' => $request['role'],
                'projects_id' => $request['projects_id'],
            ]);
        }
        return redirect()->route('members.index')->with('success', 'Member save!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('members.show', ['members' => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', ['members' => $member]);
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
        $member = Member::findOrFail($id);
        $member->update([
            'image' => $request['image'],
            'name' => $request['name'],
            'gender' => $request['gender'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'role' => $request['role'],
            'projects_id' => $request['projects_id'],
        ]);
        if ($request->hasFile('image')) {
            $imageupload = $request->file('image');
            $imagename = time() . '.' . $imageupload->getClientOriginalExtension();
            $imagepath = 'public\upload';
            $image = Storage::put($imagepath, $imageupload);
            $member -> image = str_replace('public', 'storage', $image);
        } else {
            return $request;
            $member->image = '';
        }
        $member->save();
        return redirect()->route('members.index')->with('success', 'Member update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Member delete!');
    }
}
