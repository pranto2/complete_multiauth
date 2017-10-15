<?php

namespace App\Http\Controllers;

use App\Statistics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stas = Statistics::all();
        return view('admin.web.statistics', compact('stas'));
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
        $stas = Statistics::find($id);
        $this->validate($request, array(
            'icon'    => 'max:255|required',
            'b_text'   => 'max:255|required',
            's_text' => 'max:255|required',
        ));

        $stas->icon = $request->input('icon');
        $stas->b_text = $request->input('b_text');
        $stas->s_text = $request->input('s_text');
        $stas->save();
        Session::flash('message', 'Successfully Updated');
        return redirect('admin/statistics');
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
