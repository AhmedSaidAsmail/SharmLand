<?php
Route::get('/', ['uses' => 'Web\HomeController@welcome'])->name('home');
Route::get('cities/{city?}/{id}', ['uses' => 'Web\HomeController@citiesShow'])->name('cities.show');
Route::get('/{city}/tour/{tour}/{id}', ['uses' => 'Web\HomeController@tourShow'])->name('tour.show');
Route::post('/add-to-cart/{id}', ['uses' => 'Web\HomeController@addToCart'])->name('add.to.cart');
Route::get('my-cart', ['uses' => 'Web\HomeController@cartShow'])->name('cart');
route::get('/my-cart/remove/{id}', ['uses' => 'Web\HomeController@removeFromCart'])->name('remove.from.cart');


Route::get('/login', 'Auth\LoginController@showLoginForm');
//Auth::routes('/register', 'Auth\RegisterController@showRegistrationForm');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('', function() {
        return view('Admin.Welcome');
    })->name('welcome');
    route::get('/Error505', function() {
        return view('Admin.Error500');
    })->name('Error505');
    //Main Category
    Route::resource('/MainCategory', 'Admin\MainCategoriesController');
    // Category
    Route::resource('Category', 'Admin\CategoriesController');
    //items
    Route::resource('/Items', 'Admin\ItemsController');
    // prices
    Route::resource('/Items/{itemID}/Information', 'Admin\ItemDetailsController');
    Route::post('/Item/{id}/Price/addNew', ['uses' => 'Admin\PricesController@addPrice'])->name('Item.addPrice');
});

Auth::routes();

