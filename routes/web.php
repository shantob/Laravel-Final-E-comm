<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\forntend\HomeController as Forntend;
use App\Http\Controllers\backend\HomeController as Backend;
use App\Http\Controllers\backend\BlogController as Blog;
use App\Http\Controllers\backend\CommentController as Comment;
use App\Http\Controllers\backend\ProductController as Product;
use App\Http\Controllers\backend\CategoryController as Category;
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
        Route::get('/', [Product::class, 'index'])->name('admin.product.index');
        Route::get('/add', [Product::class, 'create'])->name('admin.product.create');
        Route::post('/store', [Product::class, 'store'])->name('admin.product.store');
        Route::get('/edit/{id}', [Product::class, 'edit'])->where('id', '[0-9]+')->name('admin.product.edit');
        Route::patch('/update/{id}', [Product::class, 'update'])->name('admin.product.update');
        Route::get('/show/{id}', [Product::class, 'show'])->where('id', '[0-9]+')->name('admin.product.show');
        Route::get('/destroy/{id}', [Product::class, 'destroy'])->where('id', '[0-9]+')->name('admin.product.delete');
    });

    Route::prefix('category')->group(function () {
        Route::get('/', [Category::class, 'index'])->name('admin.category');
        Route::get('/add', [Category::class, 'create'])->name('admin.category.create');
        Route::post('/store', [Category::class, 'store'])->name('admin.category.store');
        Route::get('/edit/{id}', [Category::class, 'edit'])->where('id', '[0-9]+')->name('admin.category.edit');
        Route::patch('/update/{id}', [Category::class, 'update'])->where('id', '[0-9]+')->name('admin.category.update');
        Route::get('/show/{id}', [Category::class, 'show'])->where('id', '[0-9]+')->name('admin.category.show');
        Route::get('/delete/{id}', [Category::class, 'destroy'])->name('admin.category.destroy');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [Backend::class, 'userlist'])->name('admin.userlist');
        Route::get('/show/{id}', [Backend::class, 'usershow'])->where('id', '[0-9]+')->name('admin.usershow');
    });
    Route::prefix('blog')->group(function () {
        Route::get('/', [Blog::class, 'index'])->name('admin.bloglist');
        Route::post('/Store', [Blog::class, 'store'])->name('admin.blogStore');
        Route::get('/add', [Blog::class, 'create'])->name('admin.addblog');
        Route::get('/show/{id}', [Blog::class, 'show'])->where('id', '[0-9]+')->name('admin.blogshow');
        Route::get('/delete/{id}', [Blog::class, 'destroy'])->where('id', '[0-9]+')->name('admin.blogdelete');
     
   
    });
    Route::prefix('comment')->group(function () {
        Route::get('/', [Comment::class, 'commentlist'])->name('admin.commentlist');
        Route::get('/delete/{id}', [Comment::class, 'commenttdelete'])->name('admin.commenttdelete');
    });
});
Route::fallback(function () {
    dd('paglami bondo koro 😠..... faltu kotha');
});
