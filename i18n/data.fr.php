<?php
/*
 * $l = liens
 * $t = texte
 * $d = données camps et framaprojets
 * $e = éditeur
 */

include('data.php');

// Liens
$l['F'] = 'https://framasoft.org';
$l['S'] = 'https://soutenir.framasoft.org';
$l['DIo'] = 'https://degooglisons-internet.org';
$l['DIoL'] = $l['DIo'].'/liste';
$l['Charte'] = 'https://framasoft.org/nav/html/charte.html';
$l['contact'] = 'https://contact.framasoft.org';
$l['participer'] = $l['contact'].'/participer';

// Images
$l['map'] = 'img/Carte2016-victoires.png';

// Meta
$t['meta']['lang']      = 'fr';
$t['meta']['title']     = 'Dégooglisons Internet';
$t['meta']['framasoft'] = 'Framasoft';
$t['meta']['F']         = '<a href="'.$l['F'].'"><b class="violet">Frama</b><b class="orange">soft</b></a>';
$t['meta']['DIo']       = '<a href="'.$l['DIo'].'"><b class="violet">Dégooglisons</b> <b class="orange">Internet</b></a>';
$t['meta']['start']     = 'Campagne commencée le 07/10/2014';
$t['meta']['edit']      = 'Dernière modification le 12/04/2017';
$t['meta']['S']         = 'Soutenir ce projet';
$t['meta']['lead']      = 'Une initiative du réseau '.$t['meta']['F'].' en faveur d’un internet<br/>
                <a href="#leds">libre</a>, <a href="#leds">décentralisé</a>,
                <a href="#leds">éthique</a> et <a href="#leds">solidaire</a>';
// LEDS
$t['meta']['leds']['title']   = 'Pour un Internet…';
$t['meta']['leds']['ltitle']  = 'Libre';
$t['meta']['leds']['ldesc']   = 'L’histoire d’Internet elle-même est une histoire de logiciels libres,
                tant du point de vue des standards que des protocoles employés.
                Sa popularité et son potentiel font aussi des envieux, et de grandes entreprises
                aimeraient s’en attribuer le contrôle en imposant du code fermé dans des systèmes
                verrouillés et non-interopérables. Pour qu’Internet reste fidèle à ses principes
                fondateurs qui l’ont conduit à son succès, nous devons y trouver des applications
                libres, c’est à dire dont le code source est ouvert, accessible et sous licences libres.';
$t['meta']['leds']['dtitle']  = 'Décentralisé';
$t['meta']['leds']['ddesc']   = 'L’intelligence d’Internet doit se situer à la périphérie du réseau dans une dynamique
                de partage de pair à pair, pour éviter de créer un Minitel 2.0. Pour assurer l’égalité
                de tous, citoyens comme entrepreneurs, les monopoles doivent non seulement être évités,
                mais empêchés de s’accaparer les données personnelles ou publiques. En expliquant,
                par des tutoriels, comment multiplier les solutions libres permettant un Internet
                plus équitable, nous facilitons l’essaimage du code et diversifions les usages.';
$t['meta']['leds']['etitle']  = 'Éthique';
$t['meta']['leds']['edesc']   = 'Nous plébiscitons un Internet fait de partage et d’indépendance.
                L’exploitation, la surveillance, la censure et l’appropriation des données sont
                des valeurs que nous refusons au profit de la transparence (la probité),
                de l’exposition claire des conditions d’utilisation des services, et du refus des discriminations.';
$t['meta']['leds']['stitle']  = 'Solidaire';
$t['meta']['leds']['sdesc']   = 'À travers les services que nous déployons, nous promouvons un modèle économique
                fondé sur la mutualisation des coûts, le partage des ressources, et l’accessibilité au plus grand
                nombre. Pour cette raison les abus seront évités car nous avons tous conscience
                de la communauté des biens. Ce modèle possède aussi un caractère éducatif car nous pensons
                qu’en documentant le déploiement des services, un grand nombre d’utilisateurs
                seront en mesure de partager à leur tour ces ressources.';
$t['meta']['leds']['charte']  = 'Pour en savoir plus, consultez <strong><a href="'.$l['Charte'].'">notre charte</a></strong> détaillée.';

// Accueil
$t['home']['title']  = 'Accueil';
$t['home']['link']   = $l['current'];
$t['home']['desc']   = '';
$t['home']['css']    = '<link href="'.$l['current'].'css/home.css" rel="stylesheet" type="text/css" />';
$t['home']['js']     = '
    <script src="'.$l['current'].'js/jquery.maphilight.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/imageMapResizer.min.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/home.js" type="text/javascript"></script>';
$t['home']['map']    = 'Cliquez sur la carte pour découvrir les alternatives…';
$t['home']['altMap'] = 'Nous sommes en 2016 après Jésus-Christ. Toute la toile est occupée par des services centralisés…
                Toute ? Non ! Une communauté peuplée d’irreductibles libristes résite encore et toujours à l’envahisseur.
                Et la vie n’est pas facile pour les garnisons des camps retranchés de Fermetum, Centralisum, Espionnum et Privatum…';
// Accueil - Camps
$t['home']['camps']['village']     = 'Village libriste';
$t['home']['camps']['vp1']         = 'Au milieu des multinationales tentaculaires, quelques organisations non-lucratives continuent de lutter activement
                    pour un Web ouvert et respectueux des internautes.';
$t['home']['camps']['vp2']         = 'En plus de '.$t['meta']['F'].', association loi 1901
                qui mène la présente campagne, nous pouvons citer <a href="http://april.org">l’April</a>,
                <a href="http://laquadrature.net">la Quadrature du Net</a> ou encore <a href="http://aful.org">l’Aful</a>.
                Ces associations vivent de vos dons, n’oubliez pas de les soutenir !';
$t['home']['camps']['fermetum']    = '<i lang="la">Fermetum</i>';
$t['home']['camps']['fp1']         = 'Les services en ligne sont souvent fermés : une fois que vous avez commencé à les utiliser,
                il est très difficile de s’en séparer car ces entreprises font tout pour vous garder captifs en
                vous empêchant, par exemple, de migrer vos données ailleurs facilement.';
$t['home']['camps']['fp2']         = 'Utiliser des services en ligne ouverts, c’est s’assurer qu’on ne sera jamais captif d’un site particulier
                et qu’il sera toujours possible d’aller voir ailleurs.';
$t['home']['camps']['centralisum'] = '<i lang="la">Centralisum</i>';
$t['home']['camps']['cp1']         = 'Les services centralisés posent de nombreux problèmes : ils rendent vos données très vulnérables (un seul site
                indisponible et plus rien n’est accessible) et facilitent énormément leur exploitation par des tiers.';
$t['home']['camps']['cp2']         = 'Utiliser des services en ligne décentralisés, c’est avoir le choix entre utiliser une instance en ligne comme celle
                proposée par Framasoft ou installer le service chez soi.';
$t['home']['camps']['espionnum']   = '<i lang="la">Espionnum</i>';
$t['home']['camps']['ep1']         = '« Si c‘est gratuit, c‘est que vous êtes le produit » : de nombreux services en ligne vivent de
                l’exploitation de vos données personnelles en les revendant à des sociétés publicitaires.
                De plus, la plupart de ces services sont basés aux États-Unis et obéissent aux lois américaines de type
                PATRIOT ACT qui nient totalement votre droit à la vie privée.';
$t['home']['camps']['ep2']         = 'Utiliser des services en ligne hébergés en Europe, c’est s’assurer de ne pas être dépendant des lois d’un autre
                continent. De plus, en hébergeant vous-même le service, plus aucun tiers ne peut violer votre vie privée.';
$t['home']['camps']['privatum']    = '<i lang="la">Privatum</i>';
$t['home']['camps']['pp1']         = 'Les services privateurs (« propriétaires » dans le langage courant) ont un fonctionnement totalement opaque :
                il est impossible de savoir exactement ce que fait le logiciel de vos données. Seul l’éditeur en a le contrôle.';
$t['home']['camps']['pp2']         = 'Utiliser des services en ligne libres, c’est avoir l’assurance d’un contrôle sur le fonctionnement du logiciel par la
                communauté et la possibilité de le modifier, de l’installer ailleurs, etc.';
$t['home']['camps']['nsa']         = '<abbr>NSA</abbr>';
$t['home']['camps']['np1']         = 'Les révélations d’Edward Snowden sur le programme PRISM de la <abbr>NSA</abbr> ont montré que les craintes sur la violation
                de masse de la vie privée des internautes étaient fondées.';
$t['home']['camps']['np2']         = 'Utiliser des services centralisés revient aujourd’hui à offrir sur un plateau ses données personnelles aux
                organisations de surveillance sans aucun moyen de contrôler l’usage qui en est fait.';
// Accueil - Enjeux
$t['home']['enje']['btn']   = 'Les enjeux';
$t['home']['enje']['title'] = 'Quels sont les enjeux ?';
$t['home']['enje']['p1']    = 'Ces dernières années ont vu se généraliser une <strong>concentration des acteurs d’Internet</strong> (Youtube appartient à Google,
                WhatsApp à Facebook, Skype à Microsoft, etc.). Cette centralisation est nuisible, non seulement parce qu’elle freine l’innovation,
                mais surtout parce qu’elle entraîne une perte de liberté pour les visiteurs. <strong>Les utilisateurs de ces derniers services
                ne contrôlent plus leur vie numérique</strong> : leurs comportements sont disséqués en permanence afin de mieux être ciblés par
                la publicité, et leurs données - pourtant privées (sites visités, mails échangés, vidéos regardées, etc.) - peuvent être analysées par des
                services gouvernementaux.';
$t['home']['enje']['p2']    = 'La réponse que souhaite apporter Framasoft à cette problématique est simple : mettre en valeur, pour chacun de ces
                services privateurs de liberté, une alternative Libre, Ethique, Décentralisée et Solidaire.';

// Accueil - Dangers
$t['home']['dang']['btn']   = 'Les dangers';
$t['home']['dang']['title'] = 'Les dangers';
$t['home']['dang']['intro'] = 'Les services en ligne toujours plus centralisés de géants tentaculaires comme Google, Amazon, Facebook,
                Apple ou Microsoft (GAFAM) mettent en danger nos vies numériques.';
    // EPCF (Espionnum, Privatum, Centralisum, Fermetum)
$t['home']['dang']['e']     = 'Espionnage';
$t['home']['dang']['ep']    = 'Sous le prétexte de fournir une « meilleure expérience utilisateur », nos comportements sur Internet sont espionnés en
                permanence. Ces informations peuvent servir à afficher de la publicité ciblée, mais les révélations de l’affaire Snowden
                ont aussi prouvé que les géants de l’Internet étaient contraints de communiquer ces données (parfois extrêmement privées :
                emails échangés sur GMail, photos partagées sur Facebook, conversations Skype, géolocalisation des téléphones, etc.)
                à des services gouvernementaux. <strong>Sous prétexte de lutte contre le terrorisme</strong>, les états sont capables
                aujourd’hui d’obtenir bien plus d’informations qu’un « Big Brother » ne l’aurait jamais rêvé.';
