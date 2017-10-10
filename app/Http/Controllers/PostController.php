<?php

namespace App\Http\Controllers;

use App\Post;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Post::all();
        return view('admin.home')->with(['blog' => $blog ]);
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
            'category'    => 'required|max:255',
            'title'       => 'required|max:255',
            'description' => 'required|max:255',
            'image'       => 'required',
        ));
        $blog = new Post;

        $blog->category = $request->category;
        $blog->title = $request->title;
        $blog->description = $request->description;
        // image save //ses
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            \Intervention\Image\Facades\Image::make($image)->save($location);
            $blog->image =  $filename;
        };

        $blog->save();

        return redirect('advertisement')->with('msg', 'Seccecefully upload.');
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
        $blog = Post::find($id);
        return view('admin.edit')->with(['blog' => $blog]);
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
        $blog = Post::find($id);

        $this->validate($request, array(
            'category'    => 'max:255',
            'title'       => 'max:255',
            'description' => 'max:255',
            'image'       => '',
        ));

        $blog->category = $request->category;
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->hasFile('image')) {
            Storage::delete($blog->image);
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            \Intervention\Image\Facades\Image::make($image)->save($location);
            $blog->image =  $filename;
        };
        $blog->save();
        return redirect('admin/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Post::find($id);
        Storage::delete($blog->image);
        $blog->delete();
        return redirect('admin/home');
    }
}
