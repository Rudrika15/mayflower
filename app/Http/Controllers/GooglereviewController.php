<?php

namespace App\Http\Controllers;

use App\Models\Googlereview;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGooglereviewRequest;
use App\Http\Requests\UpdateGooglereviewRequest;
use Dotenv\Validator;
use GuzzleHttp\Psr7\Request;

class GooglereviewController extends Controller
{

    public function index()
    {
        //
        return view('review');

    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
      
    }


    public function show()
    {
        //
    }

   
    public function edit()
    {
        //
    }

   
    public function update(Request $request)
    {
        //
    }

   
    public function destroy()
    {
        //
    }
}
