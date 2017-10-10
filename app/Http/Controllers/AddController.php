<?php

namespace App\Http\Controllers;

use App\Add;
use App\Admin;
use Illuminate\Http\Request;
use Intervention\Image\Image;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $add = Add::all();
        return view('admin.advertise')->with(['add' => $add ]);
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
            'script'      => 'max:255',
            'link'        => 'max:255',
            'image'       => '',
        ));
        $add = new Add;

        $add->script = $request->script;
        $add->link = $request->link;
        $add->image = $request->image;
        // image save //ses
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            \Intervention\Image\Facades\Image::make($image)->save($location);
            $add->image =  $filename;
        };

        $add->save();

        return redirect('admin/advertisement')->with('msg', 'Seccecefully upload.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function show(Add $add)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $add = Add::all();
        return view('admin.advertise-edit')->with(['add' => $add ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Add $add)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function destroy(Add $add)
    {
        //
    }
}
