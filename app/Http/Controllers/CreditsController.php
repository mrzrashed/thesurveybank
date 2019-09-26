<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class CreditsController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $data = User::where('id',Auth::user()->id)->get();
      return view('credits.view',compact('data'));
    }
}
