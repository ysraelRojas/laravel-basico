<?php

Route::get('/', function () {
	return 'Home';
});

Route::get('/usuarios', function () {
	return 'Usuarios';
});

Route::get('/usuarios/{id}', function ($id) {
	return "Mostrando el detalle del usuario: {$id}";
})->where('id', '\d+');

Route::get('/usuarios/nuevo', function () {
	return 'Nuevo usuario';
});

Route::get('/usuarios/{name}/{nickname?}', function ($name, $nickname = null) {

	$name = ucfirst($name);

	if ($nickname) {
		return "El usuario tiene el nombre {$name}, y el nick {$nickname}";
	}else{
		return "El usuario tiene el nombre {$name}";
	}
	
});
