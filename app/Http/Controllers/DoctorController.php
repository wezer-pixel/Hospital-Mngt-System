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
        if (Auth::check() && Auth::user()->user_type == 2) {
            $doctor = Auth::user(); // Assuming the authenticated user is a doctor
            $appointments = Appointment::where('doctor', $doctor->name)->get();

            return view('doctor.appt', compact('appointments'));
        } else {
            return redirect('login');
        }
    }

    public function appt_details() {
        if (Auth::check() && Auth::user()->user_type == 2) {

            return view('doctor.apptview');
        } else {
            return redirect('login');
        }
    }

}
