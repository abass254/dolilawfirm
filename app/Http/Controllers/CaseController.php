<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseController extends Controller
{
    //

    public function createCase(Request $request){

      //  return $request->segment('1');

        return view('case.create');
    }
}
