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
                            Una iniciativa de la red <span class="violet">Frama</span><span class="orange">soft</span>,
                            por un Internet <a href="#leds">libre</a>, <a href="#leds">descentralizado</a>,
                            <a href="#leds">ético</a> y <a href="#leds">solidario</a>.
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

                    <p class="text-center"><a class="btn btn-warning btn-lg btn-soutenir" href="http://soutenir.framasoft.org"><span class="fa fa-w fa-heart"></span>Apoya este proyecto</a></p>

                    <div class="well">
                        <p><select id="c-select" title="Choisir le camp" class="form-control">
                            <?php echo $options; ?>
                        </select></p>

                        <!-- Aldea -->
                        <div id="t-village" class="c-text">
                            <h2>Aldea librista</h2>
                            <p>En medio de los tentáculos de las
multinacionales, unas cuantas organizaciones sin ánimo de lucro siguen
luchando con empeño por una Red abierta et que respete a sus usuarios
y usuarias.</p>
                            <p>Además de <a href="http://framasoft.org" title="Framasoft">Framasoft</a>,
asociación francesa amparada bajo la ley de 1901 que lidera esta camapaña,
existen estas otras asociaciones <a href="http://april.org" title="April">l'April</a>,
<a href="http://laquadrature.net" title="La Quadrature du Net">la Quadrature du Net</a>
y también <a href="http://aful.org" title="AFUL">l'Aful</a>.
Ellas viven de sus donaciones, así que no olviden apoyarlas!</p>
                        </div>
                        <!-- Big camps -->
                        <div id="t-fermetum" class="c-text">
                            <h2>Cerratum</h2>
                            <p>Los servicios en línea son con frecuencia cerrados :
una vez que los hemos empezado a utilizar, es muy difícil
separase de ellos, ya que estas empresas hacen todo lo posible para
mantenernos cautivos impidiéndonos, por ejemplo, migrar nuestros datos
a otra parte fácilmente.</p>
                            <p>Utilizar servicios en línea abiertos,es
 asegurarse que nunca seremos prisioneros de un único sitio y que
siempre será posible buscar algún otro.
                            <a href="#t2-fermetum">Más información</a></p>
                        </div>
                        <div id="t-centralisum" class="c-text">
                            <h2>Centralisum</h2>
                            <p>Los servicios centralizados plantean muchos
problemas : hacen tus datos sean muy vulnerables (un sólo sitio no
disponible y todo queda bloquado) y facilitan muchísimo su explotación
por terceros.</p>
                            <p>Utilizar servicios en línea descentralizados
como los que propone Framasoft, es tener la opción entre usarlos en
línea o instalar el sericio en local.
                            <a href="#t2-centralisum">Más información</a></p>
                        </div>
                        <div id="t-espionnum" class="c-text">
                            <h2>Espionnum</h2>
                            <p>«&nbsp;Si es gratis es que tú eres el
producto&nbsp;»: muchos servicios en línea se financian gracias al uso y
 la explotación de tus datos personales, por ejemplo vendiéndolos a empresas
publicitarias. Además, la mayoría de los servicios están basados en los
Estados Unidos y obedecen a las leyes estadounidenses como la PATRIOT ACT
 que niegan completamente tus derechos a la vida privada.</p>
                            <p>Usar servicios en línea albergados en
Europa es asegurarse de no depender de legislaciones de otro continente.
 Además, albergando tú mismo los servicios que usas, ningún tercero
 podrá violar tu vida privada.
                            <a href="#t2-espionnum">Más información</a></p>
                        </div>
                        <div id="t-privatum" class="c-text">
                            <h2>Privatum</h2>
                            <p>Los servicios privativos
(«&nbsp;propietarios&nbsp;» en el lenguaje común y corriente)tienen un
funcionamiento secreto: es imposible saber exactamente lo que hará un
programa con tus datos. Sólo quién lo edita posee el control.</p>
                            <p>Usar servicios en línea libres es asegurarse
que la comunidad tiene control sobre el funcionamiento de un programa y
que siempre será posible modificarlo e instalarlo en otro lugar por ejemplo.
                            <a href="#t2-privatum">Más información</a></p>
                        </div>
                        <!-- NSA -->
                        <div id="t-nsa" class="c-text">
                            <h2>NSA</h2>
                            <p>Las revelaciones de Edward Snowden acerca
del programa PRISM de la NSA (National Security Agency de los EE.UU)
demostraron que el miedo a la incursión masiva en la vida privada de l@s
usuari@s de internet tenian su razón de ser.</p>
                            <p>Usar servicios centralizados es como servir
