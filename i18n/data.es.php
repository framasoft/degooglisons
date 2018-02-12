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
$l['DIoL'] = $l['DIo'].'/list/?l=es';
$l['Charte'] = 'https://framasoft.org/nav/html/charte.html';
$l['contact'] = 'https://contact.framasoft.org';
$l['participer'] = $l['contact'].'/participer';
$l['docs'] = 'https://docs.framasoft.org/en/';
$l['cloud'] = 'https://framacloud.org/en/cultiver-son-jardin';
$l['chatons'] = 'https://www.chatons.org/en';

// Images
$l['map'] = 'img/Carte2016-romains-en.png';

// Meta
$t['meta']['lang']      = 'es';
$t['meta']['title']     = 'Desgooglicemos Internet';
$t['meta']['framasoft'] = 'Framasoft';
$t['meta']['F']         = '<a href="'.$l['F'].'"><b class="violet">Frama</b><b class="orange">soft</b></a>';
$t['meta']['DIo']       = '<a href="'.$l['DIo'].'/?l=en"><b class="violet">Desgooglicemos</b> <b class="orange">Internet</b></a>';
$t['meta']['start']     = 'Campaña comenzada el día 07/10/2014';
$t['meta']['edit']      = 'Última modificación el 12/10/2017';
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

// Carte
$t['map']['map']    = 'Haga clic en el mapa para descubrir las alternativas…';
$t['map']['altMap'] = 'Estamos en 2015 después de Cristo. Toda la Red está ocupada por los servicios centralizados…
                ¿Toda? ¡No! Una aldea poblada por irreductibles activistas de lo libre resiste,
                todavía y como siempre, al invasor. Y la vida no es fácil para las guarniciones
                de los reducidos campamentos de Fermetum, Centralisum, Espionnum y Privatum…';

// Carte - Camps
$t['map']['camps']['village']     = 'Pueblo librista';
$t['map']['camps']['vp1']         = 'En medio de las empresas multinacionales tentaculares,
                una organización sin fines lucrativos continúa participando activamente en la lucha
                por una Red abierta y respectuosa de los internautas.';
$t['map']['camps']['vp2']         = 'Además de '.$t['meta']['F'].', asociación sin fines lucrativos
                que lanza esta campaña, podemos <a href="http://april.org">l’April</a>,
                <a href="http://laquadrature.net">la Quadrature du Net</a> o también <a href="http://aful.org">l’Aful</a>.
                Estas asociaciones viven con sus donaciones, ¡no se les olvide sostenerlas!';

$t['map']['camps']['fermetum']    = '<i lang="la">Fermetum</i>';
$t['map']['camps']['fp1']         = 'Los servicios en línea están frecuentemente cerrados : cuando uno empieza a  usarlos,
                resulta muy difícil separarse de ellos, ya que esas empresas lo hacen todo para mantenerlo cautivo,
                 impidiéndole migrar datos con facilidad, por ejemplo.';
$t['map']['camps']['fp2']         = 'Utilizar los servicios abiertos es garantizar que no seguirá siendo cautivo de un servicio en particular
                y que siempre será facil cambiarlo.';

$t['map']['camps']['centralisum'] = '<i lang="la">Centralisum</i>';
$t['map']['camps']['cp1']         = 'Los servicios centralizados plantean numerosos problemas: crean vulnerabilidad en sus datos (solo un sitio
                 no disponible y ya nada es accesible) y facilita a terceros su explotación..';
$t['map']['camps']['cp2']         = 'Utilizar servicios en línea descentralizados significa tener la opción de
                 elegir entre utilizar una instancia en línea como la propuesta por Framasoft o instalar el servicio en casa.';

$t['map']['camps']['espionnum']   = '<i lang="la">Espionnum</i>';
$t['map']['camps']['ep1']         = '« Si es gratis, es porque tú eres el producto »: numerosos servicios en línea viven de
                la explotación de sus datos personales vendiéndolos a empresas de publicidad.
                Además, muchos servicios están en los Estados Unidos y obedecen a leyes como el
                PATRIOT ACT negando totalmente el derecho de cada uno a la vida privada.';
$t['map']['camps']['ep2']         = 'Utilizar servicios en línea alojados en Europa es asegurarse de su independencia de las leyes de otro
                continente. Además, cuando aloja usted mismo el servicio, nadie puede  violar su vida privada.';

$t['map']['camps']['privatum']    = '<i lang="la">Privatum</i>';
$t['map']['camps']['pp1']         = 'Los servicios privadores (« patentadores » en el lenguaje común) funcionan de manera opaca:
                es imposible saber exactamente lo que el programa hace con su datos. Solo el editor tiene el control.';
$t['map']['camps']['pp2']         = 'Utilizar servicios en línea libres supone un control del funcionamiento del programa por parte de la
                comunidad y la posibildad de modificarlo, de instalarlo en otro dispositivo, etc.';

$t['map']['camps']['nsa']         = '<abbr>NSA</abbr>';
$t['map']['camps']['np1']         = 'Las revelaciones de Edward Snowden sobre el programa PRISM de la <abbr>NSA</abbr> han mostrado que es acertado temer la violación
                masiva de la vida privada de los internautas, es algo fundado.';
$t['map']['camps']['np2']         = 'Utilizar servicios centralizados supone en la actualidad brindar en bandeja sus datos personales a  las
                organizaciones de control sin posibilidad de conocer el uso al que van destinados';

// Accueil
$t['why']['title']  = 'Inicio';
$t['why']['link']   = $l['current'];
$t['why']['desc']   = '';
$t['why']['js']     = '';

$t['why']['lp']['p1']      = 'The web giants <strong>centralize our digital lives</strong> in exchange for their services';
$t['why']['lp']['p2']      = 'The <strong>Free Software</strong> community offers <strong>alternative ethical services</strong>';
$t['why']['lp']['p3']      = 'The <strong>Framasoft</strong> network intends to <strong>prove it</strong><br>by <strong>hosting</strong> them';

$t['why']['choice']['list1']= 'Are you looking for a specific tool ?';
$t['why']['choice']['list2']= '(file sharing, communication, collaborative work...)';
$t['why']['choice']['list3']= 'Find the free service<br>to meet your needs.';
$t['why']['choice']['alt1'] = 'You use a particular service?';
$t['why']['choice']['alt2'] = '(from Google, Apple, Facebook, Amazon, Microsoft…)';
$t['why']['choice']['alt3'] = 'Discover free alternatives<br> to replace it.';

$t['why']['more']['h2']    = 'Go further';
$t['why']['more']['p0']    = 'On the way to your digital independance... ? The road is clear!<br>
                              De-google-ify Internet offers you the possibility to follow it in several steps.';
$t['why']['more']['p1']    = 'Discover and use free alternatives (hosted by Framasoft), 
                              with the help of our collaborative <strong>documentation</strong> to learn
                              how they work, how to log in, how to use their fonctions, etc..';
$t['why']['more']['b1']    = 'Documentation';
$t['why']['more']['p2']    = 'If you have the possibility, freely host the same software 
                              directly on your school/association/company/organization
                              thanks to our self-hosting tutorial found in the  <strong>Framacloud</strong>.';
$t['why']['more']['b2']    = 'Framacloud';
$t['why']['more']['p3']    = 'You can also look for a trustworthy local webhosting service among the <strong>KITTENS</strong>, Keen Internet Talented Teams Engaged in Network Services!';
$t['why']['more']['b3']    = 'KITTENS';

$t['why']['why']['h2']     = 'Why?';
$t['why']['why']['p0']     = 'These services are software, but this software is set up on
                              someone else\'s computer (on what\'s called "servers").
                              Using services offered by Google, Apple, Facebook, Amazon, Microsoft...
                              ("GAFAM") means giving them your data,
                              the parts of your life that you put on the Internet.
                              So it\'s a matter of trust.';
$t['why']['why']['p1']     = 'This trust has allowed a handful of companies (GAFAM)
                              to centralize data from a huge part of the population,
                              holding a near-monopoly on our digital lives (an oligopoly).
                              The <strong>dangers and stakes</strong> are threefold:
                              economic, technological, cultural...';
$t['why']['why']['b1']     = 'Stakes and dangers';
$t['why']['why']['p2']     = '<strong>Our approach</strong> is simple and consists
                              in determining the self-imposed conditions that may justify such trust.
                              We aim to offer alternatives that respect people and diversity while
                              making it impossible to reproduce such monopolies.';
$t['why']['why']['b2']     = 'What we offer';
$t['why']['why']['p3']     = 'In order for you to determine whether you can trust us,
                              we have published an introduction to our Framasoft network
                              (and to the non-profit that supports it), together with our reports
                              and administrative documention under <strong>Who are we?</strong>';
$t['why']['why']['b3']     = 'Who are we?';

// Pourquoi - Enjeux
$t['why']['enje']['btn']   = 'Los desafíos';
$t['why']['enje']['title'] = '¿Cuáles son los desafíos ?';
$t['why']['enje']['p1']    = 'Los últimos años han visto generalizarse una<strong>concentración de los actores de Internet</strong> (Youtube pertenece a Google,
                WhatsApp a Facebook, Skype a Microsoft, etc.). Esta centralización es perjudicial, no sólo porque frena la innovación,
                sino también y sobre todo porque lleva consigo una pérdida de libertad  para los usuarios. <strong>Los usuarios de dichos servicios
                ya no controlan su vida digital</strong> : se disecan sus comportamientos de manera permanente con el
                fin de que la publicidad se centre  en ellos, y sus datos -privados sin embargo (sitios visitados, intercambios de mails, vídeos
                visionados, etc.) - pueden ser analizados por servicios gubernamentales.';
