<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Dpartment;
use App\Fellowship;
use App\Fellowshipmember;
use App\Departmentmember;

class MemberController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }

    /*
    * About is a constructor middleware that make sure user are login before making use of this controller
    */

	public function showMemberCreateForm(){
		$showFell = Fellowship::all(); // list of fellowship tobe display in the form
		$showDep = Dpartment::all();  // list of department tobe display in the form
        $showMem = Member::all();  // display the list of all member..
	
        return view('portal.members', ['fellowships' => $showFell, 'departments' => $showDep, 'members' => $showMem]);
	}
    //
    public function savemember(Request $request){
    	//Save member basic imformation

    	$member = new Member();
    	$member->firstName = $request->input('fname');
    	$member->middleName = $request->input('mname');
    	$member->lastName = $request->input('lname');
    	$member->address = $request->input('address');
    	$member->email = $request->input('email');
    	$member->contact = $request->input('contact');
    	$member->fatherName = $request->input('fatherName');
    	$member->motherName = $request->input('motherName');
    	$member->educationLevel = $request->input('education');
    	$member->miratalStatus = $request->input('miratal');
    	$member->baptise = $request->input('baptise');
    	$member->birthDate = $request->input('dob');
    	$member->numberOfChildren = $request->input('child');

         $arrayMember = $member::orderBy('id', 'Desc')->get();
         $memberId = count($arrayMember) + 1;
         //echo $try;
        // $lastRecord = DB::table('posts')->orderBy('id', 'DESC')->first();
          // $key = $member::orderBy('id', 'desc')->get('id')->first();

         //return array_map('objectToArray', (array) $array);
          //  echo ($key['id']);
        // $personArray = (array) $array;
        // $me = $personArray[0];
        // echo($me);
        // dd($array);
        // $key = array_pull($array, 'id');
        // echo ($key);
        // echo  ($array['firstName']);
        // $talkk = $talk["id"];
        // echo($talkk);

        // $ask = array(1, 2, 3);
        // echo $ask[0];

        //return view('home')->with('talks', $talks);
    	

    	// Save member fellowship

    	$memberFellowship = new Fellowshipmember();
    	$memberFellowship->fellowshipId = $request->input('fellowship');
        $memberFellowship->memberId = $memberId;
    	$memberFellowship->memberPosition = $request->input('fellowPosition');
    	

    	// Save member department

    	$memberDepartment = new Departmentmember();
    	$memberDepartment->departmentId = $request->input('department');
        $memberDepartment->memberId = $memberId;
    	$memberDepartment->memberPosition = $request->input('departPosition');

     //    //echo $fellowships;
    	
    	$member->save();
    	$memberFellowship->save();
    	$memberDepartment->save();
            

    	// return $educationLevel . " " . $department . " " . $lastName;

    }

    // public function detail($id){
    //     $mId = $id;

    //     $member = Member::find($id);
         
    //      return view('portal.memberdetail')->with('members', $member);
    //    // return view('portal.memberdetail', ['members' => $member]);
    //    // echo $id;
    // }
}
