<?php

use Illuminate\Support\Facades\Route;
use App\Member;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('pages.index');
});

Route::get('/editmember/{memberId}', function () {
    return view('portal.memberedit');
});


Route::get('/testimony', 'TestimonyController@index')->name('testimony');
Route::get('/testimonyDetail/{id}', 'TestimonyDetailController@index')->name('testimonyDetail');

Route::get('group/{id}', 'GroupController@index')->name('group');
//Route::get('/members', 'HomeController@createMember')->name('members');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/general', 'HomeController@general')->name('general');//show the general module home page

Route::get('/createMember', 'MemberController@showMemberCreateForm')->name('members');//Show member record & new member frm.
Route::post('/saveMember', 'MemberController@savemember')->name('saveMember'); //Save new member record.

Route::get('/detail/{id}', function($id){
	 $member = Member::find($id);

	 print_r($member);
         
        //return view('portal.memberdetail')->with('members', $member);
});  //showing member detail
