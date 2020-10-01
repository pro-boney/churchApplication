<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $primaryKey = 'id';
    // RELATIONSHIP FOR  DEPARTMENT MEMBER
    
    // public function departmentMember(){
    // 	return $this->hasOne('App\Departmentmember', 'memberId');
    // }

    // // RELATIONSHIP FOR FELLOWSHIP MEMBER

    //  public function fellowshipMember(){
    // 	return $this->hasOne('App\Fellowshipmember', 'memberId');
    // }

}
