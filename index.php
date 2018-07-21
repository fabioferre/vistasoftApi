<?php
    include 'config-db.php';
    include 'config-env.php';

    foreach(glob("controller/*.php") as $key){
        include_once($key);
    }

    foreach(glob("classes/*.php") as $keyy){
        include($keyy);
    }
    
    
    session_start();
    
    header('Content-Type: text/html; charset=utf-8');
    date_default_timezone_set('America/Sao_Paulo');
    use \controller as controller;
    use \classes as classes;
    $tmp = !empty($_GET['uri']) ? $_GET['uri'] : 'Portfolio'; // Página padrão home
    $tmp = (substr($tmp,-1) === "/") ? header("Location:/{pasta}/".substr($tmp,0,-1)) : $tmp;
    
    $uri = explode('/', $tmp);

    $vars = array(
        'controller'   => (count($uri) > 0 ? array_shift($uri) : 'index'),
        'action'       => (count($uri) > 0 ? array_shift($uri) : 'index'),
        'params'       => array()
    );
    
   
    $rota = 'controller\\'.ucfirst($vars['controller']).'::'.$vars['action'];
       
    if(method_exists('controller\\'.ucfirst($vars['controller']),$vars['action'])){
        call_user_func($rota); 
    }else{
        include("view/404.php");
    }


    
    
?>