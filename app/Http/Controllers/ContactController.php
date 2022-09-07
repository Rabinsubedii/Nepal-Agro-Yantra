<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //
    function index(){
       $contact = Contact::select('id','name','email','phone','message')
        ->orderBy('id', 'desc')
                   ->get();
       return view('contact.index',compact('contact'));
    }
    function add(Request $request){
        $data = new Contact;
        $data ->name = $request->input('name');
        $data ->email = $request->input('email');
        $data ->phone = $request->input('phone');
        $data ->message = $request->input('message');

        //   Mail::send(['email-template', $contact,
        //   function($message) use ($contact) {
        //   $message->to($contact['email'])
        //   ->subject($contact['message']);
        // }]);
        
        $data->save();
        Mail::to('rabbinsubedi@gmail.com')->send (new ContactMail($data));
        return redirect()->back()->with('status', 'Done');
    }

    function edit($id){
        // echo $id;
        $row = DB::table('contact')
        ->where ('id', $id)
        ->first();
        $data = [
            'Info'=>$row,
            'Title'=> 'Edit'
        ];

        return view ('contact.edit',$data);
    }

    function update (Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required'
        ]);
        $updating = DB::table('contact')
        ->where('id', $request->input('cid'))
        ->update([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'message'=>$request->input('message'),
        ]);
        return redirect ('contact');
    }

    function delete ($id){

        $delete = DB::table('contact')
         ->where('id', $id)
         ->delete ();

         return redirect ('contact');
    }
}
