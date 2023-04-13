<?php

namespace App\Http\Controllers;

use App\Models\Testcenter;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestcenterRequest;
use App\Http\Requests\UpdateTestcenterRequest;
use Illuminate\Http\Request;
use Auth;
class TestcenterController extends Controller
{
    
    function __construct()
    {
         $this->middleware('permission:testcenter-list|testcenter-create|testcenter-edit|testcenter-delete', ['only' => ['index','show']]);
         $this->middleware('permission:testcenter-create', ['only' => ['create','store']]);
         $this->middleware('permission:testcenter-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:testcenter-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
       
        $testcenter = Testcenter::paginate(5);
        return view('admin.testcenter.index', compact('testcenter'));
    }

    
    public function create()
    {
        
        $testcenter = Testcenter::all();
        return view('admin.testcenter.create', compact('testcenter'));
    }

    
    public function store(Request $request)
    {
      
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'map' => 'required',
            'city' => 'required',
            'landmark' => 'required',

        ]);

        $testcenter = new Testcenter();
        $testcenter->name = $request->name;
        $testcenter->address = $request->address;
        $testcenter->map = $request->map;
        $testcenter->city = $request->city;
        $testcenter->landmark = $request->landmark;
        $testcenter->status = 'N';
        $testcenter->save();
        return redirect()->route('admin.testcenter.index')->with('success','Created Successfully');
    }

    
    public function show(Testcenter $testcenter)
    {
        
    }

    
    public function edit($id)
    {
        
        $testcenter = Testcenter::find($id);
        return view('admin.testcenter.edit', compact('testcenter'));

    }

   
    public function update(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'map' => 'required',
            'city' => 'required',
            'landmark' => 'required',

        ]);
        $id = $request->id;
        $testcenter = Testcenter::find($id);
        $testcenter->name = $request->name;
        $testcenter->address = $request->address;
        $testcenter->map = $request->map;
        $testcenter->city = $request->city;
        $testcenter->landmark = $request->landmark;
        $testcenter->save();
        return redirect()->route('admin.testcenter.index')->with('success','Updated Successfully');

    }

    
    public function destroy($id)
    {
     
        $testcenter = Testcenter::find($id);
        $testcenter->status = 'D';
        $testcenter->save();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}
