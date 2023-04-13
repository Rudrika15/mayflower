<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMasterRequest;
use App\Http\Requests\UpdateMasterRequest;
use Illuminate\Http\Request;
use Auth;
class MasterController extends Controller
{
    
    public function index()
    {
        $master = Master::join('users', 'users.id', '=', 'masters.userId')
        ->where('masters.deleteBy', '=' , 'no' )
        ->paginate(5,['masters.*', 'users.name as userName']);

        return view('admin.master.index',compact('master'));
    }

   
    public function create()
    {
        
        $user = User::all();
    
        return view('admin.master.create', compact('user'));
    }

    
    public function store(Request $request)
    {
    
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $authid = Auth::user()->id;
        $master = new Master();
        $master->name = $request->name;
        $master->description = $request->description;
        $master->userId = $authid;
        $master->isDeleted = 'no';
        $master->deleteBy = 'no';
        $master->save();
        return redirect()->route('admin.master.index')->with('success', 'Created Successfully');

    }

    
    public function show(Master $master)
    {
        
    }

   
    public function edit($id)
    {
        
        $master = Master::find($id);
        $user = User::all();

        return view('admin.master.edit', compact('master','user'));
    }

    
    public function update(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $authid = Auth::user()->id;
        $id = $request->id;
        $master = Master::find($id);
        $master->name = $request->name;
        $master->description = $request->description;
        $master->userId = $authid;
        $master->save();
        return redirect()->route('admin.master.index')->with('success', 'Updated Successfully');

    }

    
    public function destroy($id)
    {
    
        $authid = Auth::user()->id;
        $master = Master::find($id);
        $master->isDeleted = 'yes';
        $master->deleteBy = $authid;
        $master->save();
        return redirect()->back()->with('success', 'Deleted Successfully');;
    }
}
