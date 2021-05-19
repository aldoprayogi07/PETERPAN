<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class DahsboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('manager')){
            return view('managerdash');
        }elseif(Auth::user()->hasRole('karyawan')){
            return view('karyawandash');
        }
    }

    public function myprofile()
    {
        return view('myprofile');
    }
}
