<?php


    include_once 'dbJson.php';

    $api = new DBJSON('json.json');


    print_r($api->getData());



    // include_once 'apiMovies.php';


    // $api = new ApiMovies();

    // if(isset($_GET['id'])){
    //     $id = $_GET['id'];

    //     if(is_numeric($id)){

    //         $api->getMovie($id);
            
    //     }else{

    //         $api->printError('El parametro es incorrecto', 404);
        
    //     }
    // }else{

    //     $api->getAllMovies();
    
    // }