<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function landing_page()
    {
        if(Auth::id()) {
            if(Auth::user()->user_type == 1) {
                $data = Doctor::all();

                return view('admin.showdoctor', compact('data'));
            } else {

                return redirect()->back();
            }
        } else {
            return redirect('login');
        }

    }


    public function addview()
    {
        if(Auth::id()) {
            if(Auth::user()->user_type == 1) {

                return view('admin.add_doctor');
            } else {

                return redirect()->back();
            }
        } else {
            return redirect('login');
        }

    }

    public function upload_doctor(Request $request)
    {
        $doctor = new Doctor;
        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image = $imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->location = $request->location;
        $doctor->hospital = $request->hospital;
        $doctor->specialty =$request->specialty;

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }


    public function show_appointment() {

        if(Auth::id()) {
            if(Auth::user()->user_type == 1) {

                $data = Appointment::all();

                return view('admin.show_appointment', compact('data'));
            } else {

                return redirect('login');
            }
        }
    }


    public function approve($id) {

        $data = Appointment::find($id);
        $data->status = 'Approved';

        $data->save();

        return redirect()->back();
    }

    public function cancel($id) {

        $data = Appointment::find($id);
        $data->status = 'Cancelled';

        $data->save();

        return redirect()->back();
    }


    public function show_doctor() {
        if(Auth::id()) {
            if(Auth::user()->user_type == 1) {
                $data = Doctor::all();

                return view('admin.showdoctor', compact('data'));
            } else {

                return redirect()->back();
            }
        } else {
            return redirect('login');
        }

    }

public function delete_doctor($id) {
    $data = Doctor::find($id);
    $data->delete();

    return redirect()->back();
    }

    public function update_doctor($id) {
        if(Auth::id()) {
            if(Auth::user()->user_type == 1) {
                $doctor = Doctor::find($id);

                return view('admin.update_doctor', compact('doctor'));
            } else {

                return redirect()->back();
            }
        }
        else {
            return redirect('login');
        }

    }

    public function edit_doctor(Request $request, $id) {
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->specialty = $request->specialty;
        $doctor->room = $request->room;
        $doctor->location = $request->location;

        $image = $request->file;

        if($image) {
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $request->file->move('doctorimage', $imagename);
            $doctor->image= $imagename;

        }

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor details updated successfully');
    }

}
