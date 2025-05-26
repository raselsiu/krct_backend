<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\UserContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $data['contacts'] =  UserContact::orderBy('created_at','desc')->get();
        return view('backend.pages.contacts.contact',$data);
    }

    
    public function toggleStatus($id)
    {
        $message = UserContact::findOrFail($id);
        $message->read_status = !$message->read_status;
        $message->save();

        return redirect()->back()->with('msg', 'Status Updated!');
    }


    public function show(string $id)
    {
        $data['users'] = UserContact::find($id);
        return view('backend.pages.contacts.details',$data);
    }


    public function destroy(string $id)
    {
        $contact = UserContact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success','Deleted Successfully!');
    }
}
