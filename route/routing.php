<?php
    $host = explode('?', $_SERVER['REQUEST_URI'])[0];

    $num = substr_count($host,'/');
    $way = explode('/', $host)[$num];

    if($way == '' || $way == 'index.php'){
        $response = Controller::StartSite();
    }
    
    elseif ($way == 'books'){
        $response = Controller::BookList();
    }

    elseif ($way == 'books'){
        if(isset($_GET['bookname'])){
            $title == $_GET['bookname'];
        }
        $response = Controller::BookOne($title);
    }
    
    else {
        $response = Controller::error404();
    }
?>