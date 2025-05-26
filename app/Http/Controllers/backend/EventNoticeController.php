<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\EventNotice;
use Illuminate\Http\Request;

class EventNoticeController extends Controller
{
      public function index(){
        $data['event'] = EventNotice::all();
        return view('backend.pages.event_notice.index',$data);
    }

    public function create(){
        return view('backend.pages.event_notice.create');
    }


    public function store(Request $request){

        $this->validate($request,[
            'image' => 'image|mimes:jpeg,png,jpg',
            'event_title' => 'required',
            'event_time' => 'required',
            'event_location' => 'required',
            'event_date' => 'required',
        ]);

            // Image insertion
    $file = $request->file('image');
    $fileName = date('YmdHi') . $file->getClientOriginalName();
    $request->image->move(public_path('images/events'), $fileName);
    $slider = new EventNotice();
    $slider->image = $fileName;
    $slider->event_title = $request->event_title;
    $slider->event_time = $request->event_time;
    $slider->event_location = $request->event_location;
    $slider->event_date = $request->event_date;
    $slider->save();
    return redirect()->back()->with('msg', 'Notice Created successfully.');

    }


  public function edit(string $id)
    {
        $data['data'] = EventNotice::find($id);
        return view('backend.pages.event_notice.edit',$data);
    }


  public function view(string $id)
    {
        $data['data'] = EventNotice::find($id);
        return view('backend.pages.event_notice.view',$data);
    }



   public function update(Request $request, string $id)
{
        $data = EventNotice::findOrFail($id);


        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('images/events/'.$data->image));
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/events/'),$fileName);
            $data->image = $fileName;
        }


        $data->event_title = $request->event_title;
        $data->event_time = $request->event_time;
        $data->event_location = $request->event_location;
        $data->event_date = $request->event_date;
        $data->save();
        return redirect()->route('eventNotice')->with('msg', 'Notice Updated successfully.');
}




    public function destroy(string $id)
    {
        $data = EventNotice::findOrFail($id);
        @unlink(public_path('images/events/'.$data->image));
        $data->delete();
       
        return redirect()->back()->with('msg','Deleted Successfully!');
    }
}
