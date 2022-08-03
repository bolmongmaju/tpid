<?php

// use App\Http\Controllers\Admin\BannerController;
// use App\Http\Controllers\Admin\CategoryController;
// use App\Http\Controllers\Admin\ContactController;
// use App\Http\Controllers\Admin\EventController;
// use App\Http\Controllers\Admin\FileController;
// use App\Http\Controllers\Admin\LinkController;
// use App\Http\Controllers\Admin\NewsController;
// use App\Http\Controllers\Admin\PermissionController;
// use App\Http\Controllers\Admin\PhotoController;
// use App\Http\Controllers\Admin\ProfileController;
// use App\Http\Controllers\Admin\RoleController;
// use App\Http\Controllers\Admin\ServiceController;
// use App\Http\Controllers\Admin\SliderController;
// use App\Http\Controllers\Admin\SosmedController;
// use App\Http\Controllers\Admin\TagController;
// use App\Http\Controllers\Admin\UserController;
// use App\Http\Controllers\Admin\VideoController;
// use App\Http\Controllers\Admin\DownloadController;
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
        // Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
        // Route::resource('permission', PermissionController::class)->except(['show', 'create', 'edit', 'update', 'delete']);
        // Route::resource('role', RoleController::class)->except('show');
        // Route::resource('user', UserController::class)->except('show');
        // Route::resource('news', NewsController::class)->except('show');
        // Route::resource('category', CategoryController::class)->except('show');
        // Route::resource('tag', TagController::class)->except('show');
        // Route::resource('event', EventController::class)->except('show');
        // Route::resource('file', FileController::class)->except('show');
        // Route::resource('service', ServiceController::class)->except('show');
        // Route::resource('banner', BannerController::class)->except('show');
        // Route::resource('profile', ProfileController::class)->except(['show', 'delete']);
        // Route::resource('contact', ContactController::class)->except(['show', 'delete']);
        // Route::resource('link', LinkController::class)->except('show');
        // Route::resource('sosmed', SosmedController::class)->except('show');
        // Route::resource('photo', PhotoController::class)->except(['show', 'create', 'edit', 'update']);
        // Route::resource('video', VideoController::class)->except('show');
        // Route::resource('slider', SliderController::class)->except(['show', 'create', 'edit', 'update']);
        // Route::resource('admin-download', DownloadController::class, ['except' => 'show' ,'as' => 'admin']);
        // Route::resource('infografis', App\Http\Controllers\Admin\InfografisController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);







                //dashboard
                Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');

                //permissions
                Route::resource('/permission', App\Http\Controllers\Admin\PermissionController::class, ['except' => ['show', 'create', 'edit', 'update', 'delete'] ,'as' => 'admin']);
        
                //roles
                Route::resource('/role', App\Http\Controllers\Admin\RoleController::class, ['except' => ['show'] ,'as' => 'admin']);
        
                //users
                Route::resource('/user', App\Http\Controllers\Admin\UserController::class, ['except' => ['show'] ,'as' => 'admin']);

                //Profile
                Route::resource('/profile', App\Http\Controllers\Admin\ProfileController::class, ['except' => ['show'] ,'as' => 'admin']);

                //Contact
                Route::resource('/contact', App\Http\Controllers\Admin\ContactController::class, ['except' => ['show'] ,'as' => 'admin']);

                //link
                Route::resource('/link', App\Http\Controllers\Admin\LinkController::class, ['except' => ['show'] ,'as' => 'admin']);
                
                //sosmed
                Route::resource('/sosmed', App\Http\Controllers\Admin\SosmedController::class, ['except' => ['show'] ,'as' => 'admin']);
        
                //tags
                Route::resource('/tag', App\Http\Controllers\Admin\TagController::class, ['except' => 'show' ,'as' => 'admin']);
        
                //categories
                Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class, ['except' => 'show' ,'as' => 'admin']);
        
                //news
                Route::resource('/news', App\Http\Controllers\Admin\NewsController::class, ['except' => 'show' ,'as' => 'admin']);
        
                //download
                Route::resource('/admin-download', App\Http\Controllers\Admin\DownloadController::class, ['except' => 'show' ,'as' => 'admin']);

                //file
                Route::resource('/file', App\Http\Controllers\Admin\FileController::class, ['except' => 'show' ,'as' => 'admin']);
        
                //leaders
                Route::resource('/leader', App\Http\Controllers\Admin\LeaderController::class, ['except' => 'show' ,'as' => 'admin']);
        
                //statik
                Route::resource('/statik', App\Http\Controllers\Admin\StatikController::class, ['except' => 'show' ,'as' => 'admin']);
        
                //travel
                Route::resource('/travel', App\Http\Controllers\Admin\TravelController::class, ['except' => 'show' ,'as' => 'admin']);
        
                //instansi
                Route::resource('/instansi', App\Http\Controllers\Admin\InstansiController::class, ['except' => 'show' ,'as' => 'admin']);
        
                //statik
                Route::resource('/dinasdetail', App\Http\Controllers\Admin\DinasdetailController::class, ['except' => 'show' ,'as' => 'admin']);
        
                //banners
                Route::resource('/banner', App\Http\Controllers\Admin\BannerController::class, ['except' => 'show' ,'as' => 'admin']);
        
                //services
                Route::resource('/service', App\Http\Controllers\Admin\ServiceController::class, ['except' => 'show' ,'as' => 'admin']);
        
                //event
                Route::resource('/event', App\Http\Controllers\Admin\EventController::class, ['except' => 'show' ,'as' => 'admin']);
        
                //photo
                Route::resource('/photo', App\Http\Controllers\Admin\PhotoController::class, ['except' => ['show', 'create', 'edit', 'update'] ,'as' => 'admin']);
        
                //infografis
                Route::resource('/infografis', App\Http\Controllers\Admin\InfografisController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);
                
                //video
                Route::resource('/video', App\Http\Controllers\Admin\VideoController::class, ['except' => 'show' ,'as' => 'admin']);
        
                //slider
                Route::resource('/slider', App\Http\Controllers\Admin\SliderController::class, ['except' => ['show', 'create', 'edit', 'update'] ,'as' => 'admin']);
                
        
                
                
    });
});
