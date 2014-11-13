<?php
require('data.en.php');

$areas = '
    <!-- Village -->
    <area id="a-village" coords="320,230,130" class="village" alt="Village libriste" title="Village libriste" shape="circle" data-maphilight=\'{"strokeColor":"6A5687","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <!-- Big camps -->
    <area id="a-fermetum" coords="180,410,100" alt="Fermetum" title="Fermetum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <area id="a-centralisum" coords="310,490,100" alt="Centralisum" title="Centralisum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <area id="a-espionnum" coords="460,455,100" alt="Espionnum" title="Espionnum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <area id="a-privatum" coords="510,280,100" alt="Privatum" title="Privatum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <!-- NSA -->
    <area id="a-nsa" coords="900,600,90" alt="NSA" title="NSA"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1" >
    <!-- Little camps -->';

$options = '
    <option id="o-village" aria-describeby="#t-village">Village libriste</option>
    <!-- Big camps -->
    <option id="o-fermetum" aria-describeby="#t-fermetum">Fermetum</option>
    <option id="o-centralisum" aria-describeby="#t-centralisum">Centralisum</option>
    <option id="o-espionnum" aria-describeby="#t-espionnum">Espionnum</option>
    <option id="o-privatum" aria-describeby="#t-privatum">Privatum</option>
    <!-- NSA -->
    <option id="o-nsa" aria-describeby="#t-nsa">NSA</option>
    <!-- Little camps -->';

$text = '';

foreach ($data as $k => $v) {
    $color = '0C5B7A';
    if ($v['class'] == 'fight') {
        $color = 'CC2D18';
    }
    if ($v['class'] == 'potion') {
        $color = 'D2703A';
    }

    if($v['coordonnees']!='') {

        $areas .= '
        <area id="a-'.$k.'" coords="'.$v['coordonnees'].'" alt="'.$v['coordonnees'].'" shape="circle" data-maphilight=\'{"strokeColor":"'.$color.'","strokeWidth":2,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1" >';

        $options .= '
        <option id="o-'.$k.'" aria-describeby="#t-'.$k.'">'.$v['name'].'</option>';

        $text .= '
        <div id="t-'.$k.'" class="c-text c-little '.$v['class'].'">
            <h2>';
                $text .= ($v['wkp']!='') ? '<a href="http://fr.wikipedia.org/wiki/'.$v['wkp'].'">'.$v['name'].'</a>' : $v['name'];
                $text .= ' - '.$v['description'].'</h2>
            <p>Éditeur : ';
                $text .= ($v['wkp_editeur']!='') ? '<a href="http://fr.wikipedia.org/wiki/'.$v['wkp_editeur'].'">'.$v['editeur'].'</a>' : $v['editeur'];
                $text .= ($v['similaire']!='') ? '<br />Équivalent(s) : '.$v['similaire'].'' : '';
                $text .= '
            </p>
            <p>';
                $text .= ($v['alt_online']!='') ? 'Alternative(s) en ligne : '.$v['alt_online'].'<br />' : '';
                $text .= 'Alternative(s) à installer : '.$v['alt_offline'].'
            </p>
            <p>Service Framasoft : '.$v['alt_frama'].'<br />';
                $text .= (strlen($v['date_frama'])==4) ? '(sortie prévue <a href="/liste/#'.$v['date_frama'].'">en '.$v['date_frama'].'</a>)' : $v['date_frama'];
                $text .= '
            </p>
         </div>';
    }
}

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Dégooglisons Internet</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="img/favicon.png">
    <link href="/nav/lib/bootstrap/css/bootstrap.min.css" media="all" rel="stylesheet">
    <link href="css/styles.css" media="all" rel="stylesheet">

    <script src="/nav/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/nav/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="js/jquery.maphilight.js" type="text/javascript"></script>
    <script src="js/imageMapResizer.min.js" type="text/javascript"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
</head>
<body>
    <script src="/nav/nav.js" type="text/javascript"></script>
        <div class="row" id="mainHeader">
            <div class="container ombre">
                <header>
                    <div class="row">
                        <h1 class="col-md-6"><span class="violet">Dégooglisons</span> <span class="orange">Internet</span></h1>
                        <p class="lead col-md-6">
                            Une initiative du réseau <span class="violet">Frama</span><span class="orange">soft</span>
                            en faveur d'un internet <a href="#leds">libre</a>, <a href="#leds">décentralisé</a>,
                            <a href="#leds">éthique</a> et <a href="#leds">solidaire</a>.
                        </p>
                    </div>

                    <hr class="trait clearfix" />
                </header>
            </div>
        </div>

        <div class="row" id="bloc-carte">
            <div class="container ombre">
                <div class="col-md-8 map">
                    <div class="well">
                        <img src="img/carte-full.jpg" alt="Nous sommes en 2014 après Jésus-Christ. Toute la toile est occupée par des services centralisés... Toute ? Non ! Une communauté peuplée d'irreductibles libristes résite encore et toujours à l'envahisseur. Et la vie n'est pas facile pour les garnisons des camps retranchés de Fermetum, Centralisum, Espionnum et Privatum..." style="width:100%" id="carte" usemap="#cartemap" />
                        <map id="cartemap" name="cartemap">
                            <?php echo $areas; ?>
                        </map>
                    </div>
                </div>
                <div class="col-md-4 description">

                    <p class="text-center"><a class="btn btn-warning btn-lg btn-soutenir" href="http://soutenir.framasoft.org"><span class="fa fa-w fa-heart"></span> Soutenir ce projet</a></p>

                    <div class="well">
                        <p><select id="c-select" title="Choisir le camp" class="form-control">
                            <?php echo $options; ?>
                        </select></p>

                        <!-- Village -->
                        <div id="t-village" class="c-text">
                            <h2>Village libriste</h2>
                            <p>Au milieu des multinationales tentaculaires,
