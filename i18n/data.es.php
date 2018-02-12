<?php
/*
 * $l = enlaces
 * $t = texto
 * $d = datos campos y framaproyectos
 * $e = editor
 */

// Enlaces
$l['F'] = 'https://framasoft.org';
$l['S'] = 'https://soutenir.framasoft.org';
$l['DIo'] = 'https://degooglisons-internet.org';
$l['DIoL'] = $l['DIo'].'/lista';
$l['Charte'] = 'https://framasoft.org/nav/html/charte.html';
$l['contact'] = 'https://contact.framasoft.org';
$l['participer'] = $l['contacto'].'/participar';


// Imágenes
$l['map'] = 'img/carte-animee-fr.gif';

// Meta
$t['meta']['lang']      = 'es';
$t['meta']['title']     = 'Desgooglicemos Internet';
$t['meta']['framasoft'] = 'Framasoft';
$t['meta']['F']         = '<a href="'.$l['F'].'"><b class="violet">Frama</b><b class="orange">soft</b></a>';
$t['meta']['DIo']       = '<a href="'.$l['DIo'].'"><b class="violet">Desgooglicemos</b> <b class="orange">Internet</b></a>';
$t['meta']['start']     = 'Campaña comenzada el día 07/10/2014';
$t['meta']['edit']      = 'Última modificación el 02/10/2015';
$t['meta']['S']         = 'Sostener este proyecto';
$t['meta']['lead']      = 'Una iniciativa de nuestra red '.$t['meta']['F'].' en favor de un internet<br/>
                <a href="#leds">libre</a>, <a href="#leds">descentralizado</a>,
                <a href="#leds">ético</a> y <a href="#leds">solidario</a>'; 

// LEDS
$t['meta']['leds']['title']   = 'Por un Internet…';
$t['meta']['leds']['ltitle']  = 'Libre';
$t['meta']['leds']['ldesc']   = 'La historia de la red Internet en sí es una historia de software libre,
                tanto desde el punto de vista de los estándares como de los protocolos empleados.
                Su popularidad y su potencial provocan también envidia, y algunas grandes empresas
                bien quisieran hacerse con su control, imponiendo código cerrado en unos sistemas bloqueados
                y no interoperables. Para que Internet siga siendo fiel a sus principios fundadores que lo han conducido al éxito,  
               debemos encontrar en él aplicaciones de software libre, esto es, cuyo código fuente esté abierto, sea asequible y siga bajo licencias libres.';
$t['meta']['leds']['dtitle']  = 'Descentralizado';
$t['meta']['leds']['ddesc']   = 'La inteligencia de Internet debe situarse en la periferia de la red dentro de una dinámica 
                de intercambio entre iguales, para impedir crear un Minitel 2.0 más. Para asegurar la igualdad
                de todos, ciudadanos como empresarios, no sólo se deben evitar los monopolios,
                sino que también se les debe impedir que se apoderen de los datos personales o públicos. Explicando,
                mediante tutoriales, cómo multiplicar las soluciones libres que permitan un Internet
                más equitativo, favorecemos la diseminación del código y  diversificamos los usos.';
$t['meta']['leds']['etitle']  = 'Ético';
$t['meta']['leds']['edesc']   = 'Respaldamos totalmente un Internet de intercambio y de independencia.
                La explotación, la vigilancia, la censura y la apropiación de los datos son valores que 
                rehusamos en provecho de la transparencia (la probidad),
                de la exposición clara de las condiciones de uso de los servicios, y de la negación de las discriminaciones.';
$t['meta']['leds']['stitle']  = 'Solidario';
$t['meta']['leds']['sdesc']   = 'Gracias a los servicios que desplegamos, promovemos un modelo económico
                basado en la mutualización de los costes, el intercambio de los recursos y la asequibilidad de la mayoría.
                Por tanto, se evitarán los abusos porque todos tenemos conciencia de la
                la comunidad de los bienes. También posee este modelo un carácter educativo ya que pensamos 
                que si documentamos el depliegue de servicios, un gran número de usuarios
               estarán a su vez en condiciones de compartir dichos recursos.';
$t['meta']['leds']['charte']  = 'Para saber más, consulte <strong><a href="'.$l['Charte'].'">nuestra charte</a></strong> con detalles.';

// Inicio
$t['home']['title']  = 'Inicio';
$t['home']['link']   = $l['current'];
$t['home']['desc']   = '';
$t['home']['css']    = '<link href="'.$l['current'].'css/home.css" rel="stylesheet" type="text/css" />';
$t['home']['js']     = '
    <script src="'.$l['current'].'js/jquery.maphilight.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/imageMapResizer.min.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/home.js" type="text/javascript"></script>';
$t['home']['map']    = 'Haga clic en el mapa para descubrir las alternativas…';
$t['home']['altMap'] = "Estamos en 2015 después de Cristo. Toda la Red está ocupada por los servicios centralizados… 
                 ¿Toda? ¡No! Una aldea poblada por irreductibles activistas de lo libre resiste, 
                 todavía y como siempre, al invasor. Y la vida no es fácil para las guarniciones  
                de los reducidos campamentos de Fermetum, Centralisum, Espionnum y Privatum…' 
               

// Inicio - Campamentos
$t['home']['camps']['village']     = 'Pueblo librista';
$t['home']['camps']['vp1']         = 'En medio de las empresas multinacionales tentaculares, 
                una organización sin fines lucrativos continúa participando activamente en la lucha 
                por una Red abierta y respectuosa de los internautas.';
$t['home']['camps']['vp2']         = 'Además de '.$t['meta']['F'].', asociación sin fines lucrativos
                que lanza esta campaña, podemos <a href="http://april.org">l’April</a>,
                <a href="http://laquadrature.net">la Quadrature du Net</a> o también <a href="http://aful.org">l’Aful</a>.
                Estas asociaciones viven con sus donaciones, ¡no se les olvide sostenerlas!';                
$t['home']['camps']['fermetum']    = '<i lang="la">Fermetum</i>';
$t['home']['camps']['fp1']         = 'Los servicios en línea están frecuentemente cerrados : cuando uno empieza a  usarlos, 
                resulta muy difícil separarse de ellos, ya que esas empresas lo hacen todo para mantenerlo cautivo,
                 impidiéndole migrar datos con facilidad, por ejemplo.';
$t['home']['camps']['fp2']         = 'Utilizar los servicios abiertos es garantizar que no seguirá siendo cautivo de un servicio en particular 
                y que siempre será facil cambiarlo.';                                
                                
$t['home']['camps']['centralisum'] = '<i lang="la">Centralisum</i>';
$t['home']['camps']['cp1']         = 'Los servicios centralizados plantean numerosos problemas: crean vulnerabilidad en sus datos (solo un sitio
                 no disponible y ya nada es accesible) y facilita a terceros su explotación..';
$t['home']['camps']['cp2']         = 'Utilizar servicios en línea descentralizados significa tener la opción de 
                 elegir entre utilizar una instancia en línea como la propuesta por Framasoft o instalar el servicio en casa.';
$t['home']['camps']['espionnum']   = '<i lang="la">Espionnum</i>';
$t['home']['camps']['ep1']         = '« Si es gratis, es porque tú eres el producto »: numerosos servicios en línea viven de
                la explotación de sus datos personales vendiéndolos a empresas de publicidad.
                Además, muchos servicios están en los Estados Unidos y obedecen a leyes como el 
                PATRIOT ACT negando totalmente el derecho de cada uno a la vida privada.';
$t['home']['camps']['ep2']         = 'Utilizar servicios en línea alojados en Europa es asegurarse de su independencia de las leyes de otro 
                continente. Además, cuando aloja usted mismo el servicio, nadie puede  violar su vida privada.';

 $t['home']['camps']['privatum']    = '<i lang="la">Privatum</i>';
$t['home']['camps']['pp1']         = 'Los servicios privadores (« patentadores » en el lenguaje común) funcionan de manera opaca:
                es imposible saber exactamente lo que el programa hace con su datos. Solo el editor tiene el control.';
$t['home']['camps']['pp2']         = 'Utilizar servicios en línea libres supone un control del funcionamiento del programa por parte de la
                comunidad y la posibildad de modificarlo, de instalarlo en otro dispositivo, etc.';
$t['home']['camps']['nsa']         = '<abbr>NSA</abbr>';
$t['home']['camps']['np1']         = 'Las revelaciones de Edward Snowden sobre el programa PRISM de la <abbr>NSA</abbr> han mostrado que es acertado temer la violación
                masiva de la vida privada de los internautas, es algo fundado.';
$t['home']['camps']['np2']         = 'Utilizar servicios centralizados supone en la actualidad brindar en bandeja sus datos personales a  las
                organizaciones de control sin posibilidad de conocer el uso al que van destinados';        

// Accueil - Enjeux
$t['home']['enje']['btn']   = 'Los desafíos';
$t['home']['enje']['title'] = '¿Cuáles son los desafíos ?';
$t['home']['enje']['p1']    = 'Los últimos años han visto generalizarse una<strong>concentración de los actores de Internet</strong> (Youtube pertenece a Google,
                WhatsApp a Facebook, Skype a Microsoft, etc.). Esta centralización es perjudicial, no sólo porque frena la innovación,
                sino también y sobre todo porque lleva consigo una pérdida de libertad  para los usuarios. <strong>Los usuarios de dichos servicios 
                ya no controlan su vida digital</strong> : se disecan sus comportamientos de manera permanente con el 
                fin de que la publicidad se centre  en ellos, y sus datos -privados sin embargo (sitios visitados, intercambios de mails, vídeos 
                visionados, etc.) - pueden ser analizados por servicios gubernamentales.';
$t['home']['enje']['p2']    = 'La respuesta que desea traer Framasoft a esta problemática es sencilla : valorizar, para cada
                uno de esos servicios privadores de libertad, una alternativa Libre Ética, Descentralizada y Solidaria.';

// Accueil - Peligros
$t['home']['dang']['btn']   = 'Los peligros';
$t['home']['dang']['title'] = 'Los peligros';
$t['home']['dang']['intro'] = 'Los servicios en línea  siempre más centralizados de gigantes tentaculares como Google, Amazon, Facebook,
                Apple o Microsoft (GAFAM) ponen en peligro nuestras vidas digitales.';
    // EPCF (Espionnum, Privatum, Centralisum, Fermetum)
$t['home']['dang']['e']     = 'Espionaje';
$t['home']['dang']['ep']    = 'Con la  coartada de suministrar una «mejor experiencia de usuario», se espían permanentemente
                nuestros comportamientos en Internet . Estas informaciones pueden servir para enseñar 
                publicidad dirigida, pero las revelaciones del caso Snowden también han demostrado que los gigantes de Internet
                estaban obligados a comunicar estos datos (a veces muy privados : intercambios de emails en Gmail, 
                fotos intercambiadas en Facebook, conversaciones por Skype, geolocalización de teléfonos, etc.) 
                a los servicios gubernamentales.  <strong>Con el pretexto de la lucha contra el terrorismo</strong>,
                los estados son capaces de conseguir mucha más  información más de la que un «Big Brother» hubiera  soñado tener.';
$t['home']['dang']['erefs'] = '

