<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog= blog::all();
        return view('admin.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $categories = Category::pluck('name','id');

        return view('admin.blog.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile('image') && $request->file('image')->extension()==('jpeg'||'png')){
            $destinationPath="image/blog-photo";
            $file=$request->image;
            $extention=$file->getClientOriginalExtension();
            $filename=rand(1111111,9999999).".".$extention;
            $file->move($destinationPath,$filename);
            $photo=$filename;

            blog::create(['title'=>$request->title,'category_id'=>$request->category_id,'author'=>$request->author,'blog_post'=>$request->blog_post,'image'=>$photo]);
            return redirect('admin/blog/');
        }else {
            echo "no";
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog= blog::find($id);
        return view('admin.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $blog=blog::select('id','title','author','blog_post','image')->where('id','=',$id)->get()->first();
        return view('admin.blog.edit',compact('blog'));

        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $oldimage = DB::table('blogs')->select('image')->find($id);

        if ($request->hasFile('image')) {

            $destinationPath = "image/blog-photo";
            Storage::delete('blog-photo/' . $oldimage->image);
            $file = $request->image;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(1111111, 9999999) . "." . $extention;
            $file->move($destinationPath, $filename);
            $photo = $filename;
            $filename = ($photo);

            $data = ['title' => $request->title,
                'author' => $request->author,
                'blog_post' => $request->blog_post,
                'image' => $photo];
            DB::table('blogs')
                ->where('id', $id)
                ->update($data);
            return redirect('/admin/blog/');
        } else {

            $data = ['title' => $request->title,
                'author' => $request->author,
                'blog_post' => $request->blog_post,
                'image' => $oldimage->image];
            DB::table('blogs')
                ->where('id', $id)
                ->update($data);
            return redirect('/admin/blog/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        blog::destroy($id);
        session()->flash('message','successfully deleted!!!');
        return redirect(('admin/blog/'));
    }
}
