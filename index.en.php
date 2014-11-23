<?php
require('data.en.php');

$areas = '
    <!-- Village -->
    <area id="a-village" coords="320,230,130" class="village" alt="Free Village" title="Free Village " shape="circle" data-maphilight=\'{"strokeColor":"6A5687","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <!-- Big camps -->
    <area id="a-fermetum" coords="180,410,100" alt="Fermetum" title="Fermetum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <area id="a-centralisum" coords="310,490,100" alt="Centralisum" title="Centralisum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <area id="a-espionnum" coords="460,455,100" alt="Espionnum" title="Espionnum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <area id="a-privatum" coords="510,280,100" alt="Privatum" title="Privatum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <!-- NSA -->
    <area id="a-nsa" coords="900,600,90" alt="NSA" title="NSA"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1" >
    <!-- Little camps -->';

$options = '
    <option id="o-village" aria-describeby="#t-village">Free Village</option>
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
                $text .= ($v['wkp']!='') ? '<a href="http://en.wikipedia.org/wiki/'.$v['wkp'].'">'.$v['name'].'</a>' : $v['name'];
                $text .= ' - '.$v['description'].'</h2>
            <p>Editor : ';
                $text .= ($v['wkp_editeur']!='') ? '<a href="http://en.wikipedia.org/wiki/'.$v['wkp_editeur'].'">'.$v['editeur'].'</a>' : $v['editeur'];
                $text .= ($v['similaire']!='') ? '<br />Equivalent(s): '.$v['similaire'].'' : '';
                $text .= '
            </p>
            <p>';
                $text .= ($v['alt_online']!='') ? 'Alternative(s) online: '.$v['alt_online'].'<br />' : '';
                $text .= 'Alternative(s) offline: '.$v['alt_offline'].'
            </p>
            <p>Framasoft Service: '.$v['alt_frama'].'<br />';
                $text .= (strlen($v['date_frama'])==4) ? '(release planned the <a href="/liste/#'.$v['date_frama'].'">en '.$v['date_frama'].'</a>)' : $v['date_frama'];
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
                            An initiative of <span class="violet">Frama</span><span class="orange">soft</span> network
                            in favor of a <a href="#leds">free</a>, <a href="#leds">decentralized</a>, <a href="#leds">ethical</a> and <a href="#leds">solidarity-based</a> internet.
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
                        <img src="img/carte-full.jpg" alt="We are in 2014 AD. The whole internet is occupied by centralized services... The whole, really? No! A community populated by irreducible free Culture lovers still resists against the invaders. And the life is not easy for the fortified camp garrisons of Fermetum, Centralisum, Espionnum and Privatum..." style="width:100%" id="carte" usemap="#cartemap" />
                        <map id="cartemap" name="cartemap">
                            <?php echo $areas; ?>
                        </map>
                    </div>
                </div>
                <div class="col-md-4 description">

                    <p class="text-center"><a class="btn btn-warning btn-lg btn-soutenir" href="http://soutenir.framasoft.org"><span class="fa fa-w fa-heart"></span> Support this project</a></p>

                    <div class="well">
                        <p><select id="c-select" title="Select the camp" class="form-control">
                            <?php echo $options; ?>
                        </select></p>

                        <!-- Village -->
                        <div id="t-village" class="c-text">
                            <h2>Free village</h2>
                            <p>Amid sprawling multinationals, some non-profit
organizations continue to fight actively for the Web to be open and respectful
of users.</p>
                            <p>In addition to <a href="http://framasoft.org"
title="Framasoft">Framasoft</a>, a 1901 law non-profit organization which leads
this campaign, we can cite <a href="http://april.org" title="April">the
April</a>, <a href="http://laquadrature.net" title="La Quadrature du Net">La
Quadrature du Net</a> or <a href="http://aful.org" title="AFUL">the Aful</a>.
These organizations live thanks to your donations. Don't forget to help
them!</p>
                        </div>

                        <!-- Big camps -->
                        <div id="t-fermetum" class="c-text">
                            <h2>Fermetum</h2>
                            <p>Online services are often closed-source: once
you have started using them, it is very difficult to leave, because these
companies do everything to keep you captive by preventing you, for example,
from migrating your data somewhere else.</p>
                            <p>Using open source services means making
sure that we will never be controlled by a particular website but also that we
can always migrate our data elsewhere.
                            <a href="#t2-fermetum">Read more</a></p>
                        </div>

                        <div id="t-centralisum" class="c-text">
                            <h2>Centralisum</h2>
                            <p>Centralized services raise many problems: they
