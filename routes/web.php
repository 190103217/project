<?php
use App\Result;
use Illuminate\Support\Facades\Input;

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
    return view('home');
});
Route::get('lang/{locale}', 'LocalizationController@index');

Route::get('/hom', function () {
    return view('home');
});

Route::resource('admin/crud','CrudsController');
Route::resource('admin/products','ProductController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('/form', 'UploadController@uploadForm');
Route::post('/form', 'UploadController@uploadSubmit');

Route::get('chart', function () {
    return view('chart');
});


 Route::get ( '/searc', function () {
    return view ( 'search' );
} );
Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    $s = Input::get ( 's' );
    $user = Result::where ( 'patient_id', '=',$s)->where ( 'password', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'search' )->withDetails ( $user )->withQuery ( $s );
    else
        return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
} );
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


