<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterController extends Controller
{
    public function add_footer(){
        return view('Admin.Footer.add_footer');
    }

    public function view_footer(){
        return view('Admin.Footer.view_footer');
    }
}
