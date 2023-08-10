<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->user_type == '0')
            {
                $doctor = Doctor::all();

                return view('user.home', compact('doctor'));

            } else if(Auth::user()->user_type ==  '1') {
                $doc = Doctor::count();
                $appointment = Appointment::count();
                $users = User::where('user_type', '0')->count();

                return view('admin.home', compact('doc', 'appointment', 'users'));

            } else if(Auth::user()->user_type == 2) {
                return view('doctor.home');
            }

        } else {
            return redirect()->back();
        }

    }


    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else {
        $doctor = Doctor::all();

        return view('user.home', compact('doctor'));
        }
    }

    public function appointment(Request $request) {
        $data = new Appointment;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->number;
        $data->message = $request->message;
        $data->doctor = $request->doctor;
        $data->status = 'In Progress';

        if(Auth::id()) {
            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Appointment Sent successfully. We will be in touch.');
    }

    public function view_appointment() {
        if (Auth::id()){

            if(Auth::user()->user_type == 0) {

                $userid = Auth::user()->id;
                $appoint = Appointment::where('user_id', $userid)->get();

                return view('user.my_appoint', compact('appoint'));
            }
        }
        else {

            return redirect()->back();
        }
    }


    public function cancel_appoint($id) {

        $data = Appointment::find($id);
        $data->delete();

        return redirect()->back();
    }
}
