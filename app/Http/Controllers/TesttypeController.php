<?php

namespace App\Http\Controllers;

use App\Models\Testtype;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTesttypeRequest;
use App\Http\Requests\UpdateTesttypeRequest;
use Illuminate\Http\Request;

class TesttypeController extends Controller
{

    public function index()
    {
        $testtype = Testtype::paginate(5);
        return view('admin.testtype.index', compact('testtype'));
    }


    public function create()
    {
        $testtype = Testtype::all();
        return view('admin.testtype.create', compact('testtype'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'testType' => 'required',
        ]);

        $testtype = new Testtype();
        $testtype->testType = $request->testType;
        $testtype->status = 'N';
        $testtype->save();
        return redirect()->route('admin.testtype.index')->with('success', 'Created Successfully');
    }


    public function show(Testtype $testtype)
    {
        //
    }


    public function edit($id)
    {
        $testtype = Testtype::find($id);
        return view('admin.testtype.edit', compact('testtype'));
    }


    public function update(Request $request)
    {
        $this->validate($request, [
            'testType' => 'required',
        ]);

        $id = $request->id;
        $testtype = Testtype::find($id);
        $testtype->testType = $request->testType;
        $testtype->status = 'N';
        $testtype->save();
        return redirect()->route('admin.testtype.index')->with('success', 'Created Successfully');
    }


    public function destroy($id)
    {
        $testtype = Testtype::find($id);
        $testtype->status = 'D';
        $testtype->save();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}
