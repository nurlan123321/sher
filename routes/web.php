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



Route::group(['middleware' => 'web'], function(){
	Route::match(['get', 'post'], '/', ['uses' => 'IndexController@execute', 'as' => 'home']);
	Route::get('/page/{alias}', ['uses' => 'PageController@execute', 'as' => 'page']);
	Route::auth();
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	//www.bambuk.kg/admin
	Route::get('/', function(){
		if (view()->exists('admin.index')) {
			$data = ['title' => 'Панель администратора'];
			return view('admin.index', $data);
		}
	});
	//PAGE HOME
	Route::group(['prefix' => 'pages'], function(){
		//www.bambuk.kg/admin/pages
		Route::get('/', ['uses' => 'PagesController@execute', 'as' => 'pages']);

		//www.bambuk.kg/admin/pages/edit
		Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses' => 'PagesEditController@execute', 'as' => 'pagesEdit']);
	});
	//ABOUT
	Route::group(['prefix' => 'about'], function(){
		//www.bambuk.kg/admin/pages
		Route::get('/', ['uses' => 'AboutController@execute', 'as' => 'about']);

		//www.bambuk.kg/admin/pages/edit
		Route::match(['get', 'post', 'delete'], '/edit/{about}', ['uses' => 'AboutEditController@execute', 'as' => 'aboutEdit']);
	});

	//TEAM
	Route::group(['prefix' => 'team'], function(){
		//www.bambuk.kg/admin/pages
		Route::get('/', ['uses' => 'TeamController@execute', 'as' => 'team']);

		//www.bambuk.kg/admin/pages/add
		Route::match(['get', 'post'], '/add', ['uses' => 'TeamAddController@execute', 'as' => 'teamAdd']);

		//www.bambuk.kg/admin/pages/edit
		Route::match(['get', 'post', 'delete'], '/edit/{team}', ['uses' => 'TeamEditController@execute', 'as' => 'teamEdit']);
	});

	//SERVICE
	Route::group(['prefix' => 'service'], function(){
		//www.bambuk.kg/admin/pages
		Route::get('/', ['uses' => 'ServiceController@execute', 'as' => 'service']);

		//www.bambuk.kg/admin/pages/add
		Route::match(['get', 'post'], '/add', ['uses' => 'ServiceAddController@execute', 'as' => 'serviceAdd']);

		//www.bambuk.kg/admin/pages/edit
		Route::match(['get', 'post', 'delete'], '/edit/{service}', ['uses' => 'ServiceEditController@execute', 'as' => 'serviceEdit']);
	});
});
Auth::routes();

Route::get('/home', 'HomeController@index');
