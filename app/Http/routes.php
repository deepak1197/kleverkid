<?php
Route::get('test',function(){
	return view('pages.test');
});
Route::get('/',[
	'as'   => 'about',
	'uses' => 'pagesController@getIndex'

]);

Route::get('about',[
	'as'   => 'about',
	'uses' => 'pagesController@getAbout'

]);

Route::get('contact',[
	'as'   => 'contact',
	'uses' => 'pagesController@getContact'	
]);


Route::get('academy/add',function(){
	return View::make('addacademy');
});

Route::post('academy/add',function(){
	return View::make('addacademy');
});

Route::resource('product','ProductController');

Route::resource('academy','AcademyController');

Route::get('explore',[
	'as'   => 'explore',
	'uses' => 'AcademyController@index'	
]);


