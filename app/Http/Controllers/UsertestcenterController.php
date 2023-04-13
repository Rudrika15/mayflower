<?php

namespace App\Http\Controllers;

use App\Models\Usertestcenter;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsertestcenterRequest;
use App\Http\Requests\UpdateUsertestcenterRequest;
use App\Models\Testcenter;
use Auth;
class UsertestcenterController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:usertestcenter-list|usertestcenter-create|usertestcenter-edit|usertestcenter-delete', ['only' => ['index','show']]);
         $this->middleware('permission:usertestcenter-create', ['only' => ['create','store']]);
         $this->middleware('permission:usertestcenter-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:usertestcenter-delete', ['only' => ['destroy']]);
    }
   
    public function index()
    {
        $usertestcenter = Usertestcenter::join('users', 'users.id', '=', 'usertestcenters.userId')
        ->join('testcenters', 'testcenters.id', '=', 'usertestcenters.testCenterId')
            ->paginate(5, ['usertestcenters.*','testcenters.name as testCenterName','users.name as userName']);
        return view('admin.usertestcenter.index', compact('usertestcenter'));
    }

   
    public function create()
    {
       $user = User::all();
        $usertestcenter = Usertestcenter::all();
    $testcenter = Testcenter::all();
        return view('admin.usertestcenter.create', compact('user','usertestcenter','testcenter'));
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'testCenterId' => 'required',

        ]);

        $authid = Auth::user()->id;
        $userpackage = new Usertestcenter();
        $userpackage->userId = $authid;
        $userpackage->testCenterId = $request->testCenterId;
        $userpackage->status = 'N';
        $userpackage->save();
        return redirect()->route('admin.usertestcenter.index')->with('success', 'Created Successfully');
    }

   
    public function show(Usertestcenter $usertestcenter)
    {
        //
    }

   
    public function edit($id)
    {
        $usertestcenter = Usertestcenter::find($id);
        $user = User::all();
    $testcenter = Testcenter::all();
        return view('admin.usertestcenter.edit', compact('usertestcenter', 'user','testcenter'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'testCenterId' => 'required',

        ]);

        $authid = Auth::user()->id;
        $id = $request->id;
        $userpackage = Usertestcenter::find($id);
        $userpackage->userId = $authid;
        $userpackage->testCenterId = $request->testCenterId;
        $userpackage->save();
        return redirect()->route('admin.usertestcenter.index')->with('success', 'Updated Successfully');
    }

    
    public function destroy($id)
    {
        $userpackage = Usertestcenter::find($id);
        $userpackage->status = 'D';
        $userpackage->save();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}
