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

Route::get('/home', function () {
    return view('home');
});

Route::post('/getmsg','AjaxController@index');

Route::get('mail/send', 'MailController@send');

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