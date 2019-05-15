<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.dashboard');
    }

    public function language($locale)
    {
        App::setLocale($locale);
        //store the locale in session so that the middleware can register it
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
