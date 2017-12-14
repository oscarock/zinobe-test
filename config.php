<?php

/*configuracion rutas*/
define('DS', DIRECTORY_SEPARATOR, true);
define('BASE_PATH', __DIR__ . DS, TRUE);

require BASE_PATH.'vendor/autoload.php';

$app            = System\App::instance();
$app->request   = System\Request::instance();
$app->route     = System\Route::instance($app->request);

$route          = $app->route;
/*fin configuracion rutas*/


/*configuracion acceso base de datos*/
use Illuminate\Database\Capsule\Manager as Capsule;

  	$capsule = new Capsule;
    $capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'zinobe_bd',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    ]);
    
    $capsule->bootEloquent();
/*fin configuracion acceso base de datos*/