$t['home']['dang']['erefs'] = '
                <ul>
                    <li>Numerama, le 13/05/2014 : <a href="http://www.numerama.com/magazine/29353-la-nsa-accusee-d-avoir-piege-les-routeurs-americains.html">La NSA accusée d’avoir piégé les routeurs américains</a></li>
                    <li>Numerama, le 12/09/2014 : <a href="http://www.numerama.com/magazine/30539-yahoo-revele-le-chantage-des-usa-pour-espionner-les-internautes.html">Yahoo révèle le chantage des USA pour espionner les internautes</a></li>
                    <li>Numerama, le 04/07/2013 : <a href="http://www.numerama.com/magazine/26435-prism-l-allemagne-qui-espionne-aussi-deconseille-le-web-americain.html">PRISM : l’Allemagne, qui espionne aussi, déconseille le web américain</a></li>
                    <li>Le Monde, le 27/06/2013: <a href="http://www.lemonde.fr/sciences/article/2013/06/27/il-est-temps-de-parler-des-metadonnees_3437125_1650684.html">Il est temps de parler des métadonnées</a></li>
                    <li>Atlantico, le 25/11/2013, <a href="http://www.atlantico.fr/pepites/espionnage-etat-veut-attaquer-nos-donnees-personnelles-908758.html">Espionnage : l’Etat veut s’attaquer à nos données personnelles</a></li>
                    <li>Le Monde, le 20/03/2014 : <a href="http://www.lemonde.fr/international/article/2014/03/20/dgse-orange-des-liaisons-incestueuses_4386264_3210.html">Espionnage : comment Orange et les services secrets coopèrent</a></li>
                        <li>Le Monde, le 15/09/2014: <a href="http://www.lemonde.fr/proche-orient/article/2014/09/15/terrorisme-un-projet-de-loi-dangereux_4487639_3218.html">Terrorisme : un projet de loi dangereux</a></li>
                        <li>Présumés Terroristes, septembre 2014 : <a href="https://presumes-terroristes.fr/">Loi Terrorisme. Sacrifier les libertés sous prétexte de lutte contre le terrorisme ? NON !</a></li>
                        <li>Europe1, le 12/02/2014 : <a href="http://www.europe1.fr/high-tech/et-si-samsung-se-mettait-a-espionner-ses-propres-smartphones-1799713">Et si Samsung se mettait à "espionner" ses propres smartphones?</a></li>
                        <li>Rue89, le 13/12/2008 :<a href="http://rue89.nouvelobs.com/2008/12/13/ecoutes-ce-qui-est-possible-avec-votre-telephone-portable">Ecoutes : ce qui est possible avec votre téléphone portable</a></li>
                        <li>Le Monde, le 21/03/2014 : <a href="http://www.lemonde.fr/international/article/2014/03/21/la-france-suspectee-de-cyberattaque_4387232_3210.html">La France suspectée de cyberespionnage</a></li>
                        <li>Pixels (Le Monde), le 14/09/2014 : <a href="http://www.lemonde.fr/pixels/article/2014/09/13/la-nsa-et-le-gchq-auraient-pirate-cinq-operateurs-telecom-allemands_4487181_4408996.html">La NSA et le GCHQ auraient piraté cinq opérateurs télécom allemands</a></li>
                        <li>Pixels (Le Monde), le 16/09/2014 :  <a href="http://www.lemonde.fr/pixels/breve/2014/09/16/tim-cook-estime-que-les-etats-unis-sont-alles-trop-loin-dans-la-collecte-des-donnees_4488172_4408996.html">Tim Cook estime que les Etats-Unis sont allés trop loin dans la collecte des données</a></li>
                        <li>Liberation, le 01/07/2014 :  <a href="http://www.liberation.fr/monde/2014/07/01/la-nsa-espionnait-193-pays-et-aussi-l-ue-et-le-fmi_1054881">La NSA espionnait 193 pays</a></li>
                        <li>Numerama, le 24/07/2014 : <a href="http://www.numerama.com/magazine/30101-des-backdoors-sur-ios-tout-ce-qu-il-faut-savoir.html">Des backdoors sur iOS ? Tout ce qu’il faut savoir</a></li>
                        <li>Bug Brother (Le Monde), le 11/02/2014 : <a href="http://bugbrother.blog.lemonde.fr/2014/02/11/le-gif-qui-revele-la-paranoia-de-la-nsaqui-espionne-donc-aussi-vos-enfants-parents-amis/">Le .gif qui révèle la paranoïa de la NSA, et pourquoi elle espionne aussi vos parents & amis</a></li>
                        <li>Rue89, le 15/08/2013 :  <a href="http://rue89.nouvelobs.com/2013/08/15/les-messages-envoyes-compte-gmail-peuvent-etre-interceptes-alors-244954">Les e-mails envoyés sur Gmail peuvent être interceptés. Et alors ?</a></li>
                        <li>Écrans.fr, le 07/06/2013 : <a href="http://ecrans.liberation.fr/ecrans/2013/06/07/le-fbi-a-acces-aux-comptes-facebook-google-yahoo_909023">Le FBI a accès aux comptes Facebook, Google, Yahoo!…</a></li>
                        <li>Le Monde.fr, le 27/01/2014 : <a href="http://www.lemonde.fr/technologies/article/2014/01/27/des-applications-mobiles-utilisees-par-la-nsa-et-son-homologue-britannique_4355371_651865.html">Des applications de smartphones "mises sur écoute" par la NSA</a></li>
                    </ul>';
$t['home']['dang']['p']     = 'Vie privée';
$t['home']['dang']['pp']    = 'Nos données sont une extension de nous-mêmes. Elles peuvent indiquer où nous sommes, avec qui, notre orientation politique
                    ou sexuelle, les sites que nous avons visités, notre recette préférée, les sujets qui nous intéressent, etc.<br/>
                    Si une donnée seule, prise indépendamment, n’est pas forcément sensible, un ensemble de données peut le devenir
                    (par exemple si vous avez fait des recherches sur le cancer avant de souscrire à une assurance-vie).<br/>
                    Dans un monde où tout devient numérique (lecture, TV, téléphonie, musique, réseau social, etc.), <strong>notre vie privée
                    est un élément essentiel de ce qui fait de nous une personne singulière</strong>. Une personne malveillante qui aurait accès à votre
                    smartphone peut en apprendre suffisamment sur vous en quelques minutes pour vous causer des torts très importants (usurpation d’identité sur
                    Facebook, détournement d’informations professionnelles, achats effectués sans votre accord, etc.).';
$t['home']['dang']['prefs'] = '
                    <ul>
                        <li>Numerama, le 17/05/2014 : <a href="http://www.numerama.com/magazine/29400-et-maintenant-google-lit-vos-factures.html">Et maintenant Google lit vos factures</a></li>
                        <li>Numerama, le 06/02/2014 : <a href="http://www.numerama.com/magazine/28299-yahoo-transfere-votre-vie-privee-en-irlande.html">Yahoo transfère votre vie privée en Irlande</a></li>
                        <li>L’Expansion, le 16/01/2014 : <a href="http://lexpansion.lexpress.fr/high-tech/e-commerce-vos-donnees-personnelles-sont-en-danger_1326103.html">E-commerce: vos données personnelles sont en danger</a></li>
                        <li>Numerama, le 21/02/2014 : <a href="http://www.numerama.com/magazine/28515-donnees-personnelles-la-chute-de-confiance.html">Données personnelles : la chute de confiance</a></li>
                        <li>INRIA, le 12/04/2013 : <a href="http://hal.inria.fr/hal-00812734">Internet du futur : performances et respect de la vie privée</a></li>
                        <li>Numerama, le 04/08/2014 : <a href="http://www.numerama.com/magazine/30187-google-a-signale-un-usager-qui-avait-envoye-des-photos-pedopornographiques-par-mail.html">Google a signalé un usager qui avait envoyé des photos pédopornographiques par mail</a></li>
                        <li>Rue89, le 03/07/2013 : <a href="http://rue89.nouvelobs.com/2013/07/31/payer-carte-sans-code-sans-contact-sans-risque-244508">Payer par carte mais sans code : le "sans contact", pas sans risque</a></li>
                        <li>Slate, le 03/10/2014 : <a href="http://www.slate.fr/story/92887/apple-google-facebook-sante">Après Apple et Google, Facebook se penche aussi sur notre santé</a></li>
                        <li>CNIL, mai 2014 : <a href="http://www.cnil.fr/fileadmin/documents/La_CNIL/publications/DEIP/CNIL_CAHIERS_IP2_WEB.pdf ">Le corps, nouvel objet connecté (Cahiers IP num. 2)</a></li>
                        <li>Numerama, le 22/08/2014 : <a href="http://www.numerama.com/magazine/30323-apple-approche-les-mutuelles-pour-divulguer-le-comportement-des-assures.html">Apple approche les mutuelles pour divulguer le comportement des assurés</a></li>
                        <li>JDN, le 23/01/2014 : <a href="http://www.journaldunet.com/ebusiness/le-net/iwatch-apple-incroyable.shtml">Apple embauche des experts en contrôles sanguins</a></li>
                        <li>Challenges, le 06/06/2014 : <a href="http://www.challenges.fr/entreprise/20140606.CHA4685/comment-l-assureur-axa-va-surveiller-votre-conduite.html">Comment l’assureur Axa va surveiller votre conduite</a></li>
                        <li>UFC-Que-Choisir, le 25/03/2014 : <a href="http://www.quechoisir.org/telecom-multimedia/internet/communique-donnees-personnelles-l-ufc-que-choisir-attaque-les-reseaux-sociaux-et-appelle-les-consommateurs-a-garder-la-main-sur-leurs-donnees"> L’UFC-Que Choisir attaque les réseaux sociaux et appelle les consommateurs à garder la main sur leurs données</a></li>
                        <li>Ecrans.fr, le 22/01/2011 :  <a href="http://ecrans.liberation.fr/ecrans/2011/10/22/facebook-la-memoire-cachee_956055">Facebook: la mémoire cachée</a></li>
                        <li>Clubic, le 25/03/2013 : <a href="http://www.clubic.com/internet/google/actualite-549552-google-reader-fermeture-liee-problematiques-vie-privee.html">Google Reader : une fermeture liée aux problématiques de vie privée ?</a></li>
                        <li>Rue89, le 14/01/2014 : <a href="http://rue89.nouvelobs.com/2014/01/14/google-lance-les-objets-connectes-sincruste-chez-249023">Google se lance dans les objets connectés et s’incruste chez vous</a></li>
                        <li>Numerama le 30/06/2014 : <a href="http://www.numerama.com/magazine/29852-facebook-a-teste-sa-capacite-de-manipulation-mentale-des-foules.html">Facebook a testé sa capacité de manipulation mentale des foules</a></li>
                        <li>Numerama, le 18/08/2014 : <a href="http://www.numerama.com/magazine/30290-comment-chrome-envoie-tous-vos-mots-de-passe-a-google.html">Comment Chrome envoie tous vos mots de passe à Google</a></li>
                        <li>Rue89, le 29/08/2014 : <a href="http://rue89.nouvelobs.com/2014/08/29/iphone-6-apres-lempreinte-digitale-apple-veut-ficher-etat-sante-254496">iPhone 6 : après l’empreinte digitale, Apple veut ficher votre état de santé</a></li>
                        <li>LDN, le 17/04/2014 : <a href="http://ldn-fai.net/je-nai-rien-a-cacher/">Je n’ai rien à cacher</a></li>
                        <li>Numerama, le 26/09/2014 : <a href="http://www.numerama.com/magazine/30707-facebook-sait-ou-vous-passez-votre-lune-de-miel-maj.html">Même si vous dites rien, Facebook sait où vous passez votre lune de miel</a></li>
                        <li>Journal du Net, le 16/07/14 : <a href="http://www.journaldunet.com/ebusiness/le-net/informations-rassemblees-par-google.shtml">Soyons honnêtes, la quantité  d’informations que Google rassemble à notre sujet est effrayante</a></li>
                        <li>Big Browser, le 18/11/14 : <a href="http://bigbrowser.blog.lemonde.fr/2014/11/18/comment-avoir-bonne-presse-un-dirigeant-duber-propose-de-fouiller-la-vie-privee-des-journalistes-trop-critiques/">Comment avoir bonne presse ? Un dirigeant d’Uber propose de fouiller la vie privée des journalistes trop critiques</a></li>
                    </ul>';
$t['home']['dang']['c']     = 'Centralisation';
$t['home']['dang']['cp']    = 'Les acteurs majeurs de l’internet sont devenus de véritables pieuvres : Facebook possède WhatsApp et Instagram,
                    Google détient Youtube et Waze, Microsoft distribue Skype, etc.<br/> Cette concentration des acteurs pose de
                    multiples problèmes : que se passera-t-il si Facebook met la clé sous la porte ? Comment faire des recherches si Google subit une panne ?
                    <strong>Nous devenons peu à peu dépendants de services fournis par un petit nombre d’acteurs.</strong> Par exemple, Apple (iPhone),
                    Google (Android) et Microsoft (Windows Phone) se partagent la quasi-totalité du marché des systèmes d’exploitation pour smartphones.<br/>
                    Par ailleurs, la taille de ces acteurs bride l’innovation : difficile de lancer une start-up face à Apple ou Google
                    (respectivement première et deuxième capitalisations boursièresmondiale).<br/>
                    Enfin, le manque de diversité de ces géants leur donne aussi la possibilité non seulement de collecter facilement
                    des informations personnelles, mais aussi d’altérer l’information qu’ils diffusent (une recherche Google sur le mot « nucléaire »
                    n’affichera pas les mêmes liens suivant que Google vous perçoit comme un militant écologiste ou un pro-nucléaire).';
