<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    // show all appointments on the doctor view
    public function all_appt() {

        if(Auth::id()) {
            if(Auth::user()->user_type == 2) {

                $data = Appointment::all();

                return view('doctor.appt', compact('data'));
            } else {

                return redirect('login');
            }
        }
    }

}
