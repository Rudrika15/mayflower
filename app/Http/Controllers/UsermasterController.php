<?php

namespace App\Http\Controllers;

use App\Models\Usermaster;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUsermasterRequest;
use App\Http\Requests\UpdateUsermasterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Carbon\Carbon;

class UsermasterController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:usermaster-list|usermaster-create|usermaster-edit|usermaster-delete', ['only' => ['index','show']]);
         $this->middleware('permission:usermaster-create', ['only' => ['create','store']]);
         $this->middleware('permission:usermaster-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:usermaster-delete', ['only' => ['destroy']]);
    }
   
    public function index()
    {
        $usermaster = Usermaster::join('users', 'users.id', '=', 'usermasters.userId')
            ->paginate(5,['usermasters.*', 'users.name as userName']);
        return view('admin.usermaster.index', compact('usermaster'));
    }

   
    public function create()
    {
        $usermaster = Usermaster::all();
        $user = User::all();
        
        return view('admin.usermaster.create', compact('user','usermaster'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'age' => 'required',
            'gender' => 'required',
        ]);

        $userId = Auth::user()->id;
        $usermaster = new Usermaster();
        $usermaster->userId = $userId;
        $usermaster->name = $request->name;
        $usermaster->email = $request->email;
        $usermaster->password = Hash::make($request->password);
        $usermaster->age = $request->age;
        $usermaster->gender = $request->gender;
        $usermaster->status = 'N';
        $usermaster->save();

        return redirect()->route('admin.usermaster.index')->with('success', 'Created Successfully');
    }

   
    public function show(Usermaster $usermaster)
    {
        //
    }

   
    public function edit($id)
    {
      $user = User::all();
      $usermaster = Usermaster::find($id);
      
      return view('admin.usermaster.edit', compact('usermaster','user'));


    }

    
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'gender' => 'required',
        ]);

        $userId = Auth::user()->id;
        $id = $request->id;
        $usermaster = Usermaster::find($id);
        $usermaster->userId = $userId;
        $usermaster->name = $request->name;
        $usermaster->email = $request->email;
        $usermaster->age = $request->age;
        $usermaster->gender = $request->gender;
        $usermaster->status = 'N';
        $usermaster->save();

        return redirect()->route('admin.usermaster.index')->with('success', 'Updated Successfully');
    }

    
    public function destroy($id)
    {
        $usermaster = Usermaster::find($id);
        $usermaster->status = 'D';
        $usermaster->save();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
