<?php
use App\controllers\AppMainController;
use App\controllers\AuthController;
use App\core\AppStore;

require_once __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();



$dbConfig =[
	'db' => [
		'dsn' => $_ENV['DB_DSN'],
		'user' => $_ENV['DB_USER'],
		'password' => $_ENV['DB_PASSWORD'],
	]
];


$store = new AppStore(dirname(__DIR__),$dbConfig);

$store->router->get('/', [AppMainController::class, 'home']);
$store->router->get('/index', [AppMainController::class, 'home']);
$store->router->get('/index.php', [AppMainController::class, 'home']);

$store->router->get('/contact', [AppMainController::class, 'contact']);
$store->router->post('/contact', [AppMainController::class, 'handleContact']);

$store->router->get('/login', [AuthController::class, 'login']);
$store->router->post('/login', [AuthController::class, 'login']);
$store->router->get('/register', [AuthController::class, 'register']);
$store->router->post('/register', [AuthController::class, 'register']);


$store->run();