$t['home']['dang']['crefs'] = '
                    <ul>
                        <li>NextInpact, le 14/06/2014 : <a href="http://www.nextinpact.com/news/88112-les-geants-net-generent-nouveaux-rapports-force.htm">Les géants du Net génèrent de nouveaux rapports de force</a></li>
                        <li>Numerama, le 09/03/2013 : <a href="http://www.nextinpact.com/news/78092-edito-la-domination-et-centralisation-ennemis-numero-web.htm">La domination et la centralisation, les ennemis numéro un du web</a></li>
                        <li>Droit et Technologies, le 25/02/2013 : <a href="http://www.droit-technologie.org/actuality-1577/cloud-la-perte-totale-des-donnees-est-possible-la-preuve-par-2e2-et.html">Cloud : la perte totale des données est possible. La preuve par 2e2 et Megaupload.</a></li>
                        <li>INRIA, le 27/09/2011: <a href="http://www.inria.fr/actualite/actualites-inria/massification-du-web-les-consequences">La « massification » du web transforme les relations sociales</a></li>
                        <li>INRIA, le 13/03/2013 : <a href="http://www.inria.fr/centre/lille/agenda/data-et-big-data-le-nouvel-or-noir">Data et Big Data : le nouvel or noir?</a></li>
                        <li>Le Monde, le 12/06/2013: <a href="http://www.lemonde.fr/technologies/chat/2013/06/12/surveillance-d-internet-peut-on-encore-proteger-notre-vie-privee_3428413_651865.html">Pourquoi stocker toutes nos vies sur des serveurs aux Etats-Unis?</a></li>
                        <li>Rue89, le 17/07/2009 : <a href="http://rue89.nouvelobs.com/rue69/2009/07/13/pour-sauver-la-vertu-de-son-iphone-apple-censure-a-tout-va">Pour sauver la vertu de son iPhone, Apple censure à tout va</a></li>
                        <li>Nextinpact, le 08/04/2013 :  <a href="http://www.nextinpact.com/news/78883-appgratis-supprime-app-store-pour-son-reperage-promotions.htm">AppGratis supprimé de l’App Store pour son repérage des promotions</a></li>
                        <li>Ecrans.fr, le 25/04/2013 : <a href="http://ecrans.liberation.fr/ecrans/2013/04/25/google-devoile-une-flambee-de-la-censure_957911">Google dévoile une flambée de la censure</a></li>
                        <li>Nextinpact, le 24/04/2014 : <a href="http://www.nextinpact.com/news/87203-comment-etats-unis-veulent-enterrer-neutralite-net.htm">Comment les États-Unis veulent enterrer la neutralité du net</a></li>
                    </ul>';
$t['home']['dang']['f']     = 'Fermeture';
$t['home']['dang']['fp']    = 'Les services web affichés sur votre ordinateur ou votre smartphone sont généralement exécutés dans le
                    « cloud » : des serveurs dispersés sur la planète, stockant à la fois vos données (mails, photos, fichiers, etc.) mais aussi le code
                    des applications.<br>
                    Pour les données, cela pose le problème de leur pérennité (que deviennent vos fichiers si Dropbox ferme demain ?)
                    mais aussi de votre capacité à changer de services (comment faire pour récupérer l’ensemble de vos photos sur Facebook ou Picasa, et les
                    réinsérer avec les commentaires dans un autre service ?).<br>
                    Pour les applications, cela implique que <strong>vous êtes à la merci de changements impromptus selon le bon vouloir du fournisseur</strong>
                    (ajout de publicité, modification de l’interface, etc.), mais surtout que vous n’avez quasiment aucun contrôle sur ce que l’application peut
                    faire. Ce sont des « boîtes noires » qui peuvent agir de façon malveillante (envoyer des SMS à votre insu, exécuter du code indésirable, etc.).<br>
                    Bref, ces sociétés nous enferment dans des cages dorées, certes, mais des cages malgré tout !';
$t['home']['dang']['frefs'] = '
                    <ul>
                        <li>CNIL, le 03/01/2014 : <a href="http://www.legifrance.gouv.fr/affichCnil.do?oldAction=rechExpCnil&id=CNILTEXT000028450267&fastReqId=2000051504&fastPos=1">Exemple de sanction de la CNIL à l’encontre de Google</a></li>
                        <li>01Net, le 23/11/2012 : <a href="http://www.01net.com/editorial/580825/securite-le-cloud-est-plus-dangereux-que-les-virus/">Sécurité : le cloud est plus dangereux que les virus</a></li>
                        <li>CNIL, le 25/06/2012 : <a href="http://www.cnil.fr/fileadmin/images/la_cnil/actualite/Recommandations_pour_les_entreprises_qui_envisagent_de_souscrire_a_des_services_de_Cloud.pdf">Recommandations pour les entreprises qui envisagent de souscrire à des services de Cloud computing</a></li>
                        <li>INRIA, le 13/12/2013 : <a href="http://hal.inria.fr/hal-00918398">Quand les terminaux mobiles jouent les mouchards de poche</a></li>
                        <li>INAGlobal, le 04/02/2014 : <a href="http://www.inaglobal.fr/numerique/article/facebook-nen-fais-pas-une-affaire-de-donnees-personnelles">Facebook, n’en fais pas une affaire de données personnelles!</a></li>
                        <li>Rue89, le 03/02/2013 : <a href="http://rue89.nouvelobs.com/2013/02/03/qui-appartiennent-vos-donnees-sur-internet-mauvaises-nouvelles-et-conseils-239198">A qui appartiennent vos données sur Internet ? Mauvaises nouvelles et conseils</a></li>
                        <li>Atlantico, le 16/06/2014 : <a href="http://www.atlantico.fr/decryptage/quelle-cible-publicitaire-etes-pourquoi-avez-peut-etre-interet-utiliser-fonctions-facebook-et-google-pour-connaitre-que-geants-1617661.html">Quelle cible publicitaire êtes-vous?</a></li>
                        <li>Nextinpact, le 22/07/2009 : <a href="http://www.nextinpact.com/archive/52115-amazon-kindle-ebook-disparaitre-orwell.htm">Des ouvrages d’Orwell supprimés du Kindle par Amazon</a></li>
                        <li>Rue89, le 18/11/2013 : <a href="http://rue89.nouvelobs.com/2013/11/18/google-facebook-apple-superpuissances-ont-privatise-internet-247615">Google, Facebook, Apple… : ces superpuissances ont privatisé Internet</a></li>
                        <li>Liberation.fr, le 07/03/2014 : <a href="http://next.liberation.fr/sexe/2014/03/07/la-fin-du-porno-sur-vine-un-espace-de-liberte-en-moins_985232">La fin du porno sur Vine, un espace de liberté en moins</a></li>
                        <li>Liberation.fr, le 14/03/2014 : <a href="http://next.liberation.fr/sexe/2014/03/14/apple-censure-un-roman-francais-pour-cause-de-seins-nus_987120">Apple censure un roman français pour cause de seins nus</a></li>
                        <li>Rue89, le 29/05/2014 : <a href="http://rue89.nouvelobs.com/2014/05/29/chantage-google-apple-amazon-les-tontons-ecrabouilleurs-252521">Chantage : Google, Apple et Amazon, les tontons écrabouilleurs</a></li>
                        <li>Numerama, le 09/08/2014 : <a href="http://www.numerama.com/magazine/30226-quand-facebook-est-en-panne-le-trafic-des-sites-baisse.html">Quand Facebook est en panne, le trafic des sites baisse</a></li>
                        <li>NextInpact, le 22/08/2014 : <a href="http://www.nextinpact.com/news/89379-quand-twitter-deraille-avec-timeline-ses-utilisateurs.htm">Quand Twitter déraille avec la timeline de ses utilisateurs</a></li>
                    </ul>';
// Accueil - Nos propositions
$t['home']['prop']['btn']   = 'Nos propositions';
$t['home']['prop']['title'] = 'Ce que nous proposons';
$t['home']['prop']['intro'] = 'Framasoft souhaite faire face à ces dangers menaçant nos vies numériques en proposant des services libres, éthiques,
                décentralisés et solidaires.';
    // LEDS (Libre, Éthique, Décentralisé, Solidaire)
$t['home']['prop']['l']     = 'Liberté';
$t['home']['prop']['lp1']   = 'L’histoire d’Internet elle-même est une histoire de logiciels libres, tant du point de vue des standards que des protocoles employés.
                Sa popularité et son potentiel font aussi des envieux, et de grandes entreprises aimeraient s’en attribuer le contrôle en imposant
                du code fermé dans des systèmes verrouillés et non-interopérables.';
$t['home']['prop']['lp2']   = 'Pour qu’Internet reste fidèle à ses principes fondateurs qui l’ont conduit à son succès, nous devons y trouver des applications libres,
                c’est-à-dire dont le code source est ouvert, accessible et sous licences libres.';
$t['home']['prop']['lp3']   = 'Framasoft s’engage à n’utiliser que des logiciels au code source « libre ».';
$t['home']['prop']['e']     = 'Éthique';
$t['home']['prop']['ep1']   = 'Nous plébiscitons un Internet fait de partage et d’indépendance.';
$t['home']['prop']['ep2']   = 'L’exploitation, la surveillance, la censure et l’appropriation des données sont
                des valeurs que nous refusons au profit de la transparence (la probité), de l’exposition
                claire des conditions d’utilisation des services, et du refus des discriminations.';
$t['home']['prop']['ep3']   = 'Framasoft s’engage à ne pas exploiter les données des utilisateurs de ses services, et à promouvoir un Web ouvert et équitable.';
$t['home']['prop']['d']     = 'Décentralisation';
$t['home']['prop']['dp1']   = 'L’intelligence d’Internet doit reposer sur chaque acteur du réseau dans une
                dynamique de partage de pair à pair, pour éviter de créer un Minitel 2.0.';
$t['home']['prop']['dp2']   = 'Pour assurer l’égalité de tous, citoyens comme entrepreneurs, les monopoles doivent
                non seulement être évités, mais empêchés de s’accaparer les données personnelles ou publiques.';
$t['home']['prop']['dp3']   = 'En expliquant, par des tutoriels, comment multiplier les solutions libres permettant un
                Internet plus équitable, nous facilitons l’essaimage du code et diversifions les usages.';
$t['home']['prop']['dp4']   = 'Framasoft s’engage à faciliter l’auto-hébergement et l’interopérabilité, afin de ne pas «&nbsp;enfermer&nbsp;» ses utilisateurs.';
$t['home']['prop']['s']     = 'Solidarité';
$t['home']['prop']['sp1']   = 'À travers les services que nous déployons, nous promouvons un modèle économique
                fondé sur la mutualisation des coûts, le partage des ressources, et l’accessibilité
                au plus grand nombre.';
$t['home']['prop']['sp2']   = 'Ce modèle possède aussi un caractère éducatif car nous pensons qu’en documentant
                le déploiement des services, un grand nombre d’utilisateurs seront en mesure de partager
                à leur tour ces ressources.';
$t['home']['prop']['sp3']   = 'Nous pensons que ne pas infantiliser les utilisateurs et faire partager la responsabilité de l’utilisation des services permettra de réguler les abus.';
$t['home']['prop']['sp4']   = 'Framasoft s’engage à promouvoir le respect et l’autonomie de ces utilisateurs (tant que la réciproque sera vraie).';
    // Service & Charte
$t['home']['prop']['s&c']   = 'Services et Charte';
$t['home']['prop']['s&cp']  = 'Vous pouvez retrouver en ligne la liste des services que nous proposons déjà (et ceux en préparation) ainsi que notre charte :';
$t['home']['prop']['charte'] = 'Charte des services';

// Accueil - Concrètement
$t['home']['conc']['btn']   = 'Concrètement';
$t['home']['conc']['title'] = 'Concrètement';
$t['home']['conc']['p1']    = 'Le projet « Dégooglisons Internet » - qui ne concerne d’ailleurs pas que Google - consiste à <strong>proposer des services
                alternatifs face à un maximum de services que nous évaluons comme menaçants pour nos vies numériques</strong>.';
$t['home']['conc']['p2']    = 'Google Docs, Skype, Dropbox, Facebook, Twitter, Google Agenda, Youtube, Doodle, Yahoo! Groups, et bien d’autres sont des
                services extrêment pratiques, mais <strong>ils sont devenus bien trop gros et nous ont rendus dépendants</strong>.
                Framasoft souhaite entrer en résistance, et propose un plan de mise en place d’applications alternatives sur plusieurs années.';
$t['home']['conc']['p3']    = 'Ces services sont libres, gratuits, ouverts à tous (dans la limite de nos capacités techniques et financières), tels
                des <strong><a href="http://fr.wikipedia.org/wiki/Biens_communs" title="Bien communs">biens communs</a> numériques</strong>.
                Dans un souci de décentralisation d’internet et de promotion de l’auto-hébergement, nous ferons le maximum afin que chacun
                puisse installer ses propres services (pour soi, pour son association, son entreprise).';
$t['home']['conc']['p4']    = 'Évidemment, nous n’avons pas la prétention de <em>concurrencer</em> ces services, nous souhaitons juste proposer un espace numérique
                neutre, non-commercial et non-agressif envers ses utilisateurs.';