<ul>
                    <li>Numerama, le 13/05/2014 : <a href="http://www.numerama.com/magazine/29353-la-nsa-accusee-d-avoir-piege-les-routeurs-americains.html">[FR] La NSA acusada de haber puesto trampas dentro de los rúteres americanos</a></li>
                    <li>Numerama, le 12/09/2014 : <a href="http://www.numerama.com/magazine/30539-yahoo-revele-le-chantage-des-usa-pour-espionner-les-internautes.html">[FR] Yahoo revela el chantaje de los Estados Unidos para espiar a los internautas</a></li>
                    <li>Numerama, le 04/07/2013 : <a href="http://www.numerama.com/magazine/26435-prism-l-allemagne-qui-espionne-aussi-deconseille-le-web-americain.html">[FR] PRISM : Alemania, que espía también, desaconseja la web americana</a></li>
                    <li>Le Monde, le 27/06/2013: <a href="http://www.lemonde.fr/sciences/article/2013/06/27/il-est-temps-de-parler-des-metadonnees_3437125_1650684.html">[FR] Ya es tiempo de hablar de los metadatos</a></li>
                    <li>Atlantico, le 25/11/2013, <a href="http://www.atlantico.fr/pepites/espionnage-etat-veut-attaquer-nos-donnees-personnelles-908758.html">[FR] Espionaje : el Estado quiere atacarse a nuestros datos personales </a></li>
                    <li>Le Monde, le 20/03/2014 : <a href="http://www.lemonde.fr/international/article/2014/03/20/dgse-orange-des-liaisons-incestueuses_4386264_3210.html">[FR] Espionaje : cómo Orange y los servicios secretos cooperan</a></li>
                        <li>Le Monde, le 15/09/2014: <a href="http://www.lemonde.fr/proche-orient/article/2014/09/15/terrorisme-un-projet-de-loi-dangereux_4487639_3218.html">[FR] Terrorismo : un proyecto de ley peligroso</a></li>
                        <li>Présumés Terroristes, septembre 2014 : <a href="https://presumes-terroristes.fr/">[FR] Ley Terrorismo. ¿Sacrificar las libertades bajo el pretexto de luchar contra el terrorismo ? ¡NO!</a></li>
                        <li>Europe1, 12/02/2014 : <a href="http://www.europe1.fr/high-tech/et-si-samsung-se-mettait-a-espionner-ses-propres-smartphones-1799713">[FR] ¿Y si Samsung se pusiera a "espiar" sus propios teléfonos inteligentes?</a></li>
                        <li>Rue89, 13/12/2008 :<a href="http://rue89.nouvelobs.com/2008/12/13/ecoutes-ce-qui-est-possible-avec-votre-telephone-portable">[FR] Escuchas telefónicas: lo que es posible con su teléfono móvil</a></li>
                        <li>Le Monde, 21/03/2014 : <a href="http://www.lemonde.fr/international/article/2014/03/21/la-france-suspectee-de-cyberattaque_4387232_3210.html">[FR] Francia sospechada de ataques cibernéticos</a></li>
                        <li>Pixels (Le Monde), 14/09/2014 : <a href="http://www.lemonde.fr/pixels/article/2014/09/13/la-nsa-et-le-gchq-auraient-pirate-cinq-operateurs-telecom-allemands_4487181_4408996.html">[FR] La NSA y el GCHQ habrían hackeado a cinco compañías telefónicas alemanas</a></li>
                        <li>Pixels (Le Monde), 16/09/2014:  <a href="http://www.lemonde.fr/pixels/breve/2014/09/16/tim-cook-estime-que-les-etats-unis-sont-alles-trop-loin-dans-la-collecte-des-donnees_4488172_4408996.html">[FR] Tim Cook estima que Estados Unidos ha ido demasiado lejos en la recogida de datos</a></li>
                        <li>Liberation, 01/07/2014 :  <a href="http://www.liberation.fr/monde/2014/07/01/la-nsa-espionnait-193-pays-et-aussi-l-ue-et-le-fmi_1054881">[FR] La NSA espiaba a 193 países</a></li>
                        <li>Numerama, 24/07/2014 : <a href="http://www.numerama.com/magazine/30101-des-backdoors-sur-ios-tout-ce-qu-il-faut-savoir.html">[FR] ¿Puertas traseras en  iOS? Todo lo que se debe saber</a></li>
                        <li>Bug Brother (Le Monde), 11/02/2014 : <a href="http://bugbrother.blog.lemonde.fr/2014/02/11/le-gif-qui-revele-la-paranoia-de-la-nsaqui-espionne-donc-aussi-vos-enfants-parents-amis/">[FR] La imagen .gif que revela la paranoia de la NSA, y por qué la NSA espía también a nuestros parientes y amigos</a></li>
                        <li>Rue89, 15/08/2013 :  <a href="http://rue89.nouvelobs.com/2013/08/15/les-messages-envoyes-compte-gmail-peuvent-etre-interceptes-alors-244954">[FR] Los mensajes enviados en Gmail pueden ser interceptados. ¿Y qué?</a></li>
                        <li>Écrans.fr, 07/06/2013 : <a href="http://ecrans.liberation.fr/ecrans/2013/06/07/le-fbi-a-acces-aux-comptes-facebook-google-yahoo_909023">[FR] ¡EL FBI tiene acceso a las cuentas Facebook, Google, Yahoo!…</a></li>
                        <li>Le Monde.fr,  27/01/2014 : <a href="http://www.lemonde.fr/technologies/article/2014/01/27/des-applications-mobiles-utilisees-par-la-nsa-et-son-homologue-britannique_4355371_651865.html">[FR] Ciertas aplicaciones de smartphones  "pinchadas" por la NSA</a></li>
                    </ul>';

                    
  
$t['home']['dang']['p']     = 'Vida privada;
$t['home']['dang']['pp']    = 'Nuestros datos son una extensión de nosotros mismos. Pueden indicar dónde estamos,  
        con quién, nuestra orientación política o sexual, los sitios internet que hemos visitado, nuestra receta predilecta, los
   temas que nos interesan, etc.<br/>
                    Si un solo dato, tomado independientemente, no es forzosamente sensible, en cambio un conjunto de datos
                    puede serlo (por ejemplo si usted hizo búsquedas sobre el cáncer justo antes de suscribir una póliza de
                     seguro de vida).<br/>
                    En un mundo donde todo se vuelve digital (lectura, TV, telefonía, música, red social, etc.), <strong>nuestra vida privada
                    es un elemento esencial de lo que hace de nosotros personas singulares</strong>. Una persona malévola que tendría acceso a su
                    smartphone puede aprender en unos minutos sobre usted lo bastante para perjudicarle de manera considerable 
                    (usurpación de identidad en Facebook, uso indebido de informaciones profesionales, compras hechas sin su
                     acuerdo, etc.).';
$t['home']['dang']['prefs'] = '
                    <ul>
                        <li>Numerama, 17/05/2014 : <a href="http://www.numerama.com/magazine/29400-et-maintenant-google-lit-vos-factures.html">[FR] Y ahora Google lee sus facturas</a></li>
                        <li>Numerama, 06/02/2014 : <a href="http://www.numerama.com/magazine/28299-yahoo-transfere-votre-vie-privee-en-irlande.html">[FR] Yahoo transfiere nuestras vidas privadas en Irlanda</a></li>
                        <li>L’Expansion,  16/01/2014 : <a href="http://lexpansion.lexpress.fr/high-tech/e-commerce-vos-donnees-personnelles-sont-en-danger_1326103.html">[FR] E-comercio: sus datos personales están en peligro</a></li>
                        <li>Numerama, 21/02/2014 : <a href="http://www.numerama.com/magazine/28515-donnees-personnelles-la-chute-de-confiance.html">[FR] Datos personales : la pérdida de confianza</a></li>
                        <li>INRIA,  12/04/2013 : <a href="http://hal.inria.fr/hal-00812734">[FR] Internet del futuro : rendimiento y respeto de la vida privada</a></li>
                        <li>Numerama,  04/08/2014 : <a href="http://www.numerama.com/magazine/30187-google-a-signale-un-usager-qui-avait-envoye-des-photos-ps-par-mail.html">Google denunció a un usuario por haber mandado fotos pedopornográficas por mail</a></li>
                        <li>Rue89,  03/07/2013 : <a href="http://rue89.nouvelobs.com/2013/07/31/payer-carte-sans-code-sans-contact-sans-risque-244508">[FR] Pagar con la tarjeta pero sin número de identificación personal : el modo "sin contacto", pero no sin riesgo</a></li>
                        <li>Slate, 03/10/2014 : <a href="http://www.slate.fr/story/92887/apple-google-facebook-sante">[FR] Después 
                        de  Apple y Google, Facebook reflexiona también sobre nuestra salud</a></li>
                        <li>CNIL, mayo 2014 : <a href="http://www.cnil.fr/fileadmin/documents/La_CNIL/publications/DEIP/CNIL_CAHIERS_IP2_WEB.pdf ">[FR] El cuerpo, nuevo objeto conectado (Cahiers IP num. 2)</a></li>
                        <li>Numerama, 22/08/2014 : <a href="http://www.numerama.com/magazine/30323-apple-approche-les-mutuelles-pour-divulguer-le-comportement-des-assures.html">[FR] Apple se acerca a las Mutuas para divulgar el comportamiento de los aseguradosl</a></li>
                        <li>JDN, 23/01/2014 : <a href="http://www.journaldunet.com/ebusiness/le-net/iwatch-apple-incroyable.shtml">[FR] Apple contrata a unos expertos en grupos sanguíneos</a></li>
                        <li>Challenges, 06/06/2014 : <a href="http://www.challenges.fr/entreprise/20140606.CHA4685/comment-l-assureur-axa-va-surveiller-votre-conduite.html">[FR] Cómo el seguro Axa va a vigilar su modo de conducir</a></li>
                        <li>UFC-Que-Choisir,  25/03/2014 : <a href="http://www.quechoisir.org/telecom-multimedia/internet/communique-donnees-personnelles-l-ufc-que-choisir-attaque-les-reseaux-sociaux-et-appelle-les-consommateurs-a-garder-la-main-sur-leurs-donnees">[FR]  La UFC-Que Choisir ataca a las redes sociales y pide a los consumidores que se mantengan dueños de sus datos</a></li>
                        <li>Ecrans.fr, 22/01/2011 :  <a href="http://ecrans.liberation.fr/ecrans/2011/10/22/facebook-la-memoire-cachee_956055">[FR] Facebook: la memoria escondida</a></li>
                        <li>Clubic, 25/03/2013 : <a href="http://www.clubic.com/internet/google/actualite-549552-google-reader-fermeture-liee-problematiques-vie-privee.html">[FR] Google Reader : ¿un cierre relacionado con las problemáticas de vida privada ?</a></li>
                        <li>Rue89, 14/01/2014 : <a href="http://rue89.nouvelobs.com/2014/01/14/google-lance-les-objets-connectes-sincruste-chez-249023">[FR] Google se dedicará a los objetos conectados y se cuela en la vida de uno</a></li>
                        <li>Numerama 30/06/2014 : <a href="http://www.numerama.com/magazine/29852-facebook-a-teste-sa-capacite-de-manipulation-mentale-des-foules.html">[FR] Facebook ha tanteado su capacidad de manipulación mental de las muchedumbres</a></li>
                        <li>Numerama, 18/08/2014 : <a href="http://www.numerama.com/magazine/30290-comment-chrome-envoie-tous-vos-mots-de-passe-a-google.html">[FR] Cómo Chrome manda todas las contraseñas de uno  a Google</a></li>
                        <li>Rue89, 29/08/2014 : <a href="http://rue89.nouvelobs.com/2014/08/29/iphone-6-apres-lempreinte-digitale-apple-veut-ficher-etat-sante-254496">[FR] iPhone 6: después de la huella digital, Apple quiere fichar  su estado de salud</a></li>
                        <li>LDN, 17/04/2014 : <a href="http://ldn-fai.net/je-nai-rien-a-cacher/">[FR] No tengo nada que esconderr</a></li>
                        <li>Numerama, 26/09/2014 : <a href="http://www.numerama.com/magazine/30707-facebook-sait-ou-vous-passez-votre-lune-de-miel-maj.html">[FR] Aunque no diga nada Facebook sabe donde usted  pasa la luna de miel</a></li>
                        <li>Journal du Net, 16/07/14 : <a href="http://www.journaldunet.com/ebusiness/le-net/informations-rassemblees-par-google.shtml">[FR] Seamos honestos, la cantidad de informaciones que Google recopila sobre nosotros es aterradora</a></li>
                        <li>Big Browser, 18/11/14 : <a href="http://bigbrowser.blog.lemonde.fr/2014/11/18/comment-avoir-bonne-presse-un-dirigeant-duber-propose-de-fouiller-la-vie-privee-des-journalistes-trop-critiques/">[FR] Cómo tener buena fama ? Un dirigente  de Uber propone hurgar en la vida privada de los periodistas demasiado críticos</a></li>
                    </ul>';

     
