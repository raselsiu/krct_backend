<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data['category'] = Category::all();
        return view('backend.pages.category.index',$data);
    }

    public function create(){
        return view('backend.pages.category.create');
    }

        public function store(Request $request)
    {

        $this->validate($request, [
            'category_name' => 'required',
        ]);

        $slider = new Category();
        $slider->category_name = $request->category_name;
        $slider->save();
        return redirect()->route('category')->with('msg', 'Created successfully.');
    }

       public function destroy(string $id)
    {
        $data = Category::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('msg', 'Deleted Successfully!');
    }
}
