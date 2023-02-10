<?php

namespace App\Controller;

require_once 'app/model/users_model.php';
require_once 'app/controller/view_controller.php';

use App\Model\UsersModel;
use App\Controller\ViewController;

class UserController {
 
    private $connection;
    private $user_model;
    private $view;
    
    public function __construct($conn) {
        $this->connection = $conn;
        $this->user_model = new UsersModel();
        $this->user_model->setConnection($this->connection);
        $this->view = new ViewController();
    }
    
    public function index(){
        $users = $this->user_model->getAllUsers();
        $data = array(
            'users' => $users
        );
        $this->view->render('view_user_data_content.php',$data);
    }
    
    public function edit(int $id){
        $users = $this->user_model->getById($id);
        $data = array('users' => $users );
        $this->view->render('view_user_edit.php',$data);
    }

    public function delete(int $id){
        $users = $this->user_model->getById($id);
        $data = array('users' => $users );
        $this->view->render('view_user_delete.php',$data);
    }

    public function post($id) {
        $id = $_GET["id"];
        $data = 
           array( 'name' => htmlspecialchars($_GET["name"]),
                  'email' => htmlspecialchars($_GET["email"]),
           );
        $result = $this->user_model->post($id,$data);
        $this->index();
    }

}