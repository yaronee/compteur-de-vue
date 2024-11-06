## **Creation d'un compteur de vue en php**
***A vous de jouer !***




**1. Prérequis**

  

•  **Visual Studio Code (VS Code)** : un éditeur de code pratique pour développer en PHP.

•  **PHP** : une version récente de PHP (de préférence PHP 8.0 ou supérieur).


•  **Navigateur Web** : pour tester le compteur de vues en temps réel.
  

**2. Installation des Outils**

  

1. **Installer VS Code**

•  Téléchargez et installez Visual Studio Code à partir du site officiel : [Visual Studio Code](https://code.visualstudio.com/).


2. **Installer PHP**

•  Téléchargez et installez PHP (si vous ne l’avez pas déjà) à partir de [php.net](https://www.php.net/downloads).

•  Pour vérifier l’installation, ouvrez un terminal et tapez :

    php -v


  3. **Configurer un Serveur Local**

•  **Option si vous n'avez pas de serveur** : PHP dispose d’un serveur intégré, donc si vous ne voulez pas installer de serveur supplémentaire, vous pouvez utiliser le serveur intégré en exécutant la commande suivante dans votre projet :

    php -S localhost:8000

•  Accédez ensuite à http://localhost:8000 dans votre navigateur pour voir le projet en cours d’exécution.

**3. Structure de Projet**

  

Créez un dossier pour votre projet, par exemple compteur_vue. La structure de base devrait ressembler à ceci :

  

         
        ├── index.php        # Page principale
      functions/
        ├── compteur.php     # Script pour gérer le compteur de vues
       data /
        └──  vue.txt    # Fichier pour stocker le nombre de vues

**4. Créer le Fichier data.txt**

  
•  Créez un dossier data et ajouter un fichier vue.txt.


**5. Remplir le Code**

**6. Exécuter et Tester le Projet**

  

1. **Lancer le Serveur PHP Intégré**

•  Placez-vous dans le dossier du projet dans le terminal, et lancez le serveur en utilisant :

    php -S localhost:8000

2. **Accéder à la Page dans le Navigateur**

•  Ouvrez votre navigateur et allez à http://localhost:8000.

•  Chaque fois que vous rafraîchissez la page, le compteur de vues doit s’incrémenter de 1.

**Bravo a vous !**

