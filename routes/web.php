<?php
use App\Result;
use App\User;
use App\Appointment;
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
    return view('auth.login');
});
Route::get('/location', function () {
    return view('location');
});
Route::get('lang/{locale}', 'LocalizationController@index');
Route::get('password/lang/{locale}', 'LocalizationController@index');
Route::get('admin/lang/{locale}', 'LocalizationController@index');
Route::get('products/lang/{locale}', 'LocalizationController@index');
Route::get('crud/lang/{locale}', 'LocalizationController@index');

Route::get('/hom', function () {
    return view('home');
});
Route::get('/email', 'EmailController@create');
Route::post('/email', 'EmailController@sendEmail')->name('send.email');

Route::resource('admin/crud','CrudsController');
Route::resource('crud','CrudsController');
Route::resource('admin/products','ProductController');
Route::resource('products','ProductController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

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