make your data very vulnerable (one inaccessible website and everything is
down) and make it very easy for third parties to exploit your data.</p>
                            <p>Using decentralized online services means having
a choice  between using an online instance such as those proposed by Framasoft
or installing/managing the  service yourself.
                            <a href="#t2-centralisum">Read more</a></p>
                        </div>

                        <div id="t-espionnum" class="c-text">
                            <h2>Espionnum</h2>
                            <p>"If it's free, you are the product": many
online services make a living from the use of your personal data, by selling it
to advertising companies. Furthermore, most of these services are based in the
United States and obey US laws like the PATRIOT ACT which completely deny your
right to privacy.</p>
                            <p>Using online services hosted in Europe means
ensuring that you are not dependent on the laws of another continent. In
addition, by hosting the service yourself, no third party can violate your
privacy.
                            <a href="#t2-espionnum">Read more</a></p>
                        </div>

                        <div id="t-privatum" class="c-text">
                            <h2>Privatum</h2>
                            <p>Freedom-depriving services ("proprietary" in
everyday language) are totally opaque: it is impossible to know exactly what
the software does with your data. Only the publisher has control over it.</p>
                            <p>Using Free online services means being sure
the community has control over the software and having the ability to modify
it, to install it elsewhere, etc.
                            <a  href="#t2-privatum">Read  more</a></p>
                        </div>

                        <!-- NSA -->
                        <div id="t-nsa" class="c-text">
                            <h2>NSA</h2>
                            <p>Edward Snowden's revelations on the PRISM NSA program have shown that fears over mass violation of Internet users' privacy were founded.</p>
                            <p>Today, using centralized services means offering up your personal data to surveillance organizations on a silver platter, with no way to control the way it is used.</p>
                        </div>
                        <!-- Little camps -->
                        <?php echo $text; ?>
                    </div>
                    <div id="menu">
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#enjeux" class="btn btn-enjeux btn-block" title="The stakes">The stakes</a></p>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#dangers" class="btn btn-dangers btn-block" title="Threats">Threats</a></p>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#solutions" class="btn btn-solutions btn-block" title="Our proposals">Our proposals</a></p>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#concret" class="btn btn-concret btn-block" title="In practice">In practice</a></p>
                        </div>
                        <p class="text-center"><a class="btn btn-liste btn-lg" href="liste/"> List of services</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="enjeux">
            <div class="container ombre">
                <h2>What are the stakes?</h2>
                <p>In recent years, we have witnessed
                    <strong> the widespread corporate concentration of Internet actors</strong>  (Youtube belonging to Google, WhatsApp to Facebook, Skype to Microsoft, etc.). This centralisation is detrimental, not only because it curbs innovation, but also because it results in a loss of freedom for the users. <strong>Users of these services no longer control their digital life</strong> :  their behaviour is continually dissected so that they can be better targeted by publicity, and their data – which should be private (sites visited, emails exchanged, videos watched, etc.) – can be analysed by government services. </p>
                <p>The way that Framasoft would like to deal with this issue is simple: to highlight and provide a Free, Ethical, Decentralised and Solidarity-based alternative to each of these services which deprive their users of their liberty. <a href="#dangers">Find out more…</a></p>

            </div>
        </div>

        <div class="row" id="dangers">
            <div class="container ombre">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Threats</h2>
                        <p>The increasingly centralized online services provided by sprawling giants like Google, Amazon, Facebook, Apple or Microsoft (GAFAM) threaten our digital lives.</p>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="t2-espionnum"><span class="fa fa-fw fa-eye"></span> Surveillance</h3>
                        <p>
                            These services are tracking us everywhere. While claiming to give us a better "user experience", our behaviour is constantly under surveillance. This information can be used to display targeted adverts, but the revelations of the Snowden case also proved that the Internet giants were forced to communicate this data (sometimes extremely private: emails from Gmail, photos shared on Facebook, Skype conversations, smartphone's location, etc.) to government services. Under the pretense of fighting terrorism, states are able to gather much more intelligence than a "Big Brother" would have ever dreamed of.
                        </p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-espionnage-modal-lg">Some exemples ?</button>
                        </p>
                            <div class="modal fade bs-espionnage-modal-lg" id="espionnageModal" tabindex="-1" role="dialog" aria-labelledby="espionnageLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="espionnageLabel">Surveillance</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>
                                        </p><ul>
                                            <li>Numérama, the 13/05/2014 : <a href="http://www.numerama.com/magazine/29353-la-nsa-accusee-d-avoir-piege-les-routeurs-americains.html">La NSA accusée d'avoir piégé les routeurs américains</a></li>
                                            <li>Numérama, the 12/09/2014 : <a href="http://www.numerama.com/magazine/30539-yahoo-revele-le-chantage-des-usa-pour-espionner-les-internautes.html">Yahoo révèle le chantage des USA pour espionner les internautes</a></li>
                                            <li>Numérama, the 04/07/2013 : <a href="http://www.numerama.com/magazine/26435-prism-l-allemagne-qui-espionne-aussi-deconseille-le-web-americain.html">PRISM : l'Allemagne, qui espionne aussi, déconseille le web américain</a></li>
                                            <li>Le Monde, the 27/06/2013: <a href="http://www.lemonde.fr/sciences/article/2013/06/27/il-est-temps-de-parler-des-metadonnees_3437125_1650684.html">Il est temps de parler des métadonnées</a></li>
                                            <li>Atlantico, the 25/11/2013, <a href="http://www.atlantico.fr/pepites/espionnage-etat-veut-attaquer-nos-donnees-personnelles-908758.html">Espionnage : l'Etat veut s'attaquer à nos données personnelles</a></li>
                                            <li>Le Monde, the 20/03/2014 : <a href="http://www.lemonde.fr/international/article/2014/03/20/dgse-orange-des-liaisons-incestueuses_4386264_3210.html">Espionnage : comment Orange et les services secrets coopèrent</a></li>
                                            <li>Le Monde, the 15/09/2014: <a href="http://www.lemonde.fr/proche-orient/article/2014/09/15/terrorisme-un-projet-de-loi-dangereux_4487639_3218.html">Terrorisme : un projet de loi dangereux</a></li>
                                            <li>Présumés Terroristes, septembre 2014 : <a href="https://presumes-terroristes.fr/">Loi Terrorisme. Sacrifier les libertés sous prétexte de lutte contre the terrorisme ? NON !</a></li>
                                            <li>Europe1, the 12/02/2014 : <a href="http://www.europe1.fr/high-tech/et-si-samsung-se-mettait-a-espionner-ses-propres-smartphones-1799713">Et si Samsung se mettait à "espionner" ses propres smartphones?</a></li>
                                            <li>Rue89, the 13/12/2008 :<a href="http://rue89.nouvelobs.com/2008/12/13/ecoutes-ce-qui-est-possible-avec-votre-telephone-portable">Ecoutes : ce qui est possible avec votre téléphone portable</a></li>
                                            <li>Le Monde, the 21/03/2014 : <a href="http://www.lemonde.fr/international/article/2014/03/21/la-france-suspectee-de-cyberattaque_4387232_3210.html">La France suspectée de cyberespionnage</a></li>
                                            <li>Pixels (Le Monde), the 14/09/2014 : <a href="http://www.lemonde.fr/pixels/article/2014/09/13/la-nsa-et-le-gchq-auraient-pirate-cinq-operateurs-telecom-allemands_4487181_4408996.html">La NSA et le GCHQ auraient piraté cinq opérateurs télécom allemands</a></li>
                                            <li>Pixels (Le Monde), the 16/09/2014 :  <a href="http://www.lemonde.fr/pixels/breve/2014/09/16/tim-cook-estime-que-les-etats-unis-sont-alles-trop-loin-dans-la-collecte-des-donnees_4488172_4408996.html">Tim Cook estime que les Etats-Unis sont allés trop loin dans la collecte des données</a></li>
                                            <li>Liberation, the 01/07/2014 :  <a href="http://www.liberation.fr/monde/2014/07/01/la-nsa-espionnait-193-pays-et-aussi-l-ue-et-le-fmi_1054881">La NSA espionnait 193 pays</a></li>
                                            <li>Numerama, the 24/07/2014 : <a href="http://www.numerama.com/magazine/30101-des-backdoors-sur-ios-tout-ce-qu-il-faut-savoir.html">Des backdoors sur iOS ? Tout ce qu'il faut savoir</a></li>
                                            <li>Bug Brother (Le Monde), the 11/02/2014 : <a href="http://bugbrother.blog.lemonde.fr/2014/02/11/le-gif-qui-revele-la-paranoia-de-la-nsaqui-espionne-donc-aussi-vos-enfants-parents-amis/">Le .gif qui révèle la paranoïa de la NSA, et pourquoi elle espionne aussi vos parents & amis</a></li>
                                            <li>Rue89, the 15/08/2013 :  <a href="http://rue89.nouvelobs.com/2013/08/15/les-messages-envoyes-compte-gmail-peuvent-etre-interceptes-alors-244954">Les e-mails envoyés sur Gmail peuvent être interceptés. Et alors ?</a></li>
                                            <li>Écrans.fr, the 07/06/2013 : <a href="http://ecrans.liberation.fr/ecrans/2013/06/07/le-fbi-a-acces-aux-comptes-facebook-google-yahoo_909023">Le FBI a accès aux comptes Facebook, Google, Yahoo!...</a></li>
                                            <li>Le Monde.fr, the 27/01/2014 : <a href="http://www.lemonde.fr/technologies/article/2014/01/27/des-applications-mobiles-utilisees-par-la-nsa-et-son-homologue-britannique_4355371_651865.html">Des applications de smartphones "mises sur écoute" par la NSA</a></li>
                                        </ul>
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="t2-privatum"><span class="fa fa-fw fa-user"></span>  Privacy</h3>
                        <p>
                            Our data is an extension of ourselves. It tells third-parties where we are, who we are with (?)/with whom we are, our political and sexual orientations, sites we have visited, our favorite recipe, our favorite topics of interest, etc. If a single data point is not always sensitive, the loss large amounts of aggregated data can be dangerous (for example if you browsed topics about cancer before subscribing to a life-insurance)<br>
                            In a world where everything is digital (ebooks, TV, phones, music, social networks, etc.),  <strong>our private life is an essential part of what makes us a singular person</strong>.  A malicious hacker with access to your smartphone could, in a few minutes, cause you serious harm (he could take the control of your identity on Facebook, see your professional or medical information, make purchases without your authorisation, etc.).
                        </p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-vie-privee-modal-lg">Some exemples ?</button>
                        </p>
                            <div class="modal fade bs-vie-privee-modal-lg" id="viePriveeModal" tabindex="-1" role="dialog" aria-labelledby="viePriveeLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="viePriveeLabel">Privacy</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>
                                        </p><ul>
                                            <li>Numérama, the 17/05/2014 : <a href="http://www.numerama.com/magazine/29400-et-maintenant-google-lit-vos-factures.html">Et maintenant Google lit vos factures</a></li>
                                            <li>Numérama, the 06/02/2014 : <a href="http://www.numerama.com/magazine/28299-yahoo-transfere-votre-vie-privee-en-irlande.html">Yahoo transfère votre vie privée en Irlande</a></li>
                                             <li>L'Expansion, the 16/01/2014 : <a href="http://lexpansion.lexpress.fr/high-tech/e-commerce-vos-donnees-personnelles-sont-en-danger_1326103.html">E-commerce: vos données personnelles sont en danger</a></li>
                                            <li>Numérama, the 21/02/2014 : <a href="http://www.numerama.com/magazine/28515-donnees-personnelles-la-chute-de-confiance.html">Données personnelles : la chute de confiance</a></li>
                                            <li>INRIA, the 12/04/2013 : <a href="http://hal.inria.fr/hal-00812734">Internet du futur : performances et respect de la vie privée</a></li>
                                            <li>Numérama, the 04/08/2014 : <a href="http://www.numerama.com/magazine/30187-google-a-signale-un-usager-qui-avait-envoye-des-photos-pedopornographiques-par-mail.html">Google a signalé un usager qui avait envoyé des photos pédopornographiques par mail</a></li>
                                            <li>Rue89, the 03/07/2013 : <a href="http://rue89.nouvelobs.com/2013/07/31/payer-carte-sans-code-sans-contact-sans-risque-244508">Payer par carte mais sans code : le "sans contact", pas sans risque</a></li>
                                            <li>Slate, the 03/10/2014 : <a href="http://www.slate.fr/story/92887/apple-google-facebook-sante">Après Apple et Google, Facebook se penche aussi sur notre santé</a></li>
                                            <li>CNIL, mai 2014 : <a href="http://www.cnil.fr/fileadmin/documents/La_CNIL/publications/DEIP/CNIL_CAHIERS_IP2_WEB.pdf ">Le corps, nouvel objet connecté (Cahiers IP num. 2)</a></li>
                                            <li>Numérama, the 22/08/2014 : <a href="http://www.numerama.com/magazine/30323-apple-approche-les-mutuelles-pour-divulguer-le-comportement-des-assures.html">Apple approche les mutuelles pour divulguer le comportement des assurés</a></li>
                                            <li>JDN, the 23/01/2014 : <a href="http://www.journaldunet.com/ebusiness/le-net/iwatch-apple-incroyable.shtml">Apple embauche des experts en contrôles sanguins</a></li>
                                            <li>Challenges, the 06/06/2014 : <a href="http://www.challenges.fr/entreprise/20140606.CHA4685/comment-l-assureur-axa-va-surveiller-votre-conduite.html">Comment l'assureur Axa va surveiller votre conduite</a></li>
                                            <li>UFC-Que-Choisir, the 25/03/2014 : <a href="http://www.quechoisir.org/telecom-multimedia/internet/communique-donnees-personnelles-l-ufc-que-choisir-attaque-les-reseaux-sociaux-et-appelle-les-consommateurs-a-garder-la-main-sur-leurs-donnees"> L’UFC-Que Choisir attaque les réseaux sociaux et appelle les consommateurs à garder la main sur leurs données</a></li>
                                            <li>Ecrans.fr, the 22/01/2011 :  <a href="http://ecrans.liberation.fr/ecrans/2011/10/22/facebook-la-memoire-cachee_956055">Facebook: la mémoire cachée</a></li>
                                            <li>Clubic, the 25/03/2013 : <a href="http://www.clubic.com/internet/google/actualite-549552-google-reader-fermeture-liee-problematiques-vie-privee.html">Google Reader : une fermeture liée aux problématiques de vie privée ?</a></li>
                                            <li>Rue89, the 14/01/2014 : <a href="http://rue89.nouvelobs.com/2014/01/14/google-lance-les-objets-connectes-sincruste-chez-249023">Google se lance dans les objets connectés et s’incruste chez vous</a></li>
                                            <li>Numerama the 30/06/2014 : <a href="http://www.numerama.com/magazine/29852-facebook-a-teste-sa-capacite-de-manipulation-mentale-des-foules.html">Facebook a testé sa capacité de manipulation mentale des foules</a></li>
                                            <li>Numerama, the 18/08/2014 : <a href="http://www.numerama.com/magazine/30290-comment-chrome-envoie-tous-vos-mots-de-passe-a-google.html">Comment Chrome envoie tous vos mots de passe à Google</a></li>
                                            <li>Rue89, the 29/08/2014 : <a href="http://rue89.nouvelobs.com/2014/08/29/iphone-6-apres-lempreinte-digitale-apple-veut-ficher-etat-sante-254496">iPhone 6 : après l’empreinte digitale, Apple veut ficher votre état de santé</a></li>
                                            <li>LDN, the 17/04/2014 : <a href="http://ldn-fai.net/je-nai-rien-a-cacher/">Je n'ai rien à cacher</a></li>
                                            <li>Numerama, the 26/09/2014 : <a href="http://www.numerama.com/magazine/30707-facebook-sait-ou-vous-passez-votre-lune-de-miel-maj.html">Même si vous dites rien, Facebook sait où vous passez votre lune de miel</a></li>
                                            <li>Journal du Net, the 16/07/14 : <a href="http://www.journaldunet.com/ebusiness/le-net/informations-rassemblees-par-google.shtml">Soyons honnêtes, la quantité  d'informations que Google rassemble à notre sujet est effrayante</a></li>
                                            </ul>
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                            Major actors of the Internet have become real giants: Google owns Youtube and Waze, Facebook acquired WhatsApp and Instagram, Microsoft distributes Skype, etc.<br>
                            This concentration of actors creates multiple issues: what if Facebook were suddenly shut down? How could we browse the Web if Google became broken?
                            <strong>We rely more and more dependent on services provided by a small group of actors.</strong> For example, Apple (iPhone), Google (Android) and Microsoft (Windows Phone) dominate almost the entire mobile OSes industry.<br>
                            Furthermore, the size of these actors impedes innovation: it's hard to launch a startup facing Apple or Google (respectively the first and second worldwide market capitalisations).<br>
                            Finally, the lack of diversity of these giants gives them a way not only to track us, but also to alter the data they bring us (a Google search won't produce the same results for the terms "nuclear power" whether Google considers you as an environmentalist or pro-nuclear power).
                        </p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-centralisation-modal-lg">Some exemples ?</button>
                        </p>
                            <div class="modal fade bs-centralisation-modal-lg" id="centralisationModal" tabindex="-1" role="dialog" aria-labelledby="centralisationLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="centralisationLabel">Centralisation</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>
                                        </p><ul>
                                            <li>NextInpact, the 14/06/2014 : <a href="http://www.nextinpact.com/news/88112-les-geants-net-generent-nouveaux-rapports-force.htm">Les géants du Net génèrent de nouveaux rapports de force</a></li>
                                            <li>Numérama, the 09/03/2013 : <a href="http://www.nextinpact.com/news/78092-edito-la-domination-et-centralisation-ennemis-numero-web.htm">La domination et la centralisation, les ennemis numéro un du web</a></li>
                                            <li>Droit et Technologies, the 25/02/2013 : <a href="http://www.droit-technologie.org/actuality-1577/cloud-la-perte-totale-des-donnees-est-possible-la-preuve-par-2e2-et.html">Cloud : la perte totale des données est possible. La preuve par 2e2 et Megaupload.</a></li>
                                            <li>INRIA, the 27/09/2011: <a href="http://www.inria.fr/actualite/actualites-inria/massification-du-web-les-consequences">La « massification » du web transforme les relations sociales</a></li>
                                            <li>INRIA, the 13/03/2013 : <a href="http://www.inria.fr/centre/lille/agenda/data-et-big-data-le-nouvel-or-noir">Data et Big Data : le nouvel or noir?</a></li>
                                            <li>Le Monde, the 12/06/2013: <a href="http://www.lemonde.fr/technologies/chat/2013/06/12/surveillance-d-internet-peut-on-encore-proteger-notre-vie-privee_3428413_651865.html">Pourquoi stocker toutes nos vies sur des serveurs aux Etats-Unis?</a></li>
                                            <li>Rue89, the 17/07/2009 : <a href="http://rue89.nouvelobs.com/rue69/2009/07/13/pour-sauver-la-vertu-de-son-iphone-apple-censure-a-tout-va">Pour sauver la vertu de son iPhone, Apple censure à tout va</a></li>
                                            <li>Nextinpact, the 08/04/2013 :  <a href="http://www.nextinpact.com/news/78883-appgratis-supprime-app-store-pour-son-reperage-promotions.htm">AppGratis supprimé de l'App Store pour son repérage des promotions</a></li>
                                            <li>Ecrans.fr, the 25/04/2013 : <a href="http://ecrans.liberation.fr/ecrans/2013/04/25/google-devoile-une-flambee-de-la-censure_957911">Google dévoile une flambée de la censure</a></li>
                                            <li>Nextinpact, the 24/04/2014 : <a href="http://www.nextinpact.com/news/87203-comment-etats-unis-veulent-enterrer-neutralite-net.htm">Comment les États-Unis veulent enterrer la neutralité du net</a></li>
                                        </ul>
                                    <p></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="t2-fermetum"><span class="fa fa-fw fa-lock"></span> Termination</h3>
                        <p>
                            Web services used on your computer, smartphone, tablets (and others) are usually hosted on the “cloud”: servers spread across the planet, that host not only your data (mails, pictures, files, etc), but also the application code.<br>
                            For your data, this raises the issue of sustainability (what would become of your files if Dropbox were to close tomorrow?) and of your ability to easily switch between services (how would you recover all of your data from Facebook or Picasa and import it, with all the adjoining comments, into another service?). <br>
                            For applications, it means that
                           <strong>you are completely dependent on what your service provider chooses to do</strong> (proliferating of advertisements, changes to the user interface, etc.) and that you hardly have any control over the application's behaviour. They are "black boxes" that can exhibit malicious behaviour (sending spam SMS without your knowledge, executing malicious code, etc).
                            <br>In short, these companies trap us in gilded cages: gilded yes, but cages nonetheless!
                        </p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-fermeture-modal-lg">Some exemples ?</button>
                        </p>
                            <div class="modal fade bs-fermeture-modal-lg" id="fermetureModal" tabindex="-1" role="dialog" aria-labelledby="fermetureLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="fermetureLabel">Termination</h4>
                                  </div>
                                  <div class="modal-body">

                                     <p>
                                        </p><ul>
                                            <li>CNIL, the 03/01/2014 : <a href="http://www.legifrance.gouv.fr/affichCnil.do?oldAction=rechExpCnil&id=CNILTEXT000028450267&fastReqId=2000051504&fastPos=1">Exemple de sanction de la CNIL à l'encontre de Google</a></li>
                                            <li>01Net, the 23/11/2012 : <a href="http://www.01net.com/editorial/580825/securite-le-cloud-est-plus-dangereux-que-les-virus/">Sécurité : le cloud est plus dangereux que les virus</a></li>
                                            <li>CNIL, the 25/06/2012 : <a href="http://www.cnil.fr/fileadmin/images/la_cnil/actualite/Recommandations_pour_les_entreprises_qui_envisagent_de_souscrire_a_des_services_de_Cloud.pdf">Recommandations pour les entreprises qui envisagent de souscrire à des services de Cloud computing</a></li>
                                            <li>INRIA, the 13/12/2013 : <a href="http://hal.inria.fr/hal-00918398">Quand les terminaux mobiles jouent les mouchards de poche</a></li>
                                            <li>INAGlobal, the 04/02/2014 : <a href="http://www.inaglobal.fr/numerique/article/facebook-nen-fais-pas-une-affaire-de-donnees-personnelles">Facebook, n'en fais pas une affaire de données personnelles!</a></li>
                                            <li>Rue89, the 03/02/2013 : <a href="http://rue89.nouvelobs.com/2013/02/03/qui-appartiennent-vos-donnees-sur-internet-mauvaises-nouvelles-et-conseils-239198">A qui appartiennent vos données sur Internet ? Mauvaises nouvelles et conseils</a></li>
                                            <li>Atlantico, the 16/06/2014 : <a href="http://www.atlantico.fr/decryptage/quelle-cible-publicitaire-etes-pourquoi-avez-peut-etre-interet-utiliser-fonctions-facebook-et-google-pour-connaitre-que-geants-1617661.html">Quelle cible publicitaire êtes-vous?</a></li>
                                            <li>Nextinpact, the 22/07/2009 : <a href="http://www.nextinpact.com/archive/52115-amazon-kindle-ebook-disparaitre-orwell.htm">Des ouvrages d'Orwell supprimés du Kindle par Amazon</a></li>
                                            <li>Rue89, the 18/11/2013 : <a href="http://rue89.nouvelobs.com/2013/11/18/google-facebook-apple-superpuissances-ont-privatise-internet-247615">Google, Facebook, Apple... : ces superpuissances ont privatisé Internet</a></li>
                                            <li>Liberation.fr, the 07/03/2014 : <a href="http://next.liberation.fr/sexe/2014/03/07/la-fin-du-porno-sur-vine-un-espace-de-liberte-en-moins_985232">La fin du porno sur Vine, un espace de liberté en moins</a></li>
                                            <li>Liberation.fr, the 14/03/2014 : <a href="http://next.liberation.fr/sexe/2014/03/14/apple-censure-un-roman-francais-pour-cause-de-seins-nus_987120">Apple censure un roman français pour cause de seins nus</a></li>
                                            <li>Rue89, the 29/05/2014 : <a href="http://rue89.nouvelobs.com/2014/05/29/chantage-google-apple-amazon-les-tontons-ecrabouilleurs-252521">Chantage : Google, Apple et Amazon, les tontons écrabouilleurs</a></li>
                                            <li>Numerama, the 09/08/2014 : <a href="http://www.numerama.com/magazine/30226-quand-facebook-est-en-panne-le-trafic-des-sites-baisse.html">Quand Facebook est en panne, le trafic des sites baisse</a></li>
                                            <li>NextInpact, the 22/08/2014 : <a href="http://www.nextinpact.com/news/89379-quand-twitter-deraille-avec-timeline-ses-utilisateurs.htm">Quand Twitter déraille avec la timeline de ses utilisateurs</a></li>
                                        </ul>
                                    <p></p>


                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                        <h2><a id="leds"></a>Our proposals</h2>
                            <p>Framasoft  wishes to face  the threats to our digital lives by offering free, ethical, decentralised and solidarity-based services.</p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-unlock"></span> Freedom</h3>
                            <p> LThe story of the Internet itself is a story of free software, whether from the point of view of the standards as well as the protocols used. Its potential and popularity are a cause for envy, and large companies would like nothing better than to control it by imposing closed-source, locked down and non-interoperable systems.</p>
                            <p>For the Internet to stay true to its founding principles, those which led to its success, it has to have/we have to develop/users must be able to use free software, that is to say software whose source code is open, accessible and covered by free software licenses.</p>
                            <p><strong>Framasoft hereby commits to using only software for which the source code is "free".</strong></p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-eye-slash"></span> Ethics</h3>
                            <p>We promote an Internet based on independence and sharing.</p>
                            <p>We oppose the exploitation, surveillance, censorship and appropriation of data in favour of transparency (probity), clear presentation of services' terms of use and refusing discrimination.</p>
                            <p><strong>Framasoft undertakes not to exploit its users' data, and to promote a fair and open Web.</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-share-alt"></span> Decentralization</h3>
                            <p>Internet intelligence must rest with every network player, in the spirit of sharing among peers, to avoid creating a Minitel (videotext terminal and service, pre Internet) 2.0.</p>
                            <p>To ensure equality for all, whether citizens or entrepreneurs, not only must monopolies be avoided, but they must be prevented from grabbing personal or public data.</p>
                            <p>By explaining, thanks to tutorials, how to increase the use of free solutions allowing a fairer Internet, we help code spread and we diversify uses.</p>
                            <p><strong>Framasoft hereby commits to facilitating self-hosting and interoperability, so that its users don't get "locked in".</strong></p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-users"></span>Solidarity</h3>
                            <p>Through the services we deploy, we promote an economic model based on sharing costs, sharing resources, and widespread access.</p>
                            <p>CThis model also has an educational aspect because we believe that by documenting how to setup services, many users will be able to share these resources in turn.</p>
                            <p>NWe think that not infantilizing users and that sharing the responsibility of using the services will make it possible to regulate abuse.</p>
                            <p><strong>Framasoft hereby commits to promoting respect and autonomy for its users (as long as the reverse stays true).</strong></p>
                    </div>
                    <div class="col-sm-12">
                        <div class="well text-center">
                            <h3>Services and Charter</h3>
                            <p>You can find out online the list of the services we already offer (and those yet to come) as well as our charter:</p>
                            <p>
                                <a href="http://degooglisons-internet.org/liste/" class="btn btn-liste">Framasoft services</a>
                                <a href="http://degooglisons-internet.org/nav/html/charte.html" class="btn btn-primary">Framasoft service charter</a>
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="row" id="concret">
        <div class="container ombre">
            <div class="col-md-8">
                <h2>In practice</h2>
                <p>The « Dégooglisons Internet » project - which does not exclusively concern Google - consists in <strong> offering as many alternative services as possible to those we consider a threat to our digital lives</strong>.</p>
                <p>Google Docs, Skype, Dropbox, Facebook, Twitter, Google Agenda, Youtube, Doodle, Yahoo! Groups, and many others, are extremely convenient services but <strong>they have become far too large and have made us dependent on them</strong>. Framasoft wishes to resist this trend and is putting forward a roadmap for setting up alternative services over several years.</p>
                <p>These services are free, gratis, open to all (insofar as our technical and financial capabilities allow us), as <strong><a href="http://en.wikipedia.org/wiki/Commons" title="Bien communs">digital commons</a> numériques</strong>. In view of decentralising the internet and of promoting self-hosting, we will do our best so that everyone can install their own services (for themselves, for their organisation, their company).</p>
                <p>We are not aiming to compete with these services of course, we merely wish to offer a space that is neutral, non-commercial and not aggressive towards its users.</p>
                <p><strong>See the list of services we are already offering (and those that we are preparing):</strong></p>
                <p class="text-center"><a href="http://degooglisons-internet.org/liste/" class="btn btn-liste btn-lg" >List of Framasoft services</a></p>
                <p><img src="img/cloud.jpg" alt="" class="center-block img-responsive" /></p>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <h2>Support</h2>
                    <p>A project with such a wide scope cannot happen without <strong>your support</strong>.</p>
                    <p>Whether you are a developer, a graphic designer, systems administrator, etc., you can contact us to take an active part in the project.</p>
                    <p class="text-center">
                        <a href="http://contact.framasoft.org/participer" class="btn btn-primary"><span class="fa fa-fw fa-envelope"></span> Contact Framasoft</a>
                    </p>
                    <p>The simplest and quickest way to help us remains financial support: it allows us to pay for the infrastructure (servers) and the permanent staff committed to the success of this ambitious project. Framasoft is a public interest association ]: a €100 donation will cost you €34, after tax exemption.</p>
                    <p class="text-center">
                        <a class="btn btn-warning btn-lg btn-soutenir" href="http://soutenir.framasoft.org"><span class="fa fa-w fa-heart"></span> Donate to<br /> Framasoft</a>
                    </p>
                </div>
                <p class="signature text-right small">Campaign start: 07/10/2014<br/>Last modified: 04/11/2014</p>
            </div>
        </div>
    </div>
    <a href="#" id="back-to-top" title="Back to the top" ><span class="fa fa-fw fa-arrow-up"></span><span class="sr-only">Back to the top</span></a>
</body>
</html>