$t['home']['dang']['c']     = 'Centralización';
$t['home']['dang']['cp']    = 'Las mayores empresas actrices de Internet se han vuelto unos verdaderos calamares gigantes : Facebook posee WhatsApp e Instagram, Google tiene Youtube y Waze, Microsoft distribuye Skype, etc.<br/> Esta concentración de los actores plantea problemas múltiples: 
                    ¿qué pasará si Facebook cierra el chiringuito ? Cómo hacer búsquedas si Google tiene una avería ?
                <strong>Nos vamos volviendo poco a poco dependientes de unos servicios suministrados por un 
   pequeño número de actores .</strong> Por ejemplo, Apple (iPhone), Google (Android) y Microsoft (Windows Phone) se reparten la 
   casi totalidad del mercado de los sistemas operativos para smatphones.<br/>
                    Por otra parte, el tamaño de dichos actores frena la innovación: es difícil crear una empresa emergente 
                    frente a Apple o Google (respectivamente primera y segunda capitalizaciones bursátiles mundiales ).<br/>
                    Por fin, la falta de diversidad de estos gigantes también les da la posibilidad no sólo de recoger fácilmente
                    informaciones personales, sino también de falsificar la información que difunden (una búsqueda en Google sobre la 
                    palabra "nuclear" no le dará los mismos enlaces si Google le percibe a usted como un militante ecologista  o como un partidario de
                    la energía nuclear).';
$t['home']['dang']['crefs'] = '
                    <ul>
                        <li>NextInpact, 14/06/2014 : <a href="http://www.nextinpact.com/news/88112-les-geants-net-generent-nouveaux-rapports-force.htm">[FR] Los gigantes de Internet crean nuevas relaciones de poder</a></li>
                        <li>Numerama, 09/03/2013 : <a href="http://www.nextinpact.com/news/78092-edito-la-domination-et-centralisation-ennemis-numero-web.htm">[FR] La dominación y la centralización, los enemigos número uno de la web</a></li>
                        <li>Droit et Technologies, 25/02/2013 : <a href="http://www.droit-technologie.org/actuality-1577/cloud-la-perte-totale-des-donnees-est-possible-la-preuve-par-2e2-et.html">[FR] Informática en la nube: es posible perder totalmente los propios datos. Lo demuestran 2e2 y Megaupload.</a></li>
                        <li>INRIA,  27/09/2011: <a href="http://www.inria.fr/actualite/actualites-inria/massification-du-web-les-consequences">[FR] La «masificación» de la web transforma les relaciones sociales </a></li>
                        <li>INRIA, 13/03/2013 : <a href="http://www.inria.fr/centre/lille/agenda/data-et-big-data-le-nouvel-or-noir">[FR] Data y Big Data: ¿el nuevo orden?</a></li>
                        <li>Le Monde, 12/06/2013: <a href="http://www.lemonde.fr/technologies/chat/2013/06/12/surveillance-d-internet-peut-on-encore-proteger-notre-vie-privee_3428413_651865.html">[FR] ¿Por qué almacenar nuestras vidas enteras en los servidores de Estados Unidos?</a></li>
                        <li>Rue89, 17/07/2009 : <a href="http://rue89.nouvelobs.com/rue69/2009/07/13/pour-sauver-la-vertu-de-son-iphone-apple-censure-a-tout-va">[FR] Para salvar la virtud de su iPhone, Apple censura a lo loco</a></li>
                        <li>Nextinpact, 08/04/2013 :  <a href="http://www.nextinpact.com/news/78883-appgratis-supprime-app-store-pour-son-reperage-promotions.htm">[FR] AppGratis cancelado  de App Store porque rastreaba las rebajas</a></li>
                        <li>Ecrans.fr,  25/04/2013 : <a href="http://ecrans.liberation.fr/ecrans/2013/04/25/google-devoile-une-flambee-de-la-censure_957911">[FR] Google revela un aumento súbito de la censura</a></li>
                        <li>Nextinpact, 24/04/2014 : <a href="http://www.nextinpact.com/news/87203-comment-etats-unis-veulent-enterrer-neutralite-net.htm">[FR] Cómo Estados Unidos quiere enterrar la neutralidad de Internet</a></li>
                    </ul>';
              
                   
         
$t['home']['dang']['f']     = 'Código cerrado';
$t['home']['dang']['fp']    = 'Los servicios web que usted usa en su computadora o su smartphone se ejecutan normalmente en la «nube» :
                    algunos servidores diseminados por el planeta , que almacenan tanto sus datos (mails, fotos, archivos, etc.) como el 
                    código de las aplicaciones<br>
                    Para los datos, se plantea el problema de su perennidad (¿qué será en efecto de sus ficheros archivos si Dropbox cierra mañana?)
                    pero también el de la capacidad de usted de cambiar de servicio (¿cómo hará para recuperar la totalidad de sus fotos en
                     Facebook o Picasa, y volver a insertarlas con los comentarios dentro de otro servicio?).<br>
                    En cuanto a las aplicaciones, ello implica que <strong>usted queda a merced de cambios imprevistos según los caprichos de su proveedor </strong>(incorporación de publicidad, modificación de la interfaz, etc.), pero sobre todo que no tiene casi ningún control sobre lo
                    que la aplicación puede hacer. Son «cajas negras» que pueden actuar de manera maliciosa (mandar SMS a sus espaldas, 
                    ejecutar código indeseable, etc.).<br>
                    Para terminar, estas compañías nos encierran en jaulas doradas, es cierto, ¡pero jaulas a pesar de todo!';
$t['home']['dang']['frefs'] = '
                    <ul>
                        <li>CNIL,  03/01/2014 : <a href="http://www.legifrance.gouv.fr/affichCnil.do?oldAction=rechExpCnil&id=CNILTEXT000028450267&fastReqId=2000051504&fastPos=1">[FR] Ejemplo de sanción de la CNIL contra Google</a></li>
                        <li>01Net, 23/11/2012 : <a href="http://www.01net.com/editorial/580825/securite-le-cloud-est-plus-dangereux-que-les-virus/">[FR] Seguridad: la computación en la nube más peligrosa que los virus</a></li>
                        <li>CNIL, 25/06/2012 : <a href="http://www.cnil.fr/fileadmin/images/la_cnil/actualite/Recommandations_pour_les_entreprises_qui_envisagent_de_souscrire_a_des_services_de_Cloud.pdf">[FR] Recomendaciones para las empresas que proyectan suscribir servicios de computación en la nube</a></li>
                        <li>INRIA, 13/12/2013 : <a href="http://hal.inria.fr/hal-00918398">[FR] Cuando los terminales móviles se hacen los soplones
                        de bolsillo</a></li>
                        <li>INAGlobal, 04/02/2014 : <a href="http://www.inaglobal.fr/numerique/article/facebook-nen-fais-pas-une-affaire-de-donnees-personnelles">[FR] ¡No hagas de Facebook un asunto de datos personales!</a></li>
                        <li>Rue89,  03/02/2013 : <a href="http://rue89.nouvelobs.com/2013/02/03/qui-appartiennent-vos-donnees-sur-internet-mauvaises-nouvelles-et-conseils-239198">[FR] ¿A quién pertenecen sus datos en Internet? Malas noticias y consejos</a></li>
                        <li>Atlantico,  16/06/2014 : <a href="http://www.atlantico.fr/decryptage/quelle-cible-publicitaire-etes-pourquoi-avez-peut-etre-interet-utiliser-fonctions-facebook-et-google-pour-connaitre-que-geants-1617661.html">[FR] ¿Qué blanco publicitario es usted?</a></li>
                        <li>Nextinpact, 22/07/2009 : <a href="http://www.nextinpact.com/archive/52115-amazon-kindle-ebook-disparaitre-orwell.htm">[FR] Unas obras de Orwell canceladas del  Kindle por Amazon</a></li>
                        <li>Rue89,  18/11/2013 : <a href="http://rue89.nouvelobs.com/2013/11/18/google-facebook-apple-superpuissances-ont-privatise-internet-247615">[FR] Google, Facebook, Apple… : esas superpotencias han privatizado Internet</a></li>
                        <li>Liberation.fr, 07/03/2014 : <a href="http://next.liberation.fr/sexe/2014/03/07/la-fin-du-porno-sur-vine-un-espace-de-liberte-en-moins_985232">[FR] El fin de la pornografía en Vine, un espacio menos de libertad</a></li>
                        <li>Liberation.fr, 14/03/2014 : <a href="http://next.liberation.fr/sexe/2014/03/14/apple-censure-un-roman-francais-pour-cause-de-seins-nus_987120">[FR] Apple censura una novela francesa por causa de senos desnudos</a></li>
                        <li>Rue89, 29/05/2014 : <a href="http://rue89.nouvelobs.com/2014/05/29/chantage-google-apple-amazon-les-tontons-ecrabouilleurs-252521">[FR] Chantaje : Google, Apple y Amazon, los agentes secretos que lo apabullan todo</a></li>
                        <li>Numerama, 09/08/2014 : <a href="http://www.numerama.com/magazine/30226-quand-facebook-est-en-panne-le-trafic-des-sites-baisse.html">[FR] Cuando Facebook deja de funcionar, el tráfico de los sitios disminuye</a></li>
                        <li>NextInpact, 22/08/2014 : <a href="http://www.nextinpact.com/news/89379-quand-twitter-deraille-avec-timeline-ses-utilisateurs.htm">[FR] Cuando Twitter descarrila con la línea de tiempo de sus usuarios</a></li>
                    </ul>';
           
