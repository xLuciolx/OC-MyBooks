# MyBooks

Code source initial de l'activité PHP MyBooks.

# Objectif

Créer une application Web permettant d'afficher la liste des livres ainsi que les détails sur un livre.
L'application à obtenir est [consultable en ligne](http://mybooks-demo.herokuapp.com/).

# Etapes de travail

1. Récupérez les fichiers source de ce dépôt. 

    * Si vous utilisez GitHub, vous pouvez le [forker](https://help.github.com/articles/fork-a-repo/) vers un dépôt sur votre compte GitHub, puis [cloner](http://git-scm.com/book/fr/v1/Les-bases-de-Git-D%C3%A9marrer-un-d%C3%A9p%C3%B4t-Git) ce dépôt sur votre ordinateur. Vous pourrez ensuite committer vos modifications locales et les pousser sur votre dépôt GitHub.
    * Si vous utilisez Git sans GitHub, vous pouvez [cloner](http://git-scm.com/book/fr/v1/Les-bases-de-Git-D%C3%A9marrer-un-d%C3%A9p%C3%B4t-Git) ce dépôt sur votre ordinateur. Notez que vous pourrez ensuite committer vos modifications locales, mais pas les pousser sur le dépôt GitHub d'origine.
    * Sinon, vous pouvez télécharger puis décompresser une archive ZIP de ce dépôt.

2. Créez la base de données MySQL à l'aide des scripts SQL fournis.

3. En vous servant de [l'application en ligne](http://mybooks-demo.herokuapp.com/) comme modèle, réalisez la fonctionnalité d'affichage de la liste des livres.

4. En vous servant de [l'application en ligne](http://mybooks-demo.herokuapp.com/) comme modèle, réalisez la fonctionnalité d'affichage des détails sur un livre.

Conseil : si vous obtenez des erreurs de chargement de fichiers ou de classes, pensez à vérifier :

* Les espaces de noms de vos classes dans les répertoires `Domain` et `DAO`.
* La présence d'une entrée `autoload` appropriée dans votre fichier `composer.json`.

Relancez ensuite la commande :

    composer update

Bon courage !
