<?php
function frenchDate($date,$format=1){
    $out="";
    $joursTab = ["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"];
    $moisTab = [1=>"janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre"];
    $date = strtotime($date);

    switch($format){

        case 1:
        $out.="Le "
                .$joursTab[date("w",$date)]." " // jour de la semaine en français
                .date("d",$date)." " // chiffre du jour
                .$moisTab[date("n",$date)]." " // mois en français
                .date("Y à H:i",$date); // année / heures / minutes
                break;

        case 2:        
        $out.="Le "
               // .$joursTab[date("w",$date)]." " // jour de la semaine en français
                .date("d",$date)." " // chiffre du jour
                .$moisTab[date("n",$date)]." " // mois en français
                .date("Y à H\hi",$date); // antislash pour éviter l'interprétation de h
                break;
        case 3:
        $out.="Le "
                .$joursTab[date("w",$date)]." " // jour de la semaine en français
                .date("d",$date)." " // chiffre du jour
                .$moisTab[date("n",$date)]." " // mois en français
                .date("Y à ",$date); // année
        // vérification pour le "s" de heure (si au dessus "01", récupération de l'heure, toujours unstring)
        $h = date("H",$date);
        // avec un comparaison non stricte, par défaut PHP utilise le transtypage, donc "H" qui est un string, par exemple "02" (convertit en int) sera comparé à 2 
        if($h >= 2) {
            $out.=$h." heures";
        }else{
            $out.=$h." heure";
        }
        break;

        // équivalence du else (si rien n'est vrai)
        default:

            return "Format de date non reconnue";   
    }



    return $out;
}