// Accueil - Nuestros proyectos
$t['home']['prop']['btn']   = 'Nuestros proyectos';
$t['home']['prop']['title'] = 'Lo que proponemos';
$t['home']['prop']['intro'] = 'Framasoft desea enfrentarse a esos peligros que amenazan nuestras vidas digitales proponiendo servicios libres, éticos,
                descentralizados y solidarios.';
    // LEDS (Libre, Ético, Descentralizado, Solidario)
$t['home']['prop']['l']     = 'Libertad';
$t['home']['prop']['lp1']   = 'La historia de Internet es en sí una historia de software libre, desde el punto de vista de los estándares así como 
de los protocolos utilizados.
                Su popularidad y su potencial crean envidiosos, y algunas grandes empresas bien quisieran controlarlos imponiendo 
                código cerrado dentro de unos sistemas bloqueados y no interoperables.';
$t['home']['prop']['lp2']   = 'Para que Internet quede fiel a sus principios fundadores que lo han conducido al éxito, debemos encontrar en él 
               aplicaciones de software libre, esto es,  cuyo código fuente esté abierto, asequible y bajo licencias libres.';
$t['home']['prop']['lp3']   = 'Framasoft se compromete a no utilizar sino  programas de código fuente « libre ».';
$t['home']['prop']['e']     = 'Ético';
$t['home']['prop']['ep1']   = 'Respaldamos totalmente un Internet de intercambio y de independencia.';
$t['home']['prop']['ep2']   = 'La explotación, la vigilancia, la censura y la apropiación de los datos son valores que 
                        rehusamos en provecho de la transparencia (la probidad), de la exposición clara de las condiciones 
                        de uso de los servicios, y de la negación de las discriminaciones.';
$t['home']['prop']['ep3']   = 'Framasoft se compromete a no explotar los datos de los usuarios de sus servicios,
               y a promover una web abierta y equitativa.';
$t['home']['prop']['d']     = 'Descentralización';
$t['home']['prop']['dp1']   = 'La inteligencia de Internet debe apoyarse en cada actor de la red dentro de una
                dinámica de intercambio de  igual a igual, para impedir crear un Minitel 2.0 más.';
$t['home']['prop']['dp2']   = 'Para asegurar la igualdad de todos, ciudadanos como empresarios, no sólo se deben evitar los monopolios,
                sino que también se debe impedirles que se apoderen de los datos personales o públicos.';
$t['home']['prop']['dp3']   = 'Explicando, mediante tutoriales, cómo multiplicar las soluciones libres que permitan un Internet
                más equitativo, favorecemos la diseminación del código y  diversificamos los usos.';
$t['home']['prop']['dp4']   = 'Framasoft se compromete a facilitar el auto-alojamiento y la interoperabilidad, con el fin de no
 «&nbsp;encerrar&nbsp;» a sus usuarios.';
$t['home']['prop']['s']     = 'Solidaridad';
$t['home']['prop']['sp1']   = 'Gracias a los servicios que desplegamos, promovemos un modelo económico
                basado en la mutualización de los costes, el intercambio de los recursos, y la asequibilidad de la mayoría.';
$t['home']['prop']['sp2']   = 'También posee este modelo un carácter educativo ya que pensamos 
               que si documentamos el depliegue de servicios, un gran número de usuarios
               quedarán a su vez en medida de compartir dichos recursos.';
$t['home']['prop']['sp3']   = 'Pensamos que no infantilizar a los usuarios y hacer que compartan la responsabilidad  del uso de los servicios
          permitirá regular los abusos.';
$t['home']['prop']['sp4']   = 'Framasoft se compromete a promover el respeto y la autonomía de dichos usuarios (siempre que haya reciprocidad al respecto).';
    // Service & Charte
$t['home']['prop']['s&c']   = 'Servicios y Carta';
$t['home']['prop']['s&cp']  = 'Pueden encontrar en línea la lista de servicios que ya proponemos (y los que se preparan) y también nuestra Carta :';
$t['home']['prop']['charte'] = 'Carta de los servicios';

// Accueil - Concrètement
$t['home']['conc']['btn']   = 'Concretamente';
$t['home']['conc']['title'] = 'Concretamente';
$t['home']['conc']['p1']    = 'El proyecto « Desgooglicemos Internet » - que no afecta sólo a Google - consiste en <strong>proponer servicios
                alternativos frente a la mayor parte de los servicios que consideramos como  amenazadores para nuestras vidas digitales</strong>.';
$t['home']['conc']['p2']    = 'Google Docs, Skype, Dropbox, Facebook, Twitter, Google Agenda, Youtube, Doodle, Yahoo! Groups, y muchos más
                 son servicios muy prácticos, pero <strong>se han vuelto demasiado gigantes y nos han hecho dependientes</strong>.
                Framasoft desea entrar en resistencia, y propone un plan de creación de aplicaciones alternativas en varios años.';
$t['home']['conc']['p3']    = 'Estos servicios son libres, gratuitos, abiertos a todos (dentro de los límites de nuestras capacidades técnicas y financieras), 
                como <strong><a href="http://fr.wikipedia.org/wiki/Biens_communs" title="Bienes comunes">bienes comunes</a> digitales</strong>.
          Y siempre con la preocupación de la descentralización de Internet y de promover auto-alojamiento, nos esforzaremos por que cada
          uno pueda instalar sus propios servicios (para si, para su asociación, su empresa).';
$t['home']['conc']['p4']    = 'Claro, no pretendemos  en ningún modo<em>competir</em> con esos grandes servicios, sólo queremos proponer un espacio digital neutral, no-comercial y desprovisto de agresividad con sus usuarios.';
$t['home']['conc']['p5']    = 'Acceder a la lista de los servicios que proponemos ya (y de los que preparamos) :';
$t['home']['conc']['stitle'] = 'Contribuir';
$t['home']['conc']['sp1']   = 'Un proyecto de tal alcance no puede realizarse sin <strong>su ayuda</strong>.';
$t['home']['conc']['sp2']   = 'Si es programador, diseñador gráfico, ergónomo, administrador de sistema, etc, puede ponerse 
                en contacto con nosotros para participar activamente en el proyecto.';
$t['home']['conc']['cbtn']  = 'Contactar con Framasoft';
$t['home']['conc']['sp3']     = 'Pero el medio más simple y rápido de ayudarnos es apoyándonos financieramente: nos permitirá 
                costear la infraestructua (servidores), y pagar a los empleados dedicados al éxito de este ambicioso proyecto. 
                Framasoft es una asociación de interés general: una donación de 100€, aplicando la exención fiscal, le costará  en realidad 34€.';
$t['home']['conc']['sbtn']  = 'Donar<br />a Framasoft';

// Lista de servicios
$t['list']['title']      = 'Lista de servicios';
$t['list']['roadmap']    = 'Indicaciones;
$t['list']['link']       = $l['current'].'liste';
$t['list']['desc']       = 'Lista de servicios en línea libres, éticos, descentralizados y solidarios que Framasoft propone (o que están en preparación) para desgooglizar Internet';
$t['list']['css']        = '
    <link href="'.$l['current'].'css/list.css" rel="stylesheet" type="text/css" />';
$t['list']['js']         = '
    <script src="'.$l['current'].'js/list.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/leds.js" type="text/javascript"></script>';
    
   
// Lista de los servicios
$t['list']['title']      = 'Lista de servicios';
$t['list']['roadmap']    = 'Indicaciones';
$t['list']['link']       = $l['current'].'lista';
$t['list']['desc']       = 'Lista de servicios en línea lbres, éticos, descentralizados y solidarios que Framasoft propone (también los que se preparan) para desgooglizar Internet';
$t['list']['css']        = '
    <link href="'.$l['current'].'css/list.css" rel="stylesheet" type="text/css" />';
$t['list']['js']         = '
    <script src="'.$l['current'].'js/list.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/leds.js" type="text/javascript"></script>';
 

// Espacio medios de difusión
$t['medias']['title']    = 'Espacio medios de difusión';
$t['medias']['link']     = $l['current'].'medios de difusión';
$t['medias']['desc']     = '';
$t['medias']['css']      = '<link href="'.$l['current'].'css/list.css" rel="stylesheet" type="text/css" />';
$t['medias']['js']       = '<script src="'.$l['current'].'js/leds.js" type="text/javascript"></script>';


                        
$t['medias']['subtitle']    = '5 de octubre de 2015 : año 2 de la Desgooglización de Internet.';
$t['medias']['intro']       = 'Para comenzar el segundo año de su campaña de proyectos de alternativas a los servicios de
 Google y semejantes, la asociación Framasoft anuncia, desde el 5 de octubre, cinco nuevos servicios realizados con software libre.';
$t['medias']['btnCPtxt']    = 'Descargar el<br/>comunicado de prensa';
$t['medias']['btnCPurl']    = 'img/2015_communique_degooglisons_Framasoft.odt';
$t['medias']['btnDPtxt']    = 'Descargar el<br/>dossier de prensa';
$t['medias']['btnDPurl']    = 'img/dossier_presse-Degooglisons_internet-2015.pdf';
$t['medias']['1title']      = 'Artículos en el Framablog';
$t['medias']['1intro']      = 'El <a href="http://framablog.org">Framablog</a> es nuestro principal medio de comunicación con el público. 
Durante la semana del 5 de octubre de 2015, se presentará en el blog cada una de las cinco novedades propuestas durante el lanzamiento de esta campaña.';
$t['medias']['1list']       = '
                        <ul>
                                            
   
<li><em>Lundi 5/10</em> : Presentación del <a href="http://framablog.org/2015/10/05/degooglisons-saison-2-ils-ne-savaient-pas-que-cetait-impossible-alors-ils-lont-fait">el año 2 de la campaña Desgooglicemos Internet</a>.</li>
                            <li><em>Lundi 5/10</em> : <a href="http://framablog.org/2015/10/05/framadrive-conservez-et-synchronisez-2-go-sur-nos-serveurs">Framadrive</a>, alternativa a Dropbox y Google Drive.</li>
                            <li><em>Mardi 6/10</em> : <a href="http://framablog.org/2015/10/06/mypads-lalternative-de-framasoft-a-google-docs">Framapad + Mypads</a>, alternativa a GoogleDocs.</li>
                            <li><em>Mercredi 7/10</em> : <a href="http://framablog.org/2015/10/07/framaboard-les-libristes-ont-reinvente-le-tableau-blanc-mais-en-mieux">Framaboard</a> alternativa a Trello.</li>
                            <li><em>Jeudi 8/10</em> : <a href="http://framablog.org/2015/10/08/framadate-createurs-de-sondages-nous-vous-avons-compris">Framadate</a>, alternativa a Doodle.</li>
                            <li><em>Vendredi 9/10</em> : <a href="http://framablog.org/2015/10/09/framadrop-emailez-de-gros-fichiers-en-toute-securite">Framadrop</a> alternativa a WeTransfer.</li>
                        </ul>';
                                 
