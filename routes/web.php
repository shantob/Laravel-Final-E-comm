<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\forntend\HomeController as Forntend;
use App\Http\Controllers\backend\HomeController as Backend;
use App\Http\Controllers\backend\BlogController as Blog;
use App\Http\Controllers\backend\CommentController as Comment;
use App\Http\Controllers\backend\AddProduct;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// forntend........................................
Route::get('/', [Forntend::class, 'index'])->name('home');
Route::get('/productlist', [Forntend::class, 'productlist'])->name('productlist');
Route::get('/contact', [Forntend::class, 'contact'])->name('contact');
Route::get('/about', [Forntend::class, 'about'])->name('about');
Route::get('/addtocard', [Forntend::class, 'addtocard'])->name('addtocard');
Route::get('/checkout', [Forntend::class, 'checkout'])->name('checkout');
Route::get('/productdetels', [Forntend::class, 'productdetels'])->name('productdetels');
Route::get('/thankyou', [Forntend::class, 'thankyou'])->name('thankyou');
Route::get('/invoice', [Forntend::class, 'invoice'])->name('invoice');
Route::get('/login', [Forntend::class, 'login'])->name('login');



// backend................................
// Route::get('admin/', [Backend::class, 'index'])->name('admin.home');
// Route::get('admin/productadd', [Backend::class, 'productadd'])->name('admin.productadd');
// Route::get('admin/productedit', [Backend::class, 'productedit'])->name('admin.productedit');
// Route::get('admin/category', [Backend::class, 'category'])->name('admin.category');
// Route::get('admin/categoryadd', [Backend::class, 'categoryadd'])->name('admin.categoryadd');
// Route::get('admin/categoryedit', [Backend::class, 'categoryedit'])->name('admin.categoryedit');
// Route::get('admin/userlist', [Backend::class, 'userlist'])->name('admin.userlist');
//Route::get('/admin', [AddProduct::class, 'productadd'])->name('admin.productadd');


Route::prefix('admin')->group(function () {
    Route::get('/login', [Backend::class, 'login'])->name('admin.login');
    Route::get('/', [Backend::class, 'home'])->name('admin.home');

    Route::prefix('product')->group(function () {
        Route::get('/', [Backend::class, 'productlist'])->name('admin.productlist');
        Route::get('/add', [Backend::class, 'productadd'])->name('admin.productadd');
        Route::get('/edit/', [Backend::class, 'productedit'])->where('id', '[0-9]+')->name('admin.productedit');
        Route::get('/show/{id}', [Backend::class, 'productshow'])->where('id', '[0-9]+')->name('admin.productshow');
    });
    Route::prefix('category')->group(function () {
        Route::get('/', [Backend::class, 'category'])->name('admin.category');
        Route::get('/add', [Backend::class, 'categoryadd'])->name('admin.categoryadd');
        Route::get('/edit', [Backend::class, 'categoryedit'])->where('id', '[0-9]+')->name('admin.categoryedit');
        Route::get('/show', [Backend::class, 'categoryshow'])->where('id', '[0-9]+')->name('admin.categoryshow');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [Backend::class, 'userlist'])->name('admin.userlist');
        Route::get('/show/{id}', [Backend::class, 'usershow'])->where('id', '[0-9]+')->name('admin.usershow');
    });
    Route::prefix('blog')->group(function () {
        Route::get('/', [Blog::class, 'bloglist'])->name('admin.bloglist');
        Route::get('/add', [Blog::class, 'addblog'])->name('admin.addblog');
        Route::get('/show/{id}', [Blog::class, 'blogshow'])->where('id', '[0-9]+')->name('admin.blogshow');
    });
    Route::prefix('comment')->group(function () {
        Route::get('/', [Comment::class, 'commentlist'])->name('admin.commentlist');
    });
});
Route::fallback(function () {
    dd('paglami bondo koro 😠.....');
});
