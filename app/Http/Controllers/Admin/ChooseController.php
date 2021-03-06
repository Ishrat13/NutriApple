<?php

namespace App\Http\Controllers\Admin;
use App\Choose;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $chooses= Choose::all();
        return view('admin.whychooseus.index',compact('chooses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $chooses=Choose::all();

        return view('admin.whychooseus.create',compact('chooses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Choose::create(['icon'=>$request->icon,'title'=>$request->title,'description'=>$request->description]);
        return redirect('admin/choose');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chooses= Choose::find($id);
        return view('admin.whychooseus.show',compact('chooses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chooses=Choose::select('id','icon','title','description')->where('id','=',$id)->get()->first();
        return view('admin.whychooseus.edit',compact('chooses'));
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
        $data = ['icon' => $request->icon,
            'title' => $request->title,
            'description' => $request->description];

        DB::table('chooses')
            ->where('id', $id)
            ->update($data);
        return redirect('/admin/choose/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Choose::destroy($id);
        session()->flash('message','successfully deleted!!!');
        return redirect('/admin/choose/');

    }
}
