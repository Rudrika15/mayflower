<?php

namespace App\Http\Controllers;

use App\Models\Userdoctorhistory;
use App\Http\Controllers\Controller;
use App\Models\Doctormaster;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class UserdoctorhistoryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:userdoctorhistory-list|userdoctorhistory-create|userdoctorhistory-edit|userdoctorhistory-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:userdoctorhistory-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:userdoctorhistory-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:userdoctorhistory-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $authid = Auth::user()->id;

        $userDoctorHistory = Userdoctorhistory::join('users', 'users.id', '=', 'userdoctorhistories.userId')
            ->where('userdoctorhistories.doctorId', '=', $authid)

            ->paginate(5, ['userdoctorhistories.*', 'users.name as userName']);
        return view('doctor.userdoctorhistory.index', compact('userDoctorHistory', 'authid'));
    }

    public function create()
    {
        $user = User::whereHas(
            'roles', function($q){
                $q->where('name', 'Patients');
            }
        )->get();
        return view('doctor.userdoctorhistory.create', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'uploadDate' => 'required',
            'suggestion' => 'required',
            'userId' => 'required',
        ]);

        $doctorId = Auth::user()->id;
        $uploadDate = Carbon::now()->toDateString();
        $userDoctorHistory = new Userdoctorhistory();
        $userDoctorHistory->userId = $request->userId;
        $userDoctorHistory->uploadDate = $uploadDate;
        $userDoctorHistory->title = $request->title;
        $userDoctorHistory->suggestion = $request->suggestion;
        $userDoctorHistory->doctorId = $doctorId;
        $userDoctorHistory->status = 'N';
        $userDoctorHistory->save();

        return redirect()->route('doctor.userdoctorhistory.index')->with('success', 'Created Successfully');
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $users = User::whereHas(
            'roles', function($q){
                $q->where('name', 'Patients');
            }
        )->get();
         $userDoctorHistory = Userdoctorhistory::find($id);
        $user = Doctormaster::join('users', 'users.id', '=', 'doctormasters.userId')
            ->get(['doctormasters.*', 'users.name']);
        return view('doctor.userdoctorhistory.edit', \compact('userDoctorHistory', 'users','user'));
    }

    public function update(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'uploadDate' => 'required',
            'suggestion' => 'required',
            'userId' => 'required',
        ]);
        $doctorId = Auth::user()->id;
        $id = $request->userDocid;
        $uploadDate = Carbon::now()->toDateString();
        $userDoctorHistory = Userdoctorhistory::find($id);
        $userDoctorHistory->userId = $request->userId;
        $userDoctorHistory->doctorId = $doctorId;
        $userDoctorHistory->uploadDate = $uploadDate;
        $userDoctorHistory->title = $request->title;
        $userDoctorHistory->suggestion = $request->suggestion;
        $userDoctorHistory->save();

        return redirect()->route('doctor.userdoctorhistory.index')->with('success', 'Updated Successfully');
    }

    public function destroy($id)
    {
        $userDoctorHistory = Userdoctorhistory::find($id);
        $userDoctorHistory->status = 'D';
        $userDoctorHistory->save();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
