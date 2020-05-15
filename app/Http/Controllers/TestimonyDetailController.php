<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonyDetailController extends Controller
{
    //

     public function index($id){
     	$idl = $id;
    	return view('pages.testimonyDetail')->with('idl', $idl);
    }
}