en bandeja de plata tus datos personales a los organismos de espionaje y
monitoreo sin poder tener ningún tipo de control sobre el uso que van a
hacer de ellos.</p>
                        </div>
                        <!-- Little camps -->
                        <?php echo $text; ?>
                    </div>
                    <div id="menu">
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#enjeux" class="btn btn-enjeux btn-block" title="Los desafíos">Los desafíos</a></p>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#dangers" class="btn btn-dangers btn-block" title="Los peligros">Los peligros</a></p>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#solutions" class="btn btn-solutions btn-block" title="Nuestras propuestas">Nuestras propuestas</a></p>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#concret" class="btn btn-concret btn-block" title="En concreto">En concreto</a></p>
                        </div>
                        <p class="text-center"><a class="btn btn-liste btn-lg" href="liste/">Lista de servicios</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="enjeux">
            <div class="container ombre">
                <h2>¿ Cuáles son nuestros desafíos ?</h2>
                <p>Durante estos últimos años se ha generalizado una
<strong>concentración de los actores de Internet</strong> (Youtube le pertenece a Google,
WhatsApp a Facebook, Skype a Microsoft, etc.). Este tipo de centralización
es nociva, no solamente frena la innovación sino que sobretodo convella
a la pérdida de libertad para los interesados. <strong>Los usuarios de estos
servicios dejan de controlar su vida digital</strong>  : sus comportamientos son
desmenuzados permanentemente para que sean mejores blancos para la
publicidad y sus datos - a pesar de ser privados (por ejemplo los sitios
 visitados, los correos intercambiados, los videos vistos, etc.) -
 pueden ser analizados por los servicios del estado.</p>
                <p>La repuesta de Framasoft a este problema es simple :
fomentar, para cada uno de estos servicios que impiden la libertad,
una alternativa Libre, Ética, Descentralizada y Solidaria.
                <a href="#dangers">Más información ...</a></p>
            </div>
        </div>

        <div class="row" id="dangers">
            <div class="container ombre">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Peligros</h2>
                        <p>Los servicios en línea están cada vez más
centralizado por los gigantes tentaculares como Google, Amazon, Facebook,
Apple o Microsoft (GAFAM) y ponen en peligro nuestras vidas digitales.</p>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="t2-espionnum"><span class="fa fa-fw fa-eye"></span>Espionaje</h3>
                        <p>Estos servicios nos espían constantemente.
    Bajo el pretexto de ofrecer una "mejor experiencia de l@s usuari@s",
nuestros comportamientos en Internet son espiados constantamente.
Esas informaciones pueden ser utilizadas para mostrar publicidad adaptada
a l@s usuari@s, pero las revelaciones del caso Snowden también
demostraron que los gigantes de Internet se vieron obligados a proporcionar
estos datos (a veces extremadamente privados: los correos electrónicos enviados
por GMail, fotos compartidas en Facebook, conversaciones vía Skype, o incluso
la geolocalización de teléfonos entre otras) a los servicios del gobierno.
<strong>Con el pretexto de la lucha contra el terrorismo</strong>, los
estados ahora son capaces de obtener más información de la que el
mismo "Gran Hermano" hubiera podido soñar.
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
                        <h3 id="t2-privatum"><span class="fa fa-fw fa-user"></span>Vida privada</h3>
                        <p>
                            Nuestros datos son una extensión
de nosotr@s mism@s. Ellos pueden indicar en donde estamos,
nuestra orientación política o sexual, los sitios en los que navegamos,
nuestra receta favorita, los temas que nos interesan, etc.<br>
                            Si un dato aislado, no es particularmente
sensible, un conjunto de datos sí puede llegar a serlo (por ejemplo,
si has hecho alguna búsqueda sobre el cáncer antes de comprar una póliza
de seguro de vida). <br>
                            En un mundo donde todo es digital
(la lectura, la televisión, el teléfono, la música, las redes sociales,
 etc. ), <strong>nuestra privacidad es una parte esencial de lo que nos hace una
 persona única</strong>. Una persona malintencionada que tenga acceso a su
smartphone puede saber en unos minutos lo suficiente sobre tí como
para causarte un daño muy importante (el robo de identidad en Facebook,
apropiación indebida de información profesional o hacer compras sin tu
consentimiento, entre otros).
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
                        <h3 id="t2-centralisum"><span class="fa fa-fw fa-dot-circle-o"></span>Centralización</h3>
                        <p>
                            Los  principales actores de Internet se
han convirtido en auténticos pulpos: Facebook compró WhatsApp e
Instagram, Youtube y Google  tienen Waze, Microsoft distribuye
a Skype, etc. <br>
                            Esta concentración es nociva:
¿Qué pasaría si Facebook quiebra? ¿Cómo hacer búsquedas si Google no
 funciona? <strong>Poco a poco nos volvemos dependientes de los servicios
 prestados por una pequeña cantidad de actores.</strong> Por ejemplo,
 Apple (iPhone), Google (Android) y Microsoft (Windows Phone) poseen
 casi todo el mercado de sistemas operativos para teléfonos
 inteligentes a nivel mundial.<br>

                            Par ailleurs, la taille de ces acteurs bride
 l'innovation : difficile de lancer une start-up face à Apple ou Google
(respectivement première et deuxième capitalisations boursières
mondiale).<br>
                            Por  último, la falta de diversidad de estos
 gigantes también les da la oportunidad no sólo para recoger fácilmente
 datos personales, sino también para alterar la información que
 proporcionan (una búsqueda en Google de la palabra "nuclear"
 no te muestra los mismos enlaces si Google te ve como un ecologista
 militante o como un pronuclear).
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
                        <h3 id="t2-fermetum"><span class="fa fa-fw fa-lock"></span>Aprisionamiento</h3>
                        <p>
Los servicios web disponibles en tu computadora o en tu smartphone
funcionan en general en modo "nube" : servidores repartidos por todo
 el planeta que almacenan tanto los datos (mensajes, fotos, archivos, etc.)
como el código de la aplicación. <br>
                            Para los datos, se plantea la cuestión de
su perpetuidad (¿Qué pasaría con tus archivos si Dropbox desapareciera mañana?)
 pero también se plantea tu capacidad para cambiar de servicio (¿Cómo recuperar
 todas tus fotos de Facebook o Picasa y reinsertarlas con los comentarios
 en otro servicio?).<br>
                            Para las aplicaciones, esto significa que
<strong>estás a merced de cambios súbitos según la voluntad del proveedor</strong>
 (agregar publicidad, cambiar la interfaz, etc.), pero sobre todo que
 no tienes prácticamente ningún control sobre lo que aplicación puede
 hacer. Es como si fueran "cajas negras" que pueden actuar
 malintencionadamente (enviar mensajes de texto sin que lo sepas,
 ejecutar código no deseado, etc.).
                        <br>En pocas palabras, estas empresas nos encierran en jaulas, que aunque sean de oro, ¡No dejan de ser jaulas!
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
                        <h2><a id="leds"></a>Nuestras propuestas</h2>
                            <p>Framasoft quiere hacer frente a los