$t['home']['conc']['p5']    = 'Accéder à la liste des services que nous proposons déjà (et ceux en préparation) :';
$t['home']['conc']['stitle'] = 'Soutenir';
$t['home']['conc']['sp1']   = 'Un projet d’une telle envergure ne peut se faire sans <strong>votre soutien</strong>.';
$t['home']['conc']['sp2']   = 'Si vous êtes développeur, graphiste, ergonome, administrateur système, etc, vous pouvez nous contacter pour participer
                activement au projet.';
$t['home']['conc']['cbtn']  = 'Contacter Framasoft';
$t['home']['conc']['sp3']     = 'Mais le moyen le plus simple et le plus rapide de nous aider reste de nous soutenir financièrement : cela nous permet
                de payer l’infrastructure (serveurs), et les permanents dédiés à la réussite de ce projet ambitieux. Framasoft est une association
                d’intérêt général : un don de 100€ vous reviendra, après défiscalisation, à 34€.';
$t['home']['conc']['sbtn']  = 'Faire un don<br />à Framasoft';

// Liste des services
$t['list']['title']      = 'Liste des services';
$t['list']['roadmap']    = 'Feuille de route';
$t['list']['link']       = $l['current'].'liste';
$t['list']['desc']       = 'Liste des services en ligne libres, éthiques, décentralisé et solidaires que Framasoft propose (ou qui sont en préparation) pour dégoogliser Internet';
$t['list']['css']        = '
    <link href="'.$l['current'].'css/list.css" rel="stylesheet" type="text/css" />';
$t['list']['js']         = '
    <script src="'.$l['current'].'js/list.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/leds.js" type="text/javascript"></script>';

// Liste des alternatives
$t['alt']['title']       = 'Liste des alternatives';
$t['alt']['link']        = $l['current'].'alternatives';
$t['alt']['desc']        = 'Liste des alternatives en ligne libres, éthiques, décentralisé et solidaires que Framasoft recommande pour dégoogliser internet';
$t['alt']['css']         = '
    <link href="'.$l['current'].'css/list.css" rel="stylesheet" type="text/css" />';
$t['alt']['js']          = '
    <script src="'.$l['current'].'js/list.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/leds.js" type="text/javascript"></script>';
$t['alt']['alt1']        = 'Vous utilisez';
$t['alt']['alt2']        = ' recommande';
$t['alt']['alt3']        = 'repose sur ';
$t['alt']['altp1']       = $t['meta']['F'].' s’est donné comme objectif de <a href="'.$l['DIoL'].'">proposer une trentaine de services libres alternatifs</a>
                            face aux services qui aspirent nos données et nous enferment.<br>
                            Mais il existe bien d’autres services et acteurs qui œuvrent à dégoogliser internet.';
$t['alt']['altp2']       = 'Voici <a href="#tips" rel="nofollow">ci-dessous</a> une liste qui récapitule et complète les alternatives déjà présentées <a href="'.$l['DIo'].'">sur la page d’accueil</a>.
                            Elle est inspirée de <a href="https://prism-break.org/fr/">Prism-Break</a> qui propose aussi d’autres logiciels dans des domaines plus pointus.';
$t['alt']['altp3']       = 'Dans cette liste, chaque service est généralement composé d’<b>un site web complexe</b> <span aria-hidden="true">(<i class="fa fa-fw fa-cloud"></i>)</span>
                            qui communique avec un <b>logiciel installé sur un ordinateur</b> <span aria-hidden="true">(<i class="fa fa-fw fa-server"></i>)</span> où se trouvent les données personnelles
                            et auxquels on accède via divers <b>outils installés chez soi</b> <span aria-hidden="true">(<i class="fa fa-fw fa-home"></i>)</span>.';
$t['alt']['altp4']       = 'Ainsi, lorsque nous utilisons internet, nous devons <b>accorder notre confiance à différents maillons de la chaîne</b>
                            qui nous relie aux données personnelles placées en ligne.
                            À moins de s’auto-héberger, <b>le <i lang="en">cloud</i> est toujours l’ordinateur de quelqu’un d’autre</b>.
                            Il est donc important de savoir à qui nous faisons confiance et ce que font les logiciels de nos données.';

// Espace médias
$t['medias']['title']    = 'Espace médias';
$t['medias']['link']     = $l['current'].'medias';
$t['medias']['desc']     = '';
$t['medias']['css']      = '<link href="'.$l['current'].'css/list.css" rel="stylesheet" type="text/css" />';
$t['medias']['js']       = '<script src="'.$l['current'].'js/leds.js" type="text/javascript"></script>';

$t['medias']['subtitle']    = '3 octobre 2016 : 3e (et dernière) année de Dégooglisons Internet.';
$t['medias']['intro']       = 'Pour entamer la dernière année de sa campagne de propositions d’alternatives aux services de Google & consorts, l’association Framasoft annonce, dès le 3 octobre, six nouveaux services issus de logiciels libres.';
$t['medias']['btnCPtxt']    = 'Lire le<br/>communiqué de presse';
$t['medias']['btnCPurl']    = 'img/2016_communique_degooglisons_Framasoft.html';
$t['medias']['btnDPtxt']    = 'Télécharger le<br/>dossier de presse';
$t['medias']['btnDPurl']    = 'img/dossier_presse-Degooglisons_internet-2016.pdf';
$t['medias']['1title']      = 'Articles sur le Framablog';
$t['medias']['1intro']      = 'Le <a href="http://framablog.org">Framablog</a> est notre principal outil de communication envers le grand public. Les 6 nouveaux services proposés durant le lancement de cette campagne y seront présentées entre le 3 et le 10 octobre 2016.';
$t['medias']['1list']       = '
                        <ul>
                            <li><em>Lundi 03/10</em> : Présentation de <a href="https://framablog.org/2016/10/03/degooglisons-saison-3-30-services-alternatifs-aux-produits-de-google-co/">la 3e année de la campagne Dégooglisons Internet</a>.</li>
                            <li><em>Lundi 03/10</em> : <a href="http://framablog.org/2016/10/03/framalistes-vos-groups-nont-plus-a-appartenir-a-google">Framalistes</a>, alternative à Google Groups.</li>
                            <li><em>Mardi 04/10</em> : <a href="http://framablog.org/2016/10/04/framanotes-vos-notes-vous-appartiennent-for-ever">Framanotes</a>, alternative à Evernote.</li>
                            <li><em>Mercredi 05/10</em> : <a href="http://framablog.org/2016/10/05/framaforms-noffrez-plus-les-reponses-que-vous-collectez-a-google">Framaforms</a> alternative à Google Forms.</li>
                            <li><em>Jeudi 06/10</em> : <a href="http://framablog.org/2016/10/06/framatalk-semez-la-discord-sur-skype-et-cie">Framatalk</a>, alternative à Skype.</li>
                            <li><em>Vendredi 07/10</em> : <a href="http://framablog.org/2016/10/07/framagenda-ne-partagez-plus-votre-planning-et-vos-contacts-avec-la-nsa">Framagenda</a> alternative à Google Agenda & Contacts.</li>
                            <li><em>Lundi 10/10</em> : <a href="http://framablog.org/2016/10/10/myframa-vos-favoris-et-framasofteries-partout-avec-vous-rien-qua-vous">MyFrama</a> alternative à Del.icio.us & au compte unifié Google.</li>
                        </ul>';
$t['medias']['2title']      = 'Liens vers les services';
$t['medias']['2intro']      = 'Bien qu’elles soient présentées tout au long de la semaine sur notre blog, ces six nouveautés seront en ligne dès le 3 octobre. Cliquez sur le nom du service pour l’essayer.';
$t['medias']['2list']       = '
                        <ul>
                            <li><a href="https://framalistes.org"><b class="violet">Frama</b><b class="vert">listes</b></a></li>
                            <li><a href="https://framanotes.org"><b class="violet">Frama</b><b class="vert">notes</b></a></li>
                            <li><a href="https://framaforms.org"><b class="violet">Frama</b><b class="vert">forms</b></a></li>
                            <li><a href="https://framatalk.org"><b class="violet">Frama</b><b class="vert">talk</b></a></li>
                            <li><a href="https://framagenda.org"><b class="violet">Fram</b><b class="vert">agenda</b></a></li>
                            <li><a href="https://my.framasoft.org"><b class="violet">My</b><b class="vert">Frama</b></a></li>
                        </ul>';

$t['medias']['tabstitle']   = 'Visuels de la campagne Dégooglisons, saison 3.';
$t['medias']['tabsintro']   = 'Sauf mention contraire, tous nos visuels sont réalisés par <a href="http://ptilouk.net">Simon « Gee » Giraudot</a> et sont librement réutilisables sous la licence <a href="http://creativecommons.org/licenses/by-sa/4.0/deed.fr"><span lang="en">Creative Commons By</span>-<abbr>SA</abbr> 4.0</a>.</em> Ces visuels sont en grand format (contrairement aux apparences). Néanmoins, si vous avez besoin d’une plus haute résolution, n’hésitez pas à nous contacter.';
$t['medias']['tabssaveas']  = 'Clic droit sur l’image et « Enregistrer l’image sous » pour la réutiliser';

$t['medias']['t1']          = 'Cartes';
$t['medias']['t1i1txt']     = 'Carte « Avant »';
$t['medias']['t1i1url']     = 'img/Carte2016-romains.png';
$t['medias']['t1i1desc']    = 'Carte de la France envahie par les services GAFAM (oct 2014)';
$t['medias']['t1i2txt']     = 'Carte « Après »';
$t['medias']['t1i2url']     = 'img/Carte2016-victoires.png';
$t['medias']['t1i2desc']    = 'Carte de la France avec les alternatives Framasoft (oct 2016)';
$t['medias']['t1i3txt']     = 'Carte animée';
$t['medias']['t1i3url']     = 'img/Carte2016-animation.gif';
$t['medias']['t1i3desc']    = 'Animation de la reconquête des services GAFAM (format .gif)';

$t['medias']['t2']          = 'Dessins';
$t['medias']['t2i1txt']     = 'Dessin « Verrouillage »';
$t['medias']['t2i1url']     = 'img/stevusjobus.png';
$t['medias']['t2i2txt']     = 'Dessin « Cyber Police »';
$t['medias']['t2i2url']     = 'img/cyberpolicus.png';
$t['medias']['t2i3txt']     = 'Dessin « Espions »';
$t['medias']['t2i3url']     = 'img/bourrepifix.png';
$t['medias']['t2i4txt']     = 'Dessin « Stallman »';
$t['medias']['t2i4url']     = 'img/stallmanoramix.png';
$t['medias']['t2i5txt']     = 'Dessin « Flicage »';
$t['medias']['t2i5url']     = 'img/village.png';
$t['medias']['t2i6txt']     = 'Dessin « GAFAM »';
$t['medias']['t2i6url']     = 'img/GAFAM.png';
$t['medias']['t5i6txt']     = '<b class="violet">Dégooglisons</b> <b class="orange">Internet</b>';
$t['medias']['t5i6url']     = 'img/anim_dio'; // .mp4 et .webm

$t['medias']['t3']          = 'Vidéos';
$t['medias']['t3intro']     = 'Nous avons pu expliquer notre projet lors de conférences. Nous avons sélectionné ces deux captations vidéos (et leur code d’intégration) pour que vous puissiez librement les réutiliser sur vos sites webs.';
$t['medias']['t3v1txt']     = 'Version courte (17mn)';
$t['medias']['t3v1img']     = 'https://framatube.org/images/media/925l.jpg';
$t['medias']['t3v1mp4']     = 'https://framatube.org/blip/gosset-owf-dio.mp4';
$t['medias']['t3v1webm']    = 'https://framatube.org/blip/gosset-owf-dio.webm';
$t['medias']['t3v2txt']     = 'Version longue (54mn)';
$t['medias']['t3v2img']     = 'https://framatube.org/blip/gosset-degooglisons-internet.png';
$t['medias']['t3v2mp4']     = 'https://framatube.org/blip/gosset-degooglisons-internet.mp4';
$t['medias']['t3v2webm']    = 'https://framatube.org/blip/gosset-degooglisons-internet.webm';

$t['medias']['t4']          = 'Capture d’écran';

$t['medias']['t6']          = 'Présentation';
$t['medias']['t6url']       = 'presentation/';

