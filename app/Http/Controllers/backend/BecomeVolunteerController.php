<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BecomeVolunteer;
use Illuminate\Http\Request;

class BecomeVolunteerController extends Controller
{
        public function index(){
        $data['desc'] = BecomeVolunteer::all();
        return view('backend.pages.become_volunteer.index',$data);
    }

    public function create(){
        return view('backend.pages.become_volunteer.create');
    }

    public function store(Request $request){

        $data = BecomeVolunteer::all();
        $count = count($data);



       $this->validate($request,[
            'desc' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
            
       ]);

       if($count == 0){

        $file = $request->file('image');
        $fileName = date('YmdHi') . $file->getClientOriginalName();
        $request->image->move(public_path('images/'), $fileName);
    
        $input = new BecomeVolunteer();
        $input->image = $fileName;
        $input->desc = $request->desc;
        $input->save();
        return back()->with('msg', 'Stored Successfully!.');

       } else{

        return back()->with('error', 'Data Already Exists!');

       }
 
    }


  public function edit(string $id)
    {
        $data['data'] = BecomeVolunteer::find($id);
        return view('backend.pages.become_volunteer.edit',$data);
    }




   public function update(Request $request, string $id)
{
    $input = BecomeVolunteer::findOrFail($id);

    if($request->file('image')){
        $file = $request->file('image');
        @unlink(public_path('images/'.$input->image));
        $fileName = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images/'),$fileName);
        $input->image = $fileName;
    }


    $input->desc = $request->desc;
    $input->save();
    
    return redirect()->route('becomeVolunteer')->with('msg', 'Updated successfully.');
}




    public function destroy(string $id)
    {
        $data = BecomeVolunteer::findOrFail($id);
        @unlink(public_path('images/'.$data->image));
        $data->delete();
        return redirect()->back()->with('msg','Deleted Successfully!');
    }

}
