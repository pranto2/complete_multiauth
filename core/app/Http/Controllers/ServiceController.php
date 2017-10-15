<?php

namespace App\Http\Controllers;

use App\Service;
use App\Tservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tservice = Tservice::all();
        $ser = Service::find(1);
        return view('admin.web.service',compact('ser', 'tservice'));
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
            'link' => 'max:255',
        ));
        $soc = new Tservice;
        $soc->icon = $request->icon;
        $soc->title = $request->title;
        $soc->link = $request->link;
        $soc->save();
        Session::flash('message', 'Successfully Added');
        return redirect('admin/service');
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
        $ser = Service::find($id);
        $this->validate($request, array(
            'title' => 'required|max:255',
            'detail' => 'required',
        ));
        $ser->title = $request->input('title');
        $ser->detail = $request->input('detail');
        $ser->save();
        Session::flash('message', 'Successfully Update');
        return redirect('admin/service');
    }

    public function iconService(Request $request, $id)
    {
        $soc = Tservice::find($id);
        $this->validate($request, array(
            'icon' => 'required|max:255',
            'title' => 'required|max:255',
            'link' => 'max:255',
        ));

        $soc->icon = $request->input('icon');
        $soc->title = $request->input('title');
        $soc->link = $request->input('link');
        $soc->save();
        Session::flash('message', 'Successfully Update');
        return redirect('admin/service');

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
