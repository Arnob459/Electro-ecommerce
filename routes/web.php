<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;




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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PagesController::class, 'index'])->name('edit.frontend');

Route::get('admin/dashboard',[PagesController::class,'Dashboard'])->name('admin.dashboard');
//Promotion
Route::get('promotion/create',[PagesController::class,'PromotionCreate'])->name('promotion.create');
Route::post('promotion/create',[PagesController::class,'PromotionStore'])->name('promotion.store');
Route::get('promotion/list',[PagesController::class,'PromotionList'])->name('promotion.list');
Route::get('promotion/edit/{id}',[PagesController::class,'PromotionEdit'])->name('promotion.edit');
Route::post('promotion/update/{id}',[PagesController::class,'PromotionUpdate'])->name('promotion.update');
Route::get('promotion/delete/{id}',[PagesController::class,'PromotionDelete'])->name('promotion.delete');

//Slider
Route::get('slider/create',[PagesController::class,'SliderCreate'])->name('slider.create');
Route::post('slider/create',[PagesController::class,'SliderStore'])->name('slider.store');
Route::get('slider/list',[PagesController::class,'SliderList'])->name('slider.list');
Route::get('slider/edit/{id}',[PagesController::class,'SliderEdit'])->name('slider.edit');
Route::post('slider/update/{id}',[PagesController::class,'SliderUpdate'])->name('slider.update');
Route::get('slider/delete/{id}',[PagesController::class,'SliderDelete'])->name('slider.delete');

//Genaral
Route::get('/about/view',[PagesController::class,'AboutView'])->name('about.view');
Route::post('/about/view',[PagesController::class,'AboutUpdate'])->name('about.update');

//Header
Route::get('/header/view',[PagesController::class,'HeaderView'])->name('header.view');
Route::post('/header/view',[PagesController::class,'HeaderUpdate'])->name('header.update');

//Footer
Route::get('/about/view',[PagesController::class,'FooterView'])->name('about.view');
Route::post('/about/view',[PagesController::class,'FooterUpdate'])->name('about.update');

//category
Route::controller(CategoryController::class)->group(function(){
    Route::get('all-category', 'AllCategory')->name('allcategory');
    Route::get('add-category', 'AddCategory')->name('addcategory');
    Route::post('store-category', 'StoreCategory')->name('storecategory');
    Route::get('edit-category/{id}','EditCategory')->name('editcategory');
    Route::post('update-category', 'UpdateCategory')->name('updatecategory');
    Route::get('delete-category/{id}','DdeleteCategory')->name('deletecategory');

});

//Product
Route::controller(ProductController::class)->group(function(){
    Route::get('all-products', 'AllProduct')->name('allproducts');
    Route::get('add-product', 'AddProduct')->name('addproduct');
    Route::post('store-product', 'StoreProduct')->name('storeproduct');
    Route::get('edit-product-image/{id}','EditProductImg')->name('editproductimg');
    Route::post('update-product-image', 'UpdateProductImage')->name('updateproductimage');
    Route::get('edit-product/{id}', 'EditProduct')->name('editproduct');
    Route::post('update-product', 'UpdateProduct')->name('updateproduct');
    Route::get('delete-product/{id}','DeleteProduct')->name('deleteproduct');


});


