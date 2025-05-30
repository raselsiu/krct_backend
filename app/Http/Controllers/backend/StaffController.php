<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        $data['bot'] = Staff::all();
        return view('backend.pages.staff.index',$data);
    }

    public function create(){
        return view('backend.pages.staff.create');
    }


    public function store(Request $request){


        $this->validate($request,[
            'name' => 'required',
            'designation' => 'required',
        ]);


    // Image insertion
    $file = $request->file('image');
    $fileName = date('YmdHi') . $file->getClientOriginalName();
    $request->image->move(public_path('images/staff/'), $fileName);

    $data = new Staff();
    $data->image = $fileName;
    $data->name = $request->name;
    $data->designation = $request->designation;
    $data->fb = $request->fb;
    $data->twitter = $request->twitter;
    $data->insta = $request->insta;
    $data->yt = $request->yt;
    $data->save();
    return redirect()->route('krctStaff')->with('msg', 'Created successfully.');

    }


  public function edit(string $id)
    {
        $data['data'] = Staff::find($id);
        return view('backend.pages.staff.edit',$data);
    }


  public function view(string $id)
    {
        $data['data'] = Staff::find($id);
        return view('backend.pages.staff.view',$data);
    }



   public function update(Request $request, string $id)
{
        $data = Staff::findOrFail($id);


        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('images/staff/'.$data->image));
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/staff/'),$fileName);
            $data->image = $fileName;
        }

        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->fb = $request->fb;
        $data->twitter = $request->twitter;
        $data->insta = $request->insta;
        $data->yt = $request->yt;
        $data->save();
        return redirect()->route('krctStaff')->with('msg', 'Updated successfully.');
}




    public function destroy(string $id)
    {
        $data = Staff::findOrFail($id);
        @unlink(public_path('images/staff/'.$data->image));
        $data->delete();
       
        return redirect()->back()->with('msg','Deleted Successfully!');
    }
}
