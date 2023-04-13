<?php

namespace App\Http\Controllers;

use App\Models\Testsuggetion;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestsuggetionRequest;
use App\Http\Requests\UpdateTestsuggetionRequest;
use App\Models\Master;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class TestsuggetionController extends Controller
{
    
    public function index()
    {
      
        $testsuggetion = Testsuggetion::join('users', 'users.id', '=', 'testsuggetions.userId')
            ->join('masters', 'masters.id', '=', 'testsuggetions.masterId')
            // ->where('testsuggetions.deleteBy', '=', 'no')
            ->paginate(5, ['testsuggetions.*', 'users.name as userName', 'masters.name as masterName']);

        return view('admin.testsuggetion.index', compact('testsuggetion'));
    }

    
    public function create()
    {
        
        $user = User::all();
        $master = Master::all();

        return view('admin.testsuggetion.create', compact('user', 'master'));
    }

    
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'masterName' => 'required',
            'parameter' => 'required',
            'value' => 'required',
            'opration' => 'required',
        ]);

        $authid = Auth::user()->id;
        $testsuggetion = new Testsuggetion();
        $testsuggetion->masterId = $request->masterName;
        $testsuggetion->parameter = $request->parameter;
        $testsuggetion->value = $request->value;
        $testsuggetion->opration = $request->opration;
        $testsuggetion->userId = $authid;
        $testsuggetion->isDeleted = 'no';
        $testsuggetion->deleteBy = 'no';
        $testsuggetion->save();
        return redirect()->route('admin.testsuggetion.index')->with('success', 'Created Successfully');
    }

    
    public function show(Testsuggetion $testsuggetion)
    {
     
    }

   
    public function edit($id)
    {
        
        $testsuggetion = Testsuggetion::find($id);
        $master = Master::all();
        $user = User::all();

        return view('admin.testsuggetion.edit', compact('testsuggetion', 'user', 'master'));
    }

    
    public function update(Request $request)
    {
       
        $this->validate($request, [
            'masterName' => 'required',
            'parameter' => 'required',
            'value' => 'required',
            'opration' => 'required',
        ]);
        $authid = Auth::user()->id;
        $id = $request->id;
        $testsuggetion = Testsuggetion::find($id);
        $testsuggetion->masterId = $request->masterName;
        $testsuggetion->parameter = $request->parameter;
        $testsuggetion->value = $request->value;
        $testsuggetion->opration = $request->opration;
        $testsuggetion->userId = $authid;
        $testsuggetion->save();
        return redirect()->route('admin.testsuggetion.index')->with('success', 'Updated Successfully');
    }

   
    public function destroy($id)
    {
        
        $authid = Auth::user()->id;
        $testsuggetion = Testsuggetion::find($id);
        $testsuggetion->isDeleted = 'yes';
        $testsuggetion->deleteBy = $authid;
        $testsuggetion->save();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}