$t['why']['enje']['p2']    = 'La respuesta que desea traer Framasoft a esta problemática es sencilla : valorizar, para cada
                uno de esos servicios privadores de libertad, una alternativa Libre Ética, Descentralizada y Solidaria.';

// Pourquoi - Dangers
$t['why']['dang']['btn']   = 'Los peligros';
$t['why']['dang']['title'] = 'Los peligros';
$t['why']['dang']['intro'] = 'Los servicios en línea  siempre más centralizados de gigantes tentaculares como Google, Amazon, Facebook,
                Apple o Microsoft (GAFAM) ponen en peligro nuestras vidas digitales.';

// EPCF (Espionnum, Privatum, Centralisum, Fermetum)
$t['why']['dang']['e']     = 'Espionaje';
$t['why']['dang']['ep']    = 'Con la  coartada de suministrar una «mejor experiencia de usuario», se espían permanentemente
                nuestros comportamientos en Internet . Estas informaciones pueden servir para enseñar
                publicidad dirigida, pero las revelaciones del caso Snowden también han demostrado que los gigantes de Internet
                estaban obligados a comunicar estos datos (a veces muy privados : intercambios de emails en Gmail,
                fotos intercambiadas en Facebook, conversaciones por Skype, geolocalización de teléfonos, etc.)
                a los servicios gubernamentales.  <strong>Con el pretexto de la lucha contra el terrorismo</strong>,
                los estados son capaces de conseguir mucha más  información más de la que un «Big Brother» hubiera  soñado tener.';

$t['why']['dang']['erefs'] = 'https://my.framasoft.org/u/degooglisons/?searchtags=espionnage';

$t['why']['dang']['p']     = 'Vida privada';
$t['why']['dang']['pp']    = 'Nuestros datos son una extensión de nosotros mismos. Pueden indicar dónde estamos,
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

$t['why']['dang']['prefs'] = 'https://my.framasoft.org/u/degooglisons/?searchtags=vie-privee';

$t['why']['dang']['c']     = 'Centralización';
$t['why']['dang']['cp']    = 'Las mayores empresas actrices de Internet se han vuelto unos verdaderos calamares gigantes : Facebook posee WhatsApp e Instagram, Google tiene Youtube y Waze, Microsoft distribuye Skype, etc.<br/> Esta concentración de los actores plantea problemas múltiples:
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

$t['why']['dang']['crefs'] = 'https://my.framasoft.org/u/degooglisons/?searchtags=centralisation';

$t['why']['dang']['f']     = 'Código cerrado';
$t['why']['dang']['fp']    = 'Los servicios web que usted usa en su computadora o su smartphone se ejecutan normalmente en la «nube» :
                algunos servidores diseminados por el planeta , que almacenan tanto sus datos (mails, fotos, archivos, etc.) como el
                código de las aplicaciones<br>
                Para los datos, se plantea el problema de su perennidad (¿qué será en efecto de sus ficheros archivos si Dropbox cierra mañana?)
                pero también el de la capacidad de usted de cambiar de servicio (¿cómo hará para recuperar la totalidad de sus fotos en
                Facebook o Picasa, y volver a insertarlas con los comentarios dentro de otro servicio?).<br>
                En cuanto a las aplicaciones, ello implica que <strong>usted queda a merced de cambios imprevistos según los caprichos de su proveedor </strong>(incorporación de publicidad, modificación de la interfaz, etc.), pero sobre todo que no tiene casi ningún control sobre lo
                que la aplicación puede hacer. Son «cajas negras» que pueden actuar de manera maliciosa (mandar SMS a sus espaldas,
                ejecutar código indeseable, etc.).<br>
                Para terminar, estas compañías nos encierran en jaulas doradas, es cierto, ¡pero jaulas a pesar de todo!';

$t['why']['dang']['frefs'] = 'https://my.framasoft.org/u/degooglisons/?searchtags=fermeture';

// Pourquoi - Nos propositions
$t['why']['prop']['btn']   = 'Our proposals';
$t['why']['prop']['title'] = 'Our proposals';
$t['why']['prop']['intro'] = 'Framasoft wishes to face the threats to our digital lives by offering free, ethical, decentralised, and solidarity-based services.';

// LEDS (Libre, Éthique, Décentralisé, Solidaire)
$t['why']['prop']['l']     = 'Libertad';
$t['why']['prop']['lp1']   = 'La historia de Internet es en sí una historia de software libre, desde el punto de vista de los estándares así como
de los protocolos utilizados.
                    Su popularidad y su potencial crean envidiosos, y algunas grandes empresas bien quisieran controlarlos imponiendo
                    código cerrado dentro de unos sistemas bloqueados y no interoperables.';
$t['why']['prop']['lp2']   = 'Para que Internet quede fiel a sus principios fundadores que lo han conducido al éxito, debemos encontrar en él
               aplicaciones de software libre, esto es,  cuyo código fuente esté abierto, asequible y bajo licencias libres.';
$t['why']['prop']['lp3']   = 'Framasoft se compromete a no utilizar sino  programas de código fuente « libre ».';

$t['why']['prop']['e']     = 'Ético';
$t['why']['prop']['ep1']   = 'Respaldamos totalmente un Internet de intercambio y de independencia.';
$t['why']['prop']['ep2']   = 'La explotación, la vigilancia, la censura y la apropiación de los datos son valores que
                    rehusamos en provecho de la transparencia (la probidad), de la exposición clara de las condiciones
                    de uso de los servicios, y de la negación de las discriminaciones.';
$t['why']['prop']['ep3']   = 'Framasoft se compromete a no explotar los datos de los usuarios de sus servicios,
                    y a promover una web abierta y equitativa.';

$t['why']['prop']['d']     = 'Descentralización';
$t['why']['prop']['dp1']   = 'La inteligencia de Internet debe apoyarse en cada actor de la red dentro de una
                    dinámica de intercambio de  igual a igual, para impedir crear un Minitel 2.0 más.';
$t['why']['prop']['dp2']   = 'Para asegurar la igualdad de todos, ciudadanos como empresarios, no sólo se deben evitar los monopolios,
                    sino que también se debe impedirles que se apoderen de los datos personales o públicos.';
$t['why']['prop']['dp3']   = 'Explicando, mediante tutoriales, cómo multiplicar las soluciones libres que permitan un Internet
                    más equitativo, favorecemos la diseminación del código y  diversificamos los usos.';
$t['why']['prop']['dp4']   = 'Framasoft se compromete a facilitar el auto-alojamiento y la interoperabilidad, con el fin de no
                    «&nbsp;encerrar&nbsp;» a sus usuarios.';

$t['why']['prop']['s']     = 'Solidaridad';
$t['why']['prop']['sp1']   = 'Gracias a los servicios que desplegamos, promovemos un modelo económico
                    basado en la mutualización de los costes, el intercambio de los recursos, y la asequibilidad de la mayoría.';
$t['why']['prop']['sp2']   = 'También posee este modelo un carácter educativo ya que pensamos
                    que si documentamos el depliegue de servicios, un gran número de usuarios
                    quedarán a su vez en medida de compartir dichos recursos.';
$t['why']['prop']['sp3']   = 'Pensamos que no infantilizar a los usuarios y hacer que compartan la responsabilidad  del uso de los servicios
                    permitirá regular los abusos.';
$t['why']['prop']['sp4']   = 'Framasoft se compromete a promover el respeto y la autonomía de dichos usuarios (siempre que haya reciprocidad al respecto).';

// Service & Charte
$t['why']['prop']['s&c']   = 'Servicios y Carta';
$t['why']['prop']['s&cp']  = 'Pueden encontrar en línea la lista de servicios que ya proponemos (y los que se preparan) y también nuestra Carta :';
$t['why']['prop']['charte'] = 'Carta de los servicios';

// Accueil - Concrètement
$t['why']['conc']['btn']   = 'Concretamente';
$t['why']['conc']['title'] = 'Concretamente';
$t['why']['conc']['p1']    = 'El proyecto « Desgooglicemos Internet » - que no afecta sólo a Google - consiste en <strong>proponer servicios
                    alternativos frente a la mayor parte de los servicios que consideramos como  amenazadores para nuestras vidas digitales</strong>.';
$t['why']['conc']['p2']    = 'Google Docs, Skype, Dropbox, Facebook, Twitter, Google Agenda, Youtube, Doodle, Yahoo! Groups, y muchos más
                    son servicios muy prácticos, pero <strong>se han vuelto demasiado gigantes y nos han hecho dependientes</strong>.
                    Framasoft desea entrar en resistencia, y propone un plan de creación de aplicaciones alternativas en varios años.';
$t['why']['conc']['p3']    = 'Estos servicios son libres, gratuitos, abiertos a todos (dentro de los límites de nuestras capacidades técnicas y financieras),
                    como <strong><a href="http://fr.wikipedia.org/wiki/Biens_communs" title="Bienes comunes">bienes comunes</a> digitales</strong>.
                    Y siempre con la preocupación de la descentralización de Internet y de promover auto-alojamiento, nos esforzaremos por que cada
                    uno pueda instalar sus propios servicios (para si, para su asociación, su empresa).';
$t['why']['conc']['p4']    = 'Claro, no pretendemos  en ningún modo<em>competir</em> con esos grandes servicios, sólo queremos proponer un espacio digital neutral, no-comercial y desprovisto de agresividad con sus usuarios.';
$t['why']['conc']['p5']    = 'Acceder a la lista de los servicios que proponemos ya (y de los que preparamos) :';
$t['why']['conc']['stitle'] = 'Contribuir';
$t['why']['conc']['sp1']   = 'Un proyecto de tal alcance no puede realizarse sin <strong>su ayuda</strong>.';
$t['why']['conc']['sp2']   = 'Si es programador, diseñador gráfico, ergónomo, administrador de sistema, etc, puede ponerse
                en contacto con nosotros para participar activamente en el proyecto.';
