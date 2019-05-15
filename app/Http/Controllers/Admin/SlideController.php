<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    public function add_slide(){
        return view('Admin.Pages.Slider.add_slide');
    }
    public function view_slide(){
        return view('Admin.Pages.Slider.view_slide');
    }
}
