<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SaleController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ProductviewController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\ProductdetailController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategorytypeController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\EmployeeController;
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

    Route::group(['prefix'=>''],function(){
        Route::get('/',[WelcomeController::class,'index'])->name('welcome');
        Route::get('/autocomplete-search', [WelcomeController::class, 'autocompleteSearch'])->name('autocomplete-search');
        Route::get('/search', [WelcomeController::class, 'search'])->name('search');
    });

Auth::routes();

Route::group(['prefix' => 'home', 'middleware' => 'auth', 'namespace' => 'Admin'], function () {
    Route::get('/', [HomeController::class,'index'])->name('home');
});



Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


    Route::group(['prefix'=>'department'],function(){
        Route::get('/',[DepartmentController::class,'index'])->name('department.index');
        Route::get('/create',[DepartmentController::class,'create'])->name('department.create');
        Route::post('/store',[DepartmentController::class,'store'])->name('department.store');

    Route::group(['prefix'=>'{department}'],function(){
        Route::get('/show',[DepartmentController::class,'show'])->name('department.show');
        Route::get('/edit',[DepartmentController::class,'edit'])->name('department.edit');
        Route::patch('/update',[DepartmentController::class,'update'])->name('department.update');
        Route::get('/delete',[DepartmentController::class,'delete'])->name('department.delete');
        Route::delete('/destroy',[DepartmentController::class,'destroy'])->name('department.destroy');
    });
});


    Route::group(['prefix'=>'category'],function(){
        Route::get('/',[CategoryController::class,'index'])->name('category.index');
        Route::get('/create',[CategoryController::class,'create'])->name('category.create');
        Route::post('/store',[CategoryController::class,'store'])->name('category.store');
        Route::get('ajaxRequest3',[CategoryController::class,'dropdown3'])->name('get.category3');

    Route::group(['prefix'=>'{category}'],function(){
        Route::get('/show',[CategoryController::class,'show'])->name('category.show');
        Route::get('/edit',[CategoryController::class,'edit'])->name('category.edit');
        Route::patch('/update',[CategoryController::class,'update'])->name('category.update');
        Route::get('/delete',[CategoryController::class,'delete'])->name('category.delete');
        Route::delete('/destroy',[CategoryController::class,'destroy'])->name('category.destroy');
    });  
    });;
   
    Route::group(['prefix'=>'product'],function(){
        Route::get('/index',[ProductController::class,'index'])->name('product.index');
        Route::get('/create',[ProductController::class,'create'])->name('product.create');
        Route::post('/store',[ProductController::class,'store'])->name('product.store');
        Route::get('ajaxRequest',[ProductController::class,'dropdown'])->name('get.category');
        Route::get('ajaxRequest1',[ProductController::class,'dropdown1'])->name('get.category1');
        Route::get('ajaxRequest2',[ProductController::class,'dropdown2'])->name('get.category2');
        

    Route::group(['prefix'=>'{product}'],function(){
        Route::get('/show',[ProductController::Class,'show'])->name('product.show');
        Route::get('/edit',[ProductController::class,'edit'])->name('product.edit');
        Route::patch('/update',[ProductController::class,'update'])->name('product.update');
        Route::get('/delete',[ProductController::class,'delete'])->name('product.delete');
        Route::delete('/destroy',[ProductController::class,'destroy'])->name('product.destroy');
    });
    });

    

    Route::group(['prefix'=>'productview'],function(){
        Route::get('index',[ProductviewController::class,'index'])->name('productview.index');
        Route::get('/search',[ProductviewController::class,'search'])->name('productview.search');
        Route::post('/filter',[ProductviewController::class,'filter'])->name('productview.filter');

        Route::group(['prefix'=>'{product}'],function(){
        Route::get('/show',[ProductviewController::class,'show'])->name('productview.show');
    
    });
});
    Route::group(['prefix'=>'carts/{product}'],function(){
        Route::get('cart', [CartController::class, 'cartList'])->name('cart.index');
        Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
        Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
        Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
        Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
    });
   

    Route::group(['prefix'=>'about'],function(){
        Route::get('/',[AboutController::class,'index'])->name('about.index');
        Route::get('/index1',[AboutController::class,'index1'])->name('about.index1');
        Route::get('/create',[AboutController::class,'create'])->name('about.create');
        Route::post('/store',[AboutController::class,'store'])->name('about.store');
        Route::get('/contact',[AboutController::class,'contact'])->name('about.contact');
        Route::get('/help',[AboutController::class,'help'])->name('about.help');
        Route::get('/policy',[AboutController::class,'policy'])->name('about.policy');
        Route::get('/faq',[AboutController::class,'faq'])->name('about.faq');
        Route::get('/terms',[AboutController::class,'terms'])->name('about.terms');
        Route::get('/event',[AboutController::class,'event'])->name('about.event');

    Route::group(['prefix'=>'{about}'],function(){
        Route::get('/show',[AboutController::class,'show'])->name('about.show');
        Route::get('/delete',[AboutController::class,'delete'])->name('about.delete');
        Route::delete('/destroy',[AboutController::class,'destroy'])->name('about.destroy');
    });
    });

    Route::group(['prefix'=>'productdetail'],function(){
        Route::get('/',[ProductdetailController::class,'index'])->name('productdetail.index');
    });

  
   


