<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\VolunteerRegi;
use Illuminate\Http\Request;

class VolunteerRegiController extends Controller
{
     public function store(Request $request){

        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
        ]);


            // Image insertion
    $file = $request->file('image');
    $fileName = date('YmdHi') . $file->getClientOriginalName();
    $request->image->move(public_path('images/volunteers'), $fileName);
    $data = new VolunteerRegi();
    $data->image = $fileName;
    $data->firstname = $request->firstname;
    $data->lastname = $request->lastname;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->desc = $request->desc;
    $data->save();
    return redirect()->back()->with('msg', 'Request Success!.');

    }
}
