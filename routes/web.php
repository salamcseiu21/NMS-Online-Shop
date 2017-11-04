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

Route::get('/', 'PageController@index')->name('products');
Route::get('/categories', 'PageController@categories')->name('categories');
Route::get('/full-artisan-list', 'PageController@artisanlist')->name('artisanlist');
Route::get('/about-us', 'PageController@about')->name('aboutus');
Route::get('/contact-us', 'PageController@contact')->name('contuctus');
Route::get('/product-details/{id}', 'PageController@product_details');
Route::get('/merchants-details/{id}', 'PageController@artisandetails');
Route::get('/category/{id}', 'PageController@category_by_id');
Route::get('/shop/{id}', 'PageController@shop_by_marchant_id');
Route::get('/test', 'PageController@test');
Route::get('/mycart', 'CartController@mycart');
Route::get('/addToCart/{id}', 'CartController@addToCart');
Route::post('/addToCart', 'CartController@postAddToCart');
Route::post('/cartItemDelete', 'CartController@cartItemDelete');
Route::post('/cartItemDeleteAll', 'CartController@cartItemDeleteAll');
Route::post('/update-cart', 'CartController@updateCart');

Route::get('/continue-shoping', 'PageController@continueShoping');
Route::get('/product-list', 'PageController@continueShoping');
Route::get('/product-list-by-id/{id}','PageController@productlistbyCategoryId');
Route::get('/product-list-by-category/{id}','PageController@products_by_category_Id');
Route::get('/product-list-by-price/{id}','PageController@productListByPrice');
Route::get('/product-list-by-price-range/{id}','PageController@productListByPriceRange');
Route::get('/checkout', 'CartController@checkout');
Route::get('/getUpazilas/{id}', 'CartController@getUpazilas');
Route::post('/confirmOrder', 'CheckoutController@confirmOrder');
Route::get('/thankyou', 'CheckoutController@thankyou');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/member-log-in', 'HomeController@index');
Route::get('/logout', 'HomeController@logout');


//-----Admin  ----------
Route::get('admin/log-in', 'AdminController@login');
Route::post('admin/admin-home', 'AdminController@postlogin');
Route::get('admin/admin-panel', 'AdminController@welcome');
Route::get('admin/profile', 'AdminController@adminProfile');
Route::get('admin/order-list', 'AdminController@orderDetails');
Route::get('admin/product-list','AdminController@fullProductList');
Route::get('admin/category-list','AdminController@fullCategoryList');
Route::post('admin/productToDelete','AdminController@deleteProductById');
Route::get('admin/admin-product-list-by-id/{id}','AdminController@productlistbyCategoryId');
Route::get('admin/admin-product-list-by-price/{id}','AdminController@productListByPrice');
Route::get('admin/admin-product-list-by-price-range/{id}','AdminController@productListByPriceRange');
Route::get('admin/update-product/{id}','AdminController@updateProductById');
Route::post('admin/update-product','AdminController@postUpdateProductById');
Route::post('admin/categoryToDelete','AdminController@deleteCategoryById');
Route::get('admin/update-category/{id}','AdminController@updateCategoryById');
Route::post('admin/update-category','AdminController@postUpdateCategoryById');
Route::get('admin/messages','AdminController@sendMessage');
Route::post('admin/replay-message','AdminController@replayMessage');
Route::get('admin/send-mail','AdminController@sendMail');
Route::get('admin/product-in-stock','AdminController@productInStock');
Route::get('admin/user-list','AdminController@userList');
//------------Super Admin---------------

Route::get('/super-log-in', 'SuperAdminController@login');
Route::post('/super-admin-home', 'SuperAdminController@postlogin');
Route::get('/super-admin', 'SuperAdminController@welcome');
Route::get('/all-orders', 'SuperAdminController@orderdetails');
Route::get('/logout', 'SuperAdminController@logout');

//-----------product categroy----------
Route::get('admin/add-product-category', 'ProductCategoryController@create');
Route::post('admin/post-add-product-category', 'ProductCategoryController@store');
//-----------product----------
Route::get('/admin/add-product', 'ProductController@create');
Route::post('/admin/post-add-product', 'ProductController@store');
Route::get('/get-all', 'ProductController@index');


//---------------------Profile---------------------

Route::get('/my-account', 'ProfileController@index');
Route::get('/view-profile','ProfileController@index');
Route::get('/my-profile', 'ProfileController@myProfile');
Route::get('/my-orders', 'ProfileController@myOrder');
Route::get('/change-password', 'ProfileController@changePassword');
Route::get('/send-message.user', 'ProfileController@sendMessage');
Route::post('/post-send-message.user', 'ProfileController@postSendMessage');
Route::get('/view-message.user', 'ProfileController@viewMessage');

//------------------------Marchant--------------------
Route::get('/product-list.nm','MarchantController@fullProductList');
Route::get('/add-product.nm', 'MarchantController@addProduct');
Route::post('/post-add-product.nm', 'MarchantController@postAddProduct');
Route::post('/product-To-Delete.nm','MarchantController@deleteProductById');
Route::get('/update-product.nm/{id}','MarchantController@updateProductById');
Route::post('/update-product.nm','MarchantController@postUpdateProductById');
Route::get('/order-details.nm','MarchantController@orderDetails');
Route::get('/add-sub-category.nm','MarchantController@addProductSubCategory');
Route::post('/post-add-sub-category.nm', 'MarchantController@postAddProductSubCategory');
Route::get('/sub-category-list.nm','MarchantController@fullSubCategoryList');

//---------------Social Login Route---------------
 Route::get('auth/fb', 'Auth\AuthController@redirectToProvider');
 Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
 Route::get('auth/google', 'Auth\RegisterController@redirectToProvider');
 Route::get('auth/google/callback', 'Auth\RegisterController@handleProviderCallback');
 Route::get('auth/github', 'Auth\RegisterController@redirectToGithub');
 Route::get('auth/github/callback', 'Auth\RegisterController@handleGithubCallback');
 
 Route::get('auth/twitter', 'Auth\RegisterController@redirectToTwitter');
 Route::get('auth/twitter/callback', 'Auth\RegisterController@handleTwitterCallback');

Route::get('importExport', 'ImportExportController@importExport');
Route::get('downloadExcel/{type}', 'ImportExportController@downloadExcel');
Route::post('importExcel', 'ImportExportController@importExcel');