Route::group(['prefix'=>'user'],function(){
    Route::get('/',[UserController::class,'index'])->name('user.index');
    Route::get('/cindex/{customer}',[UserController::class,'cindex'])->name('user.cindex');

Route::group(['prefix'=>'{customer}'],function(){
    Route::get('/',[UserController::class,'edit'])->name('user.edit');
    Route::get('/update',[UserController::class,'update'])->name('user.update'); 
    Route::get('/show',[UserController::class,'show'])->name('user.show');
    Route::get('/delete',[UserController::class,'delete'])->name('user.delete');
    Route::delete('/destroy',[UserController::class,'destroy'])->name('user.destroy');
});
});

Route::group(['prefix'=>'categorytype'],function(){
    Route::get('/',[CategorytypeController::class,'index'])->name('categorytype.index');
    Route::get('/create',[CategorytypeController::class,'create'])->name('categorytype.create');
    Route::post('/store',[CategorytypeController::class,'store'])->name('categorytype.store');
    
    
Route::group(['prefix'=>'{categorytype}'],function(){
    
    Route::get('/show',[CategorytypeController::class,'show'])->name('categorytype.show');
    Route::get('/edit',[CategorytypeController::class,'edit'])->name('categorytype.edit');
    Route::patch('/update',[CategorytypeController::class,'update'])->name('categorytype.update');
    Route::get('/delete',[CategorytypeController::class,'delete'])->name('categorytype.delete');
    Route::delete('/destroy',[CategorytypeController::class,'destroy'])->name('categorytype.destroy');
    });  
  
});

Route::group(['prefix'=>'photo'],function(){
    Route::get('/',[PhotoController::class,'index'])->name('photo.index');
    Route::get('/create',[PhotoController::class,'create'])->name('photo.create');
    Route::post('/store',[PhotoController::class,'store'])->name('photo.store');

Route::group(['prefix'=>'{photo}'],function(){
    Route::get('/edit',[PhotoController::class,'edit'])->name('photo.edit');
    Route::patch('/update',[PhotoController::class,'update'])->name('photo.update');
    Route::get('/delete',[PhotoController::class,'delete'])->name('photo.delete');
    Route::delete('/destroy',[PhotoController::class,'destroy'])->name('photo.destroy');

});
});


Route::group(['prefix'=>'size'],function(){
    Route::get('/',[SizeController::class,'index'])->name('size.index');
    Route::get('/create',[SizeController::class,'create'])->name('size.create');
    Route::post('/store',[SizeController::class,'store'])->name('size.store');

    Route::group(['prefix'=>'{size}'],function(){
    Route::get('/delete',[SizeController::class,'delete'])->name('size.delete');
    Route::delete('/destroy',[SizeController::class,'destroy'])->name('size.destroy');
    });

});
Route::group(['prefix'=>'employee'],function(){
    Route::get('/',[EmployeeController::class,'index'])->name('employee.index');
    Route::get('/create',[EmployeeController::class,'create'])->name('employee.create');
    Route::post('/store',[EmployeeController::class,'store'])->name('employee.store');

Route::group(['prefix'=>'{employee}'],function(){
    Route::get('/show',[EmployeeController::class,'show'])->name('employee.show');
    Route::get('/delete',[EmployeeController::class,'delete'])->name('employee.delete');
    Route::get('/edit',[EmployeeController::class,'edit'])->name('employee.edit');
    Route::patch('/update',[EmployeeController::class,'update'])->name('employee.update');
    Route::delete('/destroy',[EmployeeController::class,'destroy'])->name('employee.destroy');
    
});
});

Route::group(['prefix'=>'jobs'],function(){
    Route::get('/',[JobController::class,'index'])->name('job.index');
    Route::get('/cindex',[JobController::class,'cindex'])->name('job.cindex');
    Route::get('/create',[JobController::class,'create'])->name('job.create');
    Route::post('/store',[JobController::class,'store'])->name('job.store');

Route::group(['prefix'=>'{job}'],function(){
    Route::get('/delete',[JobController::class,'delete'])->name('job.delete');
    Route::delete('/destroy',[JobController::class,'destroy'])->name('job.destroy');
});

});















  
    