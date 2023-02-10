<?php


namespace App\View;

require_once 'app/controller/view_controller.php';

use App\Controller\ViewController;

class ViewData
{
    public function render($data)
    {
        $file = 'view_user_data_content.php';
        $viewController = new ViewController();
        $viewController->render($file,$data);
    }
}