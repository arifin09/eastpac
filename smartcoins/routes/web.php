<?php

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

/* Landing Page */
Route::get('/', function () {
    return view('landingpage.index');
})->name('welcome');

Route::get('/faq', function () {
    return view('landingpage.faq');
})->name('faq');

Route::get('/contact-us', function () {
    return view('landingpage.contactus');
})->name('contactus');

Route::get('/about', function () {
    return view('landingpage.about');
})->name('about');


// Auth::routes();

// after
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::middleware(['auth', 'verified'])->prefix('home')->group(function() {
    // home route
    Route::get('contribution','HomeController@contribution')->name('home.contribution');
    Route::get('transaction','HomeController@transaction')->name('home.transaction');
    Route::get('referral','HomeController@referral')->name('home.referral');
    Route::get('kycapp','HomeController@kycapp')->name('home.kycapp');
    Route::get('security','SecurityController@index')->name('home.security');
    Route::get('kycapp-form','KycController@index')->name('home.kycapp.form');
    Route::post('kycapp-form','KycController@store')->name('home.kycapp.store');
});

// member
Route::middleware(['auth', 'verified'])->prefix('setting')->group(function() {
    // profiel
    Route::get('profile','ProfileController@index')->name('profileIndex');
    Route::post('profile/full-name-save-edit', 'ProfileController@update')->name('profileUpdate');
    Route::post('profile/change-password-save', 'ProfileController@updatePassword')->name('profileUpdatePassword');
});

// administrator
Route::middleware(['auth','role:administrator'])->prefix('administrator')->group(function() {
    // manage user
    Route::get('/manage-user', 'AdministratorController@manageUser')->name('admin.usermanage');
    Route::get('/manage-user/show/{id}', 'AdministratorController@manageUserShow')->name('admin.usermanage.show');

    // role
    Route::post('manage-user/add-role-to/{id}', 'AdministratorController@addRoleTo')->name('admin.usermanage.addRoleTo');
    Route::get('/manage-user/remove-role-from/{id}/{role_name}', 'AdministratorController@removeRole')->name('admin.usermanage.removeRole');

    // permission
    Route::post('/manage-user/add-permission-to/{id}', 'AdministratorController@addPermissionTo')->name('admin.usermanage.addPermissionTo');
    Route::get('/manage-user/remove-permission-from/{id}/{permission_name}', 'AdministratorController@removePermission')->name('admin.usermanage.removePermission');

    // site config
    Route::get('/site-config', 'AdministratorController@configIndex')->name('admin.config.index');
    Route::post('/site-config/save-edit-config', 'AdministratorController@updateConfigValue')->name('admin.config.update');
});

