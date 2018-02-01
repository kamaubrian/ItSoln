<?php

namespace App\Http\Controllers;

use App\electronics;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }



    public function getAllDevices(){
        $electronics = electronics::all();
        return view('technician.customers',compact('electronics'));
    }
}
