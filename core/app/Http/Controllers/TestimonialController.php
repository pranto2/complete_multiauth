<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = Testimonial::all();
        return view('admin.web.testimonial', compact('test'));
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
            'name' => 'max:255',
            'title' => 'max:255',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'star' => 'max:255',
            'comment' => 'max:255'
        ));
        $test = new Testimonial;

        $test->name = $request->name;
        $test->title = $request->title;
        $test->star = $request->star;
        $test->comment = $request->comment;
//        image Upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = 'images/testimonial/'. $filename;
            Image::make($image)->save($location);
            $test->image =  $filename;
        };
        $test->save();
        Session::flash('message', 'Successfully Created');
        return redirect('admin/testimonial');
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
        $test = Testimonial::find($id);
        $this->validate($request, array(
            'name'    => 'max:255|required',
            'title'       => 'max:255|required',
            'star' => 'max:255|required',
            'comment'       => 'max:255|required',
            'image'       => '',
        ));

        $test->name = $request->input('name');
        $test->title = $request->input('title');
        $test->star = $request->input('star');
        $test->comment = $request->input('comment');

        if ($request->hasFile('image')) {
            unlink('images/testimonial/'.$test->image);
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = 'images/testimonial/'. $filename;
            Image::make($image)->save($location);
            $test->image =  $filename;
        };
        $test->save();
        Session::flash('message', 'Successfully Updated');
        return redirect('admin/testimonial');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Testimonial::find($id);
        unlink('images/testimonial/'. $test->image);
        $test->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('admin/testimonial');
    }
}
