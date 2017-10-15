<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = Logo::find(1);
        return view('admin.web.logo', compact('logos'));
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
        $logos = Logo::find(1);

        $this->validate($request,array(
           'icon' => 'nullable',
           'logo' => 'nullable',
        ));

        if ($request->hasFile('logo')) {

            if(file_exists('images/logo/'.$logos->logo)){
                unlink('images/logo/'.$logos->logo);
            }
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = 'images/logo/'. $filename;
            Image::make($image)->save($location);
            $logos->logo =  $filename;

        } elseif ($request->hasFile('icon')) {

            if(file_exists('images/logo/'.$logos->icon)){
                unlink('images/logo/'.$logos->icon);
            }

            $image = $request->file('icon');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = 'images/logo/'. $filename;
            Image::make($image)->save($location);
            $logos->icon =  $filename;
        }
        $logos->save();
        Session::flash('message', 'Logo Updated');
        return back();
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
