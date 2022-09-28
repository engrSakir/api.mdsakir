<?php

namespace App\Http\Controllers;

class DomainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function availability(){
        if(gethostbyname(request()->domain) != request()->domain){
            return response()->json([
                'type' => 'warning',
                'message' => 'Domain is not availabe'
            ]);
        }else{
            return response()->json([
                'type' => 'success',
                'message' => 'Domain is availabe'
            ]);
        }
    }
}