$t['medias']['t7']          = '<span lang="en">Stickers</span>';
$t['medias']['t7i1txt']     = 'GAFAM';
$t['medias']['t7i1url']     = 'img/stickerDiO_gafam.png';
$t['medias']['t7i1desc']    = '<i lang="en">GAFAM, we &lt;3 your data!</i>';
$t['medias']['t7i2txt']     = 'Google';
$t['medias']['t7i2url']     = 'img/stickerDiO_google.png';
$t['medias']['t7i2desc']    = '<i lang="en">Warning: do not feed the Google.</i>';
$t['medias']['t7i3txt']     = 'Amazon';
$t['medias']['t7i3url']     = 'img/stickerDiO_amazon.png';
$t['medias']['t7i3desc']    = 'Attention : Amazon très méchant';
$t['medias']['t7i4txt']     = 'Facebook';
$t['medias']['t7i4url']     = 'img/stickerDiO_facebook.png';
$t['medias']['t7i4desc']    = '<i lang="en">Facebook is watching you.</i>';
$t['medias']['t7i5txt']     = 'Apple';
$t['medias']['t7i5url']     = 'img/stickerDiO_apple.png';
$t['medias']['t7i5desc']    = '<i lang="en">Apple: Kids, don\'t do drugs.</i>';
$t['medias']['t7i6txt']     = 'Microsoft';
$t['medias']['t7i6url']     = 'img/stickerDiO_microsoft.png';
$t['medias']['t7i6desc']    = '<i lang="en">Microsoft: do you need a backdoor?</i>';

$t['medias']['presstitle']  = 'Revue de presse';
$t['medias']['pressintro']  = 'La campagne « Dégooglisons Internet » a déjà fait parler d’elle durant ses deux ans d’existance. Voici quelques extraits de notre <a href="https://wiki.framasoft.org/speakabout">revue de presse</a>.';
$t['medias']['pressth1']    = 'Date';
$t['medias']['pressth2']    = 'Média';
$t['medias']['pressth3']    = 'Liens';
$t['medias']['presslist']   = [
    ['24/08/2016', 'Opensource.com (anglais)',
    'https://opensource.com/business/16/8/open-source-alternatives-office-365',
    'Lien vers l’article'],
    ['27/03/2016', 'France 24 / Mashable',
    'http://mashable.france24.com/tech-business/20160226-google-internet-framasoft',
    'Lien vers l’article'],
    ['17/03/2016', 'La Tribune',
    'http://www.latribune.fr/technos-medias/internet/les-chatons-toutes-griffes-dehors-face-aux-geants-du-net-557084.html',
    'Lien vers l’article'],
    ['12/10/2015', 'France Info',
    'http://media.radiofrance-podcast.net/podcast09/18998-12.10.2015-ITEMA_20815840-0.mp3',
    'Lien vers le podcast'],
    ['08/10/2015', 'Korben.info',
    'http://korben.info/framasoft-degooglise-encore-plus-fort.html',
    'Lien vers l’article'],
    ['06/10/2015', 'Next Inpact',
    'http://www.nextinpact.com/news/96764-degooglisons-internet-saison-2-framasoft-lance-produit-par-jour-cette-semaine.htm',
    'Lien vers l’article'],
    ['17/08/2015', 'France Culture (Du grain à moudre)',
    'http://media.radiofrance-podcast.net/podcast09/10175-17.08.2015-ITEMA_20783026-0.mp3',
    'Lien vers le podcast'],
    ['24/05/2015', 'Le Soir (Belgique)',
    'http://www.lesoir.be/886985/article/economie/vie-du-net/2015-05-23/google-vivre-sans-c-est-parfois-possible',
    'Lien vers l’article (abonnés)'],
    ['29/04/2015', 'Canal + (La Nouvelle Édition)',
    'http://www.canalplus.fr/c-emissions/c-la-nouvelle-edition/pid6850-la-nouvelle-edition.html?vid=1249359',
    'Lien vers la vidéo'],
    ['03/02/2015', 'L’Humanité',
    'http://www.humanite.fr/logiciel-libre-et-ess-une-economie-lintention-de-tous-564379',
    'Lien vers l’article'],
    ['02/11/2014', 'Libération',
    'http://www.liberation.fr/ecrans/2014/11/02/avec-framasoft-l-appli-fait-de-la-resistance_1134654',
    'Lien vers l’article'],
    ['01/11/2014', 'France Inter (Comme un buit qui court)',
    'http://www.franceinter.fr/emission-comme-un-bruit-qui-court-la-libye-au-bord-du-chaos-ces-francais-qui-partent-faire-le-jihade',
    'Lien vers la page d’écoute']
];
$t['medias']['framatitle']  = 'Framasoft en quelques liens…';
$t['medias']['framalist']   = '
                        <ul>
                            <li><a href="https://contact.framasoft.org/#questions">Nous contacter</a> (le formulaire renvoie direcement à notre service presse).</li>
                            <li><a href="https://fr.wikipedia.org/wiki/Framasoft">Page wikipédia</a> consacrée à Framasoft.</li>
                            <li><a href="https://soutenir.framasoft.org/association">Présentation complète</a> de Framasoft.</li>
                            <li><a href="https://wiki.framasoft.org/speakabout">Revue de presse</a> (et de web) de Framasoft.</li>
                        </ul>';
$t['medias']['framap1']     = 'Framasoft est un réseau d’éducation populaire, issu du monde éducatif, se consacrant à promouvoir et diffuser le logiciel et la culture libre.';
$t['medias']['framap2']     = 'Trait d’union entre le monde du Libre et le grand public, l’association propose une galaxie de projets (annuaire de logiciels, maison d’édition, moteur de recherche, etc.) rassemblés en 3 axes : logiciels libres, culture libre et services libres.';
$t['medias']['framap3']     = '<em>Le logo est une œuvre de JosephK sous licence <a href="http://creativecommons.org/licenses/by-sa/4.0/deed.fr"><span lang="en">Creative Commons By</span>-<abbr>SA</abbr> 4.0</a>.</em>';

// Texte générique
$t['_Close']            = 'Fermer';
$t['_More']             = '+ d’infos';
$t['_Support']          = 'Soutenir';
$t['_Use']              = 'Utiliser';
$t['_Install']          = 'Installer';
$t['_Project updated']  = 'Projet mis à jour';
$t['_Project loading']  = 'Projet en cours';
$t['_Project running']  = 'Projet actif';
$t['_ is an instance based on '] = ' est une instance basée sur le logiciel libre ';
$t['_Read more']        = 'En savoir plus';
$t['_Some examples ?']  = 'Des exemples ?';
$t['_Back to top']      = 'Retour en haut';
$t['_Editor: ']         = 'Éditeur : ';
$t['_Equivalent(s): ']          = 'Équivalent(s) : ';
$t['_Alternative(s) online: ']  = 'Alternative en ligne';
$t['_Alternative(s) offline: '] = 'Alternative à installer';
$t['_Framasoft service: ']      = 'Service Framasoft : ';
$t['_release planned on ']      = 'sortie en ';
$t['_Select the language']      = 'Choisir la langue';
$t['_Change the language']      = 'Changer la langue';
$t['_OK']                       = 'OK';
$t['_since']                    = 'depuis';
$t['_GAFAM']                    = 'GAFAM';
$t['_& co']                     = '& cie';
$t['_Software']                 = 'Logiciels';
$t['_LEDS']                     = 'LEDS';
$t['_Libre, Éthique, Décentralisé et Solidaire'] = 'Libre, Éthique, Décentralisé et Solidaire';
$t['_ with your help']          = ' avec votre aide';

/*************
 * Objectifs *
 *************/
$d['tip2017'] = [
    'name'  => '180 000€ + 1 250 donateurs récurrents',
    'F'     => '11 permanents',
    'mBody' => '<p>Nous toucherons au but ! Il restera encore des services « sensibles » à mettre en place, notamment les services liés à la messagerie (liste de diffusion, et bien entendu emails).</p>
                <p>Non seulement ces services sont les plus coûteux à mettre en place (il est plus simple de gérer un site qui fait un million de visites par jour que de gérer 10 000 boîtes mails), mais il faudra aussi (surtout !) assurer le bon fonctionnement (maintenance, mise à jour, support, etc.) des projets mis en place depuis 2011.</p>
                <p>Cela nécessitera le recrutement de 3 nouvelles personnes (essentiellement sur les aspects techniques).</p>
                <p>Pour vous donner une échelle de nos besoins, notre objectif 2017 (180 000€ et 1 250 donateurs récurrents) représente le coût de 54 mètres d’autoroute, ou 0,0006% du C.A. annuel de Google</p>'
];
$d['tip2016'] = [
    'name'  => '130 000€ + 1 080 donateurs récurrents',
    'F'     => '8 permanents',
    'mBody' => '<p>Début 2016, Framasoft comptera déjà plus d’une vingtaine de services en ligne. Mais nous ne comptons pas nous arrêter là ! Nous souhaitons en effet proposer de nouvelles alternatives libres aux applications des géants d’Internet. Notamment :</p>
                <ul>
                    <li>un service d’agenda partagé (en alternative à Google Agenda)</li>
                    <li>un service de microblogging (en alternative à Twitter)</li>
                    <li>un service d’hébergement de vidéos libres (en alternative à Youtube)</li>
                </ul>
                <p>Pour assurer la mise en place de ces projets ainsi que maintenir les projets existants, l’association aura besoin de recruter 3 nouvelles personnes (un développeur, un second adminsys, et un administrateur). </p>
                <p>Afin de ne pas systématiquement solliciter nos gentils donnateurs, une partie de la somme nécessaire pourra provenir de subventions.</p>
                <p>Pour vous donner une échelle de nos besoins, notre objectif 2016 (130 000€ et 1 080 donateurs récurrents) représente le coût de 38 mètres d’autoroute, ou 0,0004% du C.A. annuel de Google</p>'
];
$d['tip2015'] = [
    'name'  => '70 000€ + 780 donateurs récurrents',
    'F'     => '5 permanents',
    'mBody' => '<p>Framasoft souhaite mettre à disposition plusieurs services en ligne importants en 2015 :</p>
                <ul>
                    <li>un service de d’hébergement de documents (en alternative à Dropbox)</li>
                    <li>un service d’envoi de gros fichiers (en alternative à WeTransfer)</li>
                    <li>un service de présentations/diaporama en ligne (un « PowerPoint en ligne », si vous préférez)</li>
                    <li>un service de visioconférence (en alternative à Skype), directement depuis votre navigateur, sans installation de logiciel</li>
                </ul>
                <p>Pour assurer la mise en place de ces projets ainsi que maintenir les projets existants, l’association aura besoin d’embaucher, en plus de ses permanents actuels, un administrateur systèmes à temps plein, ainsi que 2 stagiaires. </p>
                <p>Pour vous donner une échelle de nos besoins, notre objectif 2015 (70 000€ et 780 donateurs récurrents) représente le coût de 21 mètres d’autoroute, ou 0,0002% du C.A. annuel de Google</p>'
];
$d['tip2014'] = [
    'name'  => '35 000€ + 550 donateurs récurrents',
    'F'     => '3 permanents',
    'mBody' => '<p>L’année 2014 aura été une année particulièrement chargée pour l’association Framasoft, puisqu’il aura fallu mettre au point notre plan de bataille pour vous permettre de résister à Google, Facebook et autres…</p>
                <p>L’association à notamment investi (en temps et en argent) dans l’infrastructure technique qui permet d’héberger les services actuels et nous permettront d’accueillir confortablement les applications que nous vous proposeront dans les prochaines années.</p>
                <p>Nous avons besoin de votre aide pour :</p>
                <ul>
                    <li>accroître la taille de notre infrastructure technique (augmenter la puissance de calcul et le stockage de notre cluster de machines virtuelles)</li>
                    <li>assurer les salaires de nos deux permanents</li>
                    <li>permettre l’embauche d’un troisième salarié (chargé de communication)</li>
                    <li>financer le développement d’améliorations de certains services proposés (Framadate et Framindmap, notamment)</li>
                    <li>assurer la coordination de l’ensemble du projet "Dégooglisons Internet"</li>
                </ul>
                <p>L’objectif fixé est de passer de 400 à 550 donateurs récurrents, ainsi que de récolter 35 000€ en dons ponctuels sur l’année.</p>
                <p>Nous vous rappelons que Framasoft est une association largement autofinancée par ses donateurs. Pour vous donner une échelle de nos besoins, notre objectif 2014 (35 000€ et 550 donateurs récurrents) représente le coût de 8 mètres d’autoroute, ou 0,000083% du C.A. annuel de Google.</p>'
];
for ($i=2014; $i<2018; $i++) {
    $d['tip'.$i]['FDate']   = $i;
    $d['tip'.$i]['sDesc']   = 'Objectifs';
    $d['tip'.$i]['lDesc']   = 'Pour mener à bien ces projets, nous avons besoin de votre aide !';
    $d['tip'.$i]['mTitle']  = 'Nos objectifs pour '.$i;
    $d['tip'.$i]['mFooter'] = '<a href="'.$l['S'].'" class="btn btn-soutenir"><i class="fa fa-fw fa-heart"></i> Soutenir</a>';
}

