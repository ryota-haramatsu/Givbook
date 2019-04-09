<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopPagesController extends Controller
{
   public function index() {
       return view('top');
   }
}
