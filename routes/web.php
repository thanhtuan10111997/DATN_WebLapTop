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
use Illuminate\Http\Request;

// route for auth
Auth::routes();

// route for site
Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'HomeController@index')->name('site.home.index');
    Route::get('category/{id}/index.html', 'CategoryController@index')
        ->name('site.category.index');
    Route::get('index.html', 'HomeController@index')->name('site.home.index');
    Route::get('search', 'HomeController@search')->name('site.home.search');
    Route::get('multiple/search', 'HomeController@searchMul')->name('site.home.search_mul');
    Route::get('seggest/{id?}', 'HomeController@seggest')->name('site.home.seggest');
    Route::get('product/{id}/view.html', 'ProductController@view')->name('product.view');
    Route::post('check-login.html', 'HomeController@checkLogIn')->name('site.home.check_login');
    Route::post('order/add.html', 'OrderController@add')->name('site.order.add');
    Route::get('order/success.html', 'OrderController@success')->name('site.order.success');
    Route::post('order/check-order.html', 'OrderController@checkOrder')->name('site.order.check');
    Route::group([], function () {
        Route::get('customer/login.html', 'CustomerController@logIn')
            ->name('site.customer.login');
        Route::post('customer/login.html', 'CustomerController@postLogIn');
        Route::get('customer/reset.html', 'CustomerController@reset')
            ->name('site.customer.reset');
        Route::post('customer/reset.html', 'CustomerController@handleReset')
            ->name('site.customer.handle_reset');
        Route::post('customer/check-login.html', 'CustomerController@checkLogIn')
            ->name('site.customer.check_login');
        Route::post('customer/review.html', 'CustomerController@review')
            ->name('site.customer.review');
        Route::get('customer/logout.html', 'CustomerController@logOut')
            ->name('site.customer.logout');
        Route::get('customer/regester.html', 'CustomerController@regester')
            ->name('site.customer.regester')->middleware('guest');
        Route::get('customer/order-history.html', 'CustomerController@history')
            ->name('site.customer.history');
        Route::post('customer/order-detail-history.html', 'CustomerController@historyDetail')
            ->name('site.customer.history_detail');
        Route::resource('customer', 'CustomerController', ['as' => 'site', 'except' => 'destroy']);
    });
    Route::group(['prefix' => 'contact'], function () {
        Route::get('index.html', 'ContactController@index')->name('site.contact.index');
        Route::post('index.html', 'ContactController@store')->name('site.contact.create');
    });
    Route::get('about/index.html', 'ContactController@about')->name('site.about.index');
    Route::group(['prefix' => 'news'], function () {
        Route::get('index.html', 'NewsController@index')->name('site.news.index');
        Route::get('{id}/chi-tiet.html', 'NewsController@view')->name('site.news.view');
        Route::get('search', 'NewsController@search')->name('site.news.search');
    });
    Route::group(['prefix' => 'comment'], function () {
        Route::post('/store', 'CommentController@store')->name('comment.add');
        Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');
    });
    Route::group(['prefix' => 'cart'], function () {
        Route::post('add-to-compare.html', 'CartController@addToCompare')
            ->name('site.cart.add_to_compare');
        Route::post('delete-product-compare.html', 'CartController@deleteProductCompare')
            ->name('site.cart.delete_product_compare');
        Route::get('view-to-wishlist.html', 'CartController@viewWishList')->name('site.cart.view_to_wishlist')->middleware('login_site');
        Route::post('add-to-wishlist.html', 'CartController@addToWishList')
            ->name('site.cart.add_to_wishlist');
        Route::post('delete-product-wishlist.html', 'CartController@removeWishList')
            ->name('site.cart.delete_product_wishlist');
        Route::get('view-to-compare.html', 'CartController@viewToCompare')->name('site.cart.view_to_compare');
        Route::get('view.html', 'CartController@index')->name('site.cart.view')
            ->middleware('login_site');
        Route::get('checkout.html', 'CartController@checkOut')->name('site.cart.checkout')
            ->middleware('login_site');
        Route::post('add.html', 'CartController@add')->name('site.cart.add');
        Route::post('add-to-cart.html', 'CartController@addToCart')
            ->name('site.cart.add_to_cart');
        Route::post('delete.html', 'CartController@delete')->name('site.cart.delete');
        Route::post('update.html', 'CartController@update')->name('site.cart.update')
            ->middleware('login_site');
    });
});

