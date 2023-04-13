<?php

namespace App\Http\Controllers;

use App\Models\Sampletype;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSampletypeRequest;
use App\Http\Requests\UpdateSampletypeRequest;
use Illuminate\Http\Request;

class SampletypeController extends Controller
{
   
    public function index()
    {
        $sampletype = Sampletype::paginate(5);
        return view('admin.sampletype.index', compact('sampletype'));
        
    }

  
    public function create()
    {
        $sampletype = Sampletype::all();
        return view('admin.sampletype.create', compact('sampletype'));
        
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'sampleType' => 'required',
        ]);

        $sampletype = new Sampletype();
        $sampletype->sampleType = $request->sampleType;
        $sampletype->status = 'N';
        $sampletype->save();
        return redirect()->route('admin.sampletype.index')->with('success', 'Created Successfully');
    }

   
    public function show(Sampletype $sampletype)
    {
        //
    }

   
    public function edit($id)
    {
        $sampletype = Sampletype::find($id);
        return view('admin.sampletype.edit', compact('sampletype'));
   
    }

    
    public function update(Request $request)
    {
        $this->validate($request, [
            'sampleType' => 'required',
        ]);

        $id = $request->id;
        $sampletype = Sampletype::find($id);
        $sampletype->sampleType = $request->sampleType;
        $sampletype->status = 'N';
        $sampletype->save();
        return redirect()->route('admin.sampletype.index')->with('success', 'Created Successfully');
    }

   
    public function destroy($id)
    {
        $sampletype = Sampletype::find($id);
        $sampletype->status = 'D';
        $sampletype->save();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}
