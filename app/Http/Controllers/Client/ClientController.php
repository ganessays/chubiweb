<?php

namespace App\Http\Controllers\Client;

use App\Event;
use App\Graduate;
use App\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function index()
    {
        $title = 'Home Page - Chubi - Central Art School Tokyo';
        $events = Event::orderBy('id','DESC')->where('status','publish')->where('post_date','<=',date('Y-m-d'))->where('expiry_date','>=',date('Y-m-d'))->limit(4)->get();

        $information =Information::where('status','publish')->orderBy('info_date','DESC')->get();
        $graduate =Graduate::where('status','publish')->orderBy('id','DESC')->limit(3)->get();
        return view('Client.Pages.index',compact('title','events','information','graduate'));
    }
    public function career(){
        $title = 'Career - Chubi - Central Art School Tokyo';
        return view('Client.Pages.career_advancement',compact('title'));
    }
    public function access(){
        $title = 'Access - Chubi - Central Art School Tokyo';
        return view('Client.Pages.access',compact('title'));
    }
    public function school(){
        $title = 'School - Chubi - Central Art School Tokyo';
        return view('Client.Pages.school',compact('title'));
    }
    public function department(){
        $title = 'Department - Chubi - Central Art School Tokyo';
        return view('Client.Pages.department',compact('title'));
    }
    public function admission(){
        $title = 'Admission - Chubi - Central Art School Tokyo';
        return view('Client.Pages.admission',compact('title'));
    }
    public function document_request(){
        $title = 'Document Request - Chubi - Central Art School Tokyo';
        return view('Client.Pages.document_request',compact('title'));
    }
    public function castpaper(){
        $title = 'cast paper - Chubi - Central Art School Tokyo';
        return view('Client.Pages.cast_paper',compact('title'));
    }
    public function honka(){
        $title = 'Chubi Honka - Chubi - Central Art School Tokyo';
        return view('Client.Pages.honka',compact('title'));
    }
    public function management_team(){
        $title = 'Management Team - Chubi - Central Art School Tokyo';
        return view('Client.Pages.management_team',compact('title'));
    }

    public function information(){
        $information =Information::where('status','publish')->orderBy('info_date','DESC')->get();
        $title ='中美からのお知らせ Information - Central Art School Tokyo';
        return view('Client.Pages.information_list',compact('title','information'));
    }
    public function info_details_view($id){
        $information = Information::where('status','publish')->findOrFail($id);
        $title ='中美からのお知らせ Information - Central Art School Tokyo';
        return view('Client.Pages.information_details',compact('title','information','info'));
    }

    public function student_graduate(){
        $graduate =Graduate::where('status','publish')->orderBy('id','DES')->get();
        $title ='中美からのお知らせ Graduate - Central Art School Tokyo';
        return view('Client.Pages.graduate_page',compact('title','graduate'));
    }
    public function student_details($id){
        $graduate =Graduate::where('status','publish')->findOrFail($id);
        $title ='中美からのお知らせ Graduate - Central Art School Tokyo';
        return view('Client.Pages.student_details',compact('title','graduate'));
    }
    public function experience_class(){
       return view('Client.Pages.experience_class',compact('title','graduate')); 
    }
}
