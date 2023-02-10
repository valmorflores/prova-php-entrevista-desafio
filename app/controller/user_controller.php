<?php

namespace App\Controller;

require_once 'app/model/users_model.php';
require_once 'app/controller/view_controller.php';

use App\Model\UsersModel;
use App\Controller\ViewController;

class UserController {
 
    private $connection;
    
    public function __construct($conn) {
        $this->connection = $conn;
    }
    
    public function index(){
        $users = new UsersModel();
        $users->setConnection($this->connection);
        $users = $users->getAllUsers();
        $data = array(
            'users' => $users
        );
        $file = 'view_user_data_content.php';
        $viewController = new ViewController();
        $viewController->render($file,$data);
    }
    
}