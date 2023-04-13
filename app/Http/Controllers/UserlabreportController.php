<?php

namespace App\Http\Controllers;

use App\Models\Userlabreport;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserlabreportRequest;
use App\Http\Requests\UpdateUserlabreportRequest;
use App\Models\Testcenter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserlabreportController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:userlabreport-list|userlabreport-create|userlabreport-edit|userlabreport-delete', ['only' => ['index','show']]);
         $this->middleware('permission:userlabreport-create', ['only' => ['create','store']]);
         $this->middleware('permission:userlabreport-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:userlabreport-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $userLabReport = Userlabreport::join('users', 'users.id', '=', 'userlabreports.userId')
            ->join('testcenters', 'testcenters.id', '=', 'userlabreports.testCenterId')
            ->paginate(5,['userlabreports.*', 'users.name as userName', 'testcenters.name as centerName']);
        return view('admin.userlabreport.index', \compact('userLabReport'));
    }

    public function create()
    {
        $testCenter = Testcenter::all();
        $user = User::all();
        return view('admin.userlabreport.create', \compact('testCenter', 'user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'testCenterId' => 'required',
            'document' => 'required|mimes:pdf,doc,docx',
            'note' => 'required',
        ]);
        $userId = Auth::user()->id;
        $userLabReport = new Userlabreport();
        $userLabReport->userId = $userId;
        $userLabReport->testCenterId = $request->testCenterId;
        if ($request->document) {
            $userLabReport->document = time() . '.' . $request->document->extension();
            $request->document->move(public_path('userdoctorhistorydocument'),  $userLabReport->document);
        }
        $userLabReport->note = $request->note;
        $userLabReport->status = "N";
        $userLabReport->save();
        return redirect()->route('admin.userlabreport.index')->with('success', 'Created Successfully');
    }
    public function show()
    {
        //
    }

    public function edit($id)
    {
        $userLabReport = Userlabreport::find($id);
        $user = User::all();
        $testCenter = Testcenter::all();

        return view('admin.userlabreport.edit', \compact('userLabReport', 'user', 'testCenter'));
    }

    public function update(Request $request,)
    {
        $this->validate($request, [
            'userId' => 'required',
            'testCenterId' => 'required',
            'note' => 'required',
        ]);
        $id = $request->userLabReportId;
        $userLabReport = Userlabreport::find($id);
        $userLabReport->userId = $request->userId;
        $userLabReport->testCenterId = $request->testCenterId;
        if ($request->document) {
            $userLabReport->document = $request->document;
        }
        $userLabReport->note = $request->note;
        $userLabReport->save();
        return redirect()->route('admin.userlabreport.index')->with('success', 'Updated Successfully');
    }

    public function destroy($id)
    {
        $userLabReport = Userlabreport::find($id);
        $userLabReport->status = "D";
        $userLabReport->save();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
