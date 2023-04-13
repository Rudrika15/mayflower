<?php

namespace App\Http\Controllers;

use App\Models\Testdetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestdetailRequest;
use App\Http\Requests\UpdateTestdetailRequest;
use App\Models\Test;
use Illuminate\Http\Request;

class TestdetailController extends Controller
{
    
    public function index()
    {
        $testdetail = Testdetail::join('tests', 'tests.id', '=', 'testdetails.testId')
        ->paginate(5, ['testdetails.*', 'tests.testName']);
        return view('admin.testdetail.index', compact('testdetail'));
    }

    
    public function create()
    {
        $test = Test::all();
        $testdetail = Testdetail::all();    
        return view('admin.testdetail.create', compact('test','testdetail'));
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'testName' => 'required',
            // 'testDetailName' => 'required',
            // 'rate' => 'required',
        ]);

        $testdetail = new Testdetail();
        $testdetail->testId = $request->testName;
        $testdetail->testDetailName = $request->testDetailName;
        $testdetail->rate = $request->rate;
        $testdetail->save();
        return redirect()->route('admin.testdetail.index')->with('success', 'Created Successfully');
    }

    
    public function show(Testdetail $testdetail)
    {
        //
    }

    
    public function edit($id)
    {
        $test = Test::all();
        $testdetail = Testdetail::find($id);
        return view('admin.testdetail.edit', compact('testdetail','test'));
    }

    
    public function update(Request $request)
    {
        $this->validate($request, [
            'testName' => 'required',
            // 'testDetailName' => 'required',
            // 'rate' => 'required',
        ]);

        $id = $request->id;
        $testdetail = Testdetail::find($id);
        $testdetail->testId = $request->testName;
        $testdetail->testDetailName = $request->testDetailName;
        $testdetail->rate = $request->rate;
        $testdetail->save();
        return redirect()->route('admin.testdetail.index')->with('success', 'Updated Successfully');

    }

   
    public function destroy($id)
    {
        $testdetail = Testdetail::find($id);
        $testdetail->delete();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}
