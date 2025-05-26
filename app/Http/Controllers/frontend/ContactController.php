<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\UserContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submitUserData(Request $request){

        $this->validate($request,[
            'name' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:14',
            'message' => 'required'
        ]);

        $input = $request->all();
        UserContact::create($input);
        return back()->with('msg', 'Message Sent Successfully!');

        


    }
}
