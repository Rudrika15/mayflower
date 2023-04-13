<?php

namespace App\Http\Controllers;

use App\Models\Usermedicinehistory;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUsermedicinehistoryRequest;
use App\Http\Requests\UpdateUsermedicinehistoryRequest;
use App\Models\Doctormaster;
use App\Models\Userdoctor;
use Illuminate\Http\Request;
use Auth;

class UsermedicinehistoryController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:usermedicinehistory-list|usermedicinehistory-create|usermedicinehistory-edit|usermedicinehistory-delete', ['only' => ['index','show']]);
         $this->middleware('permission:usermedicinehistory-create', ['only' => ['create','store']]);
         $this->middleware('permission:usermedicinehistory-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:usermedicinehistory-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $authid = Auth::user()->id;
        $usermedicinehistory = Usermedicinehistory::join('users', 'users.id', '=', 'usermedicinehistories.userId')
        ->where('usermedicinehistories.doctorId', '=', $authid)

            ->paginate(5, ['usermedicinehistories.*', 'users.name as userName']);
        return view('doctor.usermedicinehistory.index', compact('usermedicinehistory'));
    }


    public function create()
    {
        $users = User::whereHas(
            'roles', function($q){
                $q->where('name', 'Patients');
            }
        )->get();
        $user = User::all();
        $usermedicinehistory = Usermedicinehistory::all();
    
        return view('doctor.usermedicinehistory.create', compact('user', 'usermedicinehistory','users'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'userId' => 'required',
            'medicine' => 'required',
            'medicineDetails' => 'required',

        ]);

        $doctorId = Auth::user()->id;
        $usermedicinehistory = new Usermedicinehistory();
        $usermedicinehistory->userId = $request->userId;
        $usermedicinehistory->doctorId = $doctorId;
        $usermedicinehistory->medicine = $request->medicine;
        $usermedicinehistory->medicineDetails = $request->medicineDetails;
        $usermedicinehistory->status = 'N';
        $usermedicinehistory->save();
        return redirect()->route('doctor.usermedicinehistory.index')->with('success', 'Created Successfully');
    }


    public function show(Usermedicinehistory $usermedicinehistory)
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
        $usermedicinehistory = Usermedicinehistory::find($id);
        $user = Doctormaster::join('users', 'users.id', '=', 'doctormasters.userId')
        ->get(['doctormasters.*', 'users.name']);
        return view('doctor.usermedicinehistory.edit', \compact('usermedicinehistory', 'user','users'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'medicine' => 'required',
            'medicineDetails' => 'required',

        ]);
    
        $doctorId = Auth::user()->id;
        $id = $request->id;
        $usermedicinehistory = Usermedicinehistory::find($id);
        $usermedicinehistory->userId = $request->userId;
        $usermedicinehistory->doctorId = $doctorId;
        $usermedicinehistory->medicine = $request->medicine;
        $usermedicinehistory->medicineDetails = $request->medicineDetails;
        $usermedicinehistory->save();
        return redirect()->route('doctor.usermedicinehistory.index')->with('success', 'Updated Successfully');
    }


    public function destroy($id)
    {
        $usermedicinehistory = Usermedicinehistory::find($id);
        $usermedicinehistory->status = 'D';
        $usermedicinehistory->save();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