/****************
 * Services web *
 ****************

$k = 'id';                                                              // pour la carte : id="a-avaaz" (area), id="o-avaaz" (option), id="t-avaaz" (texte) et pour la liste : associer modales à chaque post-it

---- Facultatif : déjà dans data.php -----------------------------------
$d[$k]['FL']      = '';                                                 // lien pour le bouton « Utiliser » + $d[$k]['F']
$d[$k]['CL']      = '';                                                 // lien pour le bouton « Installer » (Framacloud)
$d[$k]['S']       = '<a href="*">*</a>';                                // lien et nom du logiciel que Frama utilise
$d[$k]['F']       = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">*</b></a>';
$d[$k]['name']    = '';                                                 // Nom du service proprio sur la carte
$d[$k]['eq']      = '';                                                 // Équivalents
$d[$k]['altOn']   = '';                                                 // Alternatives en ligne
$d[$k]['altOff']  = '';                                                 // Alternatives hors ligne / à installer sur un serveur (doit y avoir au moins $d[$k]['S'])
$d[$k]['pos']     = '';                                                 // Coordonnées sur la carte : 'x, y, R'
$d[$k]['FDate']   = '201*';                                             // date ou article du Framablog (contient la date dans l'url)

---- À remplir ici : data.xx.php ---------------------------------------
$d[$k]['sDesc']   = '';                                                 // Description courte (en titre sur carte et post-it)
$d[$k]['lDesc']   = '';                                                 // Description longue (au dos du post-it)
$d[$k]['mTitle']  = '';                                                 // Modale ↓
$d[$k]['mBody']   = '<p>
                        '.$d[$k]['F'].' vous permet de…
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> …
                    </p>';

---- Facultatif : déjà dans list.php (l.23-26)--------------------------
$d[$k]['mFooter'] = '<p class="precisions">'.$d[$k]['F'].' est une instance basée sur le logiciel libre '.$d[$k]['S'].'</p>';

*/

// Avaaz
$k= 'avaaz';
$d[$k]['sDesc']  = 'Pétitions';
$d[$k]['lDesc']  = 'Lancez vos pétitions sans offrir les adresses de vos soutiens';
$d[$k]['mTitle'] = 'Libérez vos pétitions';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de lancer des pétitions sur les sujets qui vous tiennent à cœur. En quelques clics, votre pétition est publiée et les adresses de vos soutiens ne seront pas exploités par des régies publicitaires.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Inscrivez-vous, lancez une nouvelle pétition en suivant les instructions. Votre sondage sera créé. Vos soutiens n’aurons pas besoin de s’inscrire pour pouvoir y participer.
                    </p>';

// Bit.ly
$k= 'bitly';
$d[$k]['sDesc']  = 'Réduction d’URL';
$d[$k]['lDesc']  = 'Des adresses plus courtes en toute discrétion';
$d[$k]['mTitle'] = 'Finies les adresses trop longues';
$d[$k]['mBody']  = '<p>
                        Avec '.$d[$k]['F'].' ou <a href="https://huit.re">Huit.re</a>, il est possible de raccourcir des adresses web trop longues sans toutefois en tracer l’utilisation.
                        Sur les réseaux sociaux et le microblogging, disposer d’une adresse raccourcie permet d’économiser de l’espace et gagner en clarté.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> entrez l’adresse dans sa version originale et Frama.link la raccourcira.
                    </p>';

// Blogger
$k= 'blogger';
$d[$k]['sDesc']  = 'Hébergement de sites';
$d[$k]['lDesc']  = 'Créez un site web qui respectera vos visiteurs';
$d[$k]['mTitle'] = 'Votre site web en quelques clics';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de créer un site web facilement, avec des outils libres et de l’héberger sur nos serveurs. Aucune publicité ni traquage ne portera atteinte aux données de vos visiteurs et visiteuses.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Choisissez votre sous-domaine, le type de site que vous voulez créer (page web, blog) puis laissez-vous guider.
                    </p>';

// Bubbl.us
$k= 'bubblus';
$d[$k]['name']   = 'Bubbl.us';
$d[$k]['sDesc']  = 'Cartes heuristiques';
$d[$k]['lDesc']  = 'Fabriquez vos cartes mentales';
$d[$k]['mTitle'] = 'Pourquoi créer une carte mentale ?';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet d’organiser un brainstorming, ordonner vos idées à plusieurs, apprendre et faire apprendre une leçon, réaliser des classifications, identifier les éléments importants.
                    </p>
                       <p><video controls="controls" preload="none"
                        width="420" height="248" poster="https://framatube.org/images/media/866l.jpg">
                        <source src="https://framatube.org/files/1230-framindmap-creer-une-carte-mentale.mp4" type="video/mp4"></source>
                        <source src="https://framatube.org/files/1229-framindmap-creer-une-carte-mentale.webm" type="video/webm"></source>
                          </video>
                       </p>
                       <p><small><em>Tutoriel réalisé par Claire Cassaigne</em> - La <a href="https://framatube.org/files/1229-framindmap-creer-une-carte-mentale.webm">vidéo</a> au format webm</small></p>

                    <p>
                        <b class="violet">Pourquoi utiliser Framindmap ?</b> Il est utilisable en ligne, sans installation, aucune inscription n’est requise, vous pouvez exporter
                        votre document sous forme d’image, c’est un logiciel libre et gratuit, les données vous appartiennent.
                    </p>';

// Del.icio.us
$k= 'delicious';
$d[$k]['sDesc']  = 'Marque-pages';
$d[$k]['lDesc']  = 'Retrouvez facilement vos liens, et vos services Framasoft';
$d[$k]['mTitle'] = 'Triez tout le web si vous voulez (mais c´est long)';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un petit fourre-tout numérique, qui vous permet de conserver et retrouver les liens que vous aimez à la manière de del.ico.us ! Avec un système d´étiquettes et de tri automatique, vous pouvez ranger aisément vos onglets et marque-pages, et utiliser le bouton MyFrama pour retrouver les services Framasoft que vous utilisez !
                    </p>
                    <p>
                      <b class="violet">Fonctionnement :</b> Créez votre compte, puis ajoutez le marque-pages interactif (Bookmarklet) à la barre personelle de voter navigateur. Utilisez-le pour conserver un lien (<abbr>URL</abbr>) en lui adjoignant un titre, une description et des étiquettes. Le bouton MyFrama sur nos sites sert à conserver le lien du service que vous utilisez : avec lui, tout est trié automatiquement ! Pensez à créer vos propres règles de tri automatiques qui ajoutent l´étiquette de votre choix aux morceaux d´adresses web que vous identifierez !
                    </p>';

// Doodle
$k= 'doodle';
$d[$k]['sDesc']  = 'Réunions et sondages';
$d[$k]['lDesc']  = 'Convenir d’une réunion et créer un sondage';
$d[$k]['mTitle'] = 'Organiser des rendez-vous simplement et librement';
$d[$k]['mBody']  = '<p>
                        Avec '.$d[$k]['F'].' vous serez en mesure de planifier un rendez-vous à plusieurs ou créer un sondage en ligne. Framadate ne stocke
                        pas vos données !
                    </p>
                    <p class="violet">Fonctionnalités :</p>
                    <ul>
                        <li>envoi de courriel à chaque réponse</li>
                        <li>modification du sondage en cours</li>
                        <li>planification d’une dead-line</li>
                        <li>nommez votre sondage et communiquez l’adresse à vos collaborateurs</li>
                    </ul>';

// Dropbox
$k= 'dropbox';
$d[$k]['sDesc']  = 'Stockage de documents';
$d[$k]['lDesc']  = 'Hébergez, synchronisez et partagez vos documents';
$d[$k]['mTitle'] = 'Héberger ses documents en ligne';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de stocker en ligne vos documents, de les synchroniser sur vos ordinateurs, tablettes, téléphones, etc et de les partager avec qui vous voulez…
                    </p>
                    <p>
			Nous avons ouvert 5000 comptes d´une capacité de 2 Go afin de permettre de tester une alternative libre… Pour une solution plus importante ou plus disponible, vous pouvez aller chercher un hébergement chez les <a href="https://chatons.org">CHATONS</a> dont notre partenaire <a href="https://indiehosters.net">Indie Hosters</a> (ou vous essayer à l´auto hébergement avec <a href="http://yunohost.org/">Yunohost</a>, <a href="http://labriqueinter.net/">la Brique internet</a> ou <a href="https://cozy.io/fr/">My Cozy Cloud</a>).
                    </p>';

// Evernote
$k= 'evernote';
$d[$k]['sDesc']  = 'Prise de notes';
$d[$k]['lDesc']  = 'Vos notes, images et liens favoris à portée de doigt&nbsp;!';
$d[$k]['mTitle'] = 'Vos notes ne regardent que vous.';
$d[$k]['mBody']  = '<p>
                        Avec '.$d[$k]['F'].' vous pouvez prendre et conserver des notes, images, liens… et même des fichiers&nbsp;; et les synchroniser avec tous vos appareils (voire les partager avec des ami-e-s).
                    </p>
                    <p class="violet">Fonctionnalités :</p>
                    <ul>
                        <li>prise de notes synchronisées</li>
                        <li>mise en page facilitée (syntaxe Markdown)</li>
                        <li>hébergement d´images et de fichiers (légers)</li>
                        <li>possibilité de partager un «&nbsp;Tableau de notes&nbsp;» avec d´autres utilisateurs</li>
                    </ul>';

// Facebook
$k= 'facebook';
$d[$k]['sDesc']  = 'Réseau social';
$d[$k]['lDesc']  = 'Un réseau social éthique et décentralisé';
$d[$k]['mTitle'] = 'Rejoignez vos amis en zone libre';
$d[$k]['mBody']  = '<p>
                        Sur '.$d[$k]['F'].', vous pouvez retrouver un réseau social qui respecte vos données. Framasphère est un nœud (appelé <i>pod</i>)
                        du réseau social libre Diaspora*.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> échanger des messages et photos avec n’importe quelle autre personne du réseau Diaspora*, gérer vos contacts, tags,
                        mentions, repartages… Vous pouvez aussi publier sur d’autres réseaux sociaux (Facebook, Twitter, Tumblr ou Wordpress).
                    </p>';

// Github
$k= 'github';
$d[$k]['sDesc']  = 'Hébergement de code';
$d[$k]['lDesc']  = 'Du code libre c’est bien. Sur une plateforme libre c’est mieux !';
$d[$k]['mTitle'] = 'Hébergement de code libre';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un outil qui s’adresse avant tout aux développeurs. Il permet la création de 42 dépôts maximum par compte (si vous avez besoin de plus, songez sérieusement à vous auto-héberger). Et, petit plus par rapport à GitHub, vous pouvez créer des dépôts privés.</p>
                    </p>
                    <p>Il est également possible de « mirrorer » automatiquement vos dépôts sur GitHub : vous continuez à « engraisser la bête », mais vous êtes déjà moins dépendant, et vous conservez une visibilité auprès des presque 10 millions d’inscrits sur GitHub. Votre dépôt sur notre Framagit est automatiquement poussé sur votre dépôt Github. C’est d’ailleurs la solution retenue par Framasoft, qui dispose toujours d’un compte GitHub, alors que les développements sont réalisés sur notre forge.</p>';

// Gmail
$k= 'gmail';
$d[$k]['sDesc']  = 'Service de messagerie';
$d[$k]['lDesc']  = 'Vos mails, sans la NSA dedans';
$d[$k]['mTitle'] = 'Votre courrier, dans une enveloppe blindée';
$d[$k]['mBody']  = '';

// Google Agenda
$k= 'gagenda';
$d[$k]['sDesc']  = 'Agenda partagé';
$d[$k]['lDesc']  = 'À vous de choisir qui verra votre planning';
$d[$k]['mTitle'] = 'Vos rendez-vous vous appartiennent';
$d[$k]['mBody']  = '<p>
                        Avec '.$d[$k]['F'].' vous pouvez créer des agendas personnels, professionnels, le planning d´une salle ou des activités de votre organisation, et les partager librement. Vous restez maîtres de vos données, et vous choisissez auprès de qui, où et quand elles s´affichent.
                    </p>
                    <p class="violet">Fonctionnalités :</p>
                    <ul>
                        <li>création de multiples agendas</li>
                        <li>listes de contacts et de taches</li>
                        <li>synchronisation sur vos appareils</li>
                        <li>partager des agendas</li>
                        <li>inviter (par email) des participants à des rendez-vous</li>
                        <li>possibilité d´affichage public des agendas</li>
                    </ul>';

