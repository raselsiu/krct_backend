<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
   
    public function index()
    {
        $data['slider'] =  Slider::orderBy('created_at','desc')->get();
        return view('backend.pages.slider.index',$data);
    }

    
    public function store(Request $request){



        $this->validate($request,[
            'image' => 'image|mimes:jpeg,png,jpg',
            'slider_text' => 'nullable',
        ]);

            // Image insertion

    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('images'), $imageName);
    $slider = new Slider();
    $slider->slider_text = $request->slider_text;
    $slider->image = $imageName;
    $slider->save();
    return redirect()->back()->with('msg', 'Created successfully.');
}
        




    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);

        @unlink(public_path('upload/images/'.$slider->image));
        $slider->delete();

        return redirect()->back()->with('msg','Deleted Successfully!');
    }


}
