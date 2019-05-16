<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../models/Palindroom.php';
if (!empty($_POST)) {
    $naam = $_POST["naam"];
    $palindroom = new Palindroom();
    
    $palindroom->revertWord($naam);
}

