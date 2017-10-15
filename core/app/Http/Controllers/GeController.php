<?php

namespace App\Http\Controllers;

use App\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $general = General::all();
        return view('admin.settings.general', compact('general'));
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
        $general = General::find($id);
        $this->validate($request,array(
            'name' => 'required|max:255' ,
            'color' =>'required|max:255' ,
            'mobile' => 'required|max:255',
            'email' => 'required|max:255',
            'pay_email' => 'required|max:255',
            'footer' => 'required|max:255',
            'top_text' => 'required',
            'footer_text' => 'required',
        ));
        $general->name = $request->input('name');
        $general->color = $request->input('color');
        $general->mobile = $request->input('mobile');
        $general->email = $request->input('email');
        $general->pay_email = $request->input('pay_email');
        $general->footer = $request->input('footer');
        $general->top_text = $request->input('top_text');
        $general->footer_text = $request->input('footer_text');
        $general->save();
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
        //
    }
}
