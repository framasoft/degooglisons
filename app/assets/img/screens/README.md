# Recommendations pour les captures d’écran

## Les captures doivent faire sens

Il faut illustrer clairement les fonctionnalités du service.

En général, si l’UI est bien faite, on devrait comprendre au premier coup d’oeil
mais il est important qu’il y ait des élements de contexte.

Exemple, illustrer Framanotes avec un dossier vide ne sera pas très parlant,
il est préférable de le pré-remplir avant pour faire apparaitre des images,
du texte, des vidéos…

On peut aussi retoucher la capture pour zoomer ou flécher les éléments importants
et flouter ceux qui ne le sont pas.


## Les captures doivent être soignées

Il faut faire attention aux proportions.

La prise de vue doit se faire de préférence à partir de l’outil « vue adaptative »
du navigateur en gardant le maximum d’éléments signifiants visibles.

On peut jouer aussi avec le niveau de zoom. L’important étant de conserver
les proportions et d’éviter la pixélisation.
Il vaut mieux une capture trop grande redimensionée et rognée à la main
plutôt qu’une trop petite.

Les fichiers `screens/*.png` font tous 588 x 503.

Les vues mobiles sont en 407 x 428.
Les vues PC sont en 513 x 313 (~16:10)

Les fichiers `screens/*-full.png` sont en 16:10 avec minimum 840 x 525

## Les captures doivent aller à l’essentiel

Pensez à nettoyer la capture (il est préférable que ce soit fait en
amont via les outils dev du navigateur) :

  * la framanav apporte des informations inutiles au fonctionnement de l’outil
  * le bouton Faire un don également
  * les bordures et ombres de la page seront redondantes avec les
    éléments de décors autour de la capture
  * certains éléments peuvent être affichés temporairement à l’écran
    (bandeau de campagne, message de confirmation après une action,
    alerte pour mise à jour, carousels…)

## Les fichiers doivent être légers

Dans Gimp (paquet `gimp-plugin-registry`), il existe une option pour
enregistrer les fichiers adaptés pour le web avec une palette optimisée.
Il faut juste être un peu vigilant sur le rendu de la transparence
et des dégradés de couleurs.
Pour améliorer l’impression que la page s’affiche vite,
les jpg peuvent être enregistrée en mode progressif.


