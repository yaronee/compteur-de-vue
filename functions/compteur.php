<?php


    function getPath(): string {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'vue.txt';
    }



    function ajouter_vue() {
        $pathCompteur = getPath();
        $compteur = 1;

        if (file_exists($pathCompteur)) {
            //int:convertir en nombres entier, parse en anglais
            $compteur = (int) file_get_contents($pathCompteur);
            // On incrémente -> incrémentation
            $compteur++;
            // Similaire que :
            //$compteur = $compteur + 1;
            //$compteur += 1;
        }

        file_put_contents($pathCompteur, $compteur);
    }

    function nombre_vues(): string {
        $pathCompteur = getPath();
        return file_get_contents($pathCompteur);
    }



