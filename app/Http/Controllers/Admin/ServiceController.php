<?php

namespace App\Http\Controllers\Admin;
use App\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services= services::all();
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=services::all();

        return view('admin.service.create',compact('services'));

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
            $destinationPath="image/service-photo";
            $file=$request->image;
            $extention=$file->getClientOriginalExtension();
            $filename=rand(1111111,9999999).".".$extention;
            $file->move($destinationPath,$filename);
            $photo=$filename;

            services::create(['title'=>$request->title,'description'=>$request->description,'image'=>$photo,'icon'=>$request->icon]);
            return redirect('admin/service/');
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
        $services= services::find($id);
        return view('admin.service.show',compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services=services::select('id','title','description','icon','image')->where('id','=',$id)->get()->first();
        return view('admin.service.edit',compact('services'));
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
        $oldimage = DB::table('services')->select('image')->find($id);

        if ($request->hasFile('image')) {

            $destinationPath = "image/service-photo";
            Storage::delete('service-photo/' . $oldimage->image);
            $file = $request->image;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(1111111, 9999999) . "." . $extention;
            $file->move($destinationPath, $filename);
            $photo = $filename;
            $filename = ($photo);

            $data = ['title' => $request->title,
                'description' => $request->description,
                'icon' => $request->icon,
                'image' => $photo];
            DB::table('services')
                ->where('id', $id)
                ->update($data);
            return redirect('/admin/service/');
        } else {

            $data = ['title' => $request->title,
                'description' => $request->description,
                'icon' => $request->icon,
                'image' => $oldimage->image];

            DB::table('services')
                ->where('id', $id)
                ->update($data);
            return redirect('/admin/service/');
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
        services::destroy($id);
        session()->flash('message','successfully deleted!!!');
        return redirect(('admin/service/'));
    }
}
