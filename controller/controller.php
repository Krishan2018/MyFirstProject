<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (not(empty($_POST))) {
    if(isset($_POST['naam'])){
        echo $_POST['naam'];
    }
    else{
        echo "Kloojo";
    }
}

