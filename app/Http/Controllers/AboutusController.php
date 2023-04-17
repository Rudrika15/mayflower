<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreaboutusRequest;
use App\Http\Requests\UpdateaboutusRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutusController extends Controller
{

    public function index()
    {
        $aboutus = Aboutus::paginate(5);
        return view('admin.aboutus.index', compact('aboutus'));
    }


    public function create()
    {
        $aboutus =  Aboutus::all();
        return  view('admin.aboutus.create', compact('aboutus'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'text' => 'required',

        ]);
        $aboutus = new Aboutus();
        $aboutus->text = $request->text;
        $aboutus->type = $request->type;
        $aboutus->status = 'N';
        $aboutus->save();
        return redirect()->route('admin.aboutus.index')->with('success', 'Created Successfully');
    }


    public function show(aboutus $aboutus)
    {
        //
    }


    public function edit($id)
    {
        $aboutus = Aboutus::find($id);
        return view('admin.aboutus.edit', compact('aboutus'));
    }


    public function update(Request $request)
    {
        $this->validate($request, [
            'text' => 'required',
        ]);

        $id = $request->id;
        $aboutus = Aboutus::find($id);
        $aboutus->text = $request->text;
        $aboutus->type = $request->type;
        $aboutus->status = 'N';
        $aboutus->save();
        return redirect()->route('admin.aboutus.index')->with('success', 'Updated Successfully');
    }

    public function destroy($id)
    {
        $aboutus = Aboutus::find($id);
        $aboutus->status = 'D';
        $aboutus->save();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