$t['why']['conc']['cbtn']  = 'Contactar con Framasoft';
$t['why']['conc']['sp3']     = 'Pero el medio más simple y rápido de ayudarnos es apoyándonos financieramente: nos permitirá
                costear la infraestructua (servidores), y pagar a los empleados dedicados al éxito de este ambicioso proyecto.
                Framasoft es una asociación de interés general: una donación de 100€, aplicando la exención fiscal, le costará  en realidad 34€.';
$t['why']['conc']['sbtn']  = 'Donar<br />a Framasoft';

/* Bloc Nous contacter */
$t['why']['conc']['ctitle'] = 'Contact us';
$t['why']['conc']['sp1']   = 'We are a small-scale non-profit
                                           (under 40 members, under 10 employees)
                                           that has to deal with many different types of requests:
                </p><ul>
                    <li>taking part in various events;</li>
                    <li>answering the press and media ;</li>
                    <li>providing assistance with our services ;</li>
                    <li>sharing technical experience ;</li>
                    <li>providing all types of explanation…</li>
                </ul><p>';
$t['why']['conc']['sp2']   = 'In order to answer you in the most human, personal fashion, we have designed a single page that enables us to find the most suitable person for your particular query as quickly as possible. We promise we\'ll do our best, but there are only 24 hours to a day ;).';
$t['why']['conc']['cbtn']  = 'Contact Framasoft';

/* Bloc Nous soutenir */
$t['why']['conc']['stitle'] = 'Support us';
$t['why']['conc']['sp3']     = 'Like all our actions, our services are not free of charge:
                they are financed by donations from people who support us through a
                one off or regular donation. 
                About 90% of Framasoft\'s revenues 
                comes from the donation economy and is used to finance:
                </p><ul>
                    <li>our permanent staff\'s salaries;</li>
                    <li>servers and technical expenses;</li>
                    <li>travel, flyers and communications;</li>
                    <li>our participation in the world of free software/libre culture, etc.</li>
                </ul><p>
                Framasoft being an association of general interest,
                a donation of 100€ in France will cost you 34€ after tax exemption.
                We have set up a unique site to support us,
                consult our reports (validated by an auditor),
                and learn more about the donations received.';
$t['why']['conc']['sbtn']  = 'Support Framasoft';

$t['why']['who']['btn']   = 'Who are we ?';

// Liste des services
$t['list']['title']     = 'Lista de servicios';
$t['list']['link']      = $l['current'].'lista';
$t['list']['desc']      = 'Lista de servicios en línea lbres, éticos, descentralizados y solidarios que Framasoft propone (también los que se preparan) para desgooglizar Internet';
$t['list']['css']       = '
    <link href="'.$l['current'].'css/list.css" rel="stylesheet" type="text/css" />';
$t['list']['js']        = '
    <script src="'.$l['current'].'js/list.js" type="text/javascript"></script>';

// Liste des alternatives
$t['alt']['title']       = 'List of alternatives';
$t['alt']['link']        = $l['current'].'alternatives';
$t['alt']['desc']        = 'List of free, ethical, decentralized, and solidarity-based online alternatives recommended by Framasoft to de-google-ify Internet';
$t['alt']['css']         = '
    <link href="'.$l['current'].'css/list.css" rel="stylesheet" type="text/css" />';
$t['alt']['js']          = '
    <script src="'.$l['current'].'js/list.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/jquery.maphilight.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/imageMapResizer.min.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/map.js" type="text/javascript"></script>';
$t['alt']['alt1']        = 'You use';
$t['alt']['alt2']        = ' recommends';
$t['alt']['alt3']        = 'based on ';
$t['alt']['altp1']       = $t['meta']['F'].' aims to <a href="'.$l['DIoL'].'">offer around thirty free alternative services</a>
                            to provide a substitute for those services which, once they get hold of us, proceed to feed upon our data.<br>
                            But there are many other players working to de-google-ify Internet and many other such services.';
$t['alt']['altp2']       = 'You will find <a href="#tips" rel="nofollow">below</a>, a list summarizing and supplementing the alternatives already presented <a href="'.$l['DIo'].'">on the home page</a>.
                            It is inspired by <a href="https://prism-break.org/en/">Prism-Break</a> which promotes other software in more specialized areas.';
$t['alt']['altp3']       = 'In the list, each service generally includes a <b>complex website</b> <span aria-hidden="true">(<i class="fa fa-fw fa-cloud"></i>)</span>
                            communicating with <b>software installed on a computer</b> <span aria-hidden="true">(<i class="fa fa-fw fa-server"></i>)</span> which stores personal data
                            and which can be accessed through various <b>home-based tools</b> <span aria-hidden="true">(<i class="fa fa-fw fa-home"></i>)</span>.';
$t['alt']['altp4']       = 'So when we use Internet, we must necessarily <b>trust several links in the chain</b>
                            joining us to our personal data online.
                            Unless we self-host, <b>the <i lang="en">cloud</i> is always someone else\'s computer</b>.
                            It is therefore important to know who we are being asked to trust and what their software is doing with our data.';

// Espace médias
$t['medias']['title']   = 'Espacio medios de difusión';
$t['medias']['link']    = $l['current'].'medios de difusión';
$t['medias']['subtitle']    = 'History of the De-google-ify Internet campaign';
$t['medias']['intro']    = 'Dégooglisons Internet est une campagne qui a duré trois ans (oct. 2014 - oct. 2017), mais qui s’inscrit dans un cheminement plus général de Framasoft. <br/>Parcourez de la molette la fresque ci-dessous pour en découvrir les dates-clés (plein écran <a href="https://degooglisons-internet.org/fresque">disponible ici</a>).';
$t['medias']['desc']    = '';
$t['medias']['js']      = '';
$t['medias']['tabstitle']   = 'Imágenes de la campaña Desgooglicemos';
$t['medias']['tabsintro']   = 'A menos que se indique lo contrario, todas nuestras imágenes, las realiza <a href="http://ptilouk.net">Simon « Gee » Giraudot</a> y se pueden volver a utilizar bajo la licencia <a href="http://creativecommons.org/licenses/by-sa/4.0/deed.fr"><span lang="en">Creative Commons By</span>-<abbr>SA</abbr> 4.0</a>.</em> Estas imágenes son de formato grande (a pesar de las apariencias).
Sin embargo, si usted necesita una resolución más alta, no dude en contactar con nosotros.';
$t['medias']['tabssaveas']  = 'Haga un clic  derecho« Guardar la imagen como » para utilizarla de nuevo';

$t['medias']['t1']          = 'Cartes';
$t['medias']['t1i1txt']     = 'Mapa « Antes »';
$t['medias']['t1i1url']     = 'img/Carte2016-romains-en.png';
$t['medias']['t1i1desc']    = 'Mapa de Francia invadida por los servicios GAFAM (oct 2014)';
$t['medias']['t1i2txt']     = 'Mapa « Despues »';
$t['medias']['t1i2url']     = 'img/Carte2015-victoires-en.png';
$t['medias']['t1i2desc']    = 'Mapa de Francia con las alternativas Framasoft (oct 2015)';
$t['medias']['t1i3txt']     = 'Mapa animado';
$t['medias']['t1i3url']     = 'img/Carte2016-animation-en.gif';
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
$t['medias']['t5i6txt']     = '<b class="violet">De-google-ify</b> <b class="orange">Internet</b>';
$t['medias']['t5i6url']     = 'img/anim_dio'; // .mp4 et .webm

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

$t['medias']['t6']          = 'Presentación';
$t['medias']['t6url']       = 'presentation/';

$t['medias']['t7']          = 'Stickers';
$t['medias']['t7i1txt']     = 'GAFAM';
$t['medias']['t7i1url']     = 'img/stickerDiO_gafam.png';
$t['medias']['t7i1desc']    = 'GAFAM, we &lt;3 your data!';
$t['medias']['t7i2txt']     = 'Google';
$t['medias']['t7i2url']     = 'img/stickerDiO_google.png';
$t['medias']['t7i2desc']    = 'Warning: do not feed the Google.';
$t['medias']['t7i3txt']     = 'Amazon';
$t['medias']['t7i3url']     = 'img/stickerDiO_amazon.png';
$t['medias']['t7i3desc']    = '<i lang="fr">Attention : Amazon très méchant</i>';
$t['medias']['t7i4txt']     = 'Facebook';
$t['medias']['t7i4url']     = 'img/stickerDiO_facebook.png';
$t['medias']['t7i4desc']    = 'Facebook is watching you.';
$t['medias']['t7i5txt']     = 'Apple';
$t['medias']['t7i5url']     = 'img/stickerDiO_apple.png';
$t['medias']['t7i5desc']    = 'Apple: Kids, don\'t do drugs.';
$t['medias']['t7i6txt']     = 'Microsoft';
$t['medias']['t7i6url']     = 'img/stickerDiO_microsoft.png';
$t['medias']['t7i6desc']    = 'Microsoft: do you need a backdoor?';

