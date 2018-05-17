<?php

namespace App\Http\Controllers\Admin;
use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about= about::all();
        return view('admin.aboutus.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about=about::all();

        return view('admin.aboutus.create',compact('about'));
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
            $destinationPath="image/about-photo";
            $file=$request->image;
            $extention=$file->getClientOriginalExtension();
            $filename=rand(1111111,9999999).".".$extention;
            $file->move($destinationPath,$filename);
            $photo=$filename;

            services::create(['title'=>$request->title,'subtitle'=>$request->subtitle,'details'=>$request->details,'image'=>$photo]);
            return redirect('admin/aboutus/');
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
        $about= about::find($id);
        return view('admin.aboutus.show',compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about=about::select('id','title','subtitle','details','image')->where('id','=',$id)->get()->first();
        return view('admin.aboutus.edit',compact('about'));
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
        $oldimage = DB::table('abouts')->select('image')->find($id);

        if ($request->hasFile('image')) {

            $destinationPath = "image/about-photo";
            Storage::delete('about-photo/' . $oldimage->image);
            $file = $request->image;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(1111111, 9999999) . "." . $extention;
            $file->move($destinationPath, $filename);
            $photo = $filename;
            $filename = ($photo);

            $data = ['title' => $request->title,
                'subtitle' => $request->subtitle,
                'details' => $request->details,
                'image' => $photo];
            DB::table('abouts')
                ->where('id', $id)
                ->update($data);
            return redirect('/admin/aboutus/');
        } else {

            $data = ['title' => $request->title,
                'subtitle' => $request->description,
                'details' => $request->icon,
                'image' => $oldimage->image];

            DB::table('services')
                ->where('id', $id)
                ->update($data);
            return redirect('/admin/aboutus/');
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
        about::destroy($id);
        session()->flash('message','successfully deleted!!!');
        return redirect(('admin/about/'));
    }
}
