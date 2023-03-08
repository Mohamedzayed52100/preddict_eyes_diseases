<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    return view('welcome');
});



Route::any('/savephote' , [TestController::class , 'index']);
Route::any('/pinfoedit/{id}' , [TestController::class , 'pinfoedit']);
Route::any('/savachange' , [TestController::class , 'savachange']);
Route::any('/history/{id}' , [TestController::class , 'history']);

// Route::any('modelpage' , [TestController::class , 'modelpage']);


Route::any('/doctors' , [TestController::class , 'doctors']);


Route::any('/test' , function(){

    return view('test');

});

Route::any('/admain' , [TestController::class , 'admain']);

Route::any('/allpatient', [TestController::class, 'allpatient']);

Route::any('deletedata/{id}' , [TestController::class , 'deletedata']);

Route::any('alladvices' , [TestController::class , 'alladvices']);
Route::any('alladvicesgiven' , [TestController::class , 'alladvicesgiven']);
Route::any('addadvice' , [TestController::class , 'addadvice']);


Route::any('/allhistory' ,[TestController::class , 'allhistory']);


Route::any('showUpload' , [TestController::class, 'showUpload']);
Route::any('upload' , [TestController::class, 'upload']);
Route::any('result' , [TestController::class, 'showResult']);


Route::any('admainlogin' , [TestController::class , 'admainlogin']);
Route::any('checkadmainlogin' , [TestController::class , 'checkadmainlogin']);


// Route::any('/mohamed/ff' , function(Request $request){
//     return $request->path();
// });





Route::get('/dashboard', function () {
    session([
        'userid'=>auth()->user()->id,

       ]);
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';



Route::any('/do' , function (){

    return view('test');

    // return dd($data);


});


Route::any('database' , function(){

  //  $data=DB::select("SELECT DATE_FORMAT(SYSDATE(), '%Y-%m-%d')");

    $data = DB::select("SELECT SUBSTR(name , 1, 8) FROM users ");

    // select nvl(remember_token ,0) from users;


    $newdat =DB::select('select nvl(remember_token ,0) from users');

    return $newdat;


    return dd($data);



});

///auth()->user()->id;

// Route::any('saratest' , [TestCont])
// Route::any('saratest' , [TestController::class, 'upload']);