// route for admin
Route::group(['prefix' => 'admin', 'middleware' => 'admin_login', 'namespace' => 'Admin'], function () {
    Route::get('home/index.html', 'HomeController@index')->name('home.index');
    Route::get('logout.html', 'AdminController@getLogout')->name('admin.logout');
    Route::get('{id}/notification.html', 'NotificationController@view')->name('notif.view');
    Route::get('notification.html', 'NotificationController@viewAll')->name('notif.view_all');
    Route::group(['prefix' => 'admin'], function () {
        Route::get('index.html', 'AdminController@index')->name('admin.index');
        Route::get('{id}/edit.html', 'AdminController@edit')->name('admin.edit');
        Route::post('{id}/update.html', 'AdminController@update')->name('admin.update');
    });

    Route::group(['prefix' => 'order'], function () {
        Route::post('export-to-excel.html', 'OrderController@exportToExcel')
            ->name('order.export_to_excel');
        Route::get('index.html', 'OrderController@index')->name('order.index');
        Route::get('{id}/chi-tiet.html', 'OrderController@detail')->name('order.detail');
        Route::post('delete.html', 'OrderController@delete')->name('order.delete');
        Route::post('confirm-order.html', 'OrderController@confirmOrder')
            ->name('order.confirm_order');
    });

    Route::group([], function () {
        Route::resource('customer', 'CustomerController', ['except' => 'destroy']);
        Route::post('customer/delete.html', 'CustomerController@delete')->name('customer.delete');
        Route::post('customer/deleteMulCus.html', 'CustomerController@delMulCustomer')
            ->name('customer.delMulCus');
        Route::get('customer-restore.html', 'CustomerController@restore')
            ->name('customer.restore');
    });
    
    Route::group([], function () {
        Route::resource('news', 'NewsController', ['except' => 'destroy']);
        Route::post('news/{id}/delete.html', 'NewsController@delete')->name('news.delete');
        Route::post('news/deleteMulNews.html', 'NewsController@delMulNews')
            ->name('news.delMulNews');
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::get('index.html', 'ContactController@index')->name('contact.index');
        Route::post('delete.html', 'ContactController@delete')->name('contact.delete');
        Route::post('deleteMulCon.html', 'ContactController@delMulCon')
            ->name('contact.delMulCon');
    });

    Route::group(['prefix' => 'comment'], function () {
        Route::get('index.html', 'CommentController@index')->name('comment.index');
        Route::get('{id}/chi-tiet.html', 'CommentController@view')->name('comment.view');
        Route::post('delete-reply.html', 'CommentController@deleteReply')->name('comment.delMulRep');
        Route::post('delete-comment.html', 'CommentController@delete')->name('comment.delMulCom');
    });

    Route::group([], function () {
        Route::get('delete.html/{id}', 'SlideController@delete')->name('slide.delete');
        Route::resource('slide', 'SlideController', ['except' => ['show', 'destroy']]);
    });

    Route::group([], function () {
        Route::resource('category', 'CategoryController', ['except' => 'destroy']);
        Route::post('category/delete.html', 'CategoryController@delete')
            ->name('category.delete');
        Route::post('category/checkChild.html', 'CategoryController@checkChild')
            ->name('category.checkChild');
        Route::get('category-restore.html', 'CategoryController@restore')
            ->name('category.restore');
    });

    Route::group([], function () {
        Route::resource('product', 'ProductController', ['except' => ['show', 'destroy']]);
        Route::post('delete.html', 'ProductController@delete')->name('product.delete');
        Route::post('deleteMulProd.html', 'ProductController@delMulProd')
            ->name('product.delMulProd');
        Route::get('product-restore.html', 'ProductController@restore')->name('product.restore');
    });
});
Route::get('admin/login.html', 'Admin\AdminController@getLogin')->name('admin.login');
Route::post('admin/login.html', 'Admin\AdminController@postLogin');

// route for anything unmatch
Route::any('{all}', function(Request $request) {
    if (strpos($request->url(), 'admin') > 0) {
        return view('admin.404');
    }

    return view('site.404');
})->where('all', '.*');
