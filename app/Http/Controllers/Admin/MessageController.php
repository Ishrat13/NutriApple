<?php

namespace App\Http\Controllers\Admin;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
        $messages=Message::all();
        return view('admin.message.message',compact('messages'));
    }
    public function show($id)
    {

    }
    public function destroy($id)
    {
        Message::where('id',$id)->delete();
        return redirect()->back()->with('deleted','Message Deleted !!');
    }
}
