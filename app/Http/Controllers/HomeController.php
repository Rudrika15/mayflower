<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use App\Models\FAQ;
use App\Models\Home;
use App\Models\Packge;

// use App\testhistories;
use App\Models\Packagedetail;
use App\Models\Test;
use App\Models\Testdetail;
use App\Models\Testhistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\PostDec;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }



    public function calculator(Request $request)
    {
        // $aboutus = Aboutus::first();

        // $ftHeight = $request->ftHeight;
        // $inHeight = $request->inHeight;
        // $height1 = 2.54 * ($ftHeight * 12 + $inHeight);

        // $age = $request->age;
        // $weight = $request->weight;
        // $height = $request->height;

        // $inches = $request->inches;
        // $inches1 = ($inches * (2.54));

        // if ($height) {
        //     $bmi = ($weight / $height / $height)  * 10000;
        // }
        // if ($height1) {
        //     $bmi = ($weight / $height1 / $height1)  * 10000;
        // }
        // if ($inches1) {
        //     $bmi = ($weight / $inches1 / $inches1)  * 10000;
        // }

        // $Underweight = "Underweight";
        // $Overweight = "Overweight";
        // $Obese = "Obese";

        // if ($age >= 12 && $age <= 21) {
        //     if ($bmi <= 18.5) {
        //         $youare = "You are Underweight";
        //         return view('ourpackage', compact('youare', 'aboutus'));
        //         // return redirect()->route('ourpackage')->with('youare','aboutus');
        //     } else if (25 > $bmi && $bmi <= 29.9) {
        //         $youare = "You are Overweight";
        //         return view('ourpackage', compact('youare', 'aboutus'));
        //     } else if (30 > $bmi) {
        //         $youare = "You are Obese";
        //         return view('ourpackage', compact('youare', 'aboutus'));
        //     }
        // } elseif ($age >= 21 && $age <= 35) {
        //     if ($bmi <= 18.5) {
        //         $youare = "You are Underweight";
        //         return view('ourpackage', compact('youare', 'aboutus'));
        //     } else if (25 > $bmi && $bmi <= 29.9) {
        //         $youare = "You are Overweight";
        //         return view('ourpackage', compact('youare', 'aboutus'));
        //     } else if (30 > $bmi) {
        //         $youare = "You are Obese";
        //         return view('ourpackage', compact('youare', 'aboutus'));
        //     }
        // } else {
        //     if ($bmi <= 18.5) {
        //         $youare = "You are Underweight";
        //         return view('ourpackage', compact('youare', 'aboutus'));
        //     } else if (25 > $bmi && $bmi <= 29.9) {
        //         $youare = "You are Overweight";
        //         return view('ourpackage', compact('youare', 'aboutus'));
        //     } else if (30 > $bmi) {
        //         $youare = "You are Obese";
        //         return view('ourpackage', compact('youare', 'aboutus'));
        //     }
        // }

        // return view('/package', compact('aboutus'));
    }


    /* visitor side page */
    public function index()
    {
        return view('layouts.visitor');
    }



    public function create(Request $request)
    {


        $package = Packge::all();
        $packageDetail = Packagedetail::all();
        $aboutus = Aboutus::first();
        $test = Test::all();
        $testdetail = Testdetail::all();

        $ftHeight = $request->ftHeight;
        $inHeight = $request->inHeight;
        $height1 = 2.54 * ($ftHeight * 12 + $inHeight);

        $age = $request->age;
        $weight = $request->weight;
        $height = $request->height;

        $inches = $request->inches;
        $inches1 = ($inches * (2.54));

        if ($height) {
            $bmi = ($weight / $height / $height)  * 10000;
        }
        if ($height1) {
            $bmi = ($weight / $height1 / $height1)  * 10000;
        }
        if ($inches1) {
            $bmi = ($weight / $inches1 / $inches1)  * 10000;
        }

        $Underweight = "Underweight";
        $Overweight = "Overweight";
        $Obese = "Obese";
        $youare = '';
        
        echo $request->isMethod('post');
        echo $request->fname;

        if ($request->isMethod('post')) {
            if ($request->fname) {
                $data = new Testhistory();
                $data->fname = $request->fname;
                $data->lname = $request->lname;
                $data->contact = $request->contact;
                $data->email = $request->email;
                if ($request->ftHeight) {
                    $data->height = $request->ftHeight;
                } else if ($request->inHeight) {
                    $data->height = $request->inHeight;
                } else if ($request->inches) {
                    $data->height = $request->inches;
                } else {
                    $data->height = $request->height;
                }
                $data->age = $request->age;
                $data->weight = $request->weight;
                $data->status = 'N';
                $data->save();

                //    return $request->id;
                //   return  $dataupdate = Testhistory::where('id','=',$id);

                // $dataCount = Testhistory::where('id','=',$data->id)->get()->count();
                // return $dataCount;
                if ($age >= 12 && $age <= 21) {
                    if ($bmi <= 18.5) {
                        $youare = "You are Underweight";
                        return view('ourpackage', compact('youare', 'package', 'packageDetail', 'Underweight', 'data', 'test', 'testdetail'));
                        // return redirect()->route('ourpackage')->with('youare);
                    } else if (25 > $bmi && $bmi <= 29.9) {
                        $youare = "You are Overweight";
                        return view('ourpackage', compact('youare', 'package', 'packageDetail', 'Overweight', 'data', 'test', 'testdetail'));
                    } else if (30 > $bmi) {
                        $youare = "You are Obese";
                        return view('ourpackage', compact('youare', 'package', 'packageDetail', 'Obese', 'data', 'test', 'testdetail'));
                    }
                } elseif ($age >= 21 && $age <= 35) {
                    if ($bmi <= 18.5) {
                        $youare = "You are Underweight";
                        return view('ourpackage', compact('youare', 'package', 'packageDetail', 'Underweight', 'data', 'test', 'testdetail'));
                    } else if (25 > $bmi && $bmi <= 29.9) {
                        $youare = "You are Overweight";
                        return view('ourpackage', compact('youare', 'package', 'packageDetail', 'Overweight', 'data', 'test', 'testdetail'));
                    } else if (30 > $bmi) {
                        $youare = "You are Obese";
                        return view('ourpackage', compact('youare', 'package', 'packageDetail', 'Obese', 'data', 'test', 'testdetail'));
                    }
                } elseif ($age >= 35) {
                    if ($bmi <= 18.5) {
                        $youare = "You are Underweight";
                        return view('ourpackage', compact('youare', 'package', 'packageDetail', 'Underweight', 'data', 'test', 'testdetail'));
                    } else if (25 > $bmi && $bmi <= 29.9) {
                        $youare = "You are Overweight";
                        return view('ourpackage', compact('youare', 'package', 'packageDetail', 'Overweight', 'data', 'test', 'testdetail'));
                    } else if (30 > $bmi) {
                        $youare = "You are Obese";
                        return view('ourpackage', compact('youare', 'package', 'packageDetail', 'Obese', 'data', 'test', 'testdetail'));
                    }
                    return view('ourpackage', compact('youare', 'package', 'packageDetail', 'data', 'test', 'testdetail'));
                } else {
                    $youare = "";
                    $Message = "";
                }

                return view('ourpackage', compact('youare', 'package', 'packageDetail', 'data', 'test', 'testdetail'));
            }
        } else {
            $data = Testhistory::latest()->first();
        }
        // return "hi";
        // $data = Testhistory::latest()->first();
         return view('ourpackage', compact('youare', 'package', 'packageDetail', 'test', 'testdetail', 'data'));
    }

    

    function updateData(Request $request)
    {
        
       return  $data =$request->detail;
         $id = $request->testId;
        $test = Testhistory::find($id);
        $test->detail = $data;
        $test->save();

    }

    /* FAQ  home page*/
    public function faq(Request $request)
    {
        $faq = FAQ::where('status', '!=', 'D')->get();

        return view('faq.create', compact('faq'));
    }
}
