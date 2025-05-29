<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\VolunteerRegi;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
       public function index()
    {
        $data['vMsg'] =  VolunteerRegi::orderBy('created_at','desc')->get();
        return view('backend.pages.volunteer.index',$data);
    }

    
    public function toggleStatus($id)
    {
        $message = VolunteerRegi::findOrFail($id);
        $message->status = !$message->status;
        $message->save();

        return redirect()->back()->with('msg', 'Status Updated!');
    }


    public function show(string $id)
    {
        $data['volunteer'] = VolunteerRegi::find($id);
        return view('backend.pages.volunteer.details',$data);
    }


    public function destroy(string $id)
    {
        $contact = VolunteerRegi::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('msg','Deleted Successfully!');
    }
}
