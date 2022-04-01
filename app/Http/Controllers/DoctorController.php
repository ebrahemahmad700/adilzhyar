<?php

namespace App\Http\Controllers;

use App\Models\Apointment;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Carbon\Carbon;


class DoctorController extends Controller
{

    public function index()
    {
        $doctor=Doctor::all();
        return view('adddoctor',compact('doctor'));
    }
    public function create(Request $request)
    {

        $doctor = new Doctor();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'type' => 'required',
            'image' => 'required',
            'description' => 'required',

        ]);
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->password = $request->password;
        $doctor->type = $request->type;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/products', $filename);
            $doctor->image = $filename;
        }
        $doctor->description = $request->description;
        $doctor->save();
        if ($doctor) {
            return redirect()->back()->with('status', 'Doctor information sucsessfully added');
        } else {
            return redirect()->back()->with('status', 'Something going wrong');
        }
    }

    public function DoctorDetail($id)
    {
        $doctor1 = Doctor::find($id);
        return response()->json([
            'doctor1' => $doctor1
          ]);
 
    }
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'type' => 'required',
            'image' => 'required',
            'description' => 'required',

        ]);
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->password = $request->password;
        $doctor->type = $request->type;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/products', $filename);
            $doctor->image = $filename;
        }
        $doctor->description = $request->description;
        $doctor->update();
        if ($doctor) {
            return redirect()->back()->with('status', 'Doctor information sucsessfully updated');
        } else {
            return redirect()->back()->with('status', 'Something going wrong');
        }
    }

    public function delete($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->back();
    }

    public function doctors()
    {
      $doctors=Doctor::all();
      return view('doctors',compact('doctors'));
    }
    public function scrter()
    {
   

 
        $select=Apointment::where('date',date('Y-m-d',time()))->where('doctor_id',session('Loggedin'))->get();
        return view('scrter',compact('select'));
    }
}
