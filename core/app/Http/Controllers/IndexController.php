<?php

namespace App\Http\Controllers;

use App\About;
use App\Service;
use App\Social;
use App\Tservice;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $about = About::find(1);
        $social = Social::all();
        $service = Service::find(1);
        $tserv = Tservice::all();
        return view('index',compact('about','social','service' , 'tserv'));
    }
}
