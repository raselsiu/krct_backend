<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $data['service'] = Services::all();
        return view('backend.pages.services.index',$data);
    }

    public function create(){
        return view('backend.pages.services.create');
    }


    public function store(Request $request){


        $this->validate($request,[
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'desc' => 'required',
        ]);

    if($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/services'), $name);
            $imageNames[] = $name;
        }
    }

    // Save comma-separated names to DB
    Services::create([
        'images' => implode(',', $imageNames),
        'title' => $request->title,
        'desc' => $request->desc,
    ]);

    return redirect()->route('krctService')->with('msg', 'Created successfully.');

    }


  public function edit(string $id)
    {
        $data['data'] = Services::find($id);
        return view('backend.pages.services.edit',$data);
    }


  public function view(string $id)
    {
        $data['data'] = Services::find($id);
        return view('backend.pages.services.view',$data);
    }



public function update(Request $request, string $id)
{
    $this->validate($request, [
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        'title' => 'required',
        'desc' => 'required',
    ]);

    $service = Services::findOrFail($id);

    // Step 1: Start with existing images
    $existingImages = $service->images ? explode(',', $service->images) : [];

    // Step 2: Remove selected images if any
    $removeImages = $request->input('remove_images', []);
    $finalImages = array_diff($existingImages, $removeImages);

    // Optionally delete removed files from storage
    foreach ($removeImages as $img) {
        $filePath = public_path('images/services/' . $img);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    // Step 3: Handle new image uploads
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/services'), $name);
            $finalImages[] = $name;
        }
    }

    // Step 4: Update the database
    $service->update([
        'images' => implode(',', $finalImages),
        'title' => $request->title,
        'desc' => $request->desc,
    ]);

    return redirect()->route('editService',$service->id)->with('msg', 'Updated successfully.');
}




    public function destroy(string $id)
    {
        $service = Services::findOrFail($id);

        // Delete all images from storage
        if ($service->images) {
            $images = explode(',', $service->images);
            foreach ($images as $image) {
                $filePath = public_path('images/services/' . $image);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }

        // Delete the service record
        $service->delete();

        return redirect()->route('krctService')->with('msg', 'Service deleted successfully.');
    }
}
