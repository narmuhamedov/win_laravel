<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
//        $req->validate([
//            'subject'=>'required|min:5|max:10',
//            'message'=>'required|min:15|max:200'
//        ]);
    }
//    public function submit(Request $req){
//        dd($req->input('message'));
//        //return "It's good web";
//    }
}
