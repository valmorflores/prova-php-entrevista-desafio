<?php

namespace App\Controller;

require_once 'app/model/users_model.php';
require_once 'app/controller/view_controller.php';

use App\Model\UsersModel;
use App\Controller\ViewController;

class UserController {
 
    private $connection;
    private $user_model;
    
    public function __construct($conn) {
        $this->connection = $conn;
        $this->user_model = new UsersModel();
        $this->user_model->setConnection($this->connection);
    }
    
    public function index(){
        $users = $this->user_model->getAllUsers();
        $data = array(
            'users' => $users
        );
        $viewController = new ViewController();
        $viewController->render('view_user_data_content.php',$data);
    }
    
    public function edit(int $id){
        $users = $this->user_model->getById($id);
        $data = array('users' => $users );
        $viewController = new ViewController();
        $viewController->render('view_edit_user.php',$data);
    }


}