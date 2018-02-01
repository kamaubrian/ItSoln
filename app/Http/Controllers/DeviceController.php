<?php

namespace App\Http\Controllers;
use App\electronics;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
   public function __construct()
   {

       $this->middleware('auth');
   }

   public  function store(Request $request){
       $this->validate($request,[
           'machine_type'=>'required',
           'model'=>'required',
           'serial' =>'required',
           'voltage'=>'required',
           'accessories' =>'required',
           'fault'=>'required'
       ]);

       $device = new electronics([
           'user_id'=>Auth::user()->id,
           'machine_type'=>$request->input('machine_type'),
           'serial'=>$request->input('serial'),
           'voltage'=>$request->input('voltage'),
           'accessories'=>$request->input('accessories'),
           'fault' => $request->input('fault'),
           'model'=>$request->input('model'),
       ]);
       if($device->save()===true){
           return redirect()->back()->with("status","Device Information has been saved");

       }else{
           return redirect()->back()->with("status","Error Encountered");
       }
   }


   public function getDeviceInformation(){
       return view('quotation.device_info');
   }


   public function getClientDevices(){
       $electronics = electronics::where('user_id',Auth::user()->id)->paginate(10);
       return view('quotation.show_devices',compact('electronics'));

   }

   public function getClient($serial_no){
       $electronics = electronics::where('serial',$serial_no)->firstOrFail();

       return view('');
   }

   public function getAllDevices(){
       $electronics = electronics::all();

       return view('technician.customers',compact('electronics'));

   }

   public function getDevice($serial) {
       $electronics = electronics::where('serial',$serial)->firstOrFail();


       return view('technician.device_info',compact('electronics'));
   }


}
