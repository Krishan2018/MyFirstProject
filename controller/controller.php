<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../models/Palindroom.php';
if (!empty($_POST)) {
    
    if (checkPostArray()){
        // weet zeker dat de $_POST alle indexen bevat. Ik hoef nooit meet een isset te doen.
        if( ! strlen ($_POST['naam']) == 0){
            // 
            $Palindroom = new Palindroom();
            $Palindroom->revertWord($_POST['naam']);
            $revertWord = $Palindroom->getRevertWord();
            if ($Palindroom->heeftPalidroomBetekenis()){
                $viewData = array(
                    'palindroom' => "Het omgekeerde woord is: ". $revertWord, 
                    'message' => "Het omgedraaide woord heeft een betekenis",
                    'action' => "Vul een nieuw woord in of sluit de browser"           
                );
            }
            else{               
                $viewData = array(
                    'palindroom' => "",
                    'message' => "Het omgedraaide woord heeft een betekenis",
                    'action' => "Vul een nieuw woord in of sluit de browser"           
                );
            }
            include_once '../view/view.php';
            
        }else{ 
                $viewData = array(
                    'palindroom' => "Het omgekeerde woord is: ". $revertWord, 
                    'message' => "Het omgedraaide woord heeft een betekenis",
                    'action' => "Vul een nieuw woord in of sluit de browser"           
                );
            include_once '../view/view.php';
        }
        
    } else {
        http_response_code(409);
    }  
}
else{
    http_response_code(406);
}

function checkPostArray(){
    $validArguments = array("naam","submit");
    for ($index = 0 ; $index < sizeof($_POST) ; $index++){
        $argument = $validArguments[$index];
        if( ! isset($_POST[$argument])){
            return FALSE;   
        }
    }  
    return TRUE;
}

