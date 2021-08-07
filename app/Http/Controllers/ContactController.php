<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Mail;

use App\Mail\SendContactMail;


class ContactController extends Controller
{
    public function contact(Request $request){
        $request->validate([
            'name' => 'required|max:10',
            'email' => 'required|max:50',
            'subject' => 'required|max:15',
            'content' => 'required|max:255',
        ]);
        
        $contact = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'content' => $request->content,
        ]);
        
        // $contact = $request->all();
        
        // dd($message);
        
        Mail::to("i.yamamoto.sxbx37@gmail.com")->send(new SendContactMail($contact));
        
        return back()->with('message', 'お問い合わせありがとうございます。');
        
    }
}
