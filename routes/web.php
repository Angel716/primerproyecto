<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('acercade', function(){
	return "Esta página es mi primer proyecto.";
});

//Validando que el nombre no contenga números
Route::get('saludo/{nombre?}', function($nombre = "Invitado(a)"){
	return "Hola $nombre, bienvenido(a).";
})->where('nombre', '[A-Za-z]+');

//Dando alias a una ruta para no tener que cambiar el nombre en todos los archivos
Route::get('contacto', ['as' => 'contacto', function(){
	return "Sección de contacto.";
}]);

//