quelques organisations non-lucratives continuent de lutter activement
pour un Web ouvert et respectueux des internautes.</p>
                            <p>En plus de <a href="http://framasoft.org" title="Framasoft">Framasoft</a>, association loi 1901
qui mène la présente campagne, nous pouvons citer <a href="http://april.org" title="April">l'April</a>, <a href="http://laquadrature.net" title="La Quadrature du Net">la
Quadrature du Net</a> ou encore <a href="http://aful.org" title="AFUL">l'Aful</a>. Ces associations vivent de vos dons,
 n'oubliez pas de les soutenir !</p>
                        </div>
                        <!-- Big camps -->
                        <div id="t-fermetum" class="c-text">
                            <h2>Fermetum</h2>
                            <p>Les services en ligne sont souvent fermés :
une fois que vous avez commencé à les utiliser, il est très difficile de
 s'en séparer car ces entreprises font tout pour vous garder captifs en
 vous empêchant, par exemple, de migrer vos données ailleurs facilement.</p>
                            <p>Utiliser des services en ligne ouverts, c'est
 s'assurer qu'on ne sera jamais captif d'un site particulier et qu'il
sera toujours possible d'aller voir ailleurs.
                            <a href="#t2-fermetum">En savoir plus</a></p>
                        </div>
                        <div id="t-centralisum" class="c-text">
                            <h2>Centralisum</h2>
                            <p>Les services centralisés posent de nombreux
