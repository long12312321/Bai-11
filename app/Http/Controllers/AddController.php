<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function add(Request $request){
            if($request->isMethod('post')){
                $name = $request->input("name");
                $address = $request->input("address");
                $email = $request->input("email");
                $content = $request->input("content");
                $name_id =$request->input("name_id");
                $contact = new Contact();
                $contact->name = $name;
                $contact->address = $address;
                $contact->email = $email;
                $contact->content=$content;
                $contact->users_id=$name_id;

                $contact->save();
            }
            echo 'New information add:<br> Name:'.$name.'<br> Address:'.$address
            .'<br> Email:'.$email.'<br> Content:'.$content;
            
           
    }
}
