<?php

namespace App;

require_once 'app/controller/connection.php';
require_once 'app/controller/user_controller.php';

use App\Controller\Connection;
use App\Controller\UserController;

$uri = explode( '/', $_SERVER['REQUEST_URI'] );

// Base
$method = '';
$module = '';
$params = '';

// Manual routes, 
// todo: valmor - build a route manager in a Class called Route
if (isset($uri[1])){
    if ($uri[1]=='user'){
        $module = 'user';
    }
    $method = 'index';
    if (isset($uri[2])){
        $method = $uri[2];
    }
    if (isset($uri[3])){
       $params = $uri[3];
    }
}
 

$app = new App($module, $method, $params);
$app->run();

class App {

    private $app_module;
    private $app_method;
    private $app_params;

    public function __construct($module, $method, $params)
    {
        $this->app_module = $module;
        $this->app_method = $method;
        $this->app_params = $params;
    } 
    
    public function run(){
        $connection = new Connection();

        if ($this->app_module=='user'){
            $userController = new UserController($connection);
            if ($this->app_method=='edit'){
                $userController->edit($this->app_params);
            } else if ($this->app_method=='del'){
                $userController->delete_confirm($this->app_params);
            } else if ($this->app_method=='delete'){
                $userController->delete($this->app_params);
            } else if ($this->app_method=='post'){
                $userController->post($this->app_params);
            } else if ($this->app_method=='add'){
                $userController->add($this->app_params);
            } else if ($this->app_method=='put'){
                $userController->put();
            } else {
                $userController->index();
            }
        }
        else 
        {
            // Here: default module and method
            $userController = new UserController($connection);
            $userController->index();
        }

    }
    
}