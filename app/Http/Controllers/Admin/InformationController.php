<?php

namespace App\Http\Controllers\Admin;

use App\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    public function index(){
        $title = 'Create new Information | Cast';
        return view('Admin.Pages.information.add_information');
    }
    public function store(Request $request){
        $this->validate($request,[
           'title' => 'required|'
        ]);

        $information = new Information();
        $information->title =$request->title;
        $information->info_date =$request->info_date;
        $information->info_details =$request->info_details;
        $information->status =$request->status;
        $information->color =$request->color;
        if($request->hasFile('image')){
            $filename = time().'.'.request()->file('image')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/uploads/information/',$filename);
            $information->image =$filename;
        }
        $information->save();

        return redirect('admin/list-information')->with('success','New Information Create');
    }

    public function view(){
        $information =Information::all();
        return view('Admin.Pages.information.list_page',compact('information'));
    }

    public function edit($id){
        $informationData = Information::all();
        $information = Information::findOrFail($id);
        return view('Admin.Pages.information.edit_information',compact('information','informationData'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
           'title' => 'required',
        ]);
        $information = Information::findOrFail($id);

        $information->title =$request->title;
        $information->info_date =$request->info_date;
        $information->info_details =$request->info_details;
        $information->status =$request->status;
        $information->color =$request->color;
        if($request->hasFile('image')){
            $filename = time().'.'.request()->file('image')->getClientOriginalExtension();
            if (is_file(public_path('uploads/information/').'/'.$information->image) && file_exists(public_path('uploads/information/').'/'.$information->image)){
                unlink(public_path('uploads/information/').'/'.$information->image);
            }

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/uploads/information/',$filename);
            $information->image =$filename;
        }
        $information->save();

        return redirect('admin/list-information')->with('success',' Information Update');

    }
    public function destroy($id){
        $info = Information::FindOrFail($id);
        if (is_file(public_path('uploads/information/').'/'.$info->image) && file_exists(public_path('uploads/information/').'/'.$info->image)){
            unlink(public_path('uploads/information/').'/'.$info->image);
        }

        $info->delete();
        return redirect('admin/list-information')->with('success','Record Deleted Successfully');
    }
}
