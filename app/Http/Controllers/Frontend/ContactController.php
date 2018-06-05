<?php

namespace App\Http\Controllers\Frontend;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $contact=Contact::select('phone','email','address')->first();
        return view('front.contact',compact('contact'));
    }
}
