<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\OnlinePatientSerial;
use Illuminate\Http\Request;

class OnlinePatientSerialController extends Controller
{
    public function index(){
        return view('frontend.pages.patient_serial_generate.online_serial_form');
    }

    public function patientSerialShow(string $id){
        $data['data'] = OnlinePatientSerial::findOrFail($id); 
        return view('frontend.pages.patient_serial_generate.generated_serial',$data);
    }


public function submitData(Request $request){
    $this->validate($request,[
        'name' => 'required',
        'address' => 'required',
        'sex' => 'required',
    ]);

    $timePart = substr(time(), -4); 
    $randomPart = 'KRCT' .str_pad(random_int(0, 9999), 4, '0', STR_PAD_LEFT);
    $code = $randomPart . $timePart ; 

    // Get the next sl_no by finding the maximum existing value
    $maxSlNo = OnlinePatientSerial::max('sl_no') ?? 0;
    $nextSlNo = $maxSlNo + 1;
            
    $data = new OnlinePatientSerial();
    
    $data->paditent_id = $code;
    $data->name = $request->name;
    $data->age = $request->age;
    $data->mobile = $request->mobile;
    $data->address = $request->address;
    $data->sex = $request->sex;
    $data->weight = $request->weight;
    $data->problems = $request->problems;
    $data->sl_no = $nextSlNo; // Set it before saving

    $data->save();

    return redirect()->route('patientSerialShow',$data->id)->with('msg', 'Serial Created.');
}
}
