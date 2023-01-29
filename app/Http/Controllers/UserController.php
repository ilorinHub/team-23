<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ministry;
use App\Models\Department;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a view all list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $pageTitle = 'All Department';
        $basicInfos = User::with(['ministry','department'])->latest()->get();

        return view('users.all', compact('pageTitle', 'basicInfos'));
    }

    /**
     * Display a add new all list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function addNew()
    {

        $pageTitle = 'Firestore Add New';
        $pageDescription = 'Some description for the page';
        $ministries = Ministry::latest()->get();
        $departments = Department::latest()->get();

        return view('users.add', compact('pageTitle', 'ministries', 'departments', 'pageDescription'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation Check
        $request->validate([
            'name' => 'required|unique:ministries,name',
            'email' => 'required|unique:users',
            'title' => 'required',
            'ministry_id' => 'nullable|exists:ministries,id',
            'department_id' => 'nullable|exists:departments,id'
        ]);

        // This Data array Using For all Request Set in DB insert
        $data = array(
            'name' => $request->name,
            'title' => $request->title,
            'username' => $request->name,
            'ministry_id' => $request->ministry_id,
            'department_id' => $request->department_id ?? null
        );

        User::create($data);
        session()->flash('create', 'Basic Inforamtion Successfully Saved!');
        return redirect()->route('user.all');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageTitle = 'Add New';

        $basicInfo = Department::where('id', $id)->first();

        return view('users.edit', compact('pageTitle', 'pageDescription', 'basicInfo'));
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
        $basicInfo = Department::where('id', $id)->first();
        //Validation Check
        $request->validate([
            'name' => 'required',
            'ministry_id' => 'required|exists:ministries,id'
        ]);

        // This Data array Using For all Request Set in DB insert
        $data = array(
            'name' => $request->name,
        );

        Department::find($id)->update($data);

        session()->flash('update', 'Information Successfully Update!');

        return redirect()->route('users.all', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $basicInfo = Department::findorfail($id);
        $basicInfo->delete();
        if ($basicInfo->image) {
            unlink($basicInfo->image);
        }

        session()->flash('delete', 'Information Deleted!');
        return redirect()->route('users.all');
    }
}
