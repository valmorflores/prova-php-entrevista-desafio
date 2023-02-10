<?php

namespace App;

require_once 'app/controller/connection.php';
require_once 'app/controller/user_controller.php';

use App\Controller\Connection;
use App\Controller\UserController;

$app = new App();
$app->run();

class App {
    
    public function run(){
        $connection = new Connection();
        $userController = new UserController($connection);
        $userController->index();
    }
    
}