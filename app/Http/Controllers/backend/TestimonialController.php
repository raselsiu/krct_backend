<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        $data['testimonial'] = Testimonial::all();
        return view('backend.pages.testimonial.index',$data);
    }

    public function create(){
        return view('backend.pages.testimonial.create');
    }


    public function store(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'subtitle' => 'required',
            'desc' => 'required',
        ]);

            
    $data = new Testimonial();
    $data->title = $request->title;
    $data->subtitle = $request->subtitle;   
    $data->desc = $request->desc;

    $data->save();
    return redirect()->route('testimonial')->with('msg', 'Created successfully.');

    }


  public function edit(string $id)
    {
        $data['data'] = Testimonial::find($id);
        return view('backend.pages.testimonial.edit',$data);
    }


  public function view(string $id)
    {
        $data['data'] = Testimonial::find($id);
        return view('backend.pages.testimonial.view',$data);
    }



   public function update(Request $request, string $id)
{
        $data = Testimonial::findOrFail($id);
        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->desc = $request->desc;
        $data->save();
        return redirect()->route('testimonial')->with('msg', 'Updated successfully.');
}


    public function destroy(string $id)
    {
        $data = Testimonial::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('msg','Deleted Successfully!');
    }
}
