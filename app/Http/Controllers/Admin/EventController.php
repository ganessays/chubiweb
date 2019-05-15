<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(){
        $list_events= Event::orderBy('id','DESC')->get();
        return view('Admin.Pages.list_page',compact('list_events'));
    }
    public function create(){
        $category = Category::all();
        return view('Admin.Pages.add_news',compact('category'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'event_details' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'post_date' => 'required',
            'expiry_date' => 'required',
            'cat_id' => 'required',

        ]);

        $event = new Event();
        $event->user_id = Auth::user()->id;
        $event->cat_id = \request('cat_id');
        $event->title = \request('title');
        $event->event_details = \request('event_details');
        $event->status = \request('status');
        $event->start_date = \request('start_date');
        $event->end_date = \request('end_date');
        $event->post_date = \request('post_date');
        $event->expiry_date = \request('expiry_date');
        $event->slug = str_slug(\request('title'));
        if($request->hasFile('event_image')){
            $filename = time().'.'.request()->file('event_image')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('event_image')->move('public/uploads/event/',$filename);
            $event->event_image =$filename;
        }

        if ($event->save()){
            return redirect('admin/list_events')->with('success', 'Record Saved Successfully');

        }

    }

    public function edit($id){
        $category = Category::all();
        $event = Event::FindOrFail($id);
        return view('Admin.Pages.edit_event',compact('event','category'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'event_details' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'post_date' => 'required',
            'expiry_date' => 'required',
            'cat_id' => 'required',

        ]);

        $event = Event::FindOrFail($id);
        $event->cat_id = \request('cat_id');
        $event->title = \request('title');
        $event->event_details = \request('event_details');
        $event->status = \request('status');
        $event->start_date = \request('start_date');
        $event->end_date = \request('end_date');
        $event->post_date = \request('post_date');
        $event->expiry_date = \request('expiry_date');
        $event->slug = str_slug(\request('title'));
        if($request->hasFile('event_image')){
            if (is_file(public_path('uploads/event/').'/'.$event->event_image) && file_exists(public_path('uploads/event/').'/'.$event->event_image)){
                unlink(public_path('uploads/event/').'/'.$event->event_image);
            }

            $filename = time().'.'.request()->file('event_image')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('event_image')->move('public/uploads/event/',$filename);
            $event->event_image =$filename;
        }

        if ($event->save()){
            return redirect('admin/list_events')->with('success', 'Record Update Successfully');

        }

    }

    public function destroy($id){
        $event = Event::FindOrFail($id);
        if (is_file(public_path('uploads/event/').'/'.$event->event_image) && file_exists(public_path('uploads/event/').'/'.$event->event_image)){
            unlink(public_path('uploads/event/').'/'.$event->event_image);
        }

        $event->delete();
            return redirect('admin/list_events')->with('success','Record Deleted Succussfully');
    }
}
