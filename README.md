# Group2TI2exercice

## Exercice

### Installation

- Créez un `fork` de ce projet
- `Clonez` ce fork sur votre machine
- Ajoutez un `remote` vers l'`upstream`
- Dupliquez et renommez `config.php.ini` en `config.php`
- Importez `Datas/group2ti2exercice.sql` dans `PHPMyAdmin` en `MariaDB`
- Créez un `hôte virtuel` vers le dossier `public`

### Structure fonctionnelle

- config.php
- public/index.php
- Modeles/informationsModel.php
- Vues/informations.vue.html.php

### Demandes

- Créez un design simple mais responsive dans la vue `Vues/informations.vue.html.php`, en utilisant le `css` se trouvant dans `public/css/MyCSS.css`. Celui-ci affiche les données se trouvant dans la table `informations`. Un formulaire permet de rajouter un nouveau commentaire dans cette vue.

- `public/index.php` est le contrôleur frontal. La marche à suivre est en commentaire dans le fichier `index.php`

- Les requêtes SQL doivent se trouver dans des fonctions du fichier `Modeles/informationsModel.php`.
    - getInformations() charge tous les articles.
    - addInformations() insert un nouvel article
    - Les injections SQL ne doivent pas être possibles !
- Formulaire : Il doit insérer un article dans la base de donnée,       
    - afficher une erreur en cas d'erreur, 
    - faire une redirection sur la page en cas de réussite