peligros que amenazan nuestras vidas digitales ofreciendo
servicios libres, éticos, descentralizados y solidarios. </p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-unlock"></span> Libertad</h3>
                            <p> La historia de Internet es  también la historia de los softwares libres,
                             tanto desde el punto de vista de los estándares  que de los  protocolos empleados.
                              Su popularidad y su potencial despiertan envidias, y las grandes corporaciones quisieran
                                acaparárselos imponiéndoles un código cerrado en sistemas
                            cerrados y no interoperables.</p>
                            <p>Para que Internet siga fiel a sus principios fundadores
                             que lo llevaron al éxito, tenemos que encontrar aplicaciones libres,
                             es decir cuyo código fuente es abierto, accesible y libre.</p>
                            <p><strong> Framasoft se compromete a utilizar únicamente programas de código fuente "libre".</strong></p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-eye-slash"></span> Ética</h3>
                            <p>Apoyamos un Internet hecho de intercambios y de independencia.</p>
                            <p>La explotación, el monitoreo, la censura y la apropiación de los
                            datos son valores que rechazamos en pro de la transparencia (la probidad),
                             de la clara exposición de las condiciones de uso de los servicios y
                             del rechazo de las discriminaciones.</p>
                            <p><strong>Framasoft se compromete a no explotar los datos de l@s usuari@s de sus servicios y a promover una Red abierta y equitativa.</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-share-alt"></span> Descentralización</h3>
                            <p> La inteligencia de Internet debe residir en cada protagonista de la red,
                             en una dinámica de intercambios entre pares para evitar que se convierta en un Minitel
                              2.0*. (https://es.wikipedia.org/wiki/Minitel)</p>
                            <p>PLos monopolios no sólo deben ser evitados sino que se debe impedir la recolección
                             de datos personales o públicos, para garantizar la igualdad de tod@s, tanto
                              ciudadan@s como empresari@s.</p>
                            <!--
                            <p>En expliquant, par des tutoriels, comment multiplier les solutions libres permettant un
                            Internet plus équitable, nous facilitons l'essaimage du code et diversifions les usages.</p>
                            <p><strong>Framasoft s'engage à faciliter l'auto-hébergement et l'interopérabilité, afin de ne pas «&nbsp;enfermer&nbsp;» ses utilisateurs.</strong></p>
                            -->
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-users"></span> Solidaridad</h3>
                            <p>Gracias a los servicios que desarrollamos, promovemos un modelo
                            económico basado en la mutualización de costes, compartir los
                            recursos y el acceso para todas y todos.</p>
                            <p>Este modelo posee un caracter educativo ya que creemos
                            que documentando el desarrollo de nuestros servicios la mayoría
                            de l@s usuari@s podrán compartir a su vez estos recursos.</p>
                            <p>Creemos que no infantilizar a l@s usuari@s y compartir la responsabilidad de la utlización de los servicios permitirá regular los abusos.</p>
                            <p><strong>Framasoft se compromete a promover el respeto y la autonomía de estos usuari@s (siempre y cuando ell@s se comprometan a lo mismo).</strong></p>
                    </div>
                    <div class="col-sm-12">
                        <div class="well text-center">
                            <h3>Servicios y Declaración</h3>
                            <p>Puedes encontrar una lista de los servicios en línea ya disponibles (y los que están aún en preparación), así como nuestra Declaración :</p>
                            <p>
                                <a href="http://degooglisons-internet.org/liste/" class="btn btn-liste">Lista de los servicios de Framasoft</a>
                                <a href="http://degooglisons-internet.org/nav/html/charte.html" class="btn btn-primary">Declaración de los servicios de Framasoft</a>
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="row" id="concret">
        <div class="container ombre">
            <div class="col-md-8">
                <h2>En concreto </h2>
                <p>El proyecto “Dégooglicemos Internet” - que no se limita
a Google - consiste en proporcionar servicios alternativos a
 la mayor parte de servicios que evaluamos como amenazas a nuestras vidas
 digitales. </p>
                <p>Google Docs, Skype, Dropbox, Facebook, Twitter,
Google Calendar, YouTube, Doodle, Yahoo! Groups y muchos
otros servicios son muy útiles pero
<strong>se han vuelto demasiado grandes y
nos han hecho dependientes de ellos</strong>. Framasoft desea entrar en la
lucha y propone un plan de implantación de aplicaciones
alternativas escalonado durante varios años.</p>
                <p>Estos servicios son libres, gratuitos, y
abiertos a tod@s (dentro de los límites de nuestra capacidad
técnica y financiera) y son  <strong> bienes comunes digitales</strong>.
 En aras de una Internet descentralizada y de la fomentar el
 propio alojamiento de datos, haremos todo lo posible para que tod@s
 puedan instalar sus propios servicios (para sí mism@s, para su asociación
  o su negocio).</p>
                <p>Obviamente, no pretendemos hacerle competencia
a estos servicios, sólo queremos ofrecer un espacio digital neutro,
no comercial y no invasivo a l@s usuari@s. </p>
                <p><strong>Acceso a la lista de servicios que ya ofrecemos (y los que están en preparación) :</strong></p>
                <p class="text-center"><a href="http://degooglisons-internet.org/liste/" class="btn btn-liste btn-lg" >Liste des services Framasoft</a></p>
                <p><img src="img/cloud.jpg" alt="" class="center-block img-responsive" /></p>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <h2>Apóyanos</h2>
                    <p>Un proyecto de esta magnitud no se puede hacer sin tu apoyo.</p>
                    <p>Si eres desarrollador@, diseñador@, ergónom@,
administrador@ de sistemas, etc., puedes contactarnos
para participar activamente en el proyecto.  </p>
                    <p class="text-center">
                        <a href="http://contact.framasoft.org/participer" class="btn btn-primary"><span class="fa fa-fw fa-envelope"></span>Contactar a Framasoft</a>
                    </p>
                    <p>Pero la forma más fácil y rápida de ayudarnos es apoyarnos económicamente:
esto nos permite pagar por la infraestructura (servidores) y a las personas que empleamos para
 que este ambicioso proyecto sea un éxito. Framasoft es una asociación “d'intérêt général”
  (de interés general) según la legislación francesa y por esta razón una donación de 100 €,
   después de la desgravación fiscal, te cuesta 34 € si pagas impuestos en Francia.</p>
                    <p class="text-center">
                        <a class="btn btn-warning btn-lg btn-soutenir" href="http://soutenir.framasoft.org"><span class="fa fa-w fa-heart"></span>Donar<br />a Framasoft</a>
                    </p>
                </div>
                <p class="signature text-right small">Campaña iniciada le 07/10/2014<br/>Última actualización le 04/11/2014</p>
            </div>
        </div>
    </div>
    <a href="#" id="back-to-top" title="Retour en haut" ><span class="fa fa-fw fa-arrow-up"></span><span class="sr-only">Retour en haut</span></a>
</body>
</html>
