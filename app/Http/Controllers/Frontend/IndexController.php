<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function pendaftaraan()
    {
        return view('frontend.pendaftaran.index');
    }

    public function forgetpassword()
    {
        return view('frontend.forgetpassword.index');
    }
}