$t['medias']['2title']      = 'enlaces con los servicios';
$t['medias']['2intro']      = 'Aunque las presentamos a lo largo de toda la semana en nuestro blog, estas cinco novedades estarán en línea a 
partir del 5 de octubre . Haga clic en el nombre de un servicio para probarlo.';
$t['medias']['2list']       = '
                        <ul>
                            <li><a href="https://framadrive.org"><b class="violet">Frama</b><b class="vert">drive</b></a></li>
                            <li><a href="https://mypads.framapad.org"><b class="violet">My</b><b class="vert">Pads</b></a></li>
                            <li><a href="https://framaboard.org"><b class="violet">Frama</b><b class="vert">board</b></a></li>
                            <li><a href="https://framadate.org"><b class="violet">Frama</b><b class="vert">date</b></a></li>
                            <li><a href="https://framadrop.org"><b class="violet">Frama</b><b class="vert">drop</b></a></li>
                        </ul>';
                
$t['medias']['tabstitle']   = 'Imágenes de la campaña Desgooglicemos año 2.';
$t['medias']['tabsintro']   = 'A menos que se indique lo contrario, todas nuestras imágenes, las realiza <a href="http://ptilouk.net">Simon « Gee » Giraudot</a> y se pueden volver a utilizar bajo la licencia <a href="http://creativecommons.org/licenses/by-sa/4.0/deed.fr"><span lang="en">Creative Commons By</span>-<abbr>SA</abbr> 4.0</a>.</em> Estas imágenes son de formato grande (a pesar de las apariencias). 
Sin embargo, si usted necesita una resolución más alta, no dude en contactar con nosotros.';
$t['medias']['tabssaveas']  = 'Haga un clic  derecho« Guardar la imagen como » para utilizarla de nuevo';

$t['medias']['t1']          = 'Cartes';
$t['medias']['t1i1txt']     = 'Mapa « Antes »';
$t['medias']['t1i1url']     = 'img/Carte2015-romains.png';
$t['medias']['t1i1desc']    = 'Mapa de Francia invadida por los servicios GAFAM (oct 2014)';
$t['medias']['t1i2txt']     = 'Mapa « Despues »';
$t['medias']['t1i2url']     = 'img/Carte2015-victoires.png';
$t['medias']['t1i2desc']    = 'Mapa de Francia con las alternativas Framasoft (oct 2015)';
$t['medias']['t1i3txt']     = 'Mapa animado';
$t['medias']['t1i3url']     = 'img/Carte2015-animation.gif';
$t['medias']['t1i3desc']    = 'Animación de la reconquista de los servicios GAFAM (format .gif)';

$t['medias']['t2']          = 'Dessins';
$t['medias']['t2i1txt']     = 'Dessin « Verrouillage »';
$t['medias']['t2i1url']     = 'img/stevusjobus.png';
$t['medias']['t2i2txt']     = 'Dessin « Cyber Police »';
$t['medias']['t2i2url']     = 'img/cyberpolicus.png';
$t['medias']['t2i3txt']     = 'Dessin « Espions »';
$t['medias']['t2i3url']     = 'img/bourrepifix.png';
$t['medias']['t2i4txt']     = 'Dessin « Stallman »';
$t['medias']['t2i4url']     = 'img/stallmanoramix.png';
$t['medias']['t2i5txt']     = 'Dessin « Flicage »';
$t['medias']['t2i5url']     = 'img/village.png';
$t['medias']['t2i6txt']     = 'Dessin « GAFAM »';
$t['medias']['t2i6url']     = 'img/GAFAM.png';

$t['medias']['t3']          = 'Vídeos';
$t['medias']['t3intro']     = 'Hemos podido explicar nuestro proyecto en unas conferencias. Hemos escogido estos dos vídeos (y su código
de integración) para que puedan ustedes volver a utilizarlos en sus propios sitios web.';
$t['medias']['t3v1txt']     = 'Versión corta (17mn)';
$t['medias']['t3v1img']     = 'https://framatube.org/images/media/925l.jpg';
$t['medias']['t3v1mp4']     = 'https://framatube.org/blip/gosset-owf-dio.mp4';
$t['medias']['t3v1webm']    = 'https://framatube.org/blip/gosset-owf-dio.webm';
$t['medias']['t3v2txt']     = 'Versión larga (54mn)';
$t['medias']['t3v2img']     = 'https://framatube.org/blip/gosset-degooglisons-internet.png';
$t['medias']['t3v2mp4']     = 'https://framatube.org/blip/gosset-degooglisons-internet.mp4';
$t['medias']['t3v2webm']    = 'https://framatube.org/blip/gosset-degooglisons-internet.webm';
$t['medias']['t4']          = 'Captura de pantalla';

$t['medias']['t5']          = 'Animations';
$t['medias']['t5i1txt']     = '<b class="violet">Frama</b><b class="vert">drive</b>';
$t['medias']['t5i1url']     = 'img/anim_framadrive.gif';
$t['medias']['t5i2txt']     = '<b class="violet">Frama</b><b class="vert">pad</b>';
$t['medias']['t5i2url']     = 'img/anim_framapad.gif';
$t['medias']['t5i3txt']     = '<b class="violet">Frama</b><b class="vert">board</b>';
$t['medias']['t5i3url']     = 'img/anim_framaboard.gif';
$t['medias']['t5i4txt']     = '<b class="violet">Frama</b><b class="vert">date</b>';
$t['medias']['t5i4url']     = 'img/anim_framadate.gif';
$t['medias']['t5i5txt']     = '<b class="violet">Frama</b><b class="vert">drop</b>';
$t['medias']['t5i5url']     = 'img/anim_framadrop.gif';
$t['medias']['t5i6txt']     = '<b class="violet">Dégooglisons</b> <b class="orange">Internet</b>';
$t['medias']['t5i6url']     = 'img/anim_dio'; // .mp4 et .webm

$t['medias']['t6']          = 'Presentación';
$t['medias']['t6url']       = 'presentación';


$t['medias']['presstitle']  = 'Revista de prensa';
$t['medias']['pressintro']  = 'La campaña « Desgooglicemos Internet » ya ha dado que hablar a lo largo del primer año de su creación . 
Aquí tenemos unos extractos de nuestra <a href="https://wiki.framasoft.org/speakabout">revista de prensa</a>.';
$t['medias']['pressth1']    = 'fecha';
$t['medias']['pressth2']    = 'Medio';
$t['medias']['pressth3']    = 'Enlaces';
$t['medias']['presslist']   = [
    ['17/08/2015', 'France Culture (Du grain à moudre)',[FR] 
    'http://media.radiofrance-podcast.net/podcast09/10175-17.08.2015-ITEMA_20783026-0.mp3',
    'Enlace con el podcast'],
    ['24/05/2015', 'Le Soir (Belgique)',[FR] 
    'http://www.lesoir.be/886985/article/economie/vie-du-net/2015-05-23/google-vivre-sans-c-est-parfois-possible',
    'Enlace con el artículo (suscriptores)'],
    ['29/04/2015', 'Canal + (La Nouvelle Édition)',[FR] 
    'http://www.canalplus.fr/c-emissions/c-la-nouvelle-edition/pid6850-la-nouvelle-edition.html?vid=1249359',
    'Enlace con el vídeo'],
    ['03/02/2015', 'L’Humanité',[FR] 
    'http://www.humanite.fr/logiciel-libre-et-ess-une-economie-lintention-de-tous-564379',
    'Enlace con el artículo'],
    ['02/11/2014', 'Libération',[FR] 
    'http://www.liberation.fr/ecrans/2014/11/02/avec-framasoft-l-appli-fait-de-la-resistance_1134654',
    'Enlace con el artículo'],
    ['01/11/2014', 'France Inter (Comme un buit qui court)',[FR] 
    'http://www.franceinter.fr/emission-comme-un-bruit-qui-court-la-libye-au-bord-du-chaos-ces-francais-qui-partent-faire-le-jihade',
    'Enlace con la página del programa de radio']
];


$t['medias']['framatitle']  = 'Framasoft en pocos enlaces…';
$t['medias']['framalist']   = '
                        <ul>
                            <li><a href="https://contact.framasoft.org/#questions">Contacto</a> (el formulario manda directamente a nuestro servicio de prensa).</li>
                            <li><a href="https://fr.wikipedia.org/wiki/Framasoft">Página de wikipédia</a> dedicada a Framasoft.</li>
                            <li><a href="https://soutenir.framasoft.org/association">Presentación completa</a> de Framasoft.</li>
                            <li><a href="https://wiki.framasoft.org/speakabout">Revista de prensa</a> (y de Internet) de Framasoft.</li>
                        </ul>';
$t['medias']['framap1']     = 'Framasoft es una red de educación popular, que procede del mundo educativo y se dedica a promover y difundir el software y la cultura libres.';
$t['medias']['framap2']     = 'Vínculo entre el mundo de lo Libre y lo público en general, la asociación propone un sinnúmero de proyectos
 (guía de software, editorial, motor de búsqueda, etc.) reunidos según 3 ejes: software libre, cultura libre y servicios libres.';
$t['medias']['framap3']     = '<em>El logotipo es obra de JosephK bajo licencia <a href="http://creativecommons.org/licenses/by-sa/4.0/deed.fr"><span lang="en">Creative Commons By</span>-<abbr>SA</abbr> 4.0</a>.</em>';

// Text genérico
$t['_Close']            = 'Cerrar';
$t['_More']             = 'Más información';
$t['_Support']          = 'Ayudar';
$t['_Use']              = 'Utilizar';
$t['_Install']          = 'Instalar';
$t['_Project updated']  = 'Proyecto puesto al día';
$t['_Project loading']  = 'Proyecto en curso';
$t['_Project running']  = 'Proyecto activo';
$t['_ is an instance based on '] = ' es una instancia basada en software libre ';
$t['_Read more']        = 'Saber más';
$t['_Some examples ?']  = '¿Unos ejemplos?';
$t['_Back to top']      = 'Volver al comienzo de página';
$t['_Editor: ']         = 'Éditorr : ';
$t['_Equivalent(s): ']          = 'Equivalencia(s) : ';
$t['_Alternative(s) online: ']  = 'Alternativa(s) en línea';
$t['_Alternative(s) offline: '] = 'Alternativa(s) que instalar';
$t['_Framasoft service: ']      = 'Servicio Framasoft : ';
$t['_release planned on ']      = 'publicación en  ';
$t['_Select the language']      = 'Escoger la lengua';
$t['_Change the language']      = 'Cambiar de lengua';
$t['_OK']                       = 'OK';
$t['_since']                    = 'desde';
$t['_GAFAM']                    = 'GAFAM';
$t['_& co']                     = '& cie';
$t['_Software']                 = 'S';
$t['_LEDS']                     = 'LEDS';
$t['_Libre, Éthique, Décentralisé et Solidaire'] = 'Libre, Ético, Descentralizado y Solidario';
$t['_ with your help']          = 'con su ayuda';


* Objetivos *
 *************/
