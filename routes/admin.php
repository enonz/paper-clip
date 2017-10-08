<?php

Route::group(['prefix'=>'admin/master/about_us','namespace'=>'Admin\Master'],function($router){
	$router->get('',[
		'as'	=>	'admin.master.about-us.index',
		'uses'	=>	'AboutUsController@index'
	]);
});
?>