problèmes : ils rendent vos données très vulnérables (un seul site
indisponible et plus rien n'est accessible) et facilitent énormément
leur exploitation par des tiers.</p>
                            <p>Utiliser des services en ligne décentralisés,
 c'est avoir le choix entre utiliser une instance en ligne comme celle
proposée par Framasoft ou installer le service chez soi.
                            <a href="#t2-centralisum">En savoir plus</a></p>
                        </div>
                        <div id="t-espionnum" class="c-text">
                            <h2>Espionnum</h2>
                            <p>«&nbsp;Si c'est gratuit, c'est que vous êtes
le produit&nbsp;» : de nombreux services en ligne vivent de
l'exploitation de vos données personnelles en les revendant à des
sociétés publicitaires. De plus, la plupart de ces services sont basés aux États-Unis et
 obéissent aux lois américaines de type PATRIOT ACT qui nient totalement
 votre droit à la vie privée.</p>
                            <p>Utiliser des services en ligne hébergés en
Europe, c'est s'assurer de ne pas être dépendant des lois d'un autre
continent. De plus, en hébergeant vous-même le service, plus aucun tiers
 ne peut violer votre vie privée.
                            <a href="#t2-espionnum">En savoir plus</a></p>
                        </div>
                        <div id="t-privatum" class="c-text">
                            <h2>Privatum</h2>
                            <p>Les services privateurs
(«&nbsp;propriétaires&nbsp;» dans le langage courant) ont un
fonctionnement totalement opaque : il est impossible de savoir
exactement ce que fait le logiciel de vos données. Seul l'éditeur en a
le contrôle.</p>
                            <p>Utiliser des services en ligne libres, c'est
avoir l'assurance d'un contrôle sur le fonctionnement du logiciel par la
 communauté et la possibilité de le modifier, de l'installer ailleurs,
etc.
                            <a href="#t2-privatum">En savoir plus</a></p>
                        </div>
                        <!-- NSA -->
                        <div id="t-nsa" class="c-text">
                            <h2>NSA</h2>
                            <p>Les révélations d'Edward Snowden sur le
programme PRISM de la NSA ont montré que les craintes sur la violation
de masse de la vie privée des internautes étaient fondées.</p>
                            <p>Utiliser des services centralisés revient
aujourd'hui à offrir sur un plateau ses données personnelles aux
organisations de surveillance sans aucun moyen de contrôler l'usage qui
en est fait.</p>
                        </div>
                        <!-- Little camps -->
                        <?php echo $text; ?>
                    </div>
                    <div id="menu">
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#enjeux" class="btn btn-enjeux btn-block" title="Les enjeux">Les enjeux</a></p>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#dangers" class="btn btn-dangers btn-block" title="Les dangers">Les dangers</a></p>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#solutions" class="btn btn-solutions btn-block" title="Nos propositions">Nos propositions</a></p>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#concret" class="btn btn-concret btn-block" title="Concrètement">Concrètement</a></p>
                        </div>
                        <p class="text-center"><a class="btn btn-liste btn-lg" href="liste/"> Liste des services</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="enjeux">
            <div class="container ombre">
                <h2>Quel sont les enjeux ?</h2>
                <p>Ces dernières années ont vu se généraliser une
<strong>concentration des acteurs d’Internet</strong> (Youtube appartient à Google,
WhatsApp à Facebook, Skype à Microsoft, etc.). Cette centralisation est
nuisible, non seulement parce qu’elle freine l’innovation, mais surtout
parce qu'elle entraîne une perte de liberté pour les visiteurs. <strong>Les utilisateurs de ces
services derniers ne contrôlent plus leur vie numérique</strong> : leurs
comportements sont disséqués en permanence afin de mieux être ciblés par
la publicité, et leurs données - pourtant privées (sites visités, mails
échangés, vidéos regardées, etc.) - peuvent être analysées par des
services gouvernementaux.</p>
                <p>La réponse que souhaite apporter Framasoft à
cette problématique est simple : mettre en valeur, pour chacun de ces
services privateur de liberté, une alternative Libre, Ethique,
Décentralisée et Solidaire. <a href="#dangers">En savoir plus…</a></p>

            </div>
        </div>

        <div class="row" id="dangers">
            <div class="container ombre">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Dangers</h2>
                        <p>Les services en ligne toujours plus
centralisés de géants tentaculaires comme Google, Amazon, Facebook,
Apple ou Microsoft (GAFAM) mettent en danger nos vies numériques.</p>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="t2-espionnum"><span class="fa fa-fw fa-eye"></span> Espionnage</h3>
                        <p>
                            Ces services nous pistent en permanence.
Sous le prétexte de fournir une «&nbsp;meilleure expérience
utilisateur&nbsp;», nos comportements sur Internet sont espionnés en
permanence. Ces informations peuvent servir à afficher de la publicité
ciblée, mais les révélations de l'affaire Snowden ont aussi prouvé que
 les géants de l'Internet étaient contraints de communiquer ces données
(parfois extrêmement privées : emails échangés sur GMail, photos
partagées sur Facebook, conversations Skype, géolocalisation des
téléphones, etc.) à des services gouvernementaux. <strong>Sous prétexte de lutte
contre le terrorisme</strong>, les états sont capables aujourd'hui d'obtenir bien plus
d'informations qu'un «&nbsp;Big Brother&nbsp;» ne l'aurait jamais rếvé.
                        </p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-espionnage-modal-lg">Des exemples ?</button>
                        </p>
                            <div class="modal fade bs-espionnage-modal-lg" id="espionnageModal" tabindex="-1" role="dialog" aria-labelledby="espionnageLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
                                    <h4 class="modal-title" id="espionnageLabel">Espionnage</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>
                                        </p><ul>
                                            <li>Numérama, le 13/05/2014 : <a href="http://www.numerama.com/magazine/29353-la-nsa-accusee-d-avoir-piege-les-routeurs-americains.html">La NSA accusée d'avoir piégé les routeurs américains</a></li>
                                            <li>Numérama, le 12/09/2014 : <a href="http://www.numerama.com/magazine/30539-yahoo-revele-le-chantage-des-usa-pour-espionner-les-internautes.html">Yahoo révèle le chantage des USA pour espionner les internautes</a></li>
                                            <li>Numérama, le 04/07/2013 : <a href="http://www.numerama.com/magazine/26435-prism-l-allemagne-qui-espionne-aussi-deconseille-le-web-americain.html">PRISM : l'Allemagne, qui espionne aussi, déconseille le web américain</a></li>
                                            <li>Le Monde, le 27/06/2013: <a href="http://www.lemonde.fr/sciences/article/2013/06/27/il-est-temps-de-parler-des-metadonnees_3437125_1650684.html">Il est temps de parler des métadonnées</a></li>
                                            <li>Atlantico, le 25/11/2013, <a href="http://www.atlantico.fr/pepites/espionnage-etat-veut-attaquer-nos-donnees-personnelles-908758.html">Espionnage : l'Etat veut s'attaquer à nos données personnelles</a></li>
                                            <li>Le Monde, le 20/03/2014 : <a href="http://www.lemonde.fr/international/article/2014/03/20/dgse-orange-des-liaisons-incestueuses_4386264_3210.html">Espionnage : comment Orange et les services secrets coopèrent</a></li>
                                            <li>Le Monde, le 15/09/2014: <a href="http://www.lemonde.fr/proche-orient/article/2014/09/15/terrorisme-un-projet-de-loi-dangereux_4487639_3218.html">Terrorisme : un projet de loi dangereux</a></li>
                                            <li>Présumés Terroristes, septembre 2014 : <a href="https://presumes-terroristes.fr/">Loi Terrorisme. Sacrifier les libertés sous prétexte de lutte contre le terrorisme ? NON !</a></li>
                                            <li>Europe1, le 12/02/2014 : <a href="http://www.europe1.fr/high-tech/et-si-samsung-se-mettait-a-espionner-ses-propres-smartphones-1799713">Et si Samsung se mettait à "espionner" ses propres smartphones?</a></li>
                                            <li>Rue89, le 13/12/2008 :<a href="http://rue89.nouvelobs.com/2008/12/13/ecoutes-ce-qui-est-possible-avec-votre-telephone-portable">Ecoutes : ce qui est possible avec votre téléphone portable</a></li>
                                            <li>Le Monde, le 21/03/2014 : <a href="http://www.lemonde.fr/international/article/2014/03/21/la-france-suspectee-de-cyberattaque_4387232_3210.html">La France suspectée de cyberespionnage</a></li>
                                            <li>Pixels (Le Monde), le 14/09/2014 : <a href="http://www.lemonde.fr/pixels/article/2014/09/13/la-nsa-et-le-gchq-auraient-pirate-cinq-operateurs-telecom-allemands_4487181_4408996.html">La NSA et le GCHQ auraient piraté cinq opérateurs télécom allemands</a></li>
                                            <li>Pixels (Le Monde), le 16/09/2014 :  <a href="http://www.lemonde.fr/pixels/breve/2014/09/16/tim-cook-estime-que-les-etats-unis-sont-alles-trop-loin-dans-la-collecte-des-donnees_4488172_4408996.html">Tim Cook estime que les Etats-Unis sont allés trop loin dans la collecte des données</a></li>
                                            <li>Liberation, le 01/07/2014 :  <a href="http://www.liberation.fr/monde/2014/07/01/la-nsa-espionnait-193-pays-et-aussi-l-ue-et-le-fmi_1054881">La NSA espionnait 193 pays</a></li>
                                            <li>Numerama, le 24/07/2014 : <a href="http://www.numerama.com/magazine/30101-des-backdoors-sur-ios-tout-ce-qu-il-faut-savoir.html">Des backdoors sur iOS ? Tout ce qu'il faut savoir</a></li>
                                            <li>Bug Brother (Le Monde), le 11/02/2014 : <a href="http://bugbrother.blog.lemonde.fr/2014/02/11/le-gif-qui-revele-la-paranoia-de-la-nsaqui-espionne-donc-aussi-vos-enfants-parents-amis/">Le .gif qui révèle la paranoïa de la NSA, et pourquoi elle espionne aussi vos parents & amis</a></li>
                                            <li>Rue89, le 15/08/2013 :  <a href="http://rue89.nouvelobs.com/2013/08/15/les-messages-envoyes-compte-gmail-peuvent-etre-interceptes-alors-244954">Les e-mails envoyés sur Gmail peuvent être interceptés. Et alors ?</a></li>
                                            <li>Écrans.fr, le 07/06/2013 : <a href="http://ecrans.liberation.fr/ecrans/2013/06/07/le-fbi-a-acces-aux-comptes-facebook-google-yahoo_909023">Le FBI a accès aux comptes Facebook, Google, Yahoo!...</a></li>
                                            <li>Le Monde.fr, le 27/01/2014 : <a href="http://www.lemonde.fr/technologies/article/2014/01/27/des-applications-mobiles-utilisees-par-la-nsa-et-son-homologue-britannique_4355371_651865.html">Des applications de smartphones "mises sur écoute" par la NSA</a></li>
                                        </ul>
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="t2-privatum"><span class="fa fa-fw fa-user"></span> Vie privée</h3>
                        <p>
                            Nos données sont une extension de nous-mêmes. Elles peuvent indiquer où nous sommes, avec qui, notre
orientation politique ou sexuelle, les sites que nous avons visités,
notre recette préférée, les sujets qui nous intéressent, etc. <br>
                            Si une donnée seule, prise indépendamment,
n'est pas forcément sensible, un ensemble de données peut le devenir
(par exemple si vous avez fait des recherches sur le cancer avant de
souscrire à une assurance-vie).<br>
                            Dans un monde où tout devient numérique
(lecture, TV, téléphonie, musique, réseau social, etc.), <strong>notre vie privée
 est un élément essentiel de ce qui fait de nous une personne
singulière</strong>. Une personne malveillante qui aurait accès à votre
smartphone peut en apprendre suffisamment sur vous en quelques minutes
pour vous causer des torts très importants (usurpation d'identité sur
Facebook, détournement d'informations professionnelles, achats effectués
 sans votre accord, etc.).
                        </p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-vie-privee-modal-lg">Des exemples ?</button>
                        </p>
                            <div class="modal fade bs-vie-privee-modal-lg" id="viePriveeModal" tabindex="-1" role="dialog" aria-labelledby="viePriveeLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
                                    <h4 class="modal-title" id="viePriveeLabel">Vie privée</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>
                                        </p><ul>
                                            <li>Numérama, le 17/05/2014 : <a href="http://www.numerama.com/magazine/29400-et-maintenant-google-lit-vos-factures.html">Et maintenant Google lit vos factures</a></li>
                                            <li>Numérama, le 06/02/2014 : <a href="http://www.numerama.com/magazine/28299-yahoo-transfere-votre-vie-privee-en-irlande.html">Yahoo transfère votre vie privée en Irlande</a></li>
                                             <li>L'Expansion, le 16/01/2014 : <a href="http://lexpansion.lexpress.fr/high-tech/e-commerce-vos-donnees-personnelles-sont-en-danger_1326103.html">E-commerce: vos données personnelles sont en danger</a></li>
                                            <li>Numérama, le 21/02/2014 : <a href="http://www.numerama.com/magazine/28515-donnees-personnelles-la-chute-de-confiance.html">Données personnelles : la chute de confiance</a></li>
                                            <li>INRIA, le 12/04/2013 : <a href="http://hal.inria.fr/hal-00812734">Internet du futur : performances et respect de la vie privée</a></li>
                                            <li>Numérama, le 04/08/2014 : <a href="http://www.numerama.com/magazine/30187-google-a-signale-un-usager-qui-avait-envoye-des-photos-pedopornographiques-par-mail.html">Google a signalé un usager qui avait envoyé des photos pédopornographiques par mail</a></li>
                                            <li>Rue89, le 03/07/2013 : <a href="http://rue89.nouvelobs.com/2013/07/31/payer-carte-sans-code-sans-contact-sans-risque-244508">Payer par carte mais sans code : le "sans contact", pas sans risque</a></li>
                                            <li>Slate, le 03/10/2014 : <a href="http://www.slate.fr/story/92887/apple-google-facebook-sante">Après Apple et Google, Facebook se penche aussi sur notre santé</a></li>
                                            <li>CNIL, mai 2014 : <a href="http://www.cnil.fr/fileadmin/documents/La_CNIL/publications/DEIP/CNIL_CAHIERS_IP2_WEB.pdf ">Le corps, nouvel objet connecté (Cahiers IP num. 2)</a></li>
                                            <li>Numérama, le 22/08/2014 : <a href="http://www.numerama.com/magazine/30323-apple-approche-les-mutuelles-pour-divulguer-le-comportement-des-assures.html">Apple approche les mutuelles pour divulguer le comportement des assurés</a></li>
                                            <li>JDN, le 23/01/2014 : <a href="http://www.journaldunet.com/ebusiness/le-net/iwatch-apple-incroyable.shtml">Apple embauche des experts en contrôles sanguins</a></li>
                                            <li>Challenges, le 06/06/2014 : <a href="http://www.challenges.fr/entreprise/20140606.CHA4685/comment-l-assureur-axa-va-surveiller-votre-conduite.html">Comment l'assureur Axa va surveiller votre conduite</a></li>
                                            <li>UFC-Que-Choisir, le 25/03/2014 : <a href="http://www.quechoisir.org/telecom-multimedia/internet/communique-donnees-personnelles-l-ufc-que-choisir-attaque-les-reseaux-sociaux-et-appelle-les-consommateurs-a-garder-la-main-sur-leurs-donnees"> L’UFC-Que Choisir attaque les réseaux sociaux et appelle les consommateurs à garder la main sur leurs données</a></li>
                                            <li>Ecrans.fr, le 22/01/2011 :  <a href="http://ecrans.liberation.fr/ecrans/2011/10/22/facebook-la-memoire-cachee_956055">Facebook: la mémoire cachée</a></li>
                                            <li>Clubic, le 25/03/2013 : <a href="http://www.clubic.com/internet/google/actualite-549552-google-reader-fermeture-liee-problematiques-vie-privee.html">Google Reader : une fermeture liée aux problématiques de vie privée ?</a></li>
                                            <li>Rue89, le 14/01/2014 : <a href="http://rue89.nouvelobs.com/2014/01/14/google-lance-les-objets-connectes-sincruste-chez-249023">Google se lance dans les objets connectés et s’incruste chez vous</a></li>
                                            <li>Numerama le 30/06/2014 : <a href="http://www.numerama.com/magazine/29852-facebook-a-teste-sa-capacite-de-manipulation-mentale-des-foules.html">Facebook a testé sa capacité de manipulation mentale des foules</a></li>
                                            <li>Numerama, le 18/08/2014 : <a href="http://www.numerama.com/magazine/30290-comment-chrome-envoie-tous-vos-mots-de-passe-a-google.html">Comment Chrome envoie tous vos mots de passe à Google</a></li>
                                            <li>Rue89, le 29/08/2014 : <a href="http://rue89.nouvelobs.com/2014/08/29/iphone-6-apres-lempreinte-digitale-apple-veut-ficher-etat-sante-254496">iPhone 6 : après l’empreinte digitale, Apple veut ficher votre état de santé</a></li>
                                            <li>LDN, le 17/04/2014 : <a href="http://ldn-fai.net/je-nai-rien-a-cacher/">Je n'ai rien à cacher</a></li>
                                            <li>Numerama, le 26/09/2014 : <a href="http://www.numerama.com/magazine/30707-facebook-sait-ou-vous-passez-votre-lune-de-miel-maj.html">Même si vous dites rien, Facebook sait où vous passez votre lune de miel</a></li>
                                            <li>Journal du Net, le 16/07/14 : <a href="http://www.journaldunet.com/ebusiness/le-net/informations-rassemblees-par-google.shtml">Soyons honnêtes, la quantité  d'informations que Google rassemble à notre sujet est effrayante</a></li>
                                            </ul>
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h3 id="t2-centralisum"><span class="fa fa-fw fa-dot-circle-o"></span> Centralisation</h3>
                        <p>
                            Les acteurs majeurs de l'internet sont
devenus de véritables pieuvres : Facebook possède WhatsApp et Instagram,
 Google détient Youtube et Waze, Microsoft distribue Skype, etc.<br>
                            Cette concentration des acteurs pose de
multiples problèmes : que se passera-t-il si Facebook met la clé sous la
 porte ? Comment faire des recherches si Google subit une panne ?
                            <strong>Nous devenons peu à peu dépendants de
services fournis par un petit nombre d'acteurs.</strong> Par exemple, Apple
(iPhone), Google (Android) et Microsoft (Windows Phone) se partagent la
quasi-totalité du marché des systèmes d'exploitation pour smartphones.<br>
                            Par ailleurs, la taille de ces acteurs bride
 l'innovation : difficile de lancer une start-up face à Apple ou Google
(respectivement première et deuxième capitalisations boursières
mondiale).<br>
                            Enfin, le manque de diversité de ces géants
leur donne aussi la possibilité non seulement de collecter facilement
des informations personnelles, mais aussi d'altérer l'information
qu'ils diffusent (une recherche Google sur le mot "nucléaire"
n'affichera pas les mêmes liens suivant que Google vous perçoit comme
un militant écologiste ou un pro-nucléaire).
                        </p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-centralisation-modal-lg">Des exemples ?</button>
                        </p>
                            <div class="modal fade bs-centralisation-modal-lg" id="centralisationModal" tabindex="-1" role="dialog" aria-labelledby="centralisationLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
                                    <h4 class="modal-title" id="centralisationLabel">Centralisation</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>
                                        </p><ul>
                                            <li>NextInpact, le 14/06/2014 : <a href="http://www.nextinpact.com/news/88112-les-geants-net-generent-nouveaux-rapports-force.htm">Les géants du Net génèrent de nouveaux rapports de force</a></li>
                                            <li>Numérama, le 09/03/2013 : <a href="http://www.nextinpact.com/news/78092-edito-la-domination-et-centralisation-ennemis-numero-web.htm">La domination et la centralisation, les ennemis numéro un du web</a></li>
                                            <li>Droit et Technologies, le 25/02/2013 : <a href="http://www.droit-technologie.org/actuality-1577/cloud-la-perte-totale-des-donnees-est-possible-la-preuve-par-2e2-et.html">Cloud : la perte totale des données est possible. La preuve par 2e2 et Megaupload.</a></li>
                                            <li>INRIA, le 27/09/2011: <a href="http://www.inria.fr/actualite/actualites-inria/massification-du-web-les-consequences">La « massification » du web transforme les relations sociales</a></li>
                                            <li>INRIA, le 13/03/2013 : <a href="http://www.inria.fr/centre/lille/agenda/data-et-big-data-le-nouvel-or-noir">Data et Big Data : le nouvel or noir?</a></li>
                                            <li>Le Monde, le 12/06/2013: <a href="http://www.lemonde.fr/technologies/chat/2013/06/12/surveillance-d-internet-peut-on-encore-proteger-notre-vie-privee_3428413_651865.html">Pourquoi stocker toutes nos vies sur des serveurs aux Etats-Unis?</a></li>
                                            <li>Rue89, le 17/07/2009 : <a href="http://rue89.nouvelobs.com/rue69/2009/07/13/pour-sauver-la-vertu-de-son-iphone-apple-censure-a-tout-va">Pour sauver la vertu de son iPhone, Apple censure à tout va</a></li>
                                            <li>Nextinpact, le 08/04/2013 :  <a href="http://www.nextinpact.com/news/78883-appgratis-supprime-app-store-pour-son-reperage-promotions.htm">AppGratis supprimé de l'App Store pour son repérage des promotions</a></li>
                                            <li>Ecrans.fr, le 25/04/2013 : <a href="http://ecrans.liberation.fr/ecrans/2013/04/25/google-devoile-une-flambee-de-la-censure_957911">Google dévoile une flambée de la censure</a></li>
                                            <li>Nextinpact, le 24/04/2014 : <a href="http://www.nextinpact.com/news/87203-comment-etats-unis-veulent-enterrer-neutralite-net.htm">Comment les États-Unis veulent enterrer la neutralité du net</a></li>
                                        </ul>
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="t2-fermetum"><span class="fa fa-fw fa-lock"></span> Fermeture</h3>
                        <p>
                            Les services web affichés sur votre
