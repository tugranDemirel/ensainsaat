<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Front\FContactController;
use App\Http\Controllers\Front\FPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Admin\RealEstateController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\CKEditorController;

use App\Http\Controllers\Front\FIndexController;
use App\Http\Controllers\Front\FRealEstateController;
use App\Http\Controllers\Front\FServiceController;
use App\Http\Controllers\Front\FNewsLetterController;
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
Route::middleware('ViewShare')->group(function () {
    Route::get('/', [FIndexController::class, 'index'])->name('home');
    Route::as('realestate.')->group(function (){
        Route::get('/emlak', [FRealEstateController::class, 'index'])->name('index');
        Route::get('/emlak/{purpose}', [FRealEstateController::class, 'purposeHome'])->name('purporse');
        Route::get('/emlak/{purpose}/{slug}', [FRealEstateController::class, 'show'])->name('show');
    });

    Route::as('service.')->group(function (){
        Route::get('/hizmetlerimiz',[FServiceController::class, 'index'])->name('index');
        Route::get('/hizmetlerimiz/{slug}',[FServiceController::class, 'show'])->name('show');
    });

    Route::as('newsletter.')->group(function (){
        Route::get('/basinda-biz',[FNewsLetterController::class, 'index'])->name('index');
        Route::get('/basinda-biz/{slug}',[FNewsLetterController::class, 'show'])->name('show');
    });

    Route::as('page.')->group(function (){
        Route::get('/hakkimizda',[FPageController::class, 'about'])->name('about');
        Route::get('/iletisim',[FContactController::class, 'index'])->name('contact');
        Route::post('/iletisim',[FContactController::class, 'store'])->name('contact.store');
    });
});


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin/')->as('admin.')->middleware('auth')->group(function (){
    Route::get('/', function () {
        return view('admin.index');
    })->name('home');

    Route::resource('hesap-ayarlari', AccountController::class)
            ->only('index', 'update')
            ->parameters(['hesap-ayarlari' => 'user'])
            ->names('account');
    Route::resource('hizmetlerimiz', ServiceController::class)
            ->except('show')
            ->parameters(['hizmetlerimiz' => 'service'])
            ->names('service');

    Route::resource('basinda-biz', NewsLetterController::class)
            ->only('index', 'create', 'store', 'edit', 'update', 'destroy')
            ->parameters(['basinda-biz' => 'newsletter'])
            ->names('newsletter');

    Route::resource('emlak', RealEstateController::class)
            ->only('index', 'create', 'store', 'edit', 'update', 'destroy')
            ->parameters(['emlak' => 'realestate'])
            ->names('realestate');

    Route::resource('kullanici-sponsorlar', ClientController::class)
            ->only('index', 'create', 'store', 'edit', 'update', 'destroy')
            ->parameters(['kullanici-sponsorlar' => 'client'])
            ->names('client');

    Route::prefix('iletisim')->as('contact.')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::get('/detay/{contact}', [ContactController::class, 'show'])->name('show');
    });

    Route::resource('site-ayarlari', SettingController::class)
            ->only('index', 'store','update')
            ->parameters(['site-ayarlari' => 'setting'])
            ->names('setting');

    Route::post('ckeditor/image_upload', [CKEditorController::class, 'upload'])->name('upload');

});
