<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::all();
        return view('index', compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData=$request->validate([
        'name' => 'required|max:100',
        'firstname' => 'required|max:100',
        'geslacht'=> 'required|max:100',
        'dateofbirth'=> 'required|max:100',
        'group'=> 'required|max:100',
        'email'=> 'required|max:100',
        'level'=> 'required|max:100',
        ]);

        $member = Member::create($storeData);
        return redirect('/members')->with('ourMessage', 'Member has been created');
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
        $member = Member::findorFail($id);
        return  view('edit', compact('member'));
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
        $updateData = $request->validate([
            'name' => 'required|max:100',
            'firstname' => 'required|max:100',
            'geslacht'=> 'required|max:100',
            'dateofbirth'=> 'required|max:100',
            'group'=> 'required|max:100',
            'email'=> 'required|max:100',
            'level'=> 'required|max:100',

        ]);
        $member = Member::create($updateData);
        return redirect('/members')->with('ourMessage', 'Member has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::findOrfail($id);
        $member->delete();
        return redirect('/members')->with('ourMessage', 'Member has been DELETED');
    }
}