// Google Books
$k= 'gbooks';
$d[$k]['sDesc']  = 'Livres en ligne';
$d[$k]['lDesc']  = 'Une bibliothèque de plusieurs milliers d’ouvrages';
$d[$k]['mTitle'] = 'Catalogue d’ouvrages accessibles pour tous';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est le catalogue <abbr>OPDS</abbr> de Framasoft. « Euh… Oui, mais encore ? », nous direz-vous. Un catalogue <abbr>OPDS</abbr> est un site auquel vous pouvez vous abonner avec un logiciel supportant cette fonctionnalité (certaines liseuses en embarquent un, pour Android, il existe Aldiko et bien d’autres), vous donnant accès rapidement et simplement à tout une bibliothèque depuis votre ordinateur, smartphone ou tablette.
                    </p>
                    <p>Le catalogue <abbr>OPDS</abbr> de Framasoft vous donne accès à des centaines d’ouvrages non protégés par « copyright ».</p>';

// Google Docs
$k= 'gdocs';
$d[$k]['sDesc']  = 'Rédaction collaborative';
$d[$k]['lDesc']  = 'Du traitement de texte en ligne et à plusieurs !';
$d[$k]['mTitle'] = 'Outil de rédaction collaborative';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un service de rédaction collaborative en ligne basé sur le logiciel
                        '.$d[$k]['S'].'.
                    </p>
                    <p>
                        Un « pad » est un éditeur de texte en ligne. Son vrai plus ? L’édition collaborative : les contributions de chaque
                        utilisateur apparaissent immédiatement dans les pads de tous les participants, signalées par un code couleur.
                    </p>
                    <p class="violet">Fonctionnalités :</p>
                    <ul>
                        <li>Ouvrir un pad public ou privé</li>
                        <li>Rédiger votre document</li>
                        <li>Inviter des collaborateurs</li>
                        <li>Un code couleur pour chacun</li>
                        <li>Tchat intégré</li>
                        <li>Historique des versions</li>
                        <li>Exporter votre travail</li>
                        <li>Et bientôt : gérer des sessions et des groupes avec MyPads !</li>
                    </ul>';

// Google Form
$k= 'gforms';
$d[$k]['sDesc']  = 'Questionnaires en ligne';
$d[$k]['lDesc']  = 'Créez simplement des questionnaires';
$d[$k]['mTitle'] = 'Création de questionaires';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de créer les questionnaires qu´il vous faut, que ce soit dans un cadre scolaire, familial ou associatif. Créez vos questions en fonction de vos besoins, des formulaires à choix multiples aux champs de texte libre.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement</b> : créez un compte sur Framaforms et lancez-vous dans la création des questionnaires, en fonction de vos besoins. Vos sondés n’ont pas besoin de s’inscrire pour pouvoir répondre. Vous disposez d’une synthèse des réponses.
                    </p>';

// Google Groupes
$k= 'ggroups';
$d[$k]['sDesc']  = 'Listes de diffusion';
$d[$k]['lDesc']  = 'Créez une liste de discussion par email';
$d[$k]['mTitle'] = 'Échangez sans être lus par Big Brother';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de créer des liste de diffusion emails : toute personne s´abonnant à votre liste pourra recevoir les emails qui y sont envoyés, et y participer à son tour. À vous de choisir si cette liste est publique, semi-privée ou privée.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement</b> : créez un compte sur Framalistes pour faire, paramétrer et gérer votre liste de diffusion, ou tout simplement pour y rechercher les listes qui vous intéressent et gérer vos abonnements.
                    </p>';

// Google Maps
$k= 'gmaps';
$d[$k]['sDesc']  = 'Cartographie';
$d[$k]['lDesc']  = 'Créer vos cartes personnalisées en ligne';
$d[$k]['mTitle'] = 'Créez vos cartes personnalisées en ligne';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' permet de créer des cartes personnalisées sur des fonds OpenStreetMap et de les afficher dans votre site.
                    </p>
                    <p><b class="violet">Fonctionnement :</b></p>
                    <ul>
                        <li>Choisir les fonds de carte</li>
                        <li>Ajouter des POI: marqueurs, lignes, polygones…</li>
                        <li>Choisir la couleur et les icônes</li>
                        <li>Gérer les options de la carte: afficher une minicarte, géolocaliser l’utilisateur…</li>
                        <li>Import des données géographiques en masse (geojson, gpx, kml, osm…)</li>
                        <li>Choisir la licence de vos données</li>
                        <li>Exporter et partager votre carte</li>
                    </ul>';

// Google Reader
$k= 'greader';
$d[$k]['sDesc']  = 'Lecteur de flux';
$d[$k]['lDesc']  = 'Suivez l’actualité et faites vos choix librement';
$d[$k]['mTitle'] = 'Toujours au courant, jamais en retard';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous propose un lecteur de flux RSS en ligne, vous permettant d’être toujours au courant de l’actualité à partir des flux RSS de vos sites préférés !
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> après avoir créé votre compte, enregistrez vos flux RSS et suivez-les.
                        Comment faire plus simple ?
                    </p>';

// Google Search
$k= 'gsearch';
$d[$k]['sDesc']  = 'Moteur de recherche';
$d[$k]['lDesc']  = 'Et si vos recherches n’étaient plus fichées par Google ?';
$d[$k]['mTitle'] = 'Une recherche anonyme';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un meta-moteur de recherche anonyme. Cela signifie que vos recherches effectuées au travers de ce moteur sont envoyées à différents moteurs, avant d’être affichées dans votre navigateur. L’intérêt, c’est que c’est notre moteur qui fait alors office d’intermédiaire entre vous et Google (ou les autres moteurs). Votre adresse IP n’est donc pas enregistrée chez eux. </p>
                        <p>Evidemment, vous devez avoir confiance en Framasoft/Framabee si vous souhaitez l’utiliser, c’est pourquoi nous proposons une <a href="'.$l['Charte'].'">charte</a>.
                    </p>';

// Google Slides
$k= 'gslides';
$d[$k]['sDesc']  = 'Présentations';
$d[$k]['lDesc']  = 'Des diaporamas de haute qualité sans se fatiguer';
$d[$k]['mTitle'] = 'Une application pour vos diaporamas';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permettra
                        de réaliser facilement et intuitivement vos diaporamas.
                        Grâce à cette application dans votre navigateur, nul besoin
                        de charger des logiciels lourds et compliqués.
                    </p>
                    <p class="violet">Fonctionnalités :</p>
                    <ul>
                        <li>une interface claire et intuitive &mdash; insertion facile de texte, d’images, de vidéos et de site web</li>
                        <li>sauvegarde en local de la version HTML prête à l’emploi.</li>
                    </ul>
                    <p><b class="violet">Pour plus tard,</b> si nos finances le permettent :</p>
                    <ul>
                        <li>la sauvegarde dans les nuages dans une boîte privée</li>
                        <li>une fonction d’édition collaborative…</li>
                    </ul>';

// Google Spreadsheet
$k= 'gspreadsheet';
$d[$k]['sDesc']  = 'Tableur collaboratif';
$d[$k]['lDesc']  = 'Partagez vos tableaux et collaborez !';
$d[$k]['mTitle'] = 'Un tableur en ligne';
$d[$k]['mBody']  = '<p>
                        Avec '.$d[$k]['F'].', vos données sont automatiquement sauvegardées sur Internet. Vous et vos collaborateurs pouvez collaborer sur
                        le document en même temps. Visualisez tous les changements en temps réel et travaillez ensemble sur vos inventaires, vos calculs, vos données, vos statistiques,
                        et bien plus !
                    </p>
                    <p class="violet">Fonctionnalités :</p>
                    <ul>
                        <li>Édition collaborative (plusieurs utilisateurs connectés à la même feuille de calcul)</li>
                        <li>Nombreuses fonctions disponibles (statistiques, financières, mathématiques, texte, etc.)</li>
                        <li>Possibilité de commenter des cellules</li>
                        <li>Sauvegarde automatique</li>
                        <li>Graphiques de base (histogramme, lignes, points)</li>
                        <li>Export HTML</li>
                        <li>Taille du document : jusqu’à 100 000 lignes.</li>
                    </ul>';

// Img.ur
$k= 'imgur';
$d[$k]['sDesc']  = 'Envoi d’images';
$d[$k]['lDesc']  = 'Partagez vos images anonymement';
$d[$k]['mTitle'] = 'Partagez vos images facilement';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de partager facilement des images, par exemple pour les partager sur Twitter, Facebook, ou … Framasphère !
                    </p>
                    <p>Attention, ce service n’est pas un équivalent de flickr ou instagram : il ne s’agit pas d’un service d’hébergement de photos d’utilisateurs, mais bien d’un service d’hébergement d’images anonymes (même nous, nous n’avons pas accès au contenu, qui est chiffré).</p>
                    <p>
                        '.$d[$k]['F'].' permet d’envoyer des images de façon anonyme. Vous pouvez décider du moment de leur suppression (dès la première visualisation, 24H/7j/30j/1an après leur mise en ligne).
                    </p>';

// Meetup
$k= 'meetup';
$d[$k]['sDesc']  = 'Événements communautaires';
$d[$k]['lDesc']  = 'Organisez des rencontres et des groupes d´intérêts';
$d[$k]['mTitle'] = 'Gardez le contrôle sur les rencontres que vous organisez';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de proposer des événements et rencontres, et de garder le contact avec la communauté qui partage vos intérêts !
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> à venir.
                    </p>';

// Minecraft
$k= 'minecraft';
$d[$k]['sDesc']  = 'Jeu éducatif';
$d[$k]['lDesc']  = 'Le jeu éducatif à creuser';
$d[$k]['mTitle'] = 'Construisez vos propres applications pédagogiques';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un serveur du jeu Minetest, un jeu "bac à sable" dont vous construisez et décomposez les blocs pour le modifier.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Téléchargez le logiciel client, connectez vous sur notre serveur et jouez.
                    </p>';

// Padlet
$k= 'padlet';
$d[$k]['sDesc']  = 'Organisation d’idées';
$d[$k]['lDesc']  = 'Un brainstrorming collaboratif en temps réel';
$d[$k]['mTitle'] = 'Tempête de post-it libres';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de créer un tableau à colonnes où quiconque peut venir y déposer des notes colorées. Tel <a href="https://framapad.org><b class="violet>Frama</b><b class="vert">pad</b></a>, aucune inscription n´est requise, et les modifications se voient et sont enregistrées en direct.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> allez sur le site, créez un tableau, renseignez votre pseudonyme, puis partagez l´URL (l´adresse web) avec vos collaborateurs. C´est aussi simple que cela !
                    </p>';

// Pastebin
$k= 'pastebin';
$d[$k]['sDesc']  = 'Notes anonymes';
$d[$k]['lDesc']  = 'Rédigez et partagez en toute discrétion';
$d[$k]['mTitle'] = 'Communiquez des données chiffrées';
$d[$k]['mBody']  = '<p>
                        Avec '.$d[$k]['F'].' vous pouvez partager des informations dont seuls vous et votre correspondant aurez le pouvoir de déchiffrer, et surtout de
                        manière très simple. Vous pouvez même choisir la durée de validité de l’accès !
                    </p>
                    <p>
                        <b class="violet">Pour quels usages ?</b> Vous pouvez avoir besoin de communiquer une ou plusieurs informations sans vouloir passer par la voie classique
                        du courriel ou du petit bout de papier. Framabin vous permet d’envoyer une adresse et donner accès à ces informations en toute sécurité et simplicité. Le
                        serveur stocke des données illisibles pour lui.
                    </p>';

// Pocket
$k= 'pocket';
$d[$k]['sDesc']  = 'Sauvegarde de contenu';
$d[$k]['lDesc']  = 'Sauvegardez et lisez plus tard';
$d[$k]['mTitle'] = 'Sauvegardez, lisez plus tard';
$d[$k]['mBody']  = '<p>
                        Avec '.$d[$k]['F'].', vous ne perdrez plus les contenus du Web qui vous intéressent mais que vous n’avez pas le temps de
                        parcourir. D’un clic, vous enregistrez votre sélection et vous la lirez quand vous voudrez. L’application sauvegarde votre sélection pour vous permettre d’en
                        profiter quand vous en aurez le temps.
                    </p>
                    <p>
                        Framabag est un <b class="violet">service de sauvegarde de pages web</b>. Vous stockez sur le serveur les contenus qui vous intéressent, textes et images
                        comprises. Vous pouvez aussi partager vos articles et utiliser des extensions pour Firefox, Chrome, Android…
                    </p>';

// Scribd
$k= 'scribd';
$d[$k]['sDesc']  = 'Partage de PDF/ODP';
$d[$k]['lDesc']  = 'Affichez et partagez vos documents';
$d[$k]['mTitle'] = 'Votre lectorat aussi a des droits';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' permet d´héberger des documents PDF et des présentations (ODP) afin de les donner à lire au grand public. Votre lectorat n´aura pas besoin de créer un compte ni de subir punblicités et traquages, et pourra se concentreer sur ce que vous partagez.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Créez un compte, téléversez vos documents et utilisez le lien de partage (ou le code d´affichage pour votre site).
                    </p>';

