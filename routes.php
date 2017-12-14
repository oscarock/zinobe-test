<?php

$route->get('/login',function(){
	$loader = new Twig_Loader_Filesystem('app\views');
	$twig = new Twig_Environment($loader);
	echo $twig->render('login.html');
});

$route->get('/registrarse',function(){
	$loader = new Twig_Loader_Filesystem('app\views');
	$twig = new Twig_Environment($loader);
	echo $twig->render('registro.html');
});

$route->get('/ingreso',function(){
	$loader = new Twig_Loader_Filesystem('app\views');
	$twig = new Twig_Environment($loader);
	session_start();
	$email_sesion =  $_SESSION["email"];
	$estado_sesion = $_SESSION["autenticado"];
	$twig->addGlobal('email_sesion', $email_sesion);
	$twig->addGlobal('estado_sesion', $estado_sesion);
	echo $twig->render('ingreso.html');
});

$route->get('/error',function(){
	$loader = new Twig_Loader_Filesystem('app\views');
	$twig = new Twig_Environment($loader);
	echo $twig->render('error.html');
});

$route->get('/salir',function(){
	session_start();
	session_unset();
	session_destroy();
	header('Location: login');
});

$route->post('/registro', 'Controllers\UserController@registrar_usuario');

$route->post('/login', 'Controllers\UserController@login_usuario');

$route->post('/buscar', 'Controllers\UserController@consulta_usuarios');

$route->end();