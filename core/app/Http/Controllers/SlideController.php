<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::all();
        return view('admin.web.slide', compact('slide'));
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
            'b_text' => 'required|max:255',
            's_text' => 'required|max:255',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
        ));
        $slide = new Slide;
        $slide['b_text'] = $request->b_text;
        $slide['s_text'] = $request->s_text;
//        image Upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = 'images/slide/'. $filename;
            Image::make($image)->save($location);
            $slide['image'] =  $filename;
        };
        $slide->save();
        Session::flash('message', 'Successfully Added');
        return redirect('admin/slide');
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
        $slide = Slide::find($id);
        $this->validate($request, array(
            'b_text' => 'required|max:255',
            's_text' => 'required|max:255',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
        ));

        $slide->b_text = $request->input('b_text');
        $slide->s_text = $request->input('s_text');

        if ($request->hasFile('image')) {
            unlink('images/slide/'. $slide->image);
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = 'images/slide/'. $filename;
            Image::make($image)->save($location);
            $slide['image'] =  $filename;
        };
        $slide->save();
        Session::flash('message', 'Successfully Updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);
        unlink('images/slide/'. $slide->image);
        $slide->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('admin/slide');
    }
}
