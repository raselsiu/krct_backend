<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BoardOfTrustees;
use Illuminate\Http\Request;

class BoardOfTrusteesController extends Controller
{
    public function index(){
        $data['bot'] = BoardOfTrustees::all();
        return view('backend.pages.board_of_trustees.index',$data);
    }

    public function create(){
        return view('backend.pages.board_of_trustees.create');
    }


    public function store(Request $request){


        $this->validate($request,[
            'name' => 'required',
            'designation' => 'required',
        ]);


    // Image insertion
    $file = $request->file('image');
    $fileName = date('YmdHi') . $file->getClientOriginalName();
    $request->image->move(public_path('images/bot/'), $fileName);

    $data = new BoardOfTrustees();
    $data->image = $fileName;
    $data->name = $request->name;
    $data->designation = $request->designation;
    $data->fb = $request->fb;
    $data->twitter = $request->twitter;
    $data->insta = $request->insta;
    $data->yt = $request->yt;
    $data->save();
    return redirect()->route('bot')->with('msg', 'Created successfully.');

    }


  public function edit(string $id)
    {
        $data['data'] = BoardOfTrustees::find($id);
        return view('backend.pages.board_of_trustees.edit',$data);
    }


  public function view(string $id)
    {
        $data['data'] = BoardOfTrustees::find($id);
        return view('backend.pages.board_of_trustees.view',$data);
    }



   public function update(Request $request, string $id)
{
        $data = BoardOfTrustees::findOrFail($id);


        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('images/bot/'.$data->image));
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/bot/'),$fileName);
            $data->image = $fileName;
        }

        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->fb = $request->fb;
        $data->twitter = $request->twitter;
        $data->insta = $request->insta;
        $data->yt = $request->yt;
        $data->save();
        return redirect()->route('bot')->with('msg', 'Updated successfully.');
}




    public function destroy(string $id)
    {
        $data = BoardOfTrustees::findOrFail($id);
        @unlink(public_path('images/bot/'.$data->image));
        $data->delete();
       
        return redirect()->back()->with('msg','Deleted Successfully!');
    }
}
