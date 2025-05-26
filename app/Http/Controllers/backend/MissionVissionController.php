<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\MissionVission;
use Illuminate\Http\Request;

class MissionVissionController extends Controller
{
       public function index()
    {
        $data['mv'] = MissionVission::all();
        return view('backend.pages.mission_vission.index', $data);
    }

    public function create()
    {
        
        return view('backend.pages.mission_vission.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'mission_title' => 'required',
            'mission_description' => 'required',
            'vission_title' => 'required',
            'vission_description' => 'required',
        ]);


        $data = new MissionVission();
        $data->mission_title = $request->mission_title;
        $data->mission_description = $request->mission_description;
        $data->vission_title = $request->vission_title;
        $data->vission_description = $request->vission_description;
        $data->save();
        return redirect()->route('missionVission')->with('msg', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $data['data'] = MissionVission::find($id);
        return view('backend.pages.mission_vission.edit', $data);
    }


    public function view(string $id)
    {
        $data['data'] = MissionVission::find($id);
        return view('backend.pages.mission_vission.view', $data);
    }



    public function update(Request $request, string $id)
    {
        $data = MissionVission::findOrFail($id);
        $data->mission_title = $request->mission_title;
        $data->mission_description = $request->mission_description;
        $data->vission_title = $request->vission_title;
        $data->vission_description = $request->vission_description;
        $data->save();
        return redirect()->route('missionVission')->with('msg', 'Updated successfully.');
    }




    public function destroy(string $id)
    {
        $data = MissionVission::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('msg', 'Deleted Successfully!');
    }
}
