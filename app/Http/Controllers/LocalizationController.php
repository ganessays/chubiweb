<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function index($locale)
    {
        App::setLocale($locale);
        //store the locale in session so that the middleware can register it
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
