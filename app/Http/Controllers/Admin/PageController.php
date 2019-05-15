<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function add_page(){
        return view('Admin.Pages.add_page');
    }

    public function list_page(){
        return view('Admin.Pages.list_page');
    }
}
