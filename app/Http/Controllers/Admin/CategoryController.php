<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id','DESC')->where('id','!=',1)->get();

        return view('Admin.Pages.categories',compact('categories'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
        ]);

        $category = new Category();
        $category->name = \request('name');
        $category->save();
        return redirect()->back()->with('success','Category Created Successfully');
    }
    public function edit($id){
        $category = Category::FindOrFail($id);
        return view('Admin.Pages.edit_cat',compact('category'));
    }
    public function update(Request $request,$id){
        $category = Category::FindOrFail($id);
        $category->name = \request('name');
        $category->save();
        return redirect('admin/categories')->with('success','Category Updated Successfully');
    }
}
