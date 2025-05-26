<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $data['event'] = AboutUs::all();
        return view('backend.pages.about_us.index', $data);
    }

    public function create()
    {
        return view('backend.pages.about_us.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg',
            'title' => 'required',
            'description' => 'required',
        ]);

        // Image insertion
        $file = $request->file('image');
        $fileName = date('YmdHi') . $file->getClientOriginalName();
        $request->image->move(public_path('images'), $fileName);
        $slider = new AboutUs();
        $slider->image = $fileName;
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->save();
        return redirect()->route('aboutUs')->with('msg', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $data['data'] = AboutUs::find($id);
        return view('backend.pages.about_us.edit', $data);
    }


    public function view(string $id)
    {
        $data['data'] = AboutUs::find($id);
        return view('backend.pages.about_us.view', $data);
    }



    public function update(Request $request, string $id)
    {
        $data = AboutUs::findOrFail($id);


        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images' . $data->image));
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);
            $data->image = $fileName;
        }


        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('aboutUs')->with('msg', 'Updated successfully.');
    }




    public function destroy(string $id)
    {
        $data = AboutUs::findOrFail($id);
        @unlink(public_path('images/' . $data->image));
        $data->delete();

        return redirect()->back()->with('msg', 'Deleted Successfully!');
    }
}
