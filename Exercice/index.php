<?php
/**
 * Cette fonction permet de calucluer le factoriel d'un nombre
 */
function factorielle($nbre){
    if($nbre < 2){
        return 1;
    }else{
        return $nbre * factorielle($nbre - 1);
    }
}

echo factorielle(0);