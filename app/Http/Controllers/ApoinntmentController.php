<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Apointment;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Carbon\Carbon;


class ApoinntmentController extends Controller
{

    public function index()
    {
      return view('loginscr');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
          
        ]);
        $login=Doctor::where('email','=',$request->email)->where('password','=',$request->password)->first();

        if($login){
            $request->session()->put('Loggedin',$login->id);
            return redirect('/scrter')->with('success','You are logged in');
            
        }
        else{
            return back()->with('fail','Your Email or Password Wrong');
        }
       
    }

public function tct($id)
{
    $doctor=Doctor::find($id);
    return view('tct',compact('doctor'));

}
    
    
    public function addapoint (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'gender'=>'required',
            'date'=>'required'
          
        ]);
        $todayDate = Carbon::now()->format('Y-m-d');
        
        $tctCount=Apointment::where('date',$request->date)->where('doctor_id',$request->doctor_id)->count();
        if($todayDate<=$request->date && $tctCount<10 ){
        $apointment= new Apointment();
        $apointment->name=$request->name;
        $apointment->phone=$request->phone;
        $apointment->gender=$request->gender;
        $apointment->date=$request->date;
        $apointment->doctor_id=$request->doctor_id;
        $apointment->save();
        return back();

    }
    

    else{
        return back()->with('fail','tkaya katakat bgora');
    }
}

public function loginadm()
{
    return view('loginadmin');
}
public function loginadmin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
      
    ]);
    $login=Admin::where('email','=',$request->email)->where('password','=',$request->password)->first();

    if($login){
        $request->session()->put('Loggedin2',$login->id);
        return redirect('/adminDashbord')->with('success','You are logged in');
        
    }
    else{
        return back()->with('fail','Your Email or Password Wrong');
    }
   
}

public function logoutscr()
{
    if(session()->has('Loggedin')){
        session()->pull('Loggedin');
        return redirect('/loginscr');
    }
}

public function logoutadmin()
{
    if(session()->has('Loggedin2')){
        session()->pull('Loggedin2');
        return redirect('/loginadmin');
    }
}

}
