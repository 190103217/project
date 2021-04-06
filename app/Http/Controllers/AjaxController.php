<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller {
   public function index() {
      $msg = "COVID-19 is the name of the illness caused by a new type of coronavirus that has led to a worldwide outbreak, which was first reported in China in December 2019. The name of this coronavirus strain is SARS-CoV-2.";
      return response()->json(array('msg'=> $msg), 200);
   }
}