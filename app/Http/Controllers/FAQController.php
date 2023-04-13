<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFAQRequest;
use App\Http\Requests\UpdateFAQRequest;
use Illuminate\Http\Request;

class FAQController extends Controller
{
   
    public function index()
    {
        $faq = FAQ::paginate(5);
        return view('admin.faq.index',compact('faq'));
    }

    public function create()
    {
        $faq =  FAQ::all();
        return  view('admin.faq.create',compact('faq'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'ans' => 'required',


        ]);
        $faq = new FAQ();
        $faq->question = $request->question;
        $faq->ans = $request->ans;
        $faq->status = 'N';
        $faq->save();
        return redirect()->route('admin.faq.index')->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $fAQ)
    {
        //
    }

    
    public function edit($id)
    {
        $faq = FAQ::find($id);
        return view('admin.faq.edit', compact('faq'));
    }

    
    public function update(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'ans' => 'required',
        ]);

        $id = $request->id;
        $faq = FAQ::find($id);
        $faq->question = $request->question;
        $faq->ans = $request->ans;
        $faq->status = 'N';
        $faq->save();
        return redirect()->route('admin.faq.index')->with('success', 'Updated Successfully');
    }

  
    public function destroy($id)
    {
        $faq = FAQ::find($id);
        $faq->status = 'D';
        $faq->save();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}
