<?php

namespace App\Http\Controllers;

use App\Models\Packagedetail;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePackagedetailRequest;
use App\Http\Requests\UpdatePackagedetailRequest;
use App\Models\Master;
use App\Models\Packge;
use App\Models\Sampletype;
use App\Models\Test;
use App\Models\Testpackage;
use App\Models\Testtype;
use Illuminate\Http\Request;
use Auth;

class PackagedetailController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:packagedetail-list|packagedetail-create|packagedetail-edit|packagedetail-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:packagedetail-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:packagedetail-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:packagedetail-delete', ['only' => ['destroy']]);
    }


    public function index()
    {

        $packagedetail = Packagedetail::join('packges', 'packges.id', '=', 'packagedetails.packageId')
            ->paginate(5, ['packagedetails.*', 'packges.packageName']);

        $sampleType = Packagedetail::join('sampletypes', 'sampletypes.id', '=', 'packagedetails.sampleType')
            ->get(['packagedetails.*', 'sampletypes.sampleType as sampleName']);

        return view('admin.packagedetail.index', compact('packagedetail', 'sampleType',));
    }


    public function create()
    {

        $user = User::all();
        $package = Packge::all();
        $test = Test::all();
        $sampleType = Sampletype::where('status', '!=', 'D')->get();
        $testType = Testtype::where('status', '!=', 'D')->get();;

        return view('admin.packagedetail.create', compact('user', 'package', 'sampleType', 'testType', 'test'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'emotionToConvey' => 'required',
            'description' => 'required',
            'location' => 'required',
            'sampleType' => 'required',

        ]);

        $packagedetail = new Packagedetail();
        $packagedetail->packageId = $request->packageName;
        $packagedetail->emotionToConvey = $request->emotionToConvey;
        $packagedetail->forPackageNames = $request->forPackageNames;
        $packagedetail->description = $request->description;
        $packagedetail->location = $request->location;
        // $packagedetail->sampleType = $request->sampleType;
        $packagedetail['sampleType'] = json_encode($request->sampleType);
        $packagedetail->testType = $request->testType;
        $packagedetail->instructionS = $request->instructionS;
        $packagedetail->consultation = $request->consultation;
        $packagedetail->awareness = $request->awareness;
        $packagedetail->medicalHistory = $request->medicalHistory;
        $packagedetail->status = 'N';
        $packagedetail->save();


        foreach ($request->testName as $testNames) {
            $testpackage = new Testpackage();
        $testpackage->packageId = $request->packageName;
        $testpackage->testId = $testNames;
        $testpackage->save();
        }
       

        // return $testpackage;



        return redirect()->route('admin.packagedetail.index')->with('success', 'Created Successfully');
    }


    public function show(Packagedetail $packagedetail)
    {
    }


    public function edit($id)
    {

        $packagedetail = Packagedetail::find($id);
        $user = User::all();
        $package = Packge::all();
        $packagedetailData = Packagedetail::all();
        $data = Packagedetail::all();
        $sampleType = Sampletype::where('status', '!=', 'D')->get();
        $testType = Testtype::where('status', '!=', 'D')->get();

        return view('admin.packagedetail.edit', compact('packagedetail', 'user', 'package', 'packagedetailData', 'data', 'sampleType', 'testType'));
    }


    public function update(Request $request)
    {

        $this->validate($request, [
            'packageName' => 'required',
            'emotionToConvey' => 'required',
            // 'forPackageNames' => 'required',
            'description' => 'required',
            'location' => 'required',
            'sampleType' => 'required',
            // 'testType' => 'required',
            'instructionS' => 'required',
            'consultation' => 'required',
            // 'awareness' => 'required',
            'medicalHistory' => 'required',

        ]);

        $id = $request->id;
        $packagedetail = Packagedetail::find($id);
        $packagedetail->packageId = $request->packageName;
        $packagedetail->emotionToConvey = $request->emotionToConvey;
        $packagedetail->forPackageNames = $request->forPackageNames;
        $packagedetail->description = $request->description;
        $packagedetail->location = $request->location;
        $packagedetail->sampleType = $request->sampleType;
        $packagedetail->testType = $request->testType;
        $packagedetail->instructionS = $request->instructionS;
        $packagedetail->consultation = $request->consultation;
        $packagedetail->awareness = $request->awareness;
        $packagedetail->medicalHistory = $request->medicalHistory;
        $packagedetail->save();
        return redirect()->route('admin.packagedetail.index')->with('success', 'Updated Successfully');
    }


    public function destroy($id)
    {

        $packagedetail = Packagedetail::find($id);
        $packagedetail->status = 'D';
        $packagedetail->save();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
