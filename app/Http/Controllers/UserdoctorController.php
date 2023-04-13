<?php

namespace App\Http\Controllers;

use App\Models\Userdoctor;
use App\Models\User;

use App\Http\Controllers\Controller;
use App\Models\Doctormaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserdoctorController extends Controller
{
    public function view()
    {
       $authId = Auth::user()->id;
    
        $appointment = Doctormaster::join('users', 'users.id', '=', 'doctormasters.userId')
            ->where('users.id', '=', $authId)
            ->paginate(5, ['doctormasters.*', 'users.name', 'users.email']);
            
        return view('doctor.appointment.view', compact('appointment'));
    }

    public function index()
    {
        //

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
