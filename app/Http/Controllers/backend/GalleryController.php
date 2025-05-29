<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
        public function index(){
        $data['gallery'] = Gallery::all();
        return view('backend.pages.gallery.index',$data);
    }

    public function create(){
        $data['categories'] = Category::all();
        return view('backend.pages.gallery.create',$data);
    }


    public function store(Request $request){


        $this->validate($request,[
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',  
            'category' => 'required',
        ]);

    if($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/gallery'), $name);
            $imageNames[] = $name;
        }
    }

    // Save comma-separated names to DB
    Gallery::create([
        'images' => implode(',', $imageNames),
        'category' => $request->category,
    ]);

    return redirect()->route('backendGllery')->with('msg', 'Created successfully.');

    }


  public function edit(string $id)
    {
        $data['data'] = Gallery::find($id);
        return view('backend.pages.gallery.edit',$data);
    }


  public function view(string $id)
    {
        $data['data'] = Gallery::find($id);
        return view('backend.pages.gallery.view',$data);
    }



public function update(Request $request, string $id)
{
    $this->validate($request, [
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        'category' => 'required',
    ]);

    $gallery = Gallery::findOrFail($id);

    // Step 1: Start with existing images
    $existingImages = $gallery->images ? explode(',', $gallery->images) : [];

    // Step 2: Remove selected images if any
    $removeImages = $request->input('remove_images', []);
    $finalImages = array_diff($existingImages, $removeImages);

    // Delete removed files from storage
    foreach ($removeImages as $img) {
        $filePath = public_path('images/gallery/' . $img);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    // Step 3: Handle new image uploads
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/gallery'), $name);
            $finalImages[] = $name;
        }
    }

    // Step 4: Update the database
    $gallery->update([
        'images' => implode(',', $finalImages),
        'category' => $request->category,
    ]);

    return redirect()->route('editGallery',$gallery->id)->with('msg', 'Updated successfully.');
}




    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);

        // Delete all images from storage
        if ($gallery->images) {
            $images = explode(',', $gallery->images);
            foreach ($images as $image) {
                $filePath = public_path('images/gallery/' . $image);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }

        // Delete the service record
        $gallery->delete();

        return redirect()->route('backendGllery')->with('msg', 'Deleted successfully.');
    }
}
