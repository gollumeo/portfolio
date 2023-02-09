<?php
namespace App\routes;
require_once __DIR__ . '/../core/Helper.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Bramus\Router\Router;
use App\controllers\ContactFormController;

$router = new Router();

$router->get('/', function() {
    require_once __DIR__ . '/../views/shared/header.php';
    require_once __DIR__ . '/../views/home/home.php';
    require_once __DIR__ . '/../views/shared/footer.php';
});

$router->run();
