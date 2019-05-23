<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Hierkomen alle functies die te maken hebben met een palindroom
//Palindroom = woord omdraaien
//$obj = new Palindroom();
//$obj->revertWord("Klas1H");
//echo $obj->getRevertWord();

class Palindroom{
    private $tekst;
    private $revertTekst;
            
    function revertWord($tekst){
        $this->tekst = $tekst;
        $revertTekst = "";
        //We gebruiken een for omdat we de rangeomvang kennen.
        for ($index = strlen($tekst) -1 ; $index > -1 ; $index --){
            $revertTekst = $revertTekst . $tekst[$index];
        }  
        $this->revertTekst = $revertTekst;
    }
       function getRevertWord(){
        return $this->revertTekst;
    }
}