$d['tip2017'] = [
    'name'  => '180 000€ + 1 250 donantes recurrentes',
    'F'     => '11 empleados permanentes',
    'mBody' => '<p>¡Ya estaremos alcanzando la meta! Quedarán aún servicios «sensibles» para poner en marcha, especialmente aquellos relacionados con la mensajería (lista de correo y, claro, el correo electrónico).</p>
                <p>No sólo estos servicios son los más caros para poner en marcha (es más sencillo manejar un sitio con un millón de visitas al día
                que administrar 10 000 buzones), pero también (¡sobre todo!) habrá que asegurar el buen funcionamiento
                (mantenimiento, actualización, soporte, etc.) de los proyectos ya creados desde 2011.</p>
                <p>Se necesitará la contratación de 3 nuevas personas (esencialmente para los aspectos técnicos).</p>
                <p>Para darles una idea de las necesidades que tenemos, nuestro objetivo 2017 (180 000€ y 1 250 donantes
                recurrentes) corresponde al coste de  54 metros de autopista, o al 0,0006% del volumen de negocios anual de Google</p>'
];

$d['tip2016'] = [
    'name'  => '130 000€ + 1 080 donantes recurrentes',
    'F'     => '8 empleados permanentes',
    'mBody' => '<p>A principios de 2016, Framasoft contará ya con más de unos veinte servicios en línea. ¡Pero no pensamos pararnos ahí!
    Deseamos en efecto proponer nuevas alternativas libres a las aplicaciones de los gigantes de Internet. En especial :</p>
                <ul>
                    <li>un servicio de calendario compartido (como alternativa a Google Agenda)</li>
                    <li>un servicio de microbitácoras (como alternativa a Twitter)</li>
                    <li>un servicio de alojamiento de vídeos libres (como alternativa a Youtube)</li>
                </ul>
                <p>Para asegurar la creación de tales proyectos y también para mantener los proyectos existentes, nuestra asociación tendrá que reclutar a tres personas más (un programador, un segundo administrador de sistema, y un administrador). </p>
                <p>Para no solicitar de manera sistemática a nuestros amables donantes, parte del importe necesario podrá proceder de ayudas públicas.</p>
                <p>Para que tengan una idea de nuestras necesidades, nuestro objetivo 2016 (130 000€ y 1 080 donantes recurrentes) corresponde
                al costo de 38 metros de autopista, o al 0,0004% del volumen de negocios anual de Google</p>'
];
$d['tip2015'] = [
    'name'  => '70 000€ + 780 donantes recurrentes',
    'F'     => '5 empleados permanentes',
    'mBody' => '<p>Framasoft desea poner a disposición varios servicios en línea importantes en 2015 :</p>
                <ul>
                    <li>un servicio de alojamiento de documentos (como alternativa a  Dropbox)</li>
                    <li>un servicio de envío de arhivos grandes (como alternativa a WeTransfer)</li>
                    <li>un servicio de software de presentación/diaporama en línea (un « PowerPoint en línea », si prefieren ustedes)</li>
                    <li>un servicio de videoconferencia (como alternativa a Skype), directamente desde su navegador web, sin instalación de software</li>
                </ul>
                <p>Para asegurar la creación de tales proyectos y también para mantener los existentes, la asociación necesitará contratar, 
                además de sus empledos actuales, a un administrador de sistema a tiempo completo y también a 2 trabajadores en prácticas. </p>
                <p>Para darles una idea de nuestras necesidades, nuestro objetivo 2015 (70 000€ y 780 donantes recurrentes) corresponde
                al costo de 21 metros de autopista o al 0,0002% del volumen anual de negocios de Google</p>'
];

$d['tip2014'] = [
    'name'  => '35 000€ + 550 donantes recurrentes',
    'F'     => '3 empleos permanentes',
    'mBody' => '<p>El año 2014 ha sido un año particularmente intenso para la asociación Framasoft, ya que hemos tenido que elaborar el plan de batalla que les permita a ustedes resistir a  Google, Facebook y otros…</p>
                <p>La asociación ha invertido particularmente (tiempo y dinero) en la infrestructura técnica que permite alojar los servicios actuales
                y nos permitirá acoger confortablemente las aplicaciones  que les propondremos en los años venideros.</p>
                <p>Necesitamos su ayuda para :</p>
                <ul>
                    <li>acrecentar el tamaño de nuestra infraestructura técnica (aumentar la potencia de cálculo y almacenamiento de nuestro 
                    clúster de máquinas virtuales)</li>
                    <li>garantizar los salarios de nuestros empleados permanentes</li>
                    <li>facilitar la contratación de un tercer asalariado (encargado de comunicación)</li>
                    <li>financiar el desarrollo de mejoras de ciertos servicios propuestos (Framadate y Framindmap, en particular)</li>
                    <li>asegurar la coordinación del conjunto del proyecto "Desgooglicemos Internet"</li>
                </ul>
                <p>Nuestro objetivo consiste en pasar de 400 a 550 donantes recurrentes, y en recaudar 35 000€ bajo forma de donaciones aisladas a lo largo del año.</p>
                <p>Les recordamos que Framasoft es una asociación en su mayor parte autofinanciada por sus donantes. Para darles una idea de 
                nuestras necesidades, nuestro objetivo para 2014 (35 000€ y 550 donantes recurrentes) corresponde al costo de 8 metros de autopista,  o a un  0,000083% del volumen de negocios anual de Google.</p>'
for ($i=2014; $i<2018; $i++) {
    $d['tip'.$i]['FDate']   = $i;
    $d['tip'.$i]['sDesc']   = 'Objetivos';
    $d['tip'.$i]['lDesc']   = 'Para realizar estos proyectos, ¡necesitamos su ayuda!';
    $d['tip'.$i]['mTitle']  = 'Nuestros objetivos para '.$i;
    $d['tip'.$i]['mFooter'] = '<a href="'.$l['S'].'" class="btn btn-soutenir"><i class="fa fa-fw fa-heart"></i> Ayudar</a>';
}
* Servicios web *
 ****************

$k = 'id';                                                              // para el mapa: id="a-avaaz" (area), id="o-avaaz" (option), id="t-avaaz" (texte) y para la lista: asociar modales a cada post-it

---- Facultatif : déjà dans data.php -----------------------------------
$d[$k]['FL']      = '';                                                 // enlace con el botón «Utilizar» + $d[$k]['F']
$d[$k]['CL']      = '';                                                 // enlace con el botón «Instalar» (Framacloud)
$d[$k]['S']       = '<a href="*">*</a>';                                // enlace y nombre del software que utiliza Framasoft
$d[$k]['F']       = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">*</b></a>';
$d[$k]['name']    = '';                                                 // Nombre del servicio privativo en el mapa
$d[$k]['eq']      = '';                                                 // Equivalencias
$d[$k]['altOn']   = '';                                                 // Alternativas en línea
$d[$k]['altOff']  = '';                                                 // Alternativas en modo desconectado / para instalar en un servidor (doit y avoir au moins $d[$k]['S'])
$d[$k]['pos']     = '';                                                 // Coordenadas en el mapa : 'x, y, R'
$d[$k]['FDate']   = '201*';                                             // fecha o artículo del  Framablog (contiene la fecha en el URL)

---- À remplir ici : data.xx.php ---------------------------------------
$d[$k]['sDesc']   = '';                                                 // Descripción corta (en titre sur carte et post-it)
$d[$k]['lDesc']   = '';                                                 // Descripción larga (au dos du post-it)
$d[$k]['mTitle']  = '';                                                 // Modale ↓
$d[$k]['mBody']   = '<p>
                        '.$d[$k]['F'].' vous permet de…
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> …
                    </p>';

---- Facultatif : déjà dans list.php (l.23-26)--------------------------
$d[$k]['mFooter'] = '<p class="precisions">'.$d[$k]['F'].' est une instance basée sur le logiciel libre '.$d[$k]['S'].'</p>';

*/
                   
          
// Avaaz
$k= 'avaaz';
$d[$k]['sDesc']  = 'Peticiones';
$d[$k]['lDesc']  = 'Lance sus peticiones sin ofrecer las direcciones de sus apoyos';
$d[$k]['mTitle'] = 'Libere sus peticiones';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].'le permite lanzar peticiones sobre asuntos que le preocupan. Con pocos clics, su petición ya está publicada
y las direcciones de sus apoyos, no las podrá utilizar  ninguna empresa de publicidad.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> Inscríbase, lance una nueva petición siguiendo las instrucciones. Su sondeo quedará creado.Sus apoyos no necesitarán inscribirse para poder participar. 
                    </p>';
          
                    
    
// Bit.ly
$k= 'bitly';
$d[$k]['sDesc']  = 'Redución de URL';
$d[$k]['lDesc']  = 'Las direcciones más cortas muy discretamente';
$d[$k]['mTitle'] = 'Ya se acabaron las direcciones  demasiado largas';
$d[$k]['mBody']  = '<p>
                        Con '.$d[$k]['F'].' o <a href="https://huit.re">Huit.re</a>, es posible acortar las direcciones web demasiado largas pero sin rastrear su uso.
                        En las redes sociales y el microblogueo, disponer de una dirección acortada  permite ahorrar espacio y favorece la claridad.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> teclee la versión original de la dirección y Frama.link la acortará.
                    </p>';

// Blogger
$k= 'blogger';
$d[$k]['sDesc']  = 'alojamiento de sitios';
$d[$k]['lDesc']  = '';
$d[$k]['FL']     = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

                         
  
// Bubbl.us
$k= 'bubblus';
$d[$k]['name']   = 'Bubbl.us';
$d[$k]['sDesc']  = 'mapas heurísticos';
$d[$k]['lDesc']  = 'Fabrique sus mapas mentales';
$d[$k]['mTitle'] = '¿Por qué crear un mapa mental ?';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].'les permite a varias personas crear una lluvia de ideas/tormenta de ideas (brainstorming), ordenarlas, 
aprender y hacer que se aprenda una lección, identificar los elementos importantes y clasificarlos.
                    </p>
                       <p><video controls="controls" preload="none"
                        width="420" height="248" poster="https://framatube.org/images/media/866l.jpg">
                        <source src="https://framatube.org/files/1230-framindmap-creer-une-carte-mentale.mp4" type="video/mp4"></source>
                        <source src="https://framatube.org/files/1229-framindmap-creer-une-carte-mentale.webm" type="video/webm"></source>
                          </video>
                       </p>
                       <p><small><em>Tutorial realizado por Claire Cassaigne</em> - El <a href="https://framatube.org/files/1229-framindmap-creer-une-carte-mentale.webm">vídeo</a> en formato webm</small></p>

                    <p>
                        <b class="violet">¿ Por qué utilizar Framindmap ?</b> Se puede utilizar en línea, sin instalación, no es obligatoria ninguna inscripción, 
puede exportar su documento como imagen, es software libre y gratuito, sus datos le pertenecen totalmente.
                    </p>';
                  // Doodle
$k= 'doodle';
$d[$k]['sDesc']  = 'Reuniones y sondeos';
$d[$k]['lDesc']  = 'Acordar la celebración de una reunión y crear un sondeo';
$d[$k]['mTitle'] = 'Organizar citas sencilla y libremente';
$d[$k]['mBody']  = '<p>
                        Con '.$d[$k]['F'].' podrá usted planificar una cita de varias personas o crear un sondeo en línea. ¡ Framadate no almacena sus datos !
                    </p>
                    <p class="violet">Funcionalidades :</p>
                    <ul>
                        <li>envío de correo electrónico después de cada respuesta </li>
                        <li>modificación del sondeo en progreso</li>
                        <li>planificación del final del proyecto</li>   
                        <li>Déle un nombre a su sondeo y mándeles la dirección a sus colaboradores</li>
                    </ul>';


