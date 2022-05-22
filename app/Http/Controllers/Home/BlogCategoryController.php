<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Illuminate\Support\Carbon;



class BlogCategoryController extends Controller
{
    public function AllBlogCategory(){

        $blogCategory = BlogCategory::latest()->get();
        return view('admin.blog_category.blog_category_all',compact('blogCategory'));

    } // End Method

    public function AddBlogCategory(){
        return view('admin.blog_category.blog_category_add');
    } // End Method


    public function StoreBlogCategory(Request $request)
    { // Start Method

        /*
        $request->validate([
            'blog_category' => 'required',
        ],[
            'blog_category.required' => 'Blog Category Name is Required',
        ]); // End validate
        */

        BlogCategory::insert([
            'blog_category' => $request->blog_category,
            'created_at' => Carbon::now(),
        ]); // End Insert

        $notification = array(
            'message' => 'Blog Category Inserted Successfully',
            'alert-type' => 'success',
        ); // End Array NOTIFICATION

        return redirect()->route('all.blog.category')->with($notification); // End REDIRECT

    } // End Method


    public function EditBlogCategory($id){

        $blogCategory = BlogCategory::findOrFail($id);
        return view('admin.blog_category.blog_category_edit',compact('blogCategory'));
        
    } // End Method

    public function UpdateBlogCategory(Request $request){
        $blogCategory_id = $request->id;

        BlogCategory::findOrFail($blogCategory_id)->update(['blog_category' => $request->blog_category]);

        $notification = array(
            'message' => 'Blog Category Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.blog.category')->with($notification);

    } // End Method


    public function DeleteBlogCategory($id){

        BlogCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Category Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.blog.category')->with($notification);

    } // End Method

    

}
