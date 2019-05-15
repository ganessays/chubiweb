<?php

namespace App\Http\Controllers\Admin;

use App\Graduate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GraduateController extends Controller
{
    public function index(){
        $title = 'Create new Information | Cast';
        return view('Admin.Pages.graduate.add_graduate');
    }
    public function store(Request $request){
        $this->validate($request,[
            'student' => 'required|',
            'pass' => 'required|'
        ]);

        $graduate = new Graduate();
        $graduate->student =$request->student;
        $graduate->pass =$request->pass;
        $graduate->courses =$request->courses;
        $graduate->link =$request->link;
        $graduate->status =$request->status;
        $graduate->color =$request->color;
        $graduate->details =$request->details;
        if($request->hasFile('image')){
            $filename = time().'.'.request()->file('image')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/uploads/graduate/',$filename);
            $graduate->image =$filename;
        }
        $graduate->save();

        return redirect('admin/list-graduate-student')->with('success','New Information Create');
    }

    public function list_student(){
        $graduate =Graduate::orderBy('id','ASC')->get();
        return view('Admin.Pages.graduate.list_page',compact('graduate'));
    }

    public function edit($id){
        $graduateData = Graduate::all();
        $graduate = Graduate::findOrFail($id);
        return view('Admin.Pages.graduate.edit_graduate',compact('graduate','graduateData'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'student' => 'required',
            'pass' => 'required',
            'courses' => 'required',
//            'image' => 'required|graduates|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $graduate = Graduate::findOrFail($id);

        $graduate->student =$request->student;
        $graduate->pass =$request->pass;
        $graduate->courses =$request->courses;
        $graduate->link =$request->link;
        $graduate->status =$request->status;
        $graduate->color =$request->color;
        $graduate->details =$request->details;
        if($request->hasFile('image')){
            if (is_file(public_path('uploads/graduate/').'/'.$graduate->image) && file_exists(public_path('uploads/graduate/').'/'.$graduate->image)){
                unlink(public_path('uploads/graduate/').'/'.$graduate->image);
            }
            $filename = time().'.'.request()->file('image')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/uploads/graduate/',$filename);
            $graduate->image =$filename;
        }
        $graduate->save();

        return redirect('admin/list-graduate-student')->with('success','New Information Create');

    }
    public function destroy($id){
        $info = Graduate::FindOrFail($id);
        if (is_file(public_path('uploads/graduate/').'/'.$info->image) && file_exists(public_path('uploads/graduate/').'/'.$info->image)){
            unlink(public_path('uploads/graduate/').'/'.$info->image);
        }

        $info->delete();
        return redirect('admin/list-graduate-student')->with('success','Graduate Student Delete Successfully on your list');
    }
}