// Dropbox
$k= 'dropbox';
$d[$k]['sDesc']  = 'Almacenamiento de documentos';
$d[$k]['lDesc']  = 'Alojar los propios documentos en línea';
$d[$k]['mTitle'] = 'Alojar los propios documentos en línea';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' le permite almacenar en línea de manera encriptada sus documentos, sincronizarlos en sus ordenadores, tabletas, teléfonos, etc y compartirlos son quien quiera…
                    </p>';
           // Evernote
$k= 'evernote';
$d[$k]['sDesc']  = 'toma de notas';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Facebook
$k= 'facebook';
$d[$k]['sDesc']  = 'Red social';
$d[$k]['lDesc']  = 'Una red social ética y descentralizada';
$d[$k]['mTitle'] = 'Júntese con sus amigos en zona libre';
$d[$k]['mBody']  = '<p>
                        Sur '.$d[$k]['F'].', puede encontrar una red social que respeta sus datos. Framasphère es un nodo (llamado <i>pod</i>)
                        de la red social libre Diaspora*.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> intercambie mensajes y fotos con cualquier otra persona de la red Diaspora*, 
                        gestione sus contactos, tags, menciones, vuelva a compartir algo ya compartido… También puede publicar en otras redes sociales (Facebook, Twitter, Tumblr o Wordpress).
                    </p>';
                   
  
// Github
$k= 'github';
$d[$k]['sDesc']  = 'Alojamiento de código';
$d[$k]['lDesc']  = 'El código abierto es cosa buena. ¡ En una plataforma libre, es mejor !';
$d[$k]['mTitle'] = 'Alojamiento de código abierto';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' es una herramienta que se dirige ante todo a los programadores. Permite la creación de 42 repositorios al máximo por cuenta, (si necesita más, piense seriamente en auto-alojarse). Y, algo mejor que en GitHub, también puede crear repositorios privados.</p>
                    </p>
                    <p>También es posible crear  « espejos  » automáticos de sus repositorios en GitHub : continúa a « llenarle la panza a la bestia », pero ya queda menos dependiente, y sigue visible por los casi 10 millones de inscritos en GitHub. Su repositorio en nuestro Framagit queda automáticamente replicado en su repositorio Github. De hecho, es la solución adoptada por Framasoft, que sigue disponiendo de una cuenta  GitHub, mientras que nuestros desarrollos de software se realizan en nuestra forja.</p>';
                  
// Gmail
$k= 'gmail';
$d[$k]['sDesc']  = 'Servicio de correo electrónico';
$d[$k]['lDesc']  = 'Sus mensajes , sin la NSA dentro';
$d[$k]['mTitle'] = 'Su correo, dentro de un sobre blindado';
$d[$k]['mBody']  = '';

// Google Agenda
$k= 'gagenda';
$d[$k]['sDesc']  = 'Calendario compartido';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Google Books
$k= 'gbooks';
$d[$k]['sDesc']  = 'Libros en línea';
$d[$k]['lDesc']  = 'Una biblioteca de varios millones de obras';
$d[$k]['mTitle'] = 'Catálogo de obras accesibles a todos';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' es el catálogo <abbr>OPDS</abbr> de Framasoft. « Pues… sí, pero ¿ algo más ? », nos dirá usted. Un catálogo <abbr>OPDS</abbr> es un sitio al que puede suscribirse con un programa que soporte esa funcionalidad (algunas pantallas electrónicas llevan consigo uno a bordo, para Android, existe Aldiko y otros más), dándole acceso rápida y sencillamente a una entera biblioteca a partir de su ordenador, smartphone o tableta.
                    </p>
                    <p>El catálogo <abbr>OPDS</abbr> de Framasoft le da acceso a cientos de obras no protegidas por  « copyright ».</p>';

      
// Google Docs
$k= 'gdocs';
$d[$k]['sDesc']  = 'Redacción colaborativa';
$d[$k]['lDesc']  = '¡ El procesador de texto en línea y en colaboración  !';
$d[$k]['mTitle'] = 'Herramienta de redacción colaborativa';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' es un servicio de redacción colaborativa en línea basado en el programa 
                        '.$d[$k]['S'].'.
                    </p>
                    <p>
                        Un « pad » es un editor de texto en línea. ¿ Su verdadera ventaja ? La edición colaborativa : las contribuciones de cada usuario
                       aparecen en seguida en los pads de todos los participantes, indicadas por un color diferente.
                    </p>
                    <p class="violet">Cómo funciona :</p>
                    <ul>
                        <li>Abra un pad público o privado</li>
                        <li>Redacte su documento</li>
                        <li>Invite a otros colaboradores</li>
                        <li>Un color para cada uno</li>
                        <li>Chat integrado</li>
                        <li>Histórico de las versiones</li>
                        <li>Exporte su trabajo</li>
                        <li>Y dentro de poco: ¡ gestión de las sesiones y de los grupos con MyPads !</li>
                    </ul>';
              
          
// Google Form
$k= 'gforms';
$d[$k]['sDesc']  = 'Cuestionarios en línea';
$d[$k]['lDesc']  = 'Cree cuestionarios fácilmente ';
$d[$k]['mTitle'] = 'Creación de cuestionarios';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' le permite crear los cuestionarios que necesita, tanto en el ámbito escolar como familiar o asociativo. Cree sus
preguntas en función de sus necesidades, desde los formularios de selección múltiple hasta los campos de texto libre.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona</b> : cree una cuenta en Framaforms y comience la creación de los cuestionarios en función de sus necesidades. Las personas sondeadas no necesitan cuenta para poder contestar. Y usted dispone así de una síntesis de las respuestas.
                    </p>';
          
// Google Groupes
$k= 'ggroups';
$d[$k]['sDesc']  = 'Listas de correo';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

         
// Google Maps
$k= 'gmaps';
$d[$k]['sDesc']  = 'Cartografía';
$d[$k]['lDesc']  = 'Cree sus mapas personalizados en línea';
$d[$k]['mTitle'] = 'Cree sus mapas personalizados en línea';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' le permite crear mapas personalizados en los mapas básicos de OpenStreetMap y visualizarlos en su sitio.
                    </p>
                    <p><b class="violet">Cómo funciona :</b></p>
                    <ul>
                        <li>Seleccionar los mapas básicos</li>
                        <li>Añadir los PDI (o en inglés POI): marcadores, líneas, polígonos…</li>
                        <li>Seleccionar los colores y los iconos</li>
                        <li>Gestionar las opciones del mapa: visualizar un minimapa, localizar las coordinadas del utilizador…</li>
                        <li>Importar gran cantidad de datos geográficos (geojson, gpx, kml, osm…)</li>
                        <li>Escoger la licencia de sus datos</li>
                        <li>Exportar y compartir el propio mapa</li>
                    </ul>';

                 
// Google Reader
$k= 'greader';
$d[$k]['sDesc']  = 'Lector de noticias';
$d[$k]['lDesc']  = 'Siga la actualidad y escoja libremente';
$d[$k]['mTitle'] = 'Esté siempre al corriente, sin retraso ';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' ¡ le propone un lector de noticias RSS en línea, que le permitirá estar siempre al tanto de la actualidad a partir de las fuentes RSS de sus sitios preferidos !
                    </p>
                    <p>
                        <b class="violet">Cómo funciona:</b> después de haber creado su cuenta, guarde sus fuentes RSS y sígalas.
                        ¿ Cómo hacer más sencillo ?
                    </p>';
          

           
// Google Search
$k= 'gsearch';
$d[$k]['sDesc']  = 'Motor de búsqueda';
$d[$k]['lDesc']  = '¿Y si Google ya no fichara las búsquedas de uno ?';
$d[$k]['mTitle'] = 'Una búsqueda anónima';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' es un metabuscador de búsqueda anónimo. Significa que las búsquedas que haga usted con este metabuscador se mandan a diferentes motores antes de aparecer en su  navegador web. Lo interesante es que nuestro motor hace entonces de intermediario entre usted y Google (u otros motores). Su dirección IP no se graba entonces en los servidores de Google u otros. </p>
                        <p>Claro, debe confiar en Framasoft/Framabee si desea utilizarlo, por eso proponemos una  <a href="'.$l['Charte'].'">carta</a>.
                    </p>';
         
// Google Slides
$k= 'gslides';
$d[$k]['sDesc']  = 'Presentaciones';
$d[$k]['lDesc']  = 'Unos diaporamas de alta calidad sin pena';
$d[$k]['mTitle'] = 'Un programa de presentación para sus diaporamas';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' le permitirá
                        realizar de manera fácil e intuitiva sus diaporamas.
                        Gracias a este programa dentro de su navegador web, ninguna necesidad 
                        de cargar programas pesados y complicados.
                    </p>
                    <p class="violet">Cómo funciona :</p>
                    <ul>
                        <li>una interfaz  &mdash; inserción fácil de texto, de imágenes, de vídeos y de sitio web</li>
                        <li>salvaguardia local de la versión HTML lista para el empleo.</li>
                    </ul>
                    <p><b class="violet">Para más tarde, </b> si nos lo permiten nuestras financias :</p>
                    <ul>
                        <li>se hará la salvaguardia en la nube  de una empresa privada</li>
                        <li>una función de edición colaborativa…</li>
                    </ul>';
                 
     
// Google Spreadsheet
$k= 'gspreadsheet';
$d[$k]['sDesc']  = 'Hoja de cálculo colaborativa';
$d[$k]['lDesc']  = '¡ Comparta sus tablas y colabore !';
$d[$k]['mTitle'] = 'Una hoja de cálculo en línea';
$d[$k]['mBody']  = '<p>
                        Con '.$d[$k]['F'].', sus datos se salvaguardan automáticamente en Internet. Usted y sus colaboradores  pueden colaborar en el 
documento al mismo tiempo. Visualice todos los cambios en tiempo real y trabajen juntos sobre sus inventarios, sus cálculos, sus datos , sus estadísticas,
                        ¡ y mucho más !
                    </p>
                    <p class="violet">Cómo funciona :</p>
                    <ul>
                        <li>Edición colaborativa (varios utilizadores conectados a la misma hoja de cálculo)</li>
                        <li>Numerosas funciones disponibles (de estadísticas, de finanzas, de matemáticas, texto, etc.)</li>
                        <li>Posibilidad de comentar las celdas</li>
                        <li>Salvaguardia automática</li>
                        <li>Gráficos de base(histograma, líneas, pointsuntos)</li>
                        <li>Exportación HTML</li>
                        <li>Taille du document : jusqu’à 100 000 lignes.</li>
                    </ul>';
            
       
