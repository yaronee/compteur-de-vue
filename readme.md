**_Le projet compteur de vue permet d'afficher le nombre de vue d'une page._**

_C'est a dire le nombre de fois qu'elle a ete vue_

***Comment l'installer ?***

_1-Créé un fichier compteur_

_2-il vous faudra ensuite copier le code et le coller dans votre fichier sur vscode._

 **Voici le code :**
 
 //<?php
function ajouter_vue(): void {
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    $fichier_journalier = $fichier . '-' . date('Y-m-d');
    incrementer_compteur($fichier);
    incrementer_compteur($fichier_journalier);
}

function incrementer_compteur(string $fichier): void {
    $compteur = 1;
    if (file_exists($fichier)) {
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
    }
    file_put_contents($fichier, $compteur);
}

function nombre_vues(): string {
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    return file_get_contents($fichier);
}
?>

**3-IL faut metre cette ligne de code dans le code de la page ou vous voulez l'afficher :**

Il y a <?= $vues ?> visite<?php if ($vues > 1): ?>s<?php endif; ?> sur le site