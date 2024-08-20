<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\VotesController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController as UserHomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// FRONT ROUTES START

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/scenarios', function () {
    return view('scenarios');
});

Route::get('/toss-up-states', function () {
    return view('toss-up-states');
});

Route::get('/draw', function () {
    return view('scenarios_map.draw.scenario_draw');
});

Route::get('/scenarios-result', [App\Http\Controllers\HomeController::class, 'scenariosResult'])->name('scenarios.result');

// Route::get('/scenarios-result', function () {
//     return view('scenarios_result');
// });


// Scenario pages ----- Routes ----- Start
// Democratic Routes

Route::get('/democrat/scenario-1', function () {
    return view('scenarios_map.dem.scenario_one_dem');
});
Route::get('/democrat/scenario-2', function () {
    return view('scenarios_map.dem.scenario_two_dem');
});
Route::get('/democrat/scenario-3', function () {
    return view('scenarios_map.dem.scenario_three_dem');
});
Route::get('/democrat/scenario-4', function () {
    return view('scenarios_map.dem.scenario_four_dem');
});
Route::get('/democrat/scenario-5', function () {
    return view('scenarios_map.dem.scenario_five_dem');
});
Route::get('/democrat/scenario-6', function () {
    return view('scenarios_map.dem.scenario_six_dem');
});
Route::get('/democrat/scenario-7', function () {
    return view('scenarios_map.dem.scenario_seven_dem');
});
Route::get('/democrat/scenario-8', function () {
    return view('scenarios_map.dem.scenario_eight_dem');
});
Route::get('/democrat/scenario-9', function () {
    return view('scenarios_map.dem.scenario_nine_dem');
});


// Republic Routes

Route::get('/republican/scenario-1', function () {
    return view('scenarios_map.rep.scenario_one_rep');
});
Route::get('/republican/scenario-2/', function () {
    return view('scenarios_map.rep.scenario_two_rep');
});
Route::get('/republican/scenario-3/', function () {
    return view('scenarios_map.rep.scenario_three_rep');
});
Route::get('/republican/scenario-4/', function () {
    return view('scenarios_map.rep.scenario_four_rep');
});
Route::get('/republican/scenario-5/', function () {
    return view('scenarios_map.rep.scenario_five_rep');
});
Route::get('/republican/scenario-6/', function () {
    return view('scenarios_map.rep.scenario_six_rep');
});
Route::get('/republican/scenario-7/', function () {
    return view('scenarios_map.rep.scenario_seven_rep');
});
Route::get('/republican/scenario-8/', function () {
    return view('scenarios_map.rep.scenario_eight_rep');
});
Route::get('/republican/scenario-9/', function () {
    return view('scenarios_map.rep.scenario_nine_rep');
});
Route::get('/republican/scenario-10/', function () {
    return view('scenarios_map.rep.scenario_ten_rep');
});
Route::get('/republican/scenario-11/', function () {
    return view('scenarios_map.rep.scenario_eleven_rep');
});
Route::get('/republican/scenario-12/', function () {
    return view('scenarios_map.rep.scenario_twelve_rep');
});

// Scenario pages ----- Routes ----- END


// FRONT ROUTES END

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['user', 'auth']], function () {
    Route::group(['middleware' => ['verified']], function () {
        Route::get('scenarios-result', [UserHomeController::class, 'scenariosResult'])->name('user.scenarios.result');
        Route::post('vote', [UserHomeController::class, 'votePost'])->name('user.vote.post');
        Route::post('subscribe', [UserHomeController::class, 'subscribe'])->name('user.subscribe');
    });

    Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');

    Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
    Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

});
Route::post('/account/delete', [UserController::class , 'deleteAccount'])->name('account.delete.confirm');

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('users', [HomeController::class, 'getUser'])->name('admin.user.index');
    Route::resource('votes', VotesController::class, ['names' => 'admin.vote']);
    Route::resource('subscribes', SubscribeController::class, ['names' => 'admin.subscribe']);

    Route::delete('/users/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.users.destroy');
});

Route::get('privacy-policy', function(){
    return view('privacy-policy');
});

Route::get('cookie-policy', function(){
    return view('cookie-policy');
});

Route::get('company-information' , function() {
    return view('company-information');
});

Route::get('login/google', [LoginController::class, 'redirectToProvider'])->name('google.login');
Route::get('login/google/callback', [LoginController::class, 'handleProviderCallback'])->name('google.login.callback');

Route::get('/thankyou', [UserController::class , 'index'])->name('thankyou');

Route::post('/change-language', [UserController::class, 'changeLanguage'])->name('changeLanguage');
