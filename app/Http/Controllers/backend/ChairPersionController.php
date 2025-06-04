<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ChairPersion;
use Illuminate\Http\Request;

class ChairPersionController extends Controller
{
    public function index(){
        $data['event'] = ChairPersion::all();
        return view('backend.pages.chairpersion.index',$data);
    }

    public function create(){
        return view('backend.pages.chairpersion.create');
    }


    public function store(Request $request){

        $this->validate($request,[
            'image' => 'image|mimes:jpeg,png,jpg',
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
        ]);

            // Image insertion
    $file = $request->file('image');
    $fileName = date('YmdHi') . $file->getClientOriginalName();
    $request->image->move(public_path('images'), $fileName);
    $data = new ChairPersion();
    $data->image = $fileName;
    $data->name = $request->name;
    $data->designation = $request->designation;
    $data->description = $request->description;
    $data->fb = $request->fb;
    $data->twit = $request->twit;
    $data->yt = $request->yt;
    $data->save();
    return redirect()->route('chairperson')->with('msg', 'Created successfully.');

    }


  public function edit(string $id)
    {
        $data['data'] = ChairPersion::find($id);
        return view('backend.pages.chairpersion.edit',$data);
    }


  public function view(string $id)
    {
        $data['data'] = ChairPersion::find($id);
        return view('backend.pages.chairpersion.view',$data);
    }



   public function update(Request $request, string $id)
{
        $data = ChairPersion::findOrFail($id);

        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('images/'.$data->image));
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/'),$fileName);
            $data->image = $fileName;
        }
            $data->name = $request->name;
            $data->designation = $request->designation;
            $data->description = $request->description;
            $data->fb = $request->fb;
            $data->twit = $request->twit;
            $data->yt = $request->yt;
        $data->save();
        return redirect()->route('chairperson')->with('msg', 'Notice Updated successfully.');
}




    public function destroy(string $id)
    {
        $data = ChairPersion::findOrFail($id);
        @unlink(public_path('images/'.$data->image));
        $data->delete();
       
        return redirect()->back()->with('msg','Deleted Successfully!');
    }
}
