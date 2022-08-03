<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SosmedController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/visi-misi', [App\Http\Controllers\PageController::class, 'visimisi']);
Route::get('/program-dan-kegiatan', [App\Http\Controllers\PageController::class, 'program']);
Route::get('/daftar-pegawai', [App\Http\Controllers\PageController::class, 'pegawai']);
Route::get('/tupoksi', [App\Http\Controllers\PageController::class, 'tupoksi']);
Route::get('/struktur', [App\Http\Controllers\PageController::class, 'struktur']);
Route::get('/potensi', [App\Http\Controllers\PageController::class, 'potensi']);
Route::get('/foto', [App\Http\Controllers\PageController::class, 'foto']);
Route::get('/video', [App\Http\Controllers\PageController::class, 'video']);
Route::get('/kontak', [App\Http\Controllers\PageController::class, 'kontak']);
Route::get('/dasar-hukum', [App\Http\Controllers\PageController::class, 'dasarhukum']);
Route::get('/event', [App\Http\Controllers\PageController::class, 'event']);
Route::get('/event-detail/{events:id}', [App\Http\Controllers\PageController::class, 'eventDetail']);
Route::get('/berita', [App\Http\Controllers\PageController::class, 'berita']);
route::get('/berita-detail/{berita:id}', [App\Http\Controllers\PageController::class, 'beritaDetail'])->name('berita-detail');
route::get('/berita-cari', [App\Http\Controllers\Pagecontroller::class, 'hascarberita']);

Route::get('/cari-kategori/{category:id}', [App\Http\Controllers\PageController::class, 'kategori'])->name('cari-kategori');
Route::get('/cari-tag/{tag:id}', [App\Http\Controllers\PageController::class, 'tag'])->name('cari-tag');

Route::get('/download', [App\Http\Controllers\PageController::class, 'download']);
route::get('/getdownload/{downloads:id}', [App\Http\Controllers\PageController::class, 'getDownload'])->name('getdownload');
route::get('/event-detail/{event:id}', [App\Http\Controllers\PageController::class, 'eventDetail'])->name('event-detail');

Auth::routes(['register' => false]);

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
        Route::resource('permission', PermissionController::class)->except(['show', 'create', 'edit', 'update', 'delete']);
        Route::resource('role', RoleController::class)->except('show');
        Route::resource('user', UserController::class)->except('show');
        Route::resource('news', NewsController::class)->except('show')->name('index', 'news.index');
        Route::resource('category', CategoryController::class)->except('show');
        Route::resource('tag', TagController::class)->except('show');
        Route::resource('event', EventController::class)->except('show');
        Route::resource('file', FileController::class)->except('show');
        Route::resource('service', ServiceController::class)->except('show');
        Route::resource('banner', BannerController::class)->except('show');
        Route::resource('profile', ProfileController::class)->except(['show', 'delete']);
        Route::resource('contact', ContactController::class)->except(['show', 'delete']);
        Route::resource('link', LinkController::class)->except('show');
        Route::resource('sosmed', SosmedController::class)->except('show');
        Route::resource('photo', PhotoController::class)->except(['show', 'create', 'edit', 'update']);
        Route::resource('video', VideoController::class)->except('show');
        Route::resource('slider', SliderController::class)->except(['show', 'create', 'edit', 'update']);
        Route::resource('infografis', App\Http\Controllers\Admin\InfografisController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);
    });
});
