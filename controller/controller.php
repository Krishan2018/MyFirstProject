<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../models/Palindroom.php';
if (!empty($_POST)) {
    
    if (checkPostArray()){
        echo "De inhoud van de Post array klopt - HOERA!";
    } else {
        http_response_code(409);
    }  
}
else{
    http_response_code(406);
}

function checkPostArray(){
//    bad code example!!
//    if(isset($_POST["naam"]) && isset($_POST["submit"])){
//           return TRUE; 
//    }
    $validArguments = array("naam","submit");
    for ($index = 0 ; $index < sizeof($_POST) ; $index++){
        $argument = $validArguments[$index];
        if( ! isset($_POST[$argument])){
            return FALSE;   
        }
    }  
    return TRUE;
}

