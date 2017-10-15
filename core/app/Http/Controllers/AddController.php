<?php

namespace App\Http\Controllers;

use App\AfilateAdd;
use App\ScriptAdd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class AddController extends Controller
{
    public function index()
    {
        return view('admin.web.advertise');
    }

    public function affilateAddPost(Request $request)
    {
        $this->validate($request, array(
            'link' => 'max:255',
            'image_size' => 'max:255',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'script' => 'max:255',
            'type' => 'max:255'
        ));
        $affilateAdd = new AfilateAdd;

        $affilateAdd->link = $request->link;
        $affilateAdd->image_size = $request->image_size;
        $affilateAdd->script = $request->script;
        $affilateAdd->type = $request->type;
//        image Upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = 'images/advertise/'. $filename;
            \Intervention\Image\Facades\Image::make($image)->save($location);
            $affilateAdd->image =  $filename;
        };
        $affilateAdd->save();
        Session::flash('message', 'Advertise Uploaded');
        return redirect('admin/advertisement');
    }

    public function show()
    {
        return view('admin.web.show-add');
    }
}
