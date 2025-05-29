<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\DonateNow;
use Illuminate\Http\Request;

class DonateNowController extends Controller
{
    public function index(){
        $data['event'] = DonateNow::all();
        return view('backend.pages.donate_now.index',$data);
    }

    public function create(){
        return view('backend.pages.donate_now.create');
    }


    public function store(Request $request){

    
        $this->validate($request,[
            'title' => 'required',
            'desc' => 'required',
        ]);

            
    $data = new DonateNow();
    $data->title = $request->title;
    $data->desc = $request->desc;

    $data->save();
    return redirect()->route('donateNow')->with('msg', 'Created successfully.');

    }


  public function edit(string $id)
    {
        $data['data'] = DonateNow::find($id);
        return view('backend.pages.donate_now.edit',$data);
    }


  public function view(string $id)
    {
        $data['data'] = DonateNow::find($id);
        return view('backend.pages.donate_now.view',$data);
    }



   public function update(Request $request, string $id)
{
        $data = DonateNow::findOrFail($id);
        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->save();
        return redirect()->route('donateNow')->with('msg', 'Updated successfully.');
}




    public function destroy(string $id)
    {
        $data = DonateNow::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('msg','Deleted Successfully!');
    }
}
