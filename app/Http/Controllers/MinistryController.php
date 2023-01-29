<?php

namespace App\Http\Controllers;

use App\Models\Ministry;
use Illuminate\Http\Request;

class MinistryController extends Controller
{
    /**
     * Display a view all list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $pageTitle = 'All Ministries';
        $basicInfos = Ministry::latest()->get();

        return view('ministries.all', compact('pageTitle', 'basicInfos'));
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

        return view('ministries.add', compact('pageTitle', 'pageDescription'));
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
        ]);

        // This Data array Using For all Request Set in DB insert
        $data = array(
            'name' => $request->name,
        );

        Ministry::create($data);
        session()->flash('create', 'Basic Inforamtion Successfully Saved!');
        return redirect()->route('ministry.all');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageTitle = 'Firestore Add New';
        $pageDescription = 'Some description for the page';

        $basicInfo = Ministry::where('id', $id)->first();

        return view('ministries.edit', compact('pageTitle', 'pageDescription', 'basicInfo'));
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
        $basicInfo = Ministry::where('id', $id)->first();
        //Validation Check
        $request->validate([
            'name' => 'required',
        ]);

        // This Data array Using For all Request Set in DB insert
        $data = array(
            'name' => $request->name,
        );

        Ministry::find($id)->update($data);

        session()->flash('update', 'Information Successfully Update!');

        return redirect()->route('ministries.all', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $basicInfo = Ministry::findorfail($id);
        $basicInfo->delete();
        if ($basicInfo->image) {
            unlink($basicInfo->image);
        }

        session()->flash('delete', 'Information Deleted!');
        return redirect()->route('ministry.all');
    }
}
