<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SmallGallery;
use Illuminate\Http\Request;

class SmallGalleryController extends Controller
{
    public function index(){
        $data['gallery'] = SmallGallery::all();
        return view('backend.pages.small_footer_gallery.index',$data);
    }

    public function create(){
        return view('backend.pages.small_footer_gallery.create');
    }


    public function store(Request $request){


        $this->validate($request,[
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

    if($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/footer_gallery/'), $name);
            $imageNames[] = $name;
        }
    }

    // Save comma-separated names to DB
    SmallGallery::create([
        'images' => implode(',', $imageNames),
    ]);

    return redirect()->route('smallGallery')->with('msg', 'Created successfully.');

    }


  public function edit(string $id)
    {
        $data['data'] = SmallGallery::find($id);
        return view('backend.pages.small_footer_gallery.edit',$data);
    }


  public function view(string $id)
    {
        $data['data'] = SmallGallery::find($id);
        return view('backend.pages.small_footer_gallery.view',$data);
    }



public function update(Request $request, string $id)
{
    $this->validate($request, [
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
    ]);

    $service = SmallGallery::findOrFail($id);

    // Step 1: Start with existing images
    $existingImages = $service->images ? explode(',', $service->images) : [];

    // Step 2: Remove selected images if any
    $removeImages = $request->input('remove_images', []);
    $finalImages = array_diff($existingImages, $removeImages);

    // Optionally delete removed files from storage
    foreach ($removeImages as $img) {
        $filePath = public_path('images/footer_gallery/' . $img);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    // Step 3: Handle new image uploads
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/footer_gallery/'), $name);
            $finalImages[] = $name;
        }
    }

    // Step 4: Update the database
    $service->update([
        'images' => implode(',', $finalImages),
    ]);

    return redirect()->route('editSmallGallery',$service->id)->with('msg', 'Updated successfully.');
}




    public function destroy(string $id)
    {
        $service = SmallGallery::findOrFail($id);

        // Delete all images from storage
        if ($service->images) {
            $images = explode(',', $service->images);
            foreach ($images as $image) {
                $filePath = public_path('images/footer_gallery/' . $image);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }

        // Delete the service record
        $service->delete();

        return redirect()->route('smallGallery')->with('msg', 'Service deleted successfully.');
    }
}