$t['medias']['t8']          = 'Drawings Péhä';
$t['medias']['t8intro']     = 'Crédits dessins&nbsp;: <a href="https://lesptitsdessinsdepeha.wordpress.com/">Péhä</a>, librement réutilisables sous la licence <a href="http://creativecommons.org/licenses/by/3.0/deed.fr"><span lang="en">Creative Commons By</span> 3.0</a>.';
$t['medias']['t8i1txt']     = 'Dessin « Fichiers »';
$t['medias']['t8i1url']     = 'img/Peha-Framadrop-CC-BY.png';
$t['medias']['t8i2txt']     = 'Dessin « Projet »';
$t['medias']['t8i2url']     = 'img/Peha-Framagit-CC-BY.png';
$t['medias']['t8i3txt']     = 'Dessin « Réseaux Sociaux »';
$t['medias']['t8i3url']     = 'img/Peha-Framapiaf-Framasphere-CC-BY.png';
$t['medias']['t8i4txt']     = 'Dessin « Visio-conf »';
$t['medias']['t8i4url']     = 'img/Peha-Framatalk-CC-BY-SA.png';
$t['medias']['t8i5txt']     = 'Dessin « Dégooglisons »';
$t['medias']['t8i5url']     = 'img/Peha-Banquet-Degooglisons-CC-By.png';

