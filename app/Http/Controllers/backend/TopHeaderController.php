<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\TopHeader;
use Illuminate\Http\Request;

class TopHeaderController extends Controller
{
    public function index(){
        $data['data'] = TopHeader::all();
        return view('backend.pages.top_header.top_header',$data);
    }

    public function store(Request $request){

        $data = TopHeader::all();
        $count = count($data);



       $this->validate($request,[
            'email' => 'required|email',
            'location' => 'required',
            'office_phone' => 'required|min:10|max:14',
            
       ]);

       if($count == 0){

        $input = $request->all();
        TopHeader::create($input);

        return back()->with('msg', 'Data Stored Successfully!.');

       } else{

        return back()->with('error', 'Data Already Exists!');

       }
 
    }


  public function edit(string $id)
    {
        $data['data'] = TopHeader::find($id);
        return view('backend.pages.top_header.edit',$data);
    }




   public function update(Request $request, string $id)
{
    $data = TopHeader::findOrFail($id);
    $data->update($request->all()); 
    
    return redirect()->route('topHeader')->with('msg', 'Updated successfully.');
}




    public function destroy(string $id)
    {
        $contact = TopHeader::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('msg','Deleted Successfully!');
    }


}
