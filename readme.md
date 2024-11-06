**_Le projet compteur de vue permet d'afficher le nombre de vue d'une page._**

_C'est a dire le nombre de fois qu'elle a ete vue_

***Comment l'installer ?***

_1-Créé un fichier compteur_

_2-il vous faudra ensuite copier le code et le coller dans votre fichier sur vscode._

 **Voici le code :**
 
 

**3-IL faut metre cette ligne de code dans le code de la page ou vous voulez l'afficher :**

Il y a <?= $vues ?> visite<?php if ($vues > 1): ?>s<?php endif; ?> sur le site 