$t['medias']['presstitle']  = 'Revista de prensa';
$t['medias']['pressintro']  = 'La campaña « Desgooglicemos Internet » ya ha dado que hablar a lo largo del primer año de su creación .
Aquí tenemos unos extractos de nuestra <a href="https://wiki.framasoft.org/speakabout">revista de prensa</a>.';
$t['medias']['pressth1']    = 'fecha';
$t['medias']['pressth2']    = 'Medio';
$t['medias']['pressth3']    = 'Enlaces';
$t['medias']['presslist']   = [
    ['30/07/2017', 'Usbek & Rica [FR]',
    'https://usbeketrica.com/article/framasoft-une-amap-du-logiciel-libre',
    'Enlace con el artículo'],
    ['04/02/2017', 'Mashable/France 24 [FR]',
    'http://mashable.france24.com/tech-business/20170204-chatons-collectif-hebergeurs-framasoft',
    'Enlace con el artículo'],
    ['24/08/2016', 'Opensource.com [EN]',
    'https://opensource.com/business/16/8/open-source-alternatives-office-365',
    'Enlace con el artículo'],
    ['27/02/2016', 'France 24 / Mashable [FR]',
    'http://mashable.france24.com/tech-business/20160226-google-internet-framasoft',
    'Enlace con el artículo'],
    ['17/03/2016', 'La Tribune [FR]',
    'http://www.latribune.fr/technos-medias/internet/les-chatons-toutes-griffes-dehors-face-aux-geants-du-net-557084.html',
    'Enlace con el artículo'],
    ['12/10/2015', 'France Info [FR]',
    'http://media.radiofrance-podcast.net/podcast09/18998-12.10.2015-ITEMA_20815840-0.mp3',
    'Enlace con el podcast'],
    ['08/10/2015', 'Korben.info [FR]',
    'http://korben.info/framasoft-degooglise-encore-plus-fort.html',
    'Enlace con el artículo'],
    ['06/10/2015', 'Next Inpact [FR]',
    'http://www.nextinpact.com/news/96764-degooglisons-internet-saison-2-framasoft-lance-produit-par-jour-cette-semaine.htm',
    'Enlace con el artículo'],
    ['17/08/2015', 'France Culture (Du grain à moudre) [FR]',
    'http://media.radiofrance-podcast.net/podcast09/10175-17.08.2015-ITEMA_20783026-0.mp3',
    'Enlace con el podcast'],
    ['24/05/2015', 'Le Soir (Belgique) [FR]',
    'http://www.lesoir.be/886985/article/economie/vie-du-net/2015-05-23/google-vivre-sans-c-est-parfois-possible',
    'Enlace con el artículo (suscriptores)'],
    ['03/02/2015', 'L’Humanité[FR]',
    'http://www.humanite.fr/logiciel-libre-et-ess-une-economie-lintention-de-tous-564379',
    'Enlace con el artículo'],
    ['02/11/2014', 'Libération [FR]',
    'http://www.liberation.fr/ecrans/2014/11/02/avec-framasoft-l-appli-fait-de-la-resistance_1134654',
    'Enlace con el artículo'],
    ['01/11/2014', 'France Inter (Comme un buit qui court) [FR]',
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

// Texte générique
$t['_Close']            = 'Cerrar';
$t['_More']             = 'Más información';
$t['_Support']          = 'Ayudar';
$t['_Use']              = 'Utilizar';
$t['_Docs']             = 'Documentation';
$t['_Framacloud']       = 'Framacloud';
$t['_CHATONS']          = 'CHATONS';
$t['_Install']          = 'Instalar';
$t['_Project updated']  = 'Proyecto puesto al día';
$t['_Project loading']  = 'Proyecto en curso';
$t['_Project running']  = 'Proyecto activo';
$t['_ is an instance based on '] = ' es una instancia basada en software libre ';
$t['_Read more']        = 'Saber más';
$t['_Some examples ?']  = '¿Unos ejemplos?';
$t['_Back to top']      = 'Volver al comienzo de página';
$t['_Editor: ']         = 'Éditor : ';
$t['_Equivalent(s): ']          = 'Equivalencia(s) : ';
$t['_Alternative(s) online: ']  = 'Alternativa(s) en línea';
$t['_Alternative(s) offline: '] = 'Alternativa(s) que instalar';
$t['_Framasoft service: ']      = 'Servicio Framasoft : ';
$t['_Nous proposons le service']   = 'Service we already provide';
$t['_Nous proposerons le service'] = 'We will provide ';
$t['_release planned on ']      = 'publicación en  ';
$t['_Autres alternatives libres']  = 'Other Free alternatives';
$t['_Select the language']      = 'Escoger la lengua';
$t['_Change the language']      = 'Cambiar de lengua';
$t['_OK']                       = 'OK';
$t['_since']                    = 'desde';
$t['_GAFAM']                    = 'GAFAM';
$t['_GAFAM Logos']                 = $e['google']['fa'].$e['apple']['fa'].$e['facebook']['fa'].$e['amazon']['fa'].$e['microsoft']['fa'];
$t['_GAFAM Title']                 = $e['google']['name'].', '.$e['apple']['name'].', '.$e['facebook']['name'].', '.$e['amazon']['name'].', '.$e['microsoft']['name'];
$t['_& co']                     = '& cie';
$t['_Software']                 = 'Software';
$t['_LEDS']                     = 'LEDS';
$t['_Libre, Éthique, Décentralisé et Solidaire'] = 'Libre, Ético, Descentralizado y Solidario';
$t['_ with your help']          = 'con su ayuda';
$t['_ with your help']          = ' with your help';
$t['_Chercher une alternative à un service propriétaire'] = 'Find an alternative to a proprietary service';
$t['_Search by tags']              = 'Search by keyword';
$t['_Results']                     = 'Results';
$t['_All services']                = 'All services';
$t['_Retour à la carte']           = 'Return to the map';
$t['_Comme alternative aux services des '] = 'As an alternative to the services of ';
$t['_, tels :']                      = ', such as:';

/****************
 * Services web *
 ****************

$k = 'id';                                                              // for the card: id="a-avaaz" (area), id="o-avaaz" (option), id="t-avaaz" (text) and for the list: to associate modals with each post-it

---- Facultatif : déjà dans data.php -----------------------------------
$d[$k]['FL']      = '';                                                 // link for the button « User » + $d[$k]['F']
$d[$k]['CL']      = '';                                                 // link for the button « Install » (Framacloud)
$d[$k]['S']       = '<a href="*">*</a>';                                // link and name of software that Frama uses
$d[$k]['F']       = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">*</b></a>';
$d[$k]['name']    = '';                                                 // Name of the proprietary service on the card
$d[$k]['eq']      = '';                                                 // Equivalents
$d[$k]['altOn']   = '';                                                 // Alternatives online
$d[$k]['altOff']  = '';                                                 // Alternatives offline/to be installed on a server (must have at least $d[$k]['S'])
$d[$k]['pos']     = '';                                                 // Coordinates on the card: 'x, y, R'
$d[$k]['FDate']   = '201*';                                             // date or article of Framablog (contains the date in the url)

---- À remplir ici : data.xx.php ---------------------------------------
$d[$k]['sDesc']   = '';                                                 // Short description (title on card and post-it)
$d[$k]['lDesc']   = '';                                                 // Long description (on the back of the post-it)
$d[$k]['tDesc']   = '';                                                 // Description tweet (140 car. sur list.php)
$d[$k]['hDesc']   = '';                                                 // Description très longue (framanav, framasoft.org et list.php)


$d[$k]['mTitle']  = '';                                                 // Modal ↓
$d[$k]['mBody']   = '<p>
                        '.$d[$k]['F'].' allows you to…
                    </p>
                    <p>
                        <b class="violet">Operation :</b> …
                    </p>';

---- Facultatif : déjà dans list.php (l.23-26)--------------------------
$d[$k]['mFooter'] = '<p class="precisions">'.$d[$k]['F'].' is an instance based on the free software '.$d[$k]['S'].'</p>';

*/

// Bit.ly
$k= 'bitly';
$d[$k]['sDesc']  = 'Redución de URL';
$d[$k]['lDesc']  = 'Las direcciones más cortas muy discretamente';

$d[$k]['tDesc']  = 'Shorten and/or customize a web address (URL) in two clicks, and without tracking anyone (alternative to Bit.ly or Goo.gl).';
$d[$k]['hDesc']  = 'With Frama.link, too long links can be shortened. On social networks and microblogging, a shortened link saves space and improves clarity.';

$d[$k]['mTitle'] = 'Ya se acabaron las direcciones  demasiado largas';
$d[$k]['mBody']  = '<p>
                        Con '.$d[$k]['F'].' o <a href="https://huit.re">Huit.re</a>, es posible acortar las direcciones web demasiado largas pero sin rastrear su uso.
                        En las redes sociales y el microblogueo, disponer de una dirección acortada  permite ahorrar espacio y favorece la claridad.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> teclee la versión original de la dirección y Frama.link la acortará.
                    </p>';
$d[$k]['tags']   = 'share, links';


// Blogger
$k= 'blogger';
$d[$k]['sDesc']  = 'Alojamiento de sitios';
$d[$k]['lDesc']  = '';

$d[$k]['tDesc']  = 'Create a blog, a webpage or a website which respects your visitors and your publications (an alternative to Blogger or Tumblr).';
$d[$k]['hDesc']  = '';

$d[$k]['mTitle'] = 'Your own website in a few clicks';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' allows you to create a website easily with free software tools and to host it on our servers. Zero publicity, zero trackers will prejudice the data of your visitors.
                    </p>
                    <p>
                        <b class="violet">How does it work?:</b> Choose your sub-domaine, the type of site that you want to create (web page, blog) then let the service guide you.
                    </p>';
$d[$k]['tags']   = 'site, homepage, web, html';

// Bubbl.us
$k= 'bubblus';
$d[$k]['sDesc']  = 'Mapas heurísticos';
$d[$k]['lDesc']  = 'Fabrique sus mapas mentales';

$d[$k]['tDesc']  = 'Design, publish and share mind maps easily, on your own or with others in turn (alternative to Bubbl.us).';
$d[$k]['hDesc']  = 'Interface fluide et intuitive pour créer rapidement et
                    simplement des cartes heuristiques à même votre navigateur.
                    Pertinent en situation de brainstorming ou de prise de notes.';

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
$d[$k]['tags']   = 'produce, mindmap, brainstorming';

// Change.org
$k= 'change';
$d[$k]['sDesc']  = 'Peticiones';
$d[$k]['lDesc']  = 'Lance sus peticiones sin ofrecer las direcciones de sus apoyos';

$d[$k]['tDesc']  = 'Launch your petitions from an ethical platform, which doesn\'t exploit your supporter\'s data (alternative to Avaaz, Change.org).';
$d[$k]['hDesc']  = '';

$d[$k]['mTitle'] = 'Libere sus peticiones';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].'le permite lanzar peticiones sobre asuntos que le preocupan. Con pocos clics, su petición ya está publicada
y las direcciones de sus apoyos, no las podrá utilizar  ninguna empresa de publicidad.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> Inscríbase, lance una nueva petición siguiendo las instrucciones. Su sondeo quedará creado.Sus apoyos no necesitarán inscribirse para poder participar.
                    </p>';
$d[$k]['tags']   = 'petition, broadcast';

// Del.icio.us
$k= 'delicious';
$d[$k]['sDesc']  = 'Bookmark';
$d[$k]['lDesc']  = 'Easily find your links and your Framasoft services';

$d[$k]['tDesc']  = 'sort and preserve your web link (including links to Frama-services) in a web folder (alternative to Del.icio.us/Diigo).';
$d[$k]['hDesc']  = 'MyFrama is a digital catch-all, allowing you to store and
                     retrieve all your beloved links, like diigo or del.ico.us ! 
                    with a tag system and automatic sorting , you can easily 
                    store your tabs and bookmarks, using the MyFrama button to 
                    access directly the Frama services you are currently using !';

$d[$k]['mTitle'] = ' Sort all the Web if you want (it might take a while)';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' is a digital catch-all, allowing you to keep and
                     retrieve all your beloved links, like diigo or del.ico.us ! 
                    With its tag system and automatic sorting, you can easily 
                    store your tabs and bookmarks, using the MyFrama button to 
                    access directly the Frama services you are currently using!
                    </p>
                    <p>
                      <b class="violet">Working method :</b> Create your 
                      account, add the Bookmarklet to your browser\'s bookmark bar.
                      Use it to store an  (<abbr>URL</abbr>) link, adding its title, 
                      description and tag.
                     Use the MyFrama button on our site store a link to the services: 
                     it\'s all automatically sorted !
                      Consider creating your own sorting rule to add your chosen 
                      tag to your web links!
                    </p>';
$d[$k]['tags']   = 'share, store, links';

// Doodle
$k= 'doodle';
$d[$k]['sDesc']  = 'Reuniones y sondeos';
$d[$k]['lDesc']  = 'Acordar la celebración de una reunión y crear un sondeo';

$d[$k]['tDesc']  = 'Collaboratively decide the best date and time for a meeting, or create a simple poll with ease (alternative to Doodle).';
$d[$k]['hDesc']  = 'Framadate is a bit like Doodle but libre software.
                    It couldn\'t be easier to invite your collaborators to organize
                    a meeting or create a poll with no need to register.';

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
$d[$k]['tags']   = 'organize, meeting, date, poll';

// Dropbox
$k= 'dropbox';
$d[$k]['sDesc']  = 'Almacenamiento de documentos';
$d[$k]['lDesc']  = 'Alojar los propios documentos en línea';

$d[$k]['tDesc']  = 'Obtain an online storage space for hosting, synchronizing (or sharing) your files (alternative to Dropbox, Google Drive).';
$d[$k]['hDesc']  = 'Framadrive allows you to store your documents on line,
                    to synchronize them across your computers, mobile devices, etc…
                    and to share them with whoever you want.';

$d[$k]['mTitle'] = 'Alojar los propios documentos en línea';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' le permite almacenar en línea de manera encriptada sus documentos, sincronizarlos en sus ordenadores, tabletas, teléfonos, etc y compartirlos son quien quiera…
                    </p>';
$d[$k]['tags']   = 'store, save, files, share, agenda, calender, contacts, tasks';

// Evernote
$k= 'evernote';
$d[$k]['sDesc']  = 'Toma de notas';
$d[$k]['lDesc']  = 'Your notes, pictures and favorite links within reach!';

$d[$k]['tDesc']  = 'Synchronize your notes, pictures and favorite links between devices with all the security of encryption (an alternative to Evernote).';
$d[$k]['hDesc']  = 'With Framanotes you can take and conserve notes,
                    pictures, links… and even files; and synchronize them
                    with all your devices (or share them with friends).';

$d[$k]['mTitle'] = 'Your notes concern you alone.';
$d[$k]['mBody']  = '<p>
                        With '.$d[$k]['F'].' you can take and conserve notes, pictures, links… and even files; and synchronise them with all your devices (or share them with friends).
                    </p>
                    <p class="violet">Functionality:</p>
                    <ul>
                        <li>synchronised note taking</li>
                        <li>facilitated formating (Markdown syntax)</li>
                        <li>hosting (small) pictures and files</li>
                        <li>possibility to share a "Table of notes" with other users</li>
                    </ul>';
$d[$k]['tags']   = 'note, share, encryption';

// Facebook
$k= 'facebook';
$d[$k]['sDesc']  = 'Red social';
$d[$k]['lDesc']  = 'Una red social ética y descentralizada';

$d[$k]['tDesc']  = 'Share on an ethical and decentralized social network, without your profile being exploited for the benefit of advertisers (alternative to Facebook).';
$d[$k]['hDesc']  = 'Framasphère is a free social network, based on the
                    décentralized Diaspora* software.
                    Find your friends on Framasphère - or another Diaspora* pod -
                    without your exchanges being tracked.';

$d[$k]['mTitle'] = 'Júntese con sus amigos en zona libre';
$d[$k]['mBody']  = '<p>
                        Sur '.$d[$k]['F'].', puede encontrar una red social que respeta sus datos. Framasphère es un nodo (llamado <i>pod</i>)
                        de la red social libre Diaspora*.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> intercambie mensajes y fotos con cualquier otra persona de la red Diaspora*,
                        gestione sus contactos, tags, menciones, vuelva a compartir algo ya compartido… También puede publicar en otras redes sociales (Facebook, Twitter, Tumblr o Wordpress).
                    </p>';
$d[$k]['tags']   = 'social, network, sharing';

// Github
$k= 'github';
$d[$k]['sDesc']  = 'Alojamiento de código';
$d[$k]['lDesc']  = 'El código abierto es cosa buena. ¡ En una plataforma libre, es mejor !';

$d[$k]['tDesc']  = 'Publish your code - preferably free software - and collaborate with others on a free software forge (alternative to Github).';
$d[$k]['hDesc']  = 'Framagit is a tool mostly for developers.
                    It helps you host your free software projects and collaborate with others.';

$d[$k]['mTitle'] = 'Alojamiento de código abierto';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' es una herramienta que se dirige ante todo a los programadores. Permite la creación de 42 repositorios al máximo por cuenta, (si necesita más, piense seriamente en auto-alojarse). Y, algo mejor que en GitHub, también puede crear repositorios privados.</p>
                    </p>
                    <p>También es posible crear  « espejos  » automáticos de sus repositorios en GitHub : continúa a « llenarle la panza a la bestia », pero ya queda menos dependiente, y sigue visible por los casi 10 millones de inscritos en GitHub. Su repositorio en nuestro Framagit queda automáticamente replicado en su repositorio Github. De hecho, es la solución adoptada por Framasoft, que sigue disponiendo de una cuenta  GitHub, mientras que nuestros desarrollos de software se realizan en nuestra forja.</p>';

// Gmail
$k= 'gmail';
$d[$k]['sDesc']  = 'Servicio de correo electrónico';
$d[$k]['lDesc']  = 'Sus mensajes , sin la NSA dentro';


$d[$k]['tDesc']  = '';
$d[$k]['hDesc']  = '';

$d[$k]['mTitle'] = 'Su correo, dentro de un sobre blindado';
$d[$k]['mBody']  = '';

// Google Agenda
$k= 'gagenda';
$d[$k]['sDesc']  = 'Calendario compartido';
$d[$k]['lDesc']  = 'You choose who sees your timetable';

$d[$k]['tDesc']  = 'Create personal or professional, confidential or public, agendas, on your own or in collaboration, and synchronise them across devicess.';
$d[$k]['hDesc']  = 'With Framagenda you can create personal or professional 
                    agendas, the timetable for a room or the activities
                    of your organisation, and share them freely.
                    You stay incharge of your data, and you choose
                    with whom, where and when they are shown.';

$d[$k]['mTitle'] = 'You own your appointments';
$d[$k]['mBody']  = '<p>
                        With '.$d[$k]['F'].' you can create personal or professional agendas, the timetable for a room or the activities of your organisation, and share them freely. You stay incharge of your data, and you choose with whom, where and when they are shown.
                    </p>
                    <p class="violet">Functionality :</p>
                    <ul>
                        <li>creation of multiple agendas</li>
                        <li>lists of contacts and of tasks</li>
                        <li>synchronisation across devices</li>
                        <li>share agendas</li>
                        <li>invite (by email) participants to appointments</li>
                        <li>possibility to publicly show agendas</li>
                    </ul>';
$d[$k]['tags']   = 'date, organise, share, agenda, calender, contacts, tasks';

// Google Books
$k= 'gbooks';
$d[$k]['sDesc']  = 'Libros en línea';
$d[$k]['lDesc']  = 'Una biblioteca de varios millones de obras';

$d[$k]['tDesc']  = 'Consult an online library of digital books under a libre licence and download them freely (alternative to Google Books).';
$d[$k]['hDesc']  = 'Our library contains hundreds of works which are
                    under libre licences or in the public domain. You can
                    consult it online via mobile platforms. You can add it
                    directly to an ebook reading application thanks to the
                    flux <abbr>OPDS</abbr>.';

$d[$k]['mTitle'] = 'Catálogo de obras accesibles a todos';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' es el catálogo <abbr>OPDS</abbr> de Framasoft. « Pues… sí, pero ¿ algo más ? », nos dirá usted. Un catálogo <abbr>OPDS</abbr> es un sitio al que puede suscribirse con un programa que soporte esa funcionalidad (algunas pantallas electrónicas llevan consigo uno a bordo, para Android, existe Aldiko y otros más), dándole acceso rápida y sencillamente a una entera biblioteca a partir de su ordenador, smartphone o tableta.
                    </p>
                    <p>El catálogo <abbr>OPDS</abbr> de Framasoft le da acceso a cientos de obras no protegidas por  « copyright ».</p>';

// Google Docs
$k= 'gdocs';
$d[$k]['sDesc']  = 'Redacción colaborativa';
$d[$k]['lDesc']  = '¡ El procesador de texto en línea y en colaboración  !';

$d[$k]['tDesc']  = 'Draft a text online, as a team, in real time, with the help of a timeslider, chat, comments… (alternative to Google Docs).';
$d[$k]['hDesc']  = 'Let\'s write together in the same document in an
                    interface for collective online drafting.
                    No registration required, give yourself a nickname
                    and a color and you\'re off!';

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
$d[$k]['tags']   = 'document, text, collaborate';

// Google Form
$k= 'gforms';
$d[$k]['sDesc']  = 'Cuestionarios en línea';
$d[$k]['lDesc']  = 'Cree cuestionarios fácilmente ';

$d[$k]['tDesc']  = 'Create an online survey, be it simple or complex, on a plateform that\'s respectful of your data (alternative to Google Forms).';
$d[$k]['hDesc']  = 'Framaforms allows you to design questionnaires and surveys to
                    meet your own specific needs, be it for school,
                    amily, an association, or work. Set up questions adapted
                    to your own specific context, with multiple choice questions
                    or free text fields.';

$d[$k]['mTitle'] = 'Creación de cuestionarios';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' le permite crear los cuestionarios que necesita, tanto en el ámbito escolar como familiar o asociativo. Cree sus
preguntas en función de sus necesidades, desde los formularios de selección múltiple hasta los campos de texto libre.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona</b> : cree una cuenta en Framaforms y comience la creación de los cuestionarios en función de sus necesidades. Las personas sondeadas no necesitan cuenta para poder contestar. Y usted dispone así de una síntesis de las respuestas.
                    </p>';
$d[$k]['tags']   = 'forms, survey, groups';

// Google Groupes
$k= 'ggroups';
$d[$k]['sDesc']  = 'Listas de correo';
$d[$k]['lDesc']  = 'Create an email discussion group';

$d[$k]['tDesc']  = 'Create an email group, that\'s an unique email address which will distribute emails to all of the addresses in the group (alternative to Google Groups).';
$d[$k]['hDesc']  = 'Framalistes allows you to create an email group:
                    any person subscribed to your group can
                    receive the emails sent to the group and can in turn
                    participate. It is down to you to choose whether your group
                    is public, semi-private or private.';

$d[$k]['mTitle'] = 'Exchange without being read by Big Brother';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' allows you to create an email group: any person subscribed to your group can   receive the emails sent to the group and can in turn participate. It is down to you to choose whether your group  is public, semi-private or private..
                    </p>
                    <p>
                        <b class="violet">Functionality</b>: create an account on the Framalistes site to make, configure and manage your email group, or simply to find groups which interest you and manage your subscriptions.
                    </p>';
$d[$k]['tags']   = 'groups, discussion, broadcast, list';

// Google Maps
$k= 'gmaps';
$d[$k]['sDesc']  = 'Cartografía';
$d[$k]['lDesc']  = 'Cree sus mapas personalizados en línea';

$d[$k]['tDesc']  = 'Customize and add to maps, on your own or in collaboration, and share them with ease (alternative to Google Maps).';
$d[$k]['hDesc']  = 'Framacarte allows you to add to, customize, color, 
                    annotate… the maps of
                    <a href="https://fr.wikipedia.org/wiki/Openstreetmap">OpenStreetMap</a>
                    and then display them on your own websiteor print them.';

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
$d[$k]['tags']   = 'cartography, maps';

// Google Reader
$k= 'greader';
$d[$k]['sDesc']  = 'Lector de noticias';
$d[$k]['lDesc']  = 'Siga la actualidad y escoja libremente';

$d[$k]['tDesc']  = 'Gather news feeds (RSS, Atom) from blogs, vidso channels, etc. in a single viewing place (alternative to Google Reader).';
$d[$k]['hDesc']  = 'If you want to subscribe to the RSS feeds of your favorite sites,
                    stay informed of all their news with Framanews !';

$d[$k]['mTitle'] = 'Esté siempre al corriente, sin retraso ';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' ¡ le propone un lector de noticias RSS en línea, que le permitirá estar siempre al tanto de la actualidad a partir de las fuentes RSS de sus sitios preferidos !
                    </p>
                    <p>
                        <b class="violet">Cómo funciona:</b> después de haber creado su cuenta, guarde sus fuentes RSS y sígalas.
                        ¿ Cómo hacer más sencillo ?
                    </p>';
$d[$k]['tags']   = 'feed, rss, news, reader, follow';

// Google Search
$k= 'gsearch';
$d[$k]['sDesc']  = 'Motor de búsqueda';
$d[$k]['lDesc']  = '¿Y si Google ya no fichara las búsquedas de uno ?';

$d[$k]['tDesc']  = 'Do your searches on an engine which will query Google, Bing, Yahoo, Wikipedia, etc. while making the requests anonymous and avoiding tracking.';
$d[$k]['hDesc']  = 'Framabee is an anonymous metasearch engine.
                    This means that your searches are sent to several search
                    engines and the results are then displayed in your web browser.
                    The advantage is that Framabee acts as an intermediary
                    between you and Google (or other search engines), so your
                    IP address, search history, location and profile
                    won’t be stored by any of them.';

$d[$k]['mTitle'] = 'Una búsqueda anónima';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' es un metabuscador de búsqueda anónimo. Significa que las búsquedas que haga usted con este metabuscador se mandan a diferentes motores antes de aparecer en su  navegador web. Lo interesante es que nuestro motor hace entonces de intermediario entre usted y Google (u otros motores). Su dirección IP no se graba entonces en los servidores de Google u otros. </p>
                        <p>Claro, debe confiar en Framasoft/Framabee si desea utilizarlo, por eso proponemos una  <a href="'.$l['Charte'].'">carta</a>.
                    </p>';
$d[$k]['tags']   = 'search, anonymous';

// Google Slides
$k= 'gslides';
$d[$k]['sDesc']  = 'Presentaciones';
$d[$k]['lDesc']  = 'Unos diaporamas de alta calidad sin pena';

$d[$k]['tDesc']  = 'Create online slideshows and presentations, with the possibility of collaborating and sharing (alternative to PowerPoint365).';
$d[$k]['hDesc']  = 'Framaslides allows you to directly create an online
                    slideshow or presentation, to access it with a
                    simple internet connection, and to share it.';

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
$d[$k]['tags']   = 'slideshow, presentation, document';

// Google Spreadsheet
$k= 'gspreadsheet';
$d[$k]['sDesc']  = 'Hoja de cálculo colaborativa';
$d[$k]['lDesc']  = '¡ Comparta sus tablas y colabore !';

$d[$k]['tDesc']  = 'Collaborate online, in real time, on spreadsheets (an alternative to Excel365, Google Spreadsheet).';
$d[$k]['hDesc']  = 'Framacalc is to spreadsheets what Framapad is to
                    wordprocessing, in other words the possibility
                    to simply and collectively edit
                    the same document online';

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
$d[$k]['tags']   = 'spreadsheet, document';

// Img.ur
$k= 'imgur';
$d[$k]['sDesc']  = 'Envío de imágenes';
$d[$k]['lDesc']  = 'Comparta sus imágenes de manera anónima';

$d[$k]['tDesc']  = 'Send images online, share single images with a single link or make a gallery of them (alternative to Img.ur).';
$d[$k]['hDesc']  = 'Framapic makes it easy to share images,
                    for example for publishing them on Twitter, Facebook,
                    or … Framasphère!';

$d[$k]['mTitle'] = 'Comparta sus imágenes fácilmente';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' le permite compartir fácilmente imágenes, por ejemplo para intercambiarlas en Twitter, Facebook, o … Framasphère !
                    </p>
                    <p>Cuidado, este servicio no es un equivalente de  flickr o instagram : no se trata de un servicio de alojamiento de fotos de usuarios
                     sino de un servicio de alojamiento de imágenes anónimas (ni siquiera nosotros tenemos acceso al contenido que viene cifrado).</p>
                    <p>
                        '.$d[$k]['FL'].' permite mandar imágenes de manera anónima. Puede decidir del momento de su supresión (desde su primera visualización , las 24 horas del día, los 7 días de la semana, los 30 días del mes, 1 año después de haberlas puesto en línea).
                    </p>';
$d[$k]['tags']   = 'share, images, gallery, encryption';

// Meetup
$k= 'meetup';
$d[$k]['sDesc']  = 'Eventos comunitarios';
$d[$k]['lDesc']  = 'Organise meetings and special interest groups';

$d[$k]['tDesc']  = '';
$d[$k]['hDesc']  = '';

$d[$k]['mTitle'] = 'Keep control over the meetings that you organize';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' allows you to propose events and meetings, and to stay in contact with the community that shares your interests!
                    </p>
                    <p>
                        <b class="violet">Functionality:</b> coming.
                    </p>';
$d[$k]['tags']   = '';

// Minecraft
$k= 'minecraft';
$d[$k]['sDesc']  = 'Educational game';
$d[$k]['lDesc']  = 'An educational game worth digging into';

$d[$k]['tDesc']  = 'Players build togetherin this open world with numerous educational applications (alternative to Minecraft).';
$d[$k]['hDesc']  = 'Framinetestest is a server of the Minetest game, a "sandbox" game
                    in which you construct and break up blocks to modify them and
                    with which you can create your own educational applications.';

$d[$k]['mTitle'] = 'Create your own educational applications';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' is a server of the Minetest game, a "sandbox" game  in which you construct and break up blocks to modify them.
                    </p>
                    <p>
                        <b class="violet">Functionality:</b> Download the client software, connect to our server and play.
                    </p>';
$d[$k]['tags']   = 'game, education';

// Padlet
$k= 'padlet';
$d[$k]['sDesc']  = 'Organización de ideas';
$d[$k]['lDesc']  = 'Draft ideas and share them with discretion';

$d[$k]['tDesc']  = 'Create a collaborative online and real time table of notes, to animate your brainstorming sessions (alternative to Padlet).';

    $d[$k]['hDesc']  = 'Framemo allows you to create a table of columns where collaborators can come and leave colored notes.

                    Like Framapad, registration is not required, and the modifications are visible and recorded in real time.';

$d[$k]['mTitle'] = 'A brainstorm of libre post-its';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' allows you to create a table of columns where collaborators can come and leave colored notes. Like <a href="https://framapad.org><b class="violet>Frama</b><b class="vert">pad</b></a>, registration is not required, and the modifications are visible and recorded in real time.
                    </p>
                    <p>
                        <b class="violet">Functionality:</b> visit the site, create a table, pick a nickname, then share the URL (web address) with your collaborators. It\'s as simple as that!
                    </p>';
$d[$k]['tags']   = 'collaborate, brainstorm';

// Pastebin
$k= 'pastebin';
$d[$k]['sDesc']  = 'Notas anónimas';
$d[$k]['lDesc']  = 'Redacte y comparta con toda discreción';

$d[$k]['tDesc']  = 'Draft texts, notes and code and share them confidentially thanks to end-to-end encryption (alternative to Pastebin).';
$d[$k]['hDesc']  = 'With Framabin, you can share information that
                    only you and your correspondant are able to decypher
                    and it couldn\'t be easier to use.';

$d[$k]['mTitle'] = 'Comunique datos cifrados';
$d[$k]['mBody']  = '<p>
                        Con '.$d[$k]['F'].' puede compartir informaciones que sólo usted y su correspondiente podrán descifrar  y todo ello de manera muy sencilla. ¡ Hasta podrá escoger la duración de la validez del acceso !
                    </p>
                    <p>
                        <b class="violet">¿ Para qué usos ?</b> Puede que necesite comunicar un o más informaciones sin querer pasar por la vía clásica del correo electrónico o del pedacito de papel escrito. Framabin le permite mandar una dirección para dar acceso a esas informaciones con toda seguridad y sencillez à ces informations en toute sécurité et simplicité. El
                        servidor almacena datos que él mismo no puede leer .
                    </p>';
$d[$k]['tags']   = 'share, note, text, encryption';

// Pocket
$k= 'pocket';
$d[$k]['sDesc']  = 'Salvaguardia de contenido';
$d[$k]['lDesc']  = 'Salvaguarde y lea más tarde';

$d[$k]['tDesc']  = 'Put on one side blog articles and the "read later" tabs and find them again easily across devices (alternative to Pocket).';
$d[$k]['hDesc']  = 'Framabag allows you to put on one side the articles
                    that you don\'t have the time to read right away.';

$d[$k]['mTitle'] = 'Salvaguarde, lea más tarde';
$d[$k]['mBody']  = '<p>
                        Avec '.$d[$k]['F'].', ya no se le perderán más los contenidos de la Web que le interesan pero que no ha leído por falta de tiempo. Con un solo clic guarde su selección y la leerá cuando quiera. La aplicación salvaguarda su selección para permitirle
                         aprovecharla cuando tenga tiempo.
                    </p>
                    <p>
                        Framabag es un <b class="violet">servicio de salvaguardia de páginas web</b>. Almacena en el servidor los contenidos que le interesan, textos e imágenes
                        incluídas. También puede compartir sus artículos y utilizar complementos para Firefox, Chrome, Android...
                     </p>';
$d[$k]['tags']   = 'bookmark';

// Scribd
$k= 'scribd';
$d[$k]['sDesc']  = 'Intercambio de PDF/ODP';
$d[$k]['lDesc']  = 'Display and share your documents';
$d[$k]['hDesc']  = '';

$d[$k]['tDesc']  = '';

$d[$k]['mTitle'] = 'Your readers have rights too';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' allows you to host PDF documents and Open Document presentations (ODP) for reading by the public. Your readership won\'t need to create an account nor have to put up with adverts or tracking, and can concentrate on the things that you publish.
                    </p>
                    <p>
                        <b class="violet">Functionality:</b> Create an account, upload your documents and use the sharing link (or the display code on your own site).
                    </p>';
$d[$k]['tags']   = '';

// Shrtct
$k= 'loomio';
$d[$k]['sDesc']  = 'Toma de decisión';
$d[$k]['lDesc']  = 'Una herramienta para gestionar mejor las tomas de decisiones colectivas';

$d[$k]['tDesc']  = 'Create a team and invite in youe collaborators in order to discuss and take group decisions with the help of diverse voting tools.';
$d[$k]['hDesc']  = 'Framavox helps you to make group-based decisions.
                    Start a discussion, share ideas, come to an agreement,
                    all within the deadline that you have set yourselves.';

$d[$k]['mTitle'] = 'Decidan juntos,';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' les ayuda a tomar decisiones comunitarias. Discutan, intercambien, pónganse de acuerdo y pasen a la acción, en los plazos que hayan determinado al principio.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> Inicie una discusión, e invite las personas interesadas a aportar su punto de vista. Desarrolle sus ideas, intercambie sea cual sea su punto de vista. Todas las opiniones pueden expresarse, intercambiarse, compartirse y madurar. Decidan juntos y redacten una propuesta final dentro de los plazos definidos.
                    </p>';

// Skype
$k= 'skype';
$d[$k]['sDesc']  = 'Videoconferencia';
$d[$k]['lDesc']  = 'Converse libremente con sus amigos';

$d[$k]['tDesc']  = 'Obtain or rejoin a videoconference chatroom (with text based webchat and screen sharing) in 3 clicks, from your web browser (alternative to Skype).';
$d[$k]['hDesc']  = 'Framatalk  allows you to chat with your friends without
                    installing software or having to register.
                    The connection from you to your friends is direct through
                    your web browser.';

$d[$k]['mTitle'] = 'Videoconferencia';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' le permite conversar libremente con sus amigos, sin instalación compleja de software. Converse simplemente, sin ningún análisis de datos relacionados con la conversación. Todo pasa entre usted y sus amigos.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> Directamente a partir de su navegador web, se pone en relación con sus amigos sin necesidad de instalar ningún programa más, sans devoir installer de logiciel supplémentaire. Una vez conectado, dé  permiso a su navegador para que utilice su micrófono y su cámara de web y aproveche plenamente la charla sin complicaciones.
                    </p>';
$d[$k]['tags']   = 'discussion, video';

// Slack
$k= 'slack';
$d[$k]['sDesc']  = 'Collaborative communication';
$d[$k]['lDesc']  = 'Talk to your team with a chat room on steroids';

$d[$k]['tDesc']  = 'Communicate with your team without going through Facebook groups (nor Slack). Picture sharing, public and private channels, indexing…';
$d[$k]['hDesc']  = 'Framateam is a libre <b>chat</b> service

    that allows you to communicate with your team, sends notifications to colleagues,

    stores conversations and allows searching them.';


$d[$k]['mTitle'] = 'Talk to your team with a chat room on steroids';
$d[$k]['mBody']  = '<p>
                        <b class="violet">Frama</b><b class="vert">team</b> is a libre <b>chat</b> service

    that allows you to communicate with your team, sends notifications to colleagues,

    stores conversations and allows searching them.

                    </p>
                    <ol>
                        <li>Create your team</li>
                        <li>Invite your members</li>
                        <li>Create your communication channels (public or private)</li>
                    </ol>';
$d[$k]['tags']   = 'discussion, groups';

// Trello
$k= 'trello';
$d[$k]['sDesc']  = 'Gestión de proyectos';
$d[$k]['lDesc']  = 'Gestor de proyectos';

$d[$k]['tDesc']  = 'Manage your group\'s projects with multiple tools: teams, task tables, schedules, reminders and emails… (alternative to Trello).';
$d[$k]['hDesc']  = 'Framaboard is a team based task and project
                    manager, incorporating the Kanban method.
                     It is designed so that you will know at a glance
                    where  to get started, no matter what task management tools
                    you generally use.';

$d[$k]['mTitle'] = 'Gestor de proyectos';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' es un gestor de tareas visual. Permite gestionar proyectos de manera colaborativa, según el método Kanban. Su sistema visual le permite a uno orientarse a primera vista esté o no esté acostumbrado a usar este tipo de herramienta.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> Inicie su proyecto y comience a gestionarlo de manera colectiva, tarea tras tarea. Asigne a cada tarea una persona, defina funciones, progresos y plazos. Esta gestión visual le permitirá ver el estado del proyecto en una ojeada.
                    </p>';
$d[$k]['tags']   = 'organiser, calendar, agenda, task, project';

// WeTransfer
$k= 'wetransfer';
$d[$k]['sDesc']  = 'Envío de archivos voluminosos';
$d[$k]['lDesc']  = 'Share your files anonymously';

$d[$k]['tDesc']  = 'Share web file with a web link, confidentialy with end to end encryption  (alternative to WeTransfer).';
$d[$k]['hDesc']  = 'With Framadrop, no more issue with attachment too big 
                    impairing you to send files by <span lang="en">email</span>.
                    This Free service allow you to easily and securily share files. ';

$d[$k]['mTitle'] = 'Share your files easily';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' provides an easy way to share files, for example, when you want to send an email attachment and the file exceeds the maximum allowed size.
                    </p>
                    <p>Note, however, that this service is not an equivalent of Dropbox or Google Drive: it is not a file hosting service (for that we have <b class="violet">Frama</b><b class="vert">drive</b>), but really an anonymous file transfer service (the content is automatically encoded before transfer, and we have no access to it).</p>
                    <p>
                        '.$d[$k]['F'].' can send files anonymously. You decide when you wish to remove them (after the first download, 24h or 7, 30, 60 days after they go online).
                    </p>';
$d[$k]['tags']   = 'partager, fichiers, chiffrement';

// Youtube
$k= 'youtube';
$d[$k]['sDesc']  = 'Alojamiento de vídeos';
$d[$k]['lDesc']  = 'Comparta sus vídeos y conserve sus derechos';

$d[$k]['tDesc']  = '';
$d[$k]['hDesc']  = 'Videos in French (or with French subtitles)
                    about Free Software and the Free movement in general.du logiciel libre en particulier et du Libre en général.
                    Interviews, conferences, documentaries, TV recordings…
                    to get informed and also inform others.';

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

$d[$k]['tDesc']  = '';
$d[$k]['hDesc']  = '';

$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Kongregate
$k= 'kongregate';
$d[$k]['sDesc']  = 'Juegos';
$d[$k]['lDesc']  = 'Una recopilación de juegos libres';

$d[$k]['tDesc']  = 'Find a selection of open and free games you can play online or on your computer (as an alternative to Kongregate).';
$d[$k]['hDesc']  = 'Framagames is a compilation of free games you can play online, on your PC or on your tablet… and that need no complementary software for the installation.';

$d[$k]['mTitle'] = 'Tómese un respiro, juegue unos instantes';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].', le propone cierta cantidad de juegos libres, disponibles tanto para  el uso en línea como fuera de línea. Tómese un respiro y aproveche uno de los juegos propuestos.
                        <small>(y <a href="https://fr.wikipedia.org/wiki/Angry_Birds#Collecte_de_donn.C3.A9es_par_la_NSA">al contrario de Angry Birds</a>, la NSA no le espiará ;) )</small>
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> Cada uno de los juegos ofrece la posibilidad del uso directo en el sitio o la descarga para un uso fuera de línea.  Escoja su juego y ¡ a jugar !.
                    </p>';
