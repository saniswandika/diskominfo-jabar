<?php

use App\Http\Controllers\Admin\HomeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostPageController;
use App\Http\Controllers\GalleryPageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\layananController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\tupoksiController;
use App\Http\Controllers\AllnewsController;
use App\Http\Controllers\listDataController;
use App\Http\Controllers\statusController;
use App\Http\Controllers\PPIDController;
use App\Http\Controllers\adminPermohonanController;
use App\Http\Controllers\ProdukHukumController;
use App\Models\Category;
use App\models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
    $posts = post::where('posts.category_id','3')->where('posts.status','1')->orderBy('created_at', 'DESC')->paginate(2,['*'],'berita');
    $posts->setCollection($posts->sortByDesc('created_at'));

    $berita = post::where('posts.category_id','3')->where('posts.status','1')->orderBy('created_at', 'DESC')->paginate(1);
    $berita->setCollection($berita->sortByDesc('created_at'));
    $post_berita = post::where('posts.category_id','3')->where('posts.status','1')->orderBy('created_at', 'DESC')->paginate(8);
    $berita->setCollection($berita->sortByDesc('created_at'));

    $pelayanan = post::where('posts.category_id','2')->get();
    $program = post::where('posts.category_id','1')->where('posts.status','1')->orderBy('created_at', 'DESC')->paginate(4,['*'],'program');
    $program->setCollection($program->sortByDesc('created_at'));
   
     $publikasi = post::select('posts.*','categories.name as nama_categori')->join('categories','categories.id','=' , 'posts.category_id')->where('posts.category_id','3')->where('posts.status','1')->orderBy('updated_at', 'DESC')->paginate(6);  
    // $publikasi = post::where('posts.category_id','4')->where('posts.status','1')->orderBy('created_at', 'DESC')->paginate(8);
    $publikasi->setCollection($publikasi->sortByDesc('created_at'));

    $layanan = post::select('posts.*','categories.name as nama_categori')->join('categories','categories.id','=' , 'posts.category_id')->where('posts.category_id','2')->where('posts.status','1')->orderBy('updated_at', 'DESC')->paginate(4);  
    // $publikasi = post::where('posts.category_id','4')->where('posts.status','1')->orderBy('created_at', 'DESC')->paginate(8);
    $layanan->setCollection($layanan->sortByDesc('created_at'));
    

    // dd($publikasi);

    return view('halaman_depan.HomeBlog',compact('berita','posts','pelayanan','program','publikasi','post_berita','layanan'));
});

Route::resource('/tupoksi', tupoksiController::class);
Route::get('/struktur', function () {
    return view('halaman_depan.strukrtur');
});


// Route::get('/permohonan', [PPIDController::class,'store'])->name('permohonan.store');
Route::get('/permohonan', [PPIDController::class,'index'])->name('permohonan.index');
Route::get('/semuaberita', function () {
    return view('halaman_depan.AllNews');
});

Route::get('/ppid', function () {
    return view('halaman_depan.PPID');
});
Route::get('/post/{id}',  [postPageController::class,'show'])->name('post.show');

Route::get('/galleryPage', [GalleryPageController::class,'index']);
Route::get('/semuaberita',  [AllnewsController::class,'index'])->name('semuaberita.show');


//dashboard routes
Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard', 'as' => 'admin.'], function () {
    //single action controllers
    Route::get('/', HomeController::class)->name('home');
    
    //link that return view, to get compoment from there

    Route::view('/cards', 'admin.cards')->name('cards');
    Route::resource('/publikasi', publikasiController::class);
    Route::resource('/layanan', layananController::class);
    Route::resource('/forms', ProgramController::class);
    Route::resource('/program', BeritaController::class);
    Route::resource('/ListData', listDataController::class);
    Route::get('/status/update', [statusController::class, 'updateStatus'])->name('updatestatus');
    Route::resource('/modals', adminPermohonanController::class);
    Route::resource('/produk-hukum', ProdukHukumController::class);
    Route::view('/tables', 'admin.tables')->name('tables');

    Route::get('hasilcari', HomeController::class, 'cari')->name('lihatData');
    // Route::get('status', programController::class, 'updateStatus')->name('updatestatus');

    Route::group(['prefix' => 'pages', 'as' => 'page.'], function () {
        Route::view('/404-page', 'admin.pages.404')->name('404');
        Route::view('/blank-page', 'admin.pages.blank')->name('blank');
        Route::view('/create-account-page', 'admin.pages.create-account')->name('create-account');
        Route::view('/forgot-password-page', 'admin.pages.forgot-password')->name('forgot-password');
        Route::view('/login-page', 'admin.pages.login')->name('login');
    });
});


require __DIR__ . '/auth.php';
