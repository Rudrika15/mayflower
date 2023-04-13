<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;
use Illuminate\Http\Request;


class TestController extends Controller
{
   
    public function index()
    {
        $test = Test::paginate(5);
        return view('admin.test.index', compact('test'));
    }

  
    public function create()
    {
        $test = Test::all();
        return view('admin.test.create', compact('test'));
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'testName' => 'required',
        ]);

        $test = new Test();
        $test->testName = $request->testName;
        $test->save();
        return redirect()->route('admin.test.index')->with('success', 'Created Successfully');
    }

    
    public function show(Test $test)
    {
        //
    }

   
    public function edit($id)
    {
        $test = Test::find($id);
        return view('admin.test.edit', compact('test'));
    }

   
    public function update(Request $request)
    {
        $this->validate($request, [
            'testName' => 'required',
        ]);

        $id = $request->id;
        $test = Test::find($id);
        $test->testName = $request->testName;
        $test->save();
        return redirect()->route('admin.test.index')->with('success', 'Created Successfully');
    }

   
    public function destroy($id)
    {
        $test = Test::find($id);
        $test->delete();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}