ordinateur ou votre smartphone sont généralement exécutés dans le
«&nbsp;cloud&nbsp;» : des serveurs dispersés sur la planète, stockant à
la fois vos données (mails, photos, fichiers, etc.) mais aussi le code
des applications.<br>
                            Pour les données, cela pose le problème de
leur pérennité (que deviennent vos fichiers si Dropbox ferme demain ?)
mais aussi de votre capacité à changer de services (comment faire pour
récupérer l'ensemble de vos photos sur Facebook ou Picasa, et les
réinsérer avec les commentaires dans un autre service ?). <br>
                            Pour les applications, cela implique que
<strong>vous êtes à la merci de changements impromptus selon le bon vouloir du fournisseur</strong>
(ajout de publicité, modification de l'interface, etc.), mais surtout que
 vous n'avez quasiment aucun contrôle sur ce que l'application peut
faire. Ce sont des «&nbsp;boîtes noires&nbsp;» qui peuvent agir de façon
 malveillante (envoyer des SMS à votre insu, exécuter du code
indésirable, etc.).
                        <br>Bref, ces sociétés nous enferment dans des cages dorées, certes, mais des cages malgré tout !
                        </p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-fermeture-modal-lg">Des exemples ?</button>
                        </p>
                            <div class="modal fade bs-fermeture-modal-lg" id="fermetureModal" tabindex="-1" role="dialog" aria-labelledby="fermetureLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
                                    <h4 class="modal-title" id="fermetureLabel">Fermeture</h4>
                                  </div>
                                  <div class="modal-body">

                                     <p>
                                        </p><ul>
                                            <li>CNIL, le 03/01/2014 : <a href="http://www.legifrance.gouv.fr/affichCnil.do?oldAction=rechExpCnil&id=CNILTEXT000028450267&fastReqId=2000051504&fastPos=1">Exemple de sanction de la CNIL à l'encontre de Google</a></li>
                                            <li>01Net, le 23/11/2012 : <a href="http://www.01net.com/editorial/580825/securite-le-cloud-est-plus-dangereux-que-les-virus/">Sécurité : le cloud est plus dangereux que les virus</a></li>
                                            <li>CNIL, le 25/06/2012 : <a href="http://www.cnil.fr/fileadmin/images/la_cnil/actualite/Recommandations_pour_les_entreprises_qui_envisagent_de_souscrire_a_des_services_de_Cloud.pdf">Recommandations pour les entreprises qui envisagent de souscrire à des services de Cloud computing</a></li>
                                            <li>INRIA, le 13/12/2013 : <a href="http://hal.inria.fr/hal-00918398">Quand les terminaux mobiles jouent les mouchards de poche</a></li>
                                            <li>INAGlobal, le 04/02/2014 : <a href="http://www.inaglobal.fr/numerique/article/facebook-nen-fais-pas-une-affaire-de-donnees-personnelles">Facebook, n'en fais pas une affaire de données personnelles!</a></li>
                                            <li>Rue89, le 03/02/2013 : <a href="http://rue89.nouvelobs.com/2013/02/03/qui-appartiennent-vos-donnees-sur-internet-mauvaises-nouvelles-et-conseils-239198">A qui appartiennent vos données sur Internet ? Mauvaises nouvelles et conseils</a></li>
                                            <li>Atlantico, le 16/06/2014 : <a href="http://www.atlantico.fr/decryptage/quelle-cible-publicitaire-etes-pourquoi-avez-peut-etre-interet-utiliser-fonctions-facebook-et-google-pour-connaitre-que-geants-1617661.html">Quelle cible publicitaire êtes-vous?</a></li>
                                            <li>Nextinpact, le 22/07/2009 : <a href="http://www.nextinpact.com/archive/52115-amazon-kindle-ebook-disparaitre-orwell.htm">Des ouvrages d'Orwell supprimés du Kindle par Amazon</a></li>
                                            <li>Rue89, le 18/11/2013 : <a href="http://rue89.nouvelobs.com/2013/11/18/google-facebook-apple-superpuissances-ont-privatise-internet-247615">Google, Facebook, Apple... : ces superpuissances ont privatisé Internet</a></li>
                                            <li>Liberation.fr, le 07/03/2014 : <a href="http://next.liberation.fr/sexe/2014/03/07/la-fin-du-porno-sur-vine-un-espace-de-liberte-en-moins_985232">La fin du porno sur Vine, un espace de liberté en moins</a></li>
                                            <li>Liberation.fr, le 14/03/2014 : <a href="http://next.liberation.fr/sexe/2014/03/14/apple-censure-un-roman-francais-pour-cause-de-seins-nus_987120">Apple censure un roman français pour cause de seins nus</a></li>
                                            <li>Rue89, le 29/05/2014 : <a href="http://rue89.nouvelobs.com/2014/05/29/chantage-google-apple-amazon-les-tontons-ecrabouilleurs-252521">Chantage : Google, Apple et Amazon, les tontons écrabouilleurs</a></li>
                                            <li>Numerama, le 09/08/2014 : <a href="http://www.numerama.com/magazine/30226-quand-facebook-est-en-panne-le-trafic-des-sites-baisse.html">Quand Facebook est en panne, le trafic des sites baisse</a></li>
                                            <li>NextInpact, le 22/08/2014 : <a href="http://www.nextinpact.com/news/89379-quand-twitter-deraille-avec-timeline-ses-utilisateurs.htm">Quand Twitter déraille avec la timeline de ses utilisateurs</a></li>
                                        </ul>
                                    <p></p>


                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="solutions">
            <div class="container ombre">
                <div class="row">
                    <div class="col-sm-12">
                        <h2><a id="leds"></a>Ce que nous proposons</h2>
                            <p>Framasoft souhaite faire face à ces dangers
    menaçant nos vies numériques en proposant des services libres, éthiques,
     décentralisés et solidaires.</p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-unlock"></span> Liberté</h3>
                            <p> L'histoire d'Internet elle-même est une histoire de logiciels libres,
                            tant du point de vue des standards que des protocoles employés.
                            Sa popularité et son potentiel font aussi des envieux, et de grandes entreprises
                            aimeraient s'en attribuer le contrôle en imposant du code fermé dans des systèmes
                            verrouillés et non-interopérables.</p>
                            <p>Pour qu'Internet reste fidèle à ses principes fondateurs qui l'ont conduit à
                            son succès, nous devons y trouver des applications libres, c'est-à-dire dont le
                            code source est ouvert, accessible et sous licences libres.</p>
                            <p><strong>Framasoft s'engage à n'utiliser que des logiciels au code source «&nbsp;libre&nbsp;».</strong></p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-eye-slash"></span> Éthique</h3>
                            <p>Nous plébiscitons un Internet fait de partage et d'indépendance.</p>
                            <p>L'exploitation, la surveillance, la censure et l'appropriation des données sont
                            des valeurs que nous refusons au profit de la transparence (la probité), de l'exposition
                            claire des conditions d'utilisation des services, et du refus des discriminations.</p>
                            <p><strong>Framasoft s'engage à ne pas exploiter les données des utilisateurs de ses services, et à promouvoir un Web ouvert et équitable.</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-share-alt"></span> Décentralisation</h3>
                            <p> L'intelligence d'Internet doit reposer sur chaque acteur du réseau dans une
                            dynamique de partage de pair à pair, pour éviter de créer un Minitel 2.0.</p>
                            <p>Pour assurer l'égalité de tous, citoyens comme entrepreneurs, les monopoles doivent
                            non seulement être évités, mais empêchés de s'accaparer les données personnelles ou publiques.</p>
                            <p>En expliquant, par des tutoriels, comment multiplier les solutions libres permettant un
                            Internet plus équitable, nous facilitons l'essaimage du code et diversifions les usages.</p>
                            <p><strong>Framasoft s'engage à faciliter l'auto-hébergement et l'interopérabilité, afin de ne pas «&nbsp;enfermer&nbsp;» ses utilisateurs.</strong></p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-users"></span> Solidarité</h3>
                            <p>À travers les services que nous déployons, nous promouvons un modèle économique
                            fondé sur la mutualisation des coûts, le partage des ressources, et l'accessibilité
                            au plus grand nombre.</p>
                            <p>Ce modèle possède aussi un caractère éducatif car nous pensons qu'en documentant
                            le déploiement des services, un grand nombre d'utilisateurs seront en mesure de partager
                            à leur tour ces ressources.</p>
                            <p>Nous pensons que ne pas infantiliser les utilisateurs et faire partager la responsabilité de l'utilisation des services permettra de réguler les abus.</p>
                            <p><strong>Framasoft s'engage à promouvoir le respect et l'autonomie de ces utilisateurs (tant que la réciproque sera vraie).</strong></p>
                    </div>
                    <div class="col-sm-12">
                        <div class="well text-center">
                            <h3>Services et Charte</h3>
                            <p>Vous pouvez retrouver en ligne la liste des services que nous proposons déjà (et ceux en préparation) ainsi que notre charte :</p>
                            <p>
                                <a href="http://degooglisons-internet.org/liste/" class="btn btn-liste">Liste des services Framasoft</a>
                                <a href="http://degooglisons-internet.org/nav/html/charte.html" class="btn btn-primary">Charte des services Framasoft</a>
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="row" id="concret">
        <div class="container ombre">
            <div class="col-md-8">
                <h2>Concrètement</h2>
                <p>Le projet « Dégooglisons Internet » - qui ne
concerne d'ailleurs pas que Google - consiste à <strong>proposer des services
alternatifs face à un maximum de services que nous évaluons comme
menaçants pour nos vies numériques</strong>.</p>
                <p>Google Docs, Skype, Dropbox, Facebook, Twitter,
Google Agenda, Youtube, Doodle, Yahoo! Groups, et bien d'autres sont des
 services extrêment pratiques, mais <strong>ils sont devenus bien trop gros et
nous ont rendus dépendants</strong>. Framasoft souhaite entrer en résistance, et
propose un plan de mise en place d'applications alternatives sur
plusieurs années.</p>
                <p>Ces services sont libres, gratuits, ouverts à
tous (dans la limite de nos capacités techniques et financières), tels
des <strong><a href="http://fr.wikipedia.org/wiki/Biens_communs" title="Bien communs">biens communs</a> numériques</strong>. Dans un souci de décentralisation
d'internet et de promotion de l'auto-hébergement, nous ferons le maximum
 afin que chacun puisse installer ses propres services (pour soi, pour
son association, son entreprise).</p>
                <p>Evidemment, nous n'avons pas la prétention de <em>concurrencer</em>
 ces services, nous souhaitons juste proposer un espace numérique
neutre, non-commercial et non-agressif envers ses utilisateurs.</p>
                <p><strong>Accéder à la liste des services que nous proposons déjà (et ceux en préparation) :</strong></p>
                <p class="text-center"><a href="http://degooglisons-internet.org/liste/" class="btn btn-liste btn-lg" >Liste des services Framasoft</a></p>
                <p><img src="img/cloud.jpg" alt="" class="center-block img-responsive" /></p>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <h2>Soutenir</h2>
                    <p>Un projet d'une telle envergure ne peut se faire sans <strong>votre soutien</strong>.</p>
                    <p>Si vous êtes développeur, graphiste, ergonome,
administrateur système, etc, vous pouvez nous contacter pour participer
activement au projet.</p>
                    <p class="text-center">
                        <a href="http://contact.framasoft.org/participer" class="btn btn-primary"><span class="fa fa-fw fa-envelope"></span> Contacter Framasoft</a>
                    </p>
                    <p>Mais le moyen le plus simple et le plus rapide de
 nous aider reste de nous soutenir financièrement : cela nous permet
de payer l'infrastructure (serveurs), et les permanents dédiés à la
réussite de ce projet ambitieux. Framasoft est une association d'intérêt
 général : un don de 100€ vous reviendra, après défiscalisation, à 34€.</p>
                    <p class="text-center">
                        <a class="btn btn-warning btn-lg btn-soutenir" href="http://soutenir.framasoft.org"><span class="fa fa-w fa-heart"></span> Faire un don<br />à Framasoft</a>
                    </p>
                </div>
                <p class="signature text-right small">Campagne commencée le 07/10/2014<br/>Dernière modification le 04/11/2014</p>
            </div>
        </div>
    </div>
    <a href="#" id="back-to-top" title="Retour en haut" ><span class="fa fa-fw fa-arrow-up"></span><span class="sr-only">Retour en haut</span></a>
</body>
</html>
