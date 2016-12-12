<?php
Route::get('/', ['uses' => 'Web\HomeController@welcome'])->name('home');
Route::get('cities/{city?}/{id}', ['uses' => 'Web\HomeController@citiesShow'])->name('cities.show');
Route::get('/{city}/tour/{tour}/{id}', ['uses' => 'Web\HomeController@tourShow'])->name('tour.show');
Route::post('/add-to-cart/{id}', ['uses' => 'Web\HomeController@addToCart'])->name('add.to.cart');
Route::get('my-cart',['uses'=>'Web\HomeController@cartShow'])->name('cart');
route::get('/my-cart/remove/{id}',['uses'=>'Web\HomeController@removeFromCart'])->name('remove.from.cart');


Route::get('/login', 'Auth\LoginController@showLoginForm');
Auth::routes('/register', 'Auth\RegisterController@showRegistrationForm');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('', function() {
        return view('Admin.Welcome');
    })->name('welcome');
    Route::get('/MainCategory', ['uses' => 'Admin\BasicsortController@show'])->name("showMainCategory");
    Route::post('/MainCategory/AddNew', ['before' => 'csrf', 'uses' => 'Admin\BasicsortController@store'])->name('addNewMainCategory');
    Route::get('/MainCatagory/Update/{id}', ['uses' => 'Admin\BasicsortController@update'])->name('updateMainCategory');
    Route::put('/MainCatagory/Edit/{id}', ['uses' => 'Admin\BasicsortController@edit'])->name('editMainCategory');
    Route::get('/MainCategory/Delete/{id}', ['uses' => 'Admin\BasicsortController@delete'])->name('deleteMainCategory');
    // Category 
    Route::get('/Category', ['uses' => 'Admin\SortController@show'])->name('category');
    Route::post('/Category/AddNew', ['uses' => 'Admin\SortController@store'])->name('addNewCategory');
    Route::get('/Catagory/Update/{id}', ['uses' => 'Admin\SortController@update'])->name('updateCategory');
    Route::put('/Catagory/Edit/{id}', ['uses' => 'Admin\SortController@edit'])->name('editCategory');
    Route::get('/Category/Delete/{id}', ['uses' => 'Admin\SortController@delete'])->name('deleteCategory');
    //items
    Route::get('/Items', ['uses' => 'Admin\ItemsController@show'])->name('Items');
    Route::post('/Items/AddNew', ['uses' => 'Admin\ItemsController@store'])->name('addNewItem');
    Route::get('/Items/Update/{id}', ['uses' => 'Admin\ItemsController@update'])->name('updateItem');
    Route::put('/Items/Edit/{id}', ['uses' => 'Admin\ItemsController@edit'])->name('editItems');
    Route::get('/Items/Delete/{id}', ['uses' => 'Admin\ItemsController@delete'])->name('deleteItem');
    // prices 
    Route::post('/Item/{id}/Price/addNew', ['uses' => 'Admin\PricesController@addPrice'])->name('Item.addPrice');
});

Auth::routes();

