<?php

namespace App\Controller;

/* Response for view compose  */
class ViewController {

    public function render($file,$data) {
        // Start
        $file_start =  __DIR__ . "/../view/design/html_start.php";
        include_once($file_start);

        $file_body_start =  __DIR__ . "/../view/design/html_body_start.php";
        include_once($file_body_start);

        $file_header =  __DIR__ . "/../view/design/html_header.php";
        include_once($file_header);

        $file_content_start =  __DIR__ . "/../view/design/html_content_start.php";
        include_once($file_content_start);

        // render content
        $this->getContent($file,$data);

        $file_content_end =  __DIR__ . "/../view/design/html_content_end.php";
        include_once($file_content_end);

        $file_body_end =  __DIR__ . "/../view/design/html_body_end.php";
        include_once($file_body_end);
      
        $file_end =  __DIR__ . "/../view/design/html_end.php";
        include_once($file_end);
       
    }

    public function getFile($file){
        
        if (file_exists($file))
           readfile($file);
        else
        {
            var_dump($file);
        }
    }

    function getContent($file,$data) {
        $filepath = __DIR__ . "/../view/" . $file;
        if (file_exists($filepath))        
            include_once($filepath);
        else
        {
           echo 'unknow file: ' . $file;
           var_dump($filepath);
        } 
        return $file;
    }

}