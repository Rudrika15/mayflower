<?php

namespace App\Http\Controllers;

use App\Models\Packge;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePackgeRequest;
use App\Http\Requests\UpdatePackgeRequest;
use Auth;
class PackgeController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:package-list|package-create|package-edit|package-delete', ['only' => ['index','show']]);
         $this->middleware('permission:package-create', ['only' => ['create','store']]);
         $this->middleware('permission:package-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:package-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
 
        $package = Packge::join('users', 'users.id', '=', 'packges.userId')
            ->paginate(5, ['packges.*', 'users.name as userName',]);

        return view('admin.package.index', compact('package'));
    }

    
    public function create()
    {
     
        $user = User::all();

        return view('admin.package.create', compact('user'));
    }

   
    public function store(Request $request)
    {
 
        $this->validate($request, [
            'packageName' => 'required',
            'price' => 'required',

        ]);

        $authid = Auth::user()->id;
        $package = new Packge();
        $package->packageName = $request->packageName;
        $package->userId = $authid;
        $package->price = $request->price;
        $package->status = 'N';
        $package->save();
        return redirect()->route('admin.package.index')->with('success', 'Created Successfully');

    }

   
    public function show(Packge $packge)
    {
        
    }

   
    public function edit($id)
    {
        
        $package = Packge::find($id);
        $user = User::all();

        return view('admin.package.edit', compact('package', 'user'));
    }

    
    public function update(Request $request)
    {
      
        $this->validate($request, [
            'packageName' => 'required',
            'price' => 'required',

        ]);
        $authid = Auth::user()->id;
        $id = $request->id;
        $package = Packge::find($id);
        $package->packageName = $request->packageName;
        $package->userId = $authid;
        $package->price = $request->price;
        $package->save();
        return redirect()->route('admin.package.index')->with('success', 'Updated Successfully');
    }

   
    public function destroy($id)
    {
        
        $package = Packge::find($id);
        $package->status = 'D';
        $package->save();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}
