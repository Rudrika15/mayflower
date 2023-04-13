<?php

namespace App\Http\Controllers;

use App\Models\Doctormaster;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctormasterController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:doctormaster-list|doctormaster-create|doctormaster-edit|doctormaster-delete', ['only' => ['index','show']]);
         $this->middleware('permission:doctormaster-create', ['only' => ['create','store']]);
         $this->middleware('permission:doctormaster-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:doctormaster-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        $doctormaster = Doctormaster::join('users', 'users.id', '=', 'doctormasters.userId')
            ->paginate(5, ['doctormasters.*', 'users.name', 'users.email']);
        return view('admin.doctormaster.index', compact('doctormaster'));
    }

    public function create()
    {

        $doctormaster = Doctormaster::all();
        $user = User::all();
        return view('admin.doctormaster.create', compact('doctormaster', 'user'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'specilist' => 'required',
            'experience' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->assignRole('Doctor');
        $user->password = Hash::make($request->password);
        $user->save();
       $userId = $user->id;

        $doctormaster = new Doctormaster();
        if ($request->photo) {
            $doctormaster->photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('doctormasterphotos'),  $doctormaster->photo);
        } else {
            $doctormaster->photo = "user.jpg";
        }


        $doctormaster->gender = $request->gender;
        $doctormaster->specilist = $request->specilist;
        $doctormaster->experience = $request->experience;
        $doctormaster->status = 'N';
        $doctormaster->userId = $userId;

        $doctormaster->save();


        return redirect()->route('admin.doctormaster.index')->with('success', 'Created Successfully');
    }


    public function show(Doctormaster $doctormaster)
    {
    }


    public function edit($id)
    {

        $user = User::find($id);
        $doctormaster = Doctormaster::find($id);

        $doctor = Doctormaster::where('userId', '=', $id)->first();

        return view('admin.doctormaster.edit', compact('user', 'doctor', 'doctormaster'));
    }


    public function update(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'specilist' => 'required',
            'experience' => 'required',

        ]);

        $id = $request->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $userId = $user->id;
        $doctors = Doctormaster::where('userId', '=', $userId)->get();
        $doctorId = $doctors[0]->id;
        $doctormaster = Doctormaster::find($doctorId);

        if ($request->photo) {
            $doctormaster->photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('doctormasterphotos'),  $doctormaster->photo);
        } else {
            $doctormaster->photo = "user.jpg";
        }
        $doctormaster->gender = $request->gender;
        $doctormaster->specilist = $request->specilist;
        $doctormaster->experience = $request->experience;
        $doctormaster->save();


        return redirect()->route('admin.doctormaster.index')->with('success', 'Updated Successfully');
    }


    public function destroy($id)
    {
        $user = User::find($id);

        $userId = $user->id;
        $doctormaster = Doctormaster::where('userId', '=', $userId)->get();

        $doctormasterData = Doctormaster::find($doctormaster);
        foreach ($doctormasterData as $doctormasterData) {
            $doctormasterData->status = 'D';
            $doctormasterData->save();
        }

        return redirect()->back()->with('success', 'Deleted Successfully');
    }


    public function profileedit()
    {
        $authId =  auth::user()->id;
        $doctor = Doctormaster::where('userId', '=', $authId)->first();
        return view('doctor.doctormaster.profileedit', compact('doctor', 'authId'));
    }

    public function profileupdate(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'specilist' => 'required',
            'experience' => 'required',

        ]);

        $id = $request->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $userId = $user->id;
        $doctors = Doctormaster::where('userId', '=', $userId)->get();
        $doctorId = $doctors[0]->id;
        $doctormaster = Doctormaster::find($doctorId);

        if ($request->photo) {
            $doctormaster->photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('doctormasterphotos'),  $doctormaster->photo);
        } else {
            $doctormaster->photo = "user.jpg";
        }
        $doctormaster->gender = $request->gender;
        $doctormaster->specilist = $request->specilist;
        $doctormaster->experience = $request->experience;
        $doctormaster->save();


        return redirect()->route('doctor.doctormaster.profileedit')->with('success', 'Updated Successfully');
    }
}
