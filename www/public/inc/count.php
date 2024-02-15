<?php
    /**
     * Besöksräknare
     * Skapar filen hit.dat
     * 
     * Skall inkluderas där antalet besökare skall skrivas ut
     * include_once("count.php");
     * 
     * @auther Henrik Bygren
    
     * Om filen finns hämtas antalet besökare från den
     * Om den inte finns så skapas den som en tom fil
     */
    if(file_exists("hit.dat")){
        $hit = file_get_contents("hit.dat");
    }
    else{
        $hit = 0;
    }
    
    $hit++; // Ökar antalet besökare med 1
    
    file_put_contents("hit.dat",$hit); // Skriver över filen med det nya antalet besökare
    
    echo ($hit + 1) / 2;
?>