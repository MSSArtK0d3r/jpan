<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EntriesController;
use App\Http\Controllers\ThankYouResult;
use App\Http\Controllers\DevTest;
use App\Http\Controllers\AgensiController;
use App\Http\Controllers\DevAdmin;
use App\Http\Controllers\AdminPage;
use App\Http\Controllers\Mail\SendVerification;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifyAccount;
use App\Http\Controllers\ChangePin;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/result', function(){
    return redirect('/form');
});

Route::get('/users', function(){
    return redirect()->route('home');
});

Route::get('/pengenalan', function(){
    return view('pengenalan');
});

Route::get('/informasi', function(){
    return view('informasi');
});

Route::get('/hubungi', function(){
    return view('hubungi');
});

// Users Route
Route::get('/', [UserController::class,'index'])->name('home');
Route::post('/users', [UserController::class, 'storeData'])->name('storeMyForm');
Route::get('/users/verify', [UserController::class, 'verifyPinPage'])->name('verifypinpage');
Route::post('/users/verifypin', [UserController::class, 'verifyPin'])->name('verifypin');
Route::get('/users/makenewpin', [UserController::class, 'newPinPage'])->name('createpinpage');
Route::post('/users/createpin', [UserController::class, 'createPin'])->name('createpin');
Route::get('/users/logout', [UserController::class, 'clearSession'])->name('logout');
Route::get('/users/demografi', [UserController::class, 'demoGraphy'])->name('demograph');
Route::post('/users/demografi', [UserController::class, 'storeDataDemografi'])->name('updateDemografi');
Route::get('/users/sb', [UserController::class, 'sectionB'])->name('sb');
Route::post('/users/sb', [UserController::class, 'storeSectionB'])->name('updateSectionB');
Route::get('/users/sc', [UserController::class, 'sectionC'])->name('sc');
Route::post('/users/sc', [UserController::class, 'storeSectionC'])->name('updateSectionC');
Route::get('/users/sd', [UserController::class, 'sectionD'])->name('sd');
Route::post('/users/sd', [UserController::class, 'storeSectionD'])->name('updateSectionD');
Route::get('/users/se', [UserController::class, 'sectionE'])->name('se');
Route::post('/users/se', [UserController::class, 'storeSectionE'])->name('updateSectionE');
Route::get('/users/sf', [UserController::class, 'sectionF'])->name('sf');
Route::post('/users/sf', [UserController::class, 'storeSectionF'])->name('updateSectionF');
Route::get('/users/sg', [UserController::class, 'sectionG'])->name('sg');
Route::post('/users/sg', [UserController::class, 'storeSectionG'])->name('updateSectionG');
Route::get('/users/sh1', [UserController::class, 'sectionH1'])->name('sh1');
Route::post('/users/sh1', [UserController::class, 'storeSectionH1'])->name('updateSectionH1');
Route::get('/users/sh2', [UserController::class, 'sectionH2'])->name('sh2');
Route::post('/users/sh2', [UserController::class, 'storeSectionH2'])->name('updateSectionH2');
Route::get('/users/sh3', [UserController::class, 'sectionH3'])->name('sh3');
Route::post('/users/sh3', [UserController::class, 'storeSectionH3'])->name('updateSectionH3');
Route::get('/users/sh4', [UserController::class, 'sectionH4'])->name('sh4');
Route::post('/users/sh4', [UserController::class, 'storeSectionH4'])->name('updateSectionH4');
Route::get('/users/si', [UserController::class, 'sectionI'])->name('si');
Route::post('/users/si', [UserController::class, 'storeSectionI'])->name('updateSectionI');
Route::get('/users/sj', [UserController::class, 'sectionJ'])->name('sj');
Route::post('/users/sj', [UserController::class, 'storeSectionJ'])->name('updateSectionJ');
Route::get('/users/sk', [UserController::class, 'sectionK'])->name('sk');
Route::post('/users/sk', [UserController::class, 'storeSectionK'])->name('updateSectionK');
Route::get('/users/sl', [UserController::class, 'sectionL'])->name('sl');
Route::post('/users/sl', [UserController::class, 'storeSectionL'])->name('updateSectionL');
Route::get('/users/sm', [UserController::class, 'sectionM'])->name('sm');
Route::post('/users/sm', [UserController::class, 'storeSectionM'])->name('updateSectionM');
Route::get('/users/sn', [UserController::class, 'sectionN'])->name('sn');
Route::post('/users/sn', [UserController::class, 'storeSectionN'])->name('updateSectionN');
Route::get('/users/so', [UserController::class, 'sectionO'])->name('so');
Route::post('/users/so', [UserController::class, 'storeSectionO'])->name('updateSectionO');
Route::get('/users/sp', [UserController::class, 'sectionP'])->name('sp');
Route::post('/users/sp', [UserController::class, 'storeSectionP'])->name('updateSectionP');
Route::get('/users/sq', [UserController::class, 'sectionQ'])->name('sq');
Route::post('/users/sq', [UserController::class, 'storeSectionQ'])->name('updateSectionQ');
Route::get('/users/sr', [UserController::class, 'sectionR'])->name('sr');
Route::post('/users/sr', [UserController::class, 'storeSectionR'])->name('updateSectionR');
Route::post('/users/sr2', [UserController::class, 'storeSectionR2'])->name('updateSectionR2');
Route::get('/users/reward', [UserController::class, 'getReward'])->name('reward');
Route::post('/users/reward', [UserController::class, 'storeReward'])->name('storeReward');
Route::get('/verify/{uuid}', [VerifyAccount::class, 'index'])->name('verify');
Route::get('/change-pin', [ChangePin::class, 'index'])->name('changepin');
Route::post('/change-pin-now', [ChangePin::class, 'changePin'])->name('changepinnow');
Route::get('/forgetpin', function(){
    return view('users.forgetpin');
})->name('forgetpin');
Route::get('/recovered-page', function(){
    return view('users.recoveredpage');
})->name('donerecovered');
Route::post('/recover-pin', [UserController::class, 'recoverPin'])->name('pinrecovered');