$d[$k]['mFooter']= '<p class="precisiones">Framagames es una recopilación de juegos libres. Los créditos están indicados en el sitio.</p>';

// Maestro
$k= 'maestro';
$d[$k]['sDesc']  = 'Flexible collaboration';
$d[$k]['lDesc']  = 'Orchestrate your collaborative projects';

$d[$k]['tDesc']  = 'Merge a pad, a video conference and lots of others tools in a single window with a single web link: ideal for meetings.';
$d[$k]['hDesc']  = 'Do you simultaneously need a pad for note taking,
                    an organisational spreasheet and a video conference?
                    With Framaestro, YOU get to organise the tools you need on a single web page.';

$d[$k]['mTitle'] = 'Orchestrate your collaborative projects';
$d[$k]['mBody']  = '<p>
                        Do you simultaneously need a pad for note taking, an organisational spreasheet and a video conference?
                        With '.$d[$k]['F'].', YOU get to organise the tools you need on a single web page.
                    </p>';
$d[$k]['tags']   = 'collaborate';

// Pixlr
$k= 'pixlr';
$d[$k]['sDesc']  = 'Gráfico vectorial';
$d[$k]['lDesc']  = 'Cree rápidamente imágenes en formato SVG';

$d[$k]['tDesc']  = 'Create and modify shape based images (vector graphics, in the SVG format) simply and in a few clicks. Children love it.';
$d[$k]['hDesc']  = 'For simple and quick creation and modification of beautiful
                    images online in the open SVG format. Children love it!';

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

// Transifex
$k= 'transifex';
$d[$k]['sDesc']  = 'Traducción de software';
$d[$k]['lDesc']  = 'Create a new translation project for your software';

$d[$k]['tDesc']  = '';
$d[$k]['hDesc']  = '';

$d[$k]['mTitle'] = 'Make your code multilingual!';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' offers you an easy-to-use translation interface to translate strings from your code collaboratively.
                    </p>
                    <p>
                        <b class="violet">How does it work?</b> Create a account, upload your code and moderate contributions.
                    </p>';
$d[$k]['tags']   = '';

// Twitter
$k= 'twitter';
$d[$k]['sDesc']  = 'Microblogging';
$d[$k]['lDesc']  = 'Trine en Internet';

$d[$k]['tDesc']  = 'Communicate through short messages in a public, confidential or private way with this ethical and decentralized alternative to Twitter.';
$d[$k]['hDesc']  = 'Framapiaf is a free <b>microblogging</b> service,
                    based on the decentralized software Mastodon.
                    Find your friends on Framapiaf - or other Mastodon, 
                    GNU Social, Friendica instances - and communicate with them without being tracked.';

$d[$k]['mTitle'] = 'El microblogueo libre';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' le permite seguir fuentes de microblogueo y mantener las propias fuentes de manera descentralizada utilizando el protocolo P2P.
                    </p>
                    <p>
                        <b class="violet">Cómo funciona :</b> utilice un cliente de conexión, abra una cuenta, suscríbase a una fuentes de web y tuitee a su vez.
                    </p>';

/**********************
 * Projets hors Frama *
 **********************/
// AirBnB
$k= 'airbnb';
$d[$k]['sDesc']  = 'Accommodation';

// AWeber
$k= 'aweber';
$d[$k]['sDesc']  = 'Newsletter';

// Blablacar
$k= 'blablacar';
$d[$k]['sDesc']  = 'Car sharing';

// Camptocamp
$k= 'routard';
$d[$k]['sDesc']  = 'Travel guide';

// Chrome
$k= 'gchrome';
$d[$k]['sDesc']  = 'Web browser';

// Deezer
$k= 'deezer';
$d[$k]['sDesc']  = 'Music';

// Flickr
$k= 'flickr';
$d[$k]['sDesc']  = 'Photo album';

// Google Analytics
$k= 'ganalytics';
$d[$k]['sDesc']  = 'Web statistics';

// Orange
$k= 'orange';
$d[$k]['sDesc']  = 'Internet service provider';

// Outlook
$k= 'outlook';
$d[$k]['sDesc']  = 'Email client';

// OVH
$k= 'ovh';
$d[$k]['sDesc']  = 'Web hosting & cloud';

// Patreon
$k= 'patreon';
$d[$k]['sDesc']  = 'Micropayment and crowdfunding';

// Paypal
$k= 'paypal';
$d[$k]['sDesc']  = 'Online payments';

// Universalis
$k= 'universalis';
$d[$k]['sDesc']  = 'Encyclopedia';

/**************
 * Categories *
 **************/
$c1['home']['name']    = 'At home';
$c1['web']['name']     = 'Web';
$c1['office']['name']  = 'Office';
$c1['social']['name']  = 'Social';
$c1['files']['name']   = 'File sharing';
$c1['media']['name']   = 'Media & culture';
$c1['geo']['name']     = 'Geo';
$c1['hobbies']['name'] = 'Hobbies';
$c1['site']['name']    = 'Website';
$c1['dev']['name']     = 'Development';

$c2['collab']['name']  = 'Collaborate';
$c2['prod']['name']    = 'Design useful tools';
$c2['orga']['name']    = 'Organize together';
$c2['com']['name']     = 'Communicate with others';
$c2['share']['name']   = 'Share links and files';
$c2['tools']['name']   = 'Synchronise and share';
$c2['search']['name']  = 'Improved web experience';
$c2['games']['name']   = 'Have fun with free software';
?>