// Img.ur
$k= 'imgur';
$d[$k]['sDesc']  = 'Envío de imágenes';
$d[$k]['lDesc']  = 'Comparta sus imágenes de manera anónima';
$d[$k]['mTitle'] = 'Comparta sus imágenes fácilmente';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' le permite compartir fácilmente imágenes, por ejemplo para intercambiarlas en Twitter, Facebook, o … Framasphère !
                    </p>
                    <p>Cuidado, este servicio no es un equivalente de  flickr o instagram : no se trata de un servicio de alojamiento de fotos de usuarios
                     sino de un servicio de alojamiento de imágenes anónimas (ni siquiera nosotros tenemos acceso al contenido que viene cifrado).</p>
                    <p>
                        '.$d[$k]['FL'].' permite mandar imágenes de manera anónima. Puede decidir del momento de su supresión (desde su primera visualización , las 24 horas del día, los 7 días de la semana, los 30 días del mes, 1 año después de haberlas puesto en línea).
                    </p>';
            
// Meetup
$k= 'meetup';
$d[$k]['sDesc']  = 'Eventos comunitarios';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';
   
// Pastebin
$k= 'pastebin';
$d[$k]['sDesc']  = 'Notas anónimas';
$d[$k]['lDesc']  = 'Redacte y comparta con toda discreción';
$d[$k]['mTitle'] = 'Comunique datos cifrados';
$d[$k]['mBody']  = '<p>
                        Con '.$d[$k]['F'].' puede compartir informaciones que sólo usted y su correspondiente podrán descifrar  y todo ello de manera muy sencilla. ¡ Hasta podrá escoger la duración de la validez del acceso !
                    </p>
                    <p>
                        <b class="violet">¿ Para qué usos ?</b> Puede que necesite comunicar un o más informaciones sin querer pasar por la vía clásica del correo electrónico o del pedacito de papel escrito. Framabin le permite mandar una dirección para dar acceso a esas informaciones con toda seguridad y sencillez à ces informations en toute sécurité et simplicité. El
                        servidor almacena datos que él mismo no puede leer .
                    </p>';
       
// Pocket
$k= 'pocket';
$d[$k]['sDesc']  = 'Salvaguardia de contenido';
$d[$k]['lDesc']  = 'Salvaguarde y lea más tarde';
$d[$k]['mTitle'] = 'Salvaguarde, lea más tarde';
$d[$k]['mBody']  = '<p>
                        Avec '.$d[$k]['F'].', ya no se le perderán más los contenidos de la Web que le interesan pero que no ha leído por falta de tiempo. Con un solo clic guarde su selección y la leerá cuando quiera. La aplicación salvaguarda su selección para permitirle
                         aprovecharla cuando tenga tiempo.
                    </p>
                    <p>
                        Framabag es un <b class="violet">servicio de salvaguardia de páginas web</b>. Almacena en el servidor los contenidos que le interesan, textos e imágenes 
                        incluídas. También puede compartir sus artículos y utilizar complementos para Firefox, Chrome, Android...
                     </p>';
               
// Shrtct
$k= 'loomio';
$d[$k]['sDesc']  = 'Toma de decisión';
$d[$k]['lDesc']  = 'Una herramienta para gestionar mejor las tomas de decisiones colectivas';
$d[$k]['mTitle'] = 'Decidan juntos,';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' les ayuda a tomar decisiones comunitarias. Discutan, intercambien, pónganse de acuerdo y pasen a la acción, en los plazos que hayan determinado al principio.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> Inicie una discusión, e invite las personas interesadas a aportar su punto de vista. Desarrolle sus ideas, intercambie sea cual sea su punto de vista. Todas las opiniones pueden expresarse, intercambiarse, compartirse y madurar. Decidan juntos y redacten una propuesta final dentro de los plazos definidos.
                    </p>';
 
/ Skype
$k= 'skype';
$d[$k]['sDesc']  = 'Videoconferencia';
$d[$k]['lDesc']  = 'Converse libremente con sus amigos';
$d[$k]['mTitle'] = 'Videoconferencia';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' le permite conversar libremente con sus amigos, sin instalación compleja de software. Converse simplemente, sin ningún análisis de datos relacionados con la conversación. Todo pasa entre usted y sus amigos. 
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> Directamente a partir de su navegador web, se pone en relación con sus amigos sin necesidad de instalar ningún programa más, sans devoir installer de logiciel supplémentaire. Una vez conectado, dé  permiso a su navegador para que utilice su micrófono y su cámara de web y aproveche plenamente la charla sin complicaciones.
                    </p>';

                 
 
// Trello
$k= 'trello';
$d[$k]['sDesc']  = 'Gestión de proyectos;
$d[$k]['lDesc']  = 'Gestor de proyectos';
$d[$k]['mTitle'] = 'Gestor de proyectos';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' es un gestor de tareas visual. Permite gestionar proyectos de manera colaborativa, según el método Kanban. Su sistema visual le permite a uno orientarse a primera vista esté o no esté acostumbrado a usar este tipo de herramienta.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> Inicie su proyecto y comience a gestionarlo de manera colectiva, tarea tras tarea. Asigne a cada tarea una persona, defina funciones, progresos y plazos. Esta gestión visual le permitirá ver el estado del proyecto en una ojeada.
                    </p>';
                   
             
// Twitter
$k= 'twitter';
$d[$k]['sDesc']  = 'Microblogging';
$d[$k]['lDesc']  = 'Trine en Internet';
$d[$k]['mTitle'] = 'El microblogueo libre';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' le permite seguir fuentes de microblogueo y mantener las propias fuentes de manera descentralizada utilizando el protocolo P2P.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> utilice un cliente de conexión, abra una cuenta, suscríbase a una fuentes de web y tuitee a su vez.
                    </p>';
      
              
// WeTransfer
$k= 'wetransfer';
$d[$k]['sDesc']  = 'Envío de archivos voluminosos';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';


  
// Youtube
$k= 'youtube';
$d[$k]['sDesc']  = 'Alojamiento de vídeos';
$d[$k]['lDesc']  = 'Comparta sus vídeos y conserve sus derechos';
$d[$k]['mTitle'] = 'Libere sus vídeos';
$d[$k]['mBody']  = '<p>
                        Sur '.$d[$k]['FL'].', puede descargar sus vídeos, compartirlos con la personas que le rodean o abrirlos en lectura pública.
                        Es el mejor medio de compartir sus vídeos sin ceder sus derechos.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona:</b> abra una cuenta y suba sus vídeos. Usted conserva sus derechos y la libertad de modificar sus subidas.
                    </p>';
               

/********************
 * Pas sur la carte
 ********************/
// JS Fiddle
$k= 'jsfiddle';
$d[$k]['sDesc']  = 'Código compartido';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';
// Kongregate
$k= 'kongregate';
$d[$k]['sDesc']  = 'Juegos';
$d[$k]['lDesc']  = 'Una recopilación de juegos libres';
$d[$k]['mTitle'] = 'Tómese un respiro, juegue unos instantes';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].', le propone cierta cantidad de juegos libres, disponibles tanto para  el uso en línea como fuera de línea. Tómese un respiro y aproveche uno de los juegos propuestos.
                        <small>(y <a href="https://fr.wikipedia.org/wiki/Angry_Birds#Collecte_de_donn.C3.A9es_par_la_NSA">al contrario de Angry Birds</a>, la NSA no le espiará ;) )</small>
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> Cada uno de los juegos ofrece la posibilidad del uso directo en el sitio o la descarga para un uso fuera de línea.  Escoja su juego y ¡ a jugar !.
                    </p>';
$d[$k]['mFooter']= '<p class="precisiones">Framagames es una recopilación de juegos libres. Los créditos están indicados en el sitio.</p>';
// Padlet
$k= 'padlet';
$d[$k]['sDesc']  = 'Organización de ideas';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';
  
// Pixlr
$k= 'pixlr';
$d[$k]['sDesc']  = 'Gráfico vectorial';
$d[$k]['lDesc']  = 'Cree rápidamente imágenes en formato SVG';
$d[$k]['mTitle'] = 'Cree rápidamente imágenes vectoriales de formato SVG';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].', es un program de gráfico muy simple (¿ quién dijo que simplista ?).
                    </p>
                    <p><b class="violet">Características :</b></p>
                    <ul>
                        <li>Se utiliza en línea, sin instalación</li>
                        <li>No se requiere inscripción</li>
                        <li>Posibilidad de exportar el documento en cuanto imagen de mapa de bits o en cuanto imagen vectorial</li>
                        <li>Software libre y gratuito, abierto a todos</li>
                        <li>Ética: no se conservan sus datos</li>
                    </ul>
                    <div style="text-align:center">
                    <video controls="controls" preload="none" width="620" height="360" poster="https://framatube.org/images/media/864l.jpg">
                        <source src="https://framatube.org/files/1227-introduction-a-svg-editjpg.mp4" type="video/mp4"></source>
                        <source src="https://framatube.org/files/1228-introduction-a-svg-editjpg.webm" type="video/webm"></source>
                    </video>
                    </div>
                    <p> El <a href="https://framatube.org/files/1228-introduction-a-svg-editjpg.webm">vídeo</a> en formato webm <small>(Por el momento el vídeo es en inglés. Lo sentimos mucho.)</small></p>';
               // Scribd
$k= 'scribd';
$d[$k]['sDesc']  = 'Intercambio de PDF/ODP';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';
// Transifex
$k= 'transifex';
$d[$k]['sDesc']  = 'Traducción de software';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';


/****************
 * Mises à jour *
 ****************/
// Etherpad Lite
$k = 'up-padlite'; $ko = 'gdocs';    // prefijo "up-" obligatorio ; $ko es la identificación del proyecto inicial
$d[$k]['lDesc']  = $d[$ko]['lDesc']; // Copiar/Pegar
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'];
$d[$k]['name']   = 'se reemplaza Etherpad por la versión « Lite » para los pads públicos';

// Wisemapping
$k = 'up-framindmap2'; $ko = 'bubblus';
$d[$k]['lDesc']  = $d[$ko]['lDesc'];
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'].'
    <p>
        <b class="violet">Actualización :</b> el programa que impulsa Framindmap será  Wisemapping (y ya no Mindmaps). Este programa es más completo, permite relacionar los documentos con los nodos o grabar sus mapas para encontrarlos de nuevo y compartirlos fácilmente en internet.
    </p>';
$d[$k]['name']   = 'Mindmaps reemplazado por Wisemapping';
// Framadate 0.8
$k = 'up-framadate2'; $ko = 'doodle';
$d[$k]['lDesc']  = $d[$ko]['lDesc'];
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'].'
    <p>
        <b class="violet">Actualización</b> : la actualización de Framadate interesa una revisión gráfica y técnica del servicio. La interfaz queda más clara, más ergonómica. Y ya será posible contestar ""quizás" a una pregunta de sondeo
    </p>';
$d[$k]['name']   = 'Desarrollo cuyos ejes son la ergonomía y la accesibilidad';

// MyPads
$k = 'up-mypads'; $ko = 'gdocs';
$d[$k]['lDesc']  = $d[$ko]['lDesc'];
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'].'
    <p>
        <b class="violet">Actualización</b> : esta actualización de Framapad será importante, ya que, además de beneficiarse de foros dedicados  (por ejemplo a la educación o a las ciencias), usted podrá (¡ por fin !) manejar pads privados (gestión por grupo o por contraseña).
    </p>';
$d[$k]['name']    = 'Desarrollo e integración del plugin Mypads';

?>