Route::get('/invalid', function(){
    return view('invalid');
})->name('invalid');

Route::get('/verified', function(){
    return view('verified');
})->name('verified');

Route::get('/done', function(){
    return view('doneverify');
})->name('doneverify');

Route::get('/send-verify', [SendVerification::class, 'SendEmailVerify'])->name('send-verification');
Route::get('/send-password', [SendVerification::class, 'sendPasswordToEmail'])->name('send-password');

//update purpose
// Route::get('/updateku', function(){
//     \Artisan::call('migrate');
//     dd('migrated!');
// });

Route::post('/submit' , [EntriesController::class,'storeForm']);


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});


//** Custom Roles */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::get('/admin/dashboard', [UserController::class,'adminDashboard']);
    Route::get('/admin/dev', [AdminPage::class, 'index']);
    Route::get('/admin/welcome', [AdminPage::class, 'welcome']);
    Route::get('/admin/mydashboard', [AgensiController::class, 'mydashboard']);
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('entries')->name('entries/')->group(static function() {
            Route::get('/',                                             'EntriesController@index')->name('index');
            Route::get('/create',                                       'EntriesController@create')->name('create');
            Route::post('/',                                            'EntriesController@store')->name('store');
            Route::get('/{entry}/edit',                                 'EntriesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'EntriesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{entry}',                                     'EntriesController@update')->name('update');
            Route::delete('/{entry}',                                   'EntriesController@destroy')->name('destroy');
            Route::get('/export',                                       'EntriesController@export')->name('exportEntry');
        });
    });
});

/* Dev Router */
Route::get('/dev', [DevTest::class, 'index']);
Route::post('/dev', [DevTest::class, 'getParam'])->name('getParamData');

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('roles')->name('roles/')->group(static function() {
            Route::get('/',                                             'RolesController@index')->name('index');
            Route::get('/create',                                       'RolesController@create')->name('create');
            Route::post('/',                                            'RolesController@store')->name('store');
            Route::get('/{role}/edit',                                  'RolesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'RolesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{role}',                                      'RolesController@update')->name('update');
            Route::delete('/{role}',                                    'RolesController@destroy')->name('destroy');
        });
    });
});