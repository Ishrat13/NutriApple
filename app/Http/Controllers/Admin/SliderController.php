<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders= Slider::all();
        return view('admin.slider.index',compact('sliders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders= Slider::all();
        return view('admin.slider.create',compact('sliders'));
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
            $destinationPath="image/slider-photo";
            $file=$request->image;
            $extention=$file->getClientOriginalExtension();
            $filename=rand(1111111,9999999).".".$extention;
            $file->move($destinationPath,$filename);
            $photo=$filename;

            Slider::create(['title'=>$request->title,'subtitle'=>$request->subtitle,'text'=>$request->text,'image'=>$photo]);
            return redirect('admin/slider/');
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
        $sliders= Slider::find($id);
        return view('admin.slider.show',compact('sliders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sliders=Slider::select('id','title','subtitle','text','image')->where('id','=',$id)->get()->first();
        return view('admin.slider.edit',compact('sliders'));
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
        $oldimage = DB::table('sliders')->select('image')->find($id);

        if ($request->hasFile('image')) {

            $destinationPath = "image/slider-photo";
            Storage::delete('slider-photo/' . $oldimage->image);
            $file = $request->image;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(1111111, 9999999) . "." . $extention;
            $file->move($destinationPath, $filename);
            $photo = $filename;
            $filename = ($photo);

            $data = ['title' => $request->title,
                'subtitle' => $request->subtitle,
                'text' => $request->text,
                'image' => $photo];
            DB::table('sliders')
                ->where('id', $id)
                ->update($data);
            return redirect('/admin/slider/');
        } else {

            $data = ['title' => $request->title,
                'subtitle' => $request->subtitle,
                'text' => $request->text,
                'image' => $oldimage->image];
            DB::table('sliders')
                ->where('id', $id)
                ->update($data);
            return redirect('/admin/slider/');
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
        Slider::destroy($id);
        session()->flash('message','successfully deleted!!!');
        return redirect(('admin/slider/'));
    }
}
