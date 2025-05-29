<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\NewsAndArticle;
use Illuminate\Http\Request;

class NewsAndArticleController extends Controller
{
    public function index(){
        $data['news'] = NewsAndArticle::all();
        return view('backend.pages.news.index',$data);
    }

    public function create(){
        return view('backend.pages.news.create');
    }


    public function store(Request $request){

        $this->validate($request,[
            'image' => 'image|mimes:jpeg,png,jpg',
            'title' => 'required',
            'desc' => 'required',
        ]);

            // Image insertion
    $file = $request->file('image');
    $fileName = date('YmdHi') . $file->getClientOriginalName();
    $request->image->move(public_path('images/news'), $fileName);
    $data = new NewsAndArticle();
    $data->image = $fileName;
    $data->title = $request->title;
    $data->desc = $request->desc;
    $data->save();
    return redirect()->route('newsAndArticles')->with('msg', 'Created successfully.');

    }


  public function edit(string $id)
    {
        $data['data'] = NewsAndArticle::find($id);
        return view('backend.pages.news.edit',$data);
    }


  public function view(string $id)
    {
        $data['data'] = NewsAndArticle::find($id);
        return view('backend.pages.news.view',$data);
    }



   public function update(Request $request, string $id)
{
        $data = NewsAndArticle::findOrFail($id);


        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('images/news/'.$data->image));
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/news/'),$fileName);
            $data->image = $fileName;
        }


        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->save();
        return redirect()->route('newsAndArticles')->with('msg', 'Updated successfully.');
}




    public function destroy(string $id)
    {
        $data = NewsAndArticle::findOrFail($id);
        @unlink(public_path('images/news/'.$data->image));
        $data->delete();
       
        return redirect()->back()->with('msg','Deleted Successfully!');
    }
}
