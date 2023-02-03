<?php
namespace App\routes;
require_once '../core/Helper.php';
require_once '../vendor/autoload.php';

use Bramus\Router\Router;
use App\controllers\ContactFormController;

$router = new Router();

$router->get('/', function() {
    require_once '../views/shared/header.php';
    require_once '../views/home/home.php';
    require_once '../views/shared/footer.php';
});

$router->run();
