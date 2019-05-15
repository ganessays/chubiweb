<?php

namespace App\Http\Controllers\Client;
use App\ApplicationMail;
use App\OnlineForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class OnlineFormController extends Controller
{
    public function online_form (){
    	$title = '学校説明会お申し込みフォーム　School Briefing Application Form';
    	return view('Client.Pages.School_Briefing_Application_Form',compact('title'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'phone_number' => 'required',
            'mail_address' => 'required',
        ]);
        $application = new OnlineForm();

        $application->meeting = $request->meeting;
        $application->nationality = $request->nationality;
        $application->first_name = $request->first_name;
        $application->furigana = $request->furigana;
        $application->furigana2 = $request->furigana2;
        $application->street_address = $request->street_address;
        $application->address = $request->address;
        $application->building_name = $request->building_name;
        $application->phone_number = $request->phone_number;
        $application->mail_address = $request->mail_address;
        $application->school_history = $request->school_history;
        $application->school_name = $request->school_name;
        $application->graduation = $request->graduation;
        $application->message = $request->message;

        $application->save();
        $meeting = $application->meeting;
        $nationality = $application->nationality;
        $first_name = $application->first_name;
        $furigana = $application->furigana;
        $furigana2 = $application->furigana2;
        $street_address = $application->street_address;
        $address = $application->address;
        $building_name = $application->building_name;
        $phone_number = $application->phone_number;
        $mail_address = $application->mail_address;
        $school_history = $application->school_history;
        $school_name = $application->school_name;
        $graduation = $application->graduation;
        $message = $application->message;
        $send_to_mail = 'kyoumu@cast.ac.jp';
        Mail::to($send_to_mail)->send(new ApplicationMail($graduation,$school_name,$school_history,$mail_address,$phone_number,$building_name,$address,$message, $meeting,$nationality,$first_name,$furigana,$furigana2,$street_address));

        return redirect()->back()->with('success','Successfully Send | 学校説明会お申し込みフォーム　School Briefing Application Form');


    }
}
