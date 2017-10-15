<?php

namespace App\Http\Controllers;

use App\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social = Social::all();
        return view('admin.web.social', compact('social'));
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
        $this->validate($request, array(
            'icon' => 'required|max:255',
            'title' => 'required|max:255',
            'link' => 'required|max:255',
        ));
        $soc = new Social;
        $soc->icon = $request->icon;
        $soc->title = $request->title;
        $soc->link = $request->link;
        $soc->save();
        Session::flash('message', 'Successfully Added');
        return redirect('admin/social');
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
        $soc = Social::find($id);
        $this->validate($request, array(
            'icon' => 'required|max:255',
            'title' => 'required|max:255',
            'link' => 'required|max:255',
        ));

        $soc->icon = $request->input('icon');
        $soc->title = $request->input('title');
        $soc->link = $request->input('link');
        $soc->save();
        Session::flash('message', 'Successfully Update');
        return redirect('admin/social');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soc = Social::find($id);
        $soc->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('admin/social');
    }
}