// Shrtct
$k= 'loomio';
$d[$k]['sDesc']  = 'Prise de décision';
$d[$k]['lDesc']  = 'Un outil pour mieux gérer les prises de décisions collectives';
$d[$k]['mTitle'] = 'Décidez ensembles,';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous aide à prendre des décisions communautaires. Discutez, échangez, mettez-vous d’accord et passez à l’action, le tout dans les délais que vous fixés au départ.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Lancez une discussion, et invitez les personnes concernées à venir apporter leur point de vue. Développez les idées, échangez quelque soit votre point de vue. Les avis peuvent tous s’exprimer, se partager et murir. Décidez ensemble et sortez une proposition finale, dans les délais définis.
                    </p>';

// Skype
$k= 'skype';
$d[$k]['sDesc']  = 'Visioconférence';
$d[$k]['lDesc']  = 'Discutez librement avec vos amis';
$d[$k]['mTitle'] = 'Vidéoconférence';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de discuter simplement avec vos amis, sans installation complexe de logiciel. Vous échangez sans aucune analyse des données liées aux conversations. Tout se passe entre vous et vos amis.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Directement à partir de votre navigateur web, vous êtes mis en relation avec vos amis, sans devoir installer de logiciel supplémentaire. Une fois connecté, donnez l’autorisation à votre navigateur d’utiliser votre micro et votre webcam, et profitez de la discussion en toute simplicité.
                    </p>';

// Slack
$k= 'slack';
$d[$k]['sDesc']  = 'Communication collaborative';
$d[$k]['lDesc']  = 'Discutez avec votre équipe sur un tchat boosté aux stéroïdes';
$d[$k]['mTitle'] = 'Discutez avec votre équipe sur un tchat boosté aux stéroïdes';
$d[$k]['mBody']  = '<p>
                        <b class="violet">Frama</b><b class="vert">team</b> est un service de <b>tchat</b>
                        libre qui permet de communiquer avec son équipe en notifiant ses collègues,
                        de conserver ses conversations et d’y faire des recherches.
                    </p>
                    <ol>
                        <li>Créez votre équipe</li>
                        <li>Invitez vos membres</li>
                        <li>Créez vos canaux de communication (publics ou privés)</li>
                    </ol>';

// Trello
$k= 'trello';
$d[$k]['sDesc']  = 'Gestion de projets';
$d[$k]['lDesc']  = 'Gestionnaire de projets';
$d[$k]['mTitle'] = 'Gestionnaire de projets';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un gestionnaire de tâches visuel. Il permet de gérer des projets de manière collaborative, en suivant la méthode Kanban. Son système visuel permet de s’y retrouver au premier coup d’œil, quelque soit votre habitude à utiliser ce genre d’outil.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Lancez votre projet, et commencez à le gérer collectivement, tâche par tâche. Assignez une personne à chaque tache, définissez des fonctions, des avancements et des délais. Cette gestion visuelle vous permettra de voir l’état du projet en un coup d’œil.
                    </p>';

// WeTransfer
$k= 'wetransfer';
$d[$k]['sDesc']  = 'Envoi de gros fichiers';
$d[$k]['lDesc']  = 'Partagez vos fichiers de manière anonyme';
$d[$k]['mTitle'] = 'Partagez vos fichiers facilement';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de partager facilement des fichiers comme, par exemple, lorsque vous voulez envoyez une pièce jointe par email et que le fichier dépasse la taille maximale autorisée.
                    </p>
                    <p>Attention, ce service n’est pas un équivalent de Dropbox ou Google Drive : il ne s’agit pas d’un service d’hébergement de fichiers  (pour ça il y a <b class="violet">Frama</b><b class="vert">drive</b>), mais bien d’un service d’envoi de fichiers anonymes (le contenu est automatiquement chiffré avant envoi, nous n’y avons pas accès).</p>
                    <p>
                        '.$d[$k]['F'].' permet d’envoyer des fichiers de façon anonyme. Vous pouvez décider du moment de leur suppression (dès le premier téléchargement, 24H/7j/30j/60j après leur mise en ligne).
                    </p>';

// Youtube
$k= 'youtube';
$d[$k]['sDesc']  = 'Hébergement de vidéos';
$d[$k]['lDesc']  = 'Partagez vos vidéos et conservez vos droits';
$d[$k]['mTitle'] = 'Libérez vos vidéos';
$d[$k]['mBody']  = '<p>
                        Sur '.$d[$k]['F'].', vous pouvez télécharger vos vidéos, les partager avec votre entourage ou les ouvrir en lecture publique.
                        C’est le meilleur moyen de partager des vidéos sans céder vos droits.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> ouvrez un compte et téléchargez vos vidéos. Vous gardez vos droits et la liberté de modifier vos téléchargements.
                    </p>';

/********************
 * Pas sur la carte
 ********************/
// JS Fiddle
$k= 'jsfiddle';
$d[$k]['sDesc']  = 'Partage de code';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Kongregate
$k= 'kongregate';
$d[$k]['sDesc']  = 'Jeux';
$d[$k]['lDesc']  = 'Une compilation de jeux libre';
$d[$k]['mTitle'] = 'Faites une pose, jouez quelques instants';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].', vous propose un certain nombre de jeux libres, disponibles aussi bien pour une utilisation en ligne qu’hors ligne. Faites une pause et profitez de l’un des jeux proposés.
                        <small>(et <a href="https://fr.wikipedia.org/wiki/Angry_Birds#Collecte_de_donn.C3.A9es_par_la_NSA">contrairement à Angry Birds</a>, la NSA ne vous espionnera pas ;) )</small>
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Chacun des jeux est directement utilisable sur le site ou téléchargeable pour une utilisation hors ligne. Sélectionnez votre jeu et lancez-vous.
                    </p>';
$d[$k]['mFooter']= '<p class="precisions">Framagames est une compilation de jeux libres. Les crédits sont indiqués sur le site.</p>';

// Maestro
$k= 'maestro';
$d[$k]['sDesc']  = 'Collaboration flexible';
$d[$k]['lDesc']  = 'Ochestrez vos projets collaboratifs';
$d[$k]['mTitle'] = 'Ochestrez vos projets collaboratifs';
$d[$k]['mBody']  = '<p>
                        Besoin en même temps d’un pad pour prendre des notes, d’un tableau d’organisation, et d’une vidéo-conférence ?
                        Avec '.$d[$k]['F'].', c’est vous qui organisez les outils qu’il vous faut, sur une seule et unique page web.
                    </p>';

// Pixlr
$k= 'pixlr';
$d[$k]['sDesc']  = 'Dessin vectoriel';
$d[$k]['lDesc']  = 'Créez rapidement des images vectorielles au format SVG';
$d[$k]['mTitle'] = 'Créez rapidement des images vectorielles au format SVG';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].', est un logiciel de dessin extrêmement simple (qui a dit simpliste ?).
                    </p>
                    <p><b class="violet">Fonctionnalités :</b></p>
                    <ul>
                        <li>Utilisable en ligne, sans installation</li>
                        <li>Pas d’inscription requise</li>
                        <li>Possibilité d’exporter votre document sous forme d’image bitmap ou vectorielles</li>
                        <li>Logiciel libre et gratuit, ouvert à tous</li>
                        <li>Ethique : aucune conservation de vos données</li>
                    </ul>
                    <div style="text-align:center">
                    <video controls="controls" preload="none" width="620" height="360" poster="https://framatube.org/images/media/864l.jpg">
                        <source src="https://framatube.org/files/1227-introduction-a-svg-editjpg.mp4" type="video/mp4"></source>
                        <source src="https://framatube.org/files/1228-introduction-a-svg-editjpg.webm" type="video/webm"></source>
                    </video>
                    </div>
                    <p> La <a href="https://framatube.org/files/1228-introduction-a-svg-editjpg.webm">vidéo</a> au format webm <small>(Pour l’instant la vidéo est en anglais. Désolé.)</small></p>';

// Transifex
$k= 'transifex';
$d[$k]['sDesc']  = 'Traduction de logiciels';
$d[$k]['lDesc']  = 'Ouvrez un espace de traduction à voter logiciel';
$d[$k]['mTitle'] = 'Pour que votre code devienne polyglotte !';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous offre une interface de traduction simple pour traduire les chaînes de caractères de votre code de manière collaborative.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Créez un compte, téléversez vote code, et modérez les diverses participations.
                    </p>';

// Twitter
$k= 'twitter';
$d[$k]['sDesc']  = 'Microblogging';
$d[$k]['lDesc']  = 'Gazouillez sur Internet';
$d[$k]['mTitle'] = 'Le microblogage libre';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de suivre des flux de microblogage et entretenir vos propres flux de manière décentralisée.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> utilisez un client de connexion, ouvrez un compte, abonnez-vous à des flux et tweetez à votre tour.
                    </p>';

/****************
 * Mises à jour *
 ****************/
// Etherpad Lite
$k = 'up-padlite'; $ko = 'gdocs';    // prefixe "up-" obligatoire ; $ko est l'id du projet initial
$d[$k]['lDesc']  = $d[$ko]['lDesc']; // Copier/Coller
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'];
$d[$k]['name']   = 'Remplacement d’Etherpad par la version « Lite » pour les pads publics';

// Wisemapping
$k = 'up-framindmap2'; $ko = 'bubblus';
$d[$k]['lDesc']  = $d[$ko]['lDesc'];
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'].'
    <p>
        <b class="violet">Mise à jour :</b> le logiciel qui propulse Framindmap sera Wisemapping (et non plus Mindmaps). Ce logiciel est plus complet, permet de lier des documents aux noeuds ou d’enregistrer vos cartes pour les retrouver et les partager facilement sur internet.
    </p>';
$d[$k]['name']   = 'Mindmaps remplacé par Wisemapping';

// Framadate 0.8
$k = 'up-framadate2'; $ko = 'doodle';
$d[$k]['lDesc']  = $d[$ko]['lDesc'];
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'].'
    <p>
        <b class="violet">Mise à jour</b> : la mise à jour de Framadate concerne une refonte graphique et technique du service. L’interface est plus claire, plus ergonomique. Et il sera désormais possible de répondre "peut-être" à un choix de sondage.
    </p>';
$d[$k]['name']   = 'Développement axé sur l’ergonomie et l’accessibilité';

// MyPads
$k = 'up-mypads'; $ko = 'gdocs';
$d[$k]['lDesc']  = $d[$ko]['lDesc'];
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'].'
    <p>
        <b class="violet">Mise à jour</b> : cette mise à jour de Framapad sera conséquente, car en plus de bénéficier d’instances dédiées (par exemple à l’éducation ou aux sciences), vous pourrez (enfin !) gérer des pads privés (gestion par groupe ou par mot de passe).
    </p>';
$d[$k]['name']    = 'Développement et intégration du plugin Mypads';

/**********************
 * Projets hors Frama *
 **********************/
// AirBnB
$k= 'airbnb';
$d[$k]['sDesc']  = 'Logement';

// AWeber
$k= 'aweber';
$d[$k]['sDesc']  = 'Lettre d’information';

// Blablacar
$k= 'blablacar';
$d[$k]['sDesc']  = 'Co-voiturage';

// Camptocamp
$k= 'routard';
$d[$k]['sDesc']  = 'Guide de voyage';

// Chrome
$k= 'gchrome';
$d[$k]['sDesc']  = 'Navigateur web';

// Deezer
$k= 'deezer';
$d[$k]['sDesc']  = 'Musique';

// Flickr
$k= 'flickr';
$d[$k]['sDesc']  = 'Albums photos';

// Google Analytics
$k= 'ganalytics';
$d[$k]['sDesc']  = 'Statistiques web';

// Orange
$k= 'orange';
$d[$k]['sDesc']  = 'Fournisseur d’Accès à Internet';

// Outlook
$k= 'outlook';
$d[$k]['sDesc']  = 'Client de courriel';

// OVH
$k= 'ovh';
$d[$k]['sDesc']  = 'Hébergement web & cloud';

// Paypal
$k= 'paypal';
$d[$k]['sDesc']  = 'Paiements en ligne';

// Universalis
$k= 'universalis';
$d[$k]['sDesc']  = 'Encyclopédie';


/**************
 * Categories *
 **************/
$c['home']['name']    = 'Chez soi';
$c['web']['name']     = 'Web';
$c['office']['name']  = 'Bureautique';
$c['social']['name']  = 'Société';
$c['files']['name']   = 'Partage de fichiers';
$c['media']['name']   = 'Médias & culture';
$c['geo']['name']     = 'Géo';
$c['hobbies']['name'] = 'Loisirs';
$c['site']['name']    = 'Sites web';
$c['dev']['name']     = 'Développement';

?>
