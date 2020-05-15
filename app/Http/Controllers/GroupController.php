<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index($id){
    	$groupName = $id;
    	return view('pages.groupDetail')->with('name', $groupName);
    }
}
