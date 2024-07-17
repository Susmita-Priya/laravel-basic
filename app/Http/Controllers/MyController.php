<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class MyController extends Controller
{
   public function list(){
    $customers =  Customer :: all();

    return view('subdir.customer',
    ['customers' => $customers]
);
   }
}
