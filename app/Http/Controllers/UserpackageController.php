<?php

namespace App\Http\Controllers;

use App\Models\Userpackage;
use App\Models\User;
use App\Models\Packagedetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserpackageRequest;
use App\Http\Requests\UpdateUserpackageRequest;
use Illuminate\Http\Request;
use Auth;

class UserpackageController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:userpackage-list|userpackage-create|userpackage-edit|userpackage-delete', ['only' => ['index','show']]);
         $this->middleware('permission:userpackage-create', ['only' => ['create','store']]);
         $this->middleware('permission:userpackage-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:userpackage-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $userpackage = Userpackage::join('users', 'users.id', '=', 'userpackages.userId')
            ->join('packagedetails', 'packagedetails.id', '=', 'userpackages.packageDetailId')
            ->paginate(5, ['userpackages.*', 'users.name as userName', 'packagedetails.forPackageNames']);

        return view('admin.userpackage.index', compact('userpackage'));
    }

    public function create()
    {
        $user = User::all();
        $packagedetail = Packagedetail::all();
        $userpackage = Userpackage::all();
        return view('admin.userpackage.create', compact('user', 'packagedetail', 'userpackage'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'packageDetailId' => 'required',
            'dateOfPurchase' => 'required',
            'validUpto' => 'required',

        ]);

        $authid = Auth::user()->id;
        $userpackage = new Userpackage();
        $userpackage->userId = $authid;
        $userpackage->packageDetailId = $request->packageDetailId;
        $userpackage->dateOfPurchase = $request->dateOfPurchase;
        $userpackage->validUpto = $request->validUpto;
        $userpackage->status = 'N';
        $userpackage->save();
        return redirect()->route('admin.userpackage.index')->with('success', 'Created Successfully');
    }

    public function show(Userpackage $userpackage)
    {
       
    }

    public function edit($id)
    {
        $userpackage = Userpackage::find($id);
        $packagedetail = Packagedetail::all();
        return view('admin.userpackage.edit', compact('userpackage', 'packagedetail'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'packageDetailId' => 'required',
            'dateOfPurchase' => 'required',
            'validUpto' => 'required',
        ]);

        $authid = Auth::user()->id;
        $id = $request->id;
        $userpackage = Userpackage::find($id);
        $userpackage->userId = $authid;
        $userpackage->packageDetailId = $request->packageDetailId;
        $userpackage->dateOfPurchase = $request->dateOfPurchase;
        $userpackage->validUpto = $request->validUpto;
        $userpackage->save();
        return redirect()->route('admin.userpackage.index')->with('success','Updated Successfully');
    }

  
    public function destroy($id)
    {
       
        $userpackage = Userpackage::find($id);
        $userpackage->status = 'D';
        $userpackage->save();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}
