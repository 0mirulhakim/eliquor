<?php

use Illuminate\Support\Facades\Route;
use App\Permohonan;
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
    $homes = DB::table('homepages')->get();
    return view('welcome', ['homes' => $homes]);
});

Route::get('/baru1', function () {
    return view("baru1");
});
Route::get('/memperbaharui1', function () {
    return view("memperbaharui1");
});
Route::get('/rayuan1', function () {
    return view("rayuan1");
});
Route::get('/status', function () {
    return view("status");
});
Route::get('/track', function () {
    return view("track");
});
Route::get('/pengumuman', function () {
    return view("pengumuman");
});
Route::get('/home1', function () {
    return view("home1");
});
Route::post ( '/search', function () {
	$q =Request::get ( 'q' );
    $user = Permohonan::where ( 'passport1', 'LIKE', '%' . $q . '%' )->orWhere ( 'no_ic', 'LIKE', '%' . $q . '%' )->orWhere ( 'no_rujukan', 'LIKE', '%' . $q . '%' ) ->get();//->paginate(1); //orWhere ( 'status_permohonan_id', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'status' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'status' )->withErrors ('No.rujukan / kad pengenalan tidak wujud' );
        
} );
Route::post ( '/track', function () {
    $q =Request::get ( 'q' );
    $user = DB::table('status_permohonans')     
    ->join('status', 'status.id', '=', 'status_permohonans.status')
    ->join('permohonan', 'permohonan.id', '=', 'status_permohonans.permohonan_id')
    ->where( 'status_permohonans.permohonan_id', 'LIKE', '%' . $q . '%' )
    ->select('status_permohonans.*','status.status_nama','permohonan.no_ic','permohonan.nama','permohonan.passport1','status_permohonans.created_at')
    ->get();
     if (count ( $user ) > 0)
        return view ( 'track' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'track' )->withErrors ('No.rujukan tidak wujud' );
        
} );
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('permohonan', 'PermohonanController');
Route::resource('sah', 'SahController');
Route::resource('sah1', 'Sah1Controller');
Route::resource('sah2', 'Sah2Controller');
Route::resource('memperbaharui', 'MemperbaharuiController');
Route::resource('rayuan', 'RayuanController');
Route::resource('statuses', 'Status_permohonansController');
Route::resource('status_permohonan', 'Status_permohonansController');
Route::get('/pengumuman', 'pengumumanController@index')->name('pengumuman');
Route::resource('customsearch', 'CustomSearchController');
Route::get('/custom_search/action', 'CustomSearchController@action')->name('custom_search.action');


