<?php


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
    $d['tip'.$i]['class']   = 'objectifs';
    $d['tip'.$i]['lDesc']   = 'Pour mener à bien ces projets, nous avons besoin de votre aide !';
    $d['tip'.$i]['mTitle']  = 'Nos objectifs pour '.$i;
    $d['tip'.$i]['mFooter'] = '<a href="http://soutenir.framasoft.org" class="btn btn-soutenir"><i class="fa fa-fw fa-heart"></i> Soutenir</a>';
}

/************
 * Éditeurs *
 ************/
 
$editeurs = [
    // GAFAM…
    'google'    => ['name' => 'Google',    'wkp' => 'Google',    'fa' => '<i class="fa fa-fw fa-google"></i>'],
    'apple'     => ['name' => 'Apple',     'wkp' => 'Apple',     'fa' => '<i class="fa fa-fw fa-apple"></i>'],
    'facebook'  => ['name' => 'Facebook',  'wkp' => 'Facebook',  'fa' => '<i class="fa fa-fw fa-facebook"></i>'],
    'amazon'    => ['name' => 'Amazon',    'wkp' => 'Amazon',    'fa' => '<i class="fa fa-fw fa-amazon"></i>'],
    'microsoft' => ['name' => 'Microsoft', 'wkp' => 'Microsoft', 'fa' => '<i class="fa fa-fw fa-windows"></i>'],
    // … & cie
    'avaaz'     => ['name' => 'Avaaz',         'wkp' => 'Avaaz.org'],
    'bitly'     => ['name' => 'Bitly',         'wkp' => 'Bit.ly'],
    'doodle'    => ['name' => 'Doodle AG',     'wkp' => 'Doodle.com'],
    'dropbox'   => ['name' => 'Dropbox',       'wkp' => 'Dropbox'],
    'evernote'  => ['name' => 'Evernote',      'wkp' => 'Evernote' ],
    'github'    => ['name' => 'GitHub',        'wkp' => 'GitHub'],
    'imgur'     => ['name' => 'Imgur',         'wkp' => 'Imgur'],
    'pastebin'  => ['name' => 'Pastebin',      'wkp' => 'Pastebin'],
    'trello'    => ['name' => 'Trello Inc',    'wkp' => 'Trello Inc'],
    'twitter'   => ['name' => 'Twitter',       'wkp' => 'Twitter'],
    'pocket'    => ['name' => 'Read It Later', 'wkp' => 'Pocket_%28application%29']
];

/****************
 * Services web *
 ****************/
/*
$k = 'id';                                                              // pour la carte : id="a-avaaz" (area), id="o-avaaz" (option), id="t-avaaz" (texte) et pour la liste : associer modales à chaque post-it
$d[$k]['FL']      = '';                                                 // lien pour le bouton « Utiliser » + $d[$k]['F']
$d[$k]['CL']      = '';                                                 // lien pour le bouton « Installer » (Framacloud)
$d[$k]['S']       = '<a href="*">*</a>';           
$d[$k]['F']       = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">*</b></a>';
$d[$k]['FDate']   = '201*';                                             // date ou article du Framablog (contient la date dans l'url)
$d[$k]['name']    = '';                                                 // Nom du service proprio sur la carte
$d[$k]['wkp']     = '';                                                 // Page wikipédia
$d[$k]['eq']      = '';                                                 // Équivalents
$d[$k]['altOn']   = '';                                                 // Alternatives en ligne
$d[$k]['altOff']  = '';                                                 // Alternatives hors ligne / à installer sur un serveur
$d[$k]['pos']     = '';                                                 // Coordonnées sur la carte : 'x, y, R'
$d[$k]['class']   = '';                                                 // Classe CSS : potion = en cours ; fight = service sorti ; casque = mis à jour     ↓↓ Défini par lot en bas ↓↓
$d[$k]['sDesc']   = '';                                                 // Description courte (en titre sur carte et post-it)
$d[$k]['lDesc']   = '';                                                 // Description longue (au dos du post-it)
$d[$k]['mTitle']  = '';                                                 // Titre de la modale ; Corps de la modale ↓ ; Footer de la modale                  ↓↓ Défini par lot en bas ↓↓
$d[$k]['mBody']   = '<p>
                        '.$d[$k]['F'].' vous permet de…
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> …
                    </p>';
$d[$k]['mFooter'] = '<p class="precisions">'.$d[$k]['F'].' est une instance basée sur le logiciel libre '.$d[$k]['S'].'</p>'; 
*/

 
// Avaaz
$k= 'avaaz';               
$d[$k]['FL']     = '';       
$d[$k]['CL']     = '';       
$d[$k]['S']      = '<a href="https://www.drupal.org/">Drupal</a> + <a href="https://www.drupal.org/project/webform">WebForm</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">pétition</b>';
$d[$k]['FDate']  = '2015';
$d[$k]['name']   = 'Avaaz';
$d[$k]['wkp']    = 'Avaaz.org';
$d[$k]['eq']     = 'Change.org';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '<a href="https://github.com/WhiteHouse/petition">WeThePeople</a>, <a href="https://github.com/mysociety/petitions">MySociety</a>, <a href="https://www.drupal.org/project/webform">WebForm</a>…';
$d[$k]['pos']    = '190,595,40';
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
$d[$k]['FL']     = 'https://frama.link';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-lstu/';
$d[$k]['S']      = '<a href="http://lstu.fiat-tux.fr/"><abbr>LSTU</abbr></a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b>.<b class="vert">link</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://framablog.org/2015/03/16/huit-re-framapic-framabin-framasoft-met-les-bouchees-triples/">mars 2015</a>)';
$d[$k]['name']   = 'Bit.ly';
$d[$k]['wkp']    = 'Bit.ly';
$d[$k]['eq']     = 'goo.gl, t.co, tinyurl.com…';
$d[$k]['altOn']  = '<a href="http://lstu.fr/">lstu.fr</a>, <a href="http://ur1.ca/">ur1.ca</a>';
$d[$k]['altOff'] = '<a href="http://lstu.fr/">LSTU</a>, <a href="http://yourls.org/">YOURLS</a>, <a href="http://lilurl.sourceforge.net/">LilURL</a>…'; 
$d[$k]['pos']    = '545,300,40';
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
$d[$k]['FL']     = '';       
$d[$k]['CL']     = '';       
$d[$k]['S']      = 'Pluxml';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">sites</b>';
$d[$k]['FDate']  = '2016';
$d[$k]['name']   = 'Blogger';
$d[$k]['wkp']    = 'Blogger';
$d[$k]['eq']     = 'sites.pages-jaunes.fr, OverBlog, Skyblog…';
$d[$k]['altOn']  = '<a href="http://wordpress.com">Wordpress.com</a>';
$d[$k]['altOff'] = '<a href="http://www.pluxml.org/">PluXML</a>, <a href="http://wordpress.org">Wordpress</a>…';
$d[$k]['pos']    = '605,480,40';
$d[$k]['sDesc']  = 'Hébergement de sites';
$d[$k]['lDesc']  = '';
$d[$k]['FL']     = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Bubbl.us
$k= 'bubblus';
$d[$k]['FL']     = 'http://framindmap.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-wisemapping/';
$d[$k]['S']      = '<a href="http://wisemapping.com">Wisemapping</a>';
$d[$k]['F']      = '<a href="http://framindmap.org"><b class="violet">Fram</b><b class="vert">indmap</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://www.framablog.org/index.php/post/2012/10/16/framindmap-carte-mentale">octobre 2012</a>)';
$d[$k]['name']   = 'Bubbl.us';
$d[$k]['wkp']    = '';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = $d[$k]['S'].', <a href="https://www.mindmup.com">Mindmup</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="https://github.com/drichard/mindmaps">Mindmaps</a>, <a href="https://github.com/mindmup/mindmup">Mindmup</a>';
$d[$k]['pos']    = '360,145,40';
$d[$k]['sDesc']  = 'Cartes heuristiques';
$d[$k]['lDesc']  = 'Fabriquez vos cartes mentales';
$d[$k]['mTitle'] = 'Pourquoi créer une carte mentale ?';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet d’organiser un brainstorming, ordonner vos idées à plusieurs, apprendre et faire apprendre une leçon, réaliser des classifications, identifier les éléments importants.
                    </p>
                       <p><video controls="controls" preload="none"
                        width="420" height="248" poster="http://www.framatube.org/images/media/866l.jpg">
                        <source src="http://www.framatube.org/files/1230-framindmap-creer-une-carte-mentale.mp4" type="video/mp4"></source>
                        <source src="http://www.framatube.org/files/1229-framindmap-creer-une-carte-mentale.webm" type="video/webm"></source>
                          </video>
                       </p>
                       <p><small><em>Tutoriel réalisé par Claire Cassaigne</em> - La <a href="http://www.framatube.org/files/1229-framindmap-creer-une-carte-mentale.webm">vidéo</a> au format webm</small></p>

                    <p>
                        <b class="violet">Pourquoi utiliser Framindmap ?</b> Il est utilisable en ligne, sans installation, aucune inscription n’est requise, vous pouvez exporter
                        votre document sous forme d’image, c’est un logiciel libre et gratuit, les données vous appartiennent.
                    </p>';

// Doodle
$k= 'doodle';
$d[$k]['FL']     = 'http://framadate.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-framadate/';
$d[$k]['S']      = 'Studs';
$d[$k]['F']      = '<a href="http://framadate.org"><b class="violet">Frama</b><b class="vert">date</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://www.framablog.org/index.php/post/2011/06/28/Planifier-vos-rendez-vous-avec-Framadate">juin 2011</a>)';
$d[$k]['name']   = 'Doodle';
$d[$k]['wkp']    = 'Doodle.com';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '<a href="https://git.framasoft.org/framasoft/framadate">Framadate</a>, <a href="http://www.peacefrogs.net/papillon">Papillon</a>';
$d[$k]['pos']    = '415,190,40';
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
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = 'Owncloud';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">drive</b>';
$d[$k]['FDate']  = '2015';
$d[$k]['name']   = 'Dropbox';
$d[$k]['wkp']    = 'Dropbox';
$d[$k]['eq']     = 'Google Drive, iCloud Drive';
$d[$k]['altOn']  = '<a href="http://owncloud.org/providers/#free">OwnCloud</a>, <a href="https://seacloud.cc">Seacloud</a>';
$d[$k]['altOff'] = '<a href="https://pyd.io/">Pyd.io</a>, <a href="http://owncloud.org/">OwnCloud</a>, <a href="http://www.seafile.com">Seafile</a>';
$d[$k]['pos']    = '325,550,40';
$d[$k]['sDesc']  = 'Stockage de documents';
$d[$k]['lDesc']  = 'Héberger ses documents en ligne';
$d[$k]['mTitle'] = 'Héberger ses documents en ligne';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de stocker en ligne de manière chiffrée vos documents, de les synchroniser sur vos ordinateurs, tablettes, téléphones, etc et de les partager avec qui vous voulez…
                    </p>';

// Evernote
$k= 'evernote';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://laverna.cc/">Laverna</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">notes</b>';
$d[$k]['FDate']  = '2017';
$d[$k]['name']   = 'Evernote';
$d[$k]['wkp']    = 'Evernote';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '560,600,40';
$d[$k]['sDesc']  = 'Prise de notes';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Facebook
$k= 'facebook';
$d[$k]['FL']     = 'https://framasphere.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://diasporafoundation.org/">Diaspora*</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">sphère</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://www.framablog.org/index.php/post/2014/10/07/framasphere-reseau-social-libre-et-gratuit">octobre 2014</a>)';
$d[$k]['name']   = 'Facebook';
$d[$k]['wkp']    = 'Facebook';
$d[$k]['eq']     = 'LinkedIn, Viadeo, Google+';
$d[$k]['altOn']  = '<a href="http://pods.jasonrobinson.me/">liste de pods Diaspora*</a>, <a href="https://pod.movim.eu">liste de pods Movim</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="https://movim.eu/">Movim</a>';
$d[$k]['pos']    = '240,440,40';
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
$d[$k]['FL']     = 'http://git.framasoft.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://gitlab.com/">Gitlab</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">git</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://framablog.org/2015/03/13/google-code-ferme-ses-portes-nous-on-les-ouvre/">mars 2015</a>)';
$d[$k]['name']   = 'GitHub';
$d[$k]['wkp']    = 'GitHub';
$d[$k]['eq']     = 'Google Code, SourceForge';
$d[$k]['altOn']  = $d[$k]['S'].'<a href="http://savannah.gnu.org/">Savannah</a><a href="http://gna.org/">Gna!</a>, <a href="http://tuxfamily.org/">TuxFamilly</a>, l’<a href="https://adullact.net/">Adullact</a>';
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '505,380,40';
$d[$k]['sDesc']  = 'Hébergement de code';
$d[$k]['lDesc']  = 'Du code libre c’est bien. Sur une plateforme libre c’est mieux !';
$d[$k]['mTitle'] = 'Hébergement de code libre';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un outil qui s’adresse avant tout aux développeurs. Il permet la création de 42 dépôts maximum par compte (si vous avez besoin de plus, songez sérieusement à vous auto-héberger). Et, petit plus par rapport à GitHub, vous pouvez créer des dépôts privés.</p>
                    </p>
                    <p>Il est également possible de « mirrorer » automatiquement vos dépôts sur GitHub : vous continuez à « engraisser la bête », mais vous êtes déjà moins dépendant, et vous conservez une visibilité auprès des presque 10 millions d’inscrits sur GitHub. Votre dépôt sur notre Framagit est automatiquement poussé sur votre dépôt Github. C’est d’ailleurs la solution retenue par Framasoft, qui dispose toujours d’un compte GitHub, alors que les développements sont réalisés sur notre forge.</p>';

// Gmail
$k= 'gmail';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://www.caliopen.org/">Caliopen</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">mail</b>';
$d[$k]['FDate']  = '2017';
$d[$k]['name']   = 'GMail';
$d[$k]['wkp']    = 'Gmail';
$d[$k]['eq']     = 'Outlook, Yahoo Mail, Orange…';
$d[$k]['altOn']  = '<a href="https://openmailbox.org">OpenMailBox</a>, <a href="https://mailoo.org">Mailoo</a>, <a href="https://sud-ouest.org">Sud-Ouest</a>,… ';
$d[$k]['altOff'] = '<a href="http://mozilla.org/thunderbird">Thunderbird</a>';
$d[$k]['pos']    = '615,680,40';
$d[$k]['sDesc']  = 'Service de messagerie';
$d[$k]['lDesc']  = 'Vos mails, sans la NSA dedans';
$d[$k]['mTitle'] = 'Votre courrier, dans une enveloppe blindée';
$d[$k]['mBody']  = '';

// Google Agenda
$k= 'gagenda';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://www.k5n.us/webcalendar.php">Webcalendar</a>';
$d[$k]['F']      = '<b class="violet">Fram</b><b class="vert">agenda</b>';
$d[$k]['FDate']  = '2016';
$d[$k]['name']   = 'Google Agenda';
$d[$k]['wkp']    = 'Google_Agenda';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '<a href="http://www.k5n.us/webcalendar.php">webcalendar</a>, <a href="http://www.zkoss.org/product/">ZK Calendar</a>…';
$d[$k]['pos']    = '540,530,40';
$d[$k]['sDesc']  = 'Agenda partagé';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Google Books
$k= 'gbooks';
$d[$k]['FL']     = 'http://framabookin.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-d-un-serveur-opds/';
$d[$k]['S']      = '<a href="https://github.com/rvolz/BicBucStriim">BicBucStriim</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="rouge">bookin</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://framablog.org/2015/06/22/framabookin-devenez-le-concurrent-damazon">juin 2015</a>)';
$d[$k]['name']   = 'Google Books';
$d[$k]['wkp']    = 'Google_Livres';

$d[$k]['eq']     = '';
$d[$k]['altOn']  = '<a href="http://fr.wikisource.org/wiki/Wikisource:Accueil">WikiSource</a>, <a href="http://gallica.bnf.fr/html/livres/livres">Gallica</a>…';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="https://github.com/seblucas/cops">Cops</a>, <a href="http://calibre2opds.com/">Calibre2OPDS</a>';
$d[$k]['pos']    = '590,400,40';
$d[$k]['sDesc']  = 'Livres en ligne';
$d[$k]['lDesc']  = 'Une bibliothèque de plusieurs milliers d’ouvrages';
$d[$k]['mTitle'] = 'Catalogue d’ouvrages accessibles pour tous';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est le catalogue <abbr>OPDS</abbr> de Framasoft. « Euh… Oui, mais encore ? », nous direz-vous. Un catalogue <abbr>OPDS</abbr> est un site auquel vous pouvez vous abonner avec un logiciel supportant cette fonctionnalité (certaines liseuses en embarquent un, pour Android, il existe Aldiko et bien d’autres), vous donnant accès rapidement et simplement à tout une bibliothèque depuis votre ordinateur, smartphone ou tablette.
                    </p>
                    <p>Le catalogue <abbr>OPDS</abbr> de Framasoft vous donne accès à des centaines d’ouvrages non protégés par « copyright ».</p>';

// Google Docs
$k= 'gdocs';
$d[$k]['FL']     = 'https://framapad.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-detherpad/';
$d[$k]['S']      = '<a href="http://etherpad.org/">Etherpad</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">pad</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://www.framablog.org/index.php/post/2011/03/28/framapad-collaboration-en-ligne">mars 2011</a>)';
$d[$k]['name']   = 'Google Docs';
$d[$k]['wkp']    = 'Google_Drive';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '<a href="http://etherpad.org/">Etherpad</a>';
$d[$k]['pos']    = '370,65,40';
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
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://www.drupal.org/">Drupal</a> + <a href="https://www.drupal.org/project/webform">Webform</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">forms</b>';
$d[$k]['FDate']  = '2017';
$d[$k]['name']   = 'Google Forms';
$d[$k]['wkp']    = '';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '<a href="https://github.com/spiral-project/daybed">DayBed</a>, <a href="https://www.drupal.org/project/webform">WebForm</a>';
$d[$k]['pos']    = '277,618,40';
$d[$k]['sDesc']  = 'Questionnaires en ligne';
$d[$k]['lDesc']  = 'Créez simplement des questionnaires';
$d[$k]['mTitle'] = 'Création de questionaires';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de créer les questionaires dont vous avez besoin, que ce soit dans un cadre scolaire, familial ou associatif. Créez vos questions en fonction de vos besoins, des formulaires à choix multiples aux champs de texte libre.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement</b> : créez un compte sur Framaforms et lancez-vous dans la création des questionnaires, en fonction de vos besoins. Vos sondés n’ont pas besoin de s’inscrire pour pouvoir répondre. Vous disposez d’une synthèse des réponses.
                    </p>';

// Google Groupes
$k= 'ggroups';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://www.sympa.org/">Sympa</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">listes</b>';
$d[$k]['FDate']  = '2017';
$d[$k]['name']   = 'Google Groupes';
$d[$k]['wkp']    = 'Google_Groupes';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '<a href="http://riseup.net/">riseup.net</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://www.gnu.org/software/mailman/">mailman</a>…';
$d[$k]['pos']    = '615,750,40';
$d[$k]['sDesc']  = 'Listes de diffusion';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Google Reader
$k= 'greader';
$d[$k]['FL']     = 'https://framanews.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://tt-rss.org/">TinyTinyRSS</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">news</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://www.framablog.org/index.php/post/2013/06/27/framanews-rss-google-reader">juin 2013</a>)';
$d[$k]['name']   = 'Google Reader';
$d[$k]['wkp']    = 'Google_Reader';
$d[$k]['eq']     = 'Feedly';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://freshrss.org/">FreshRSS</a>…';
$d[$k]['pos']    = '430,80,40';
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
$d[$k]['FL']     = 'https://framabee.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-searx/';
$d[$k]['S']      = '<a href="https://github.com/asciimoo/searx">Searx</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">bee</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://framablog.org/2015/05/05/framabee-le-meta-moteur-qui-va-vous-butiner-le-web/">mai 2015</a>)';
$d[$k]['name']   = 'Google Search';
$d[$k]['wkp']    = 'Google_%28moteur_de_recherche%29';
$d[$k]['eq']     = 'Bing, Yahoo, Qwant';
$d[$k]['altOn']  = '<a href="https://duckduckgo.com/">DuckDuckGo</a>, <a href="https://www.ixquick.com/">Ixquick</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://codingteam.net/project/mysearch">MySearch</a>, <a href="http://fr.wikipedia.org/wiki/YaCy">YaCy</a>, <a href="http://fr.wikipedia.org/wiki/Seeks">Seeks</a>';
$d[$k]['pos']    = '370,330,40';
$d[$k]['sDesc']  = 'Moteur de recherche';
$d[$k]['lDesc']  = 'Et si vos recherches n’étaient plus fichées par Google ?';
$d[$k]['mTitle'] = 'Une recherche anonyme';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un meta-moteur de recherche anonyme. Cela signifie que vos recherches effectuées au travers de ce moteur sont envoyées à différents moteurs, avant d’être affichées dans votre navigateur. L’intérêt, c’est que c’est notre moteur qui fait alors office d’intermédiaire entre vous et Google (ou les autres moteurs). Votre adresse IP n’est donc pas enregistrée chez eux. </p>
                        <p>Evidemment, vous devez avoir confiance en Framasoft/Framabee si vous souhaitez l’utiliser, c’est pourquoi nous proposons une <a href="/nav/html/charte.html">charte</a>.
                    </p>';

// Google Slides
$k= 'gslides';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://strut.io/">Strut.io</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">slides</b>';
$d[$k]['FDate']  = '2016';
$d[$k]['name']   = 'Google Slides';
$d[$k]['wkp']    = 'Google_Drive';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = $d[$k]['S'];
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '490,465,40';
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
$d[$k]['FL']     = 'http://framacalc.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://ethercalc.org/">Ethercalc</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">calc</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://www.framablog.org/index.php/post/2012/10/03/framacalc-tableur-sur-internet">octobre 2012</a>)';
$d[$k]['name']   = 'Google Spreadsheet';
$d[$k]['wkp']    = 'Google_Drive';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://www.zkoss.org/product/zkspreadsheet">ZK Spreadsheet</a>';
$d[$k]['pos']    = '365,255,40';
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
$d[$k]['FL']     = 'https://framapic.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-lutim/';
$d[$k]['S']      = '<a href="https://lut.im">Lut.im</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">pic</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://framablog.org/2015/03/16/huit-re-framapic-framabin-framasoft-met-les-bouchees-triples/">mars 2015</a>)';
$d[$k]['name']   = 'Img.ur';
$d[$k]['wkp']    = 'Imgur';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '<a href="http://pix.toile-libre.org/">Toile libre</a>, <a href="https://lut.im">Lut.im</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="https://coquelicot.potager.org/">Coquelicot</a>';
$d[$k]['pos']    = '630,190,40';
$d[$k]['sDesc']  = 'Envoi d’images';
$d[$k]['lDesc']  = 'Partagez vos images anonymement';
$d[$k]['mTitle'] = 'Partagez vos images facilement';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de partager facilement des images, par exemple pour les partager sur Twitter, Facebook, ou … Framasphère !
                    </p>
                    <p>Attention, ce service n’est pas un équivalent de flickr ou instagram : il ne s’agit pas d’un service d’hébergement de photos d’utilisateurs, mais bien d’un service d’hébergement d’images anonymes (même nous, nous n’avons pas accès au contenu, qui est chiffré).</p>
                    <p>
                        '.$d[$k]['FL'].' permet d’envoyer des images de façon anonyme. Vous pouvez décider du moment de leur suppression (dès la première visualisation, 24H/7j/30j/1an après leur mise en ligne).
                    </p>';


// Kongregate
$k= 'kongregate';
$d[$k]['FL']     = 'http://framagames.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = 'divers';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">games</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://framablog.org/2015/06/18/framagames-des-jeux-pour-changer-les-idees-aux-lyceens/">juin 2015</a>)';
$d[$k]['name']   = 'Kongregate';
$d[$k]['wkp']    = '';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '';
$d[$k]['pos']    = '365,420,40';
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

// Pastebin
$k= 'pastebin';
$d[$k]['FL']     = 'https://framabin.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-zerobin/';
$d[$k]['S']      = '<a href="http://sebsauvage.net/wiki/doku.php?id=php:zerobin">Zerobin</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">bin</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://framablog.org/2015/03/16/huit-re-framapic-framabin-framasoft-met-les-bouchees-triples/">mars 2015</a>)';
$d[$k]['name']   = 'Pastebin';
$d[$k]['wkp']    = 'Pastebin';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '620,255,40';
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
$d[$k]['FL']     = 'http://framabag.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://www.wallabag.org/">Wallabag</a>';
$d[$k]['F']      = '<a href="https://framabag.org"><b class="violet">Frama</b><b class="vert">bag</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://www.framablog.org/index.php/post/2014/02/05/Framabag-service-libre-gratuit-interview-developpeur">février 2014</a>)';
$d[$k]['name']   = 'Pocket';
$d[$k]['wkp']    = 'Pocket_%28application%29';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '<a href="https://www.wallabag.org/">Wallabag</a>';
$d[$k]['pos']    = '320,480,40';
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

// Skype
$k= 'skype';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://jitsi.org/Projects/JitsiMeet">Jitsi Meet</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">talk</b>';
$d[$k]['FDate']  = '2015';
$d[$k]['name']   = 'Skype';
$d[$k]['wkp']    = 'Skype';
$d[$k]['eq']     = 'Hangouts';
$d[$k]['altOn']  = $d[$k]['S'].', <a href="http://hibuddy.monkeypatch.me/">Hi Buddy</a> (WebRTC)';
$d[$k]['altOff'] = '<a href="https://jitsi.org/">Jitsi</a>';
$d[$k]['pos']    = '370,660,40';
$d[$k]['sDesc']  = 'Visioconférence';
$d[$k]['lDesc']  = 'Discutez librement avec vos amis';
$d[$k]['mTitle'] = 'Vidéoconférence';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de discuter simplement avec vos amis, sans installation complexe de logiciel. Vous discutez simplement, sans aucune analyse des données liées aux conversations. Tout se passe entre vous et vos amis.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Directement à partir de votre navigateur web, vous êtes mis en relation avec vos amis, sans devoir installer de logiciel supplémentaire. Une fois connecté, donnez l’autorisation à votre navigateur d’utiliser votre micro et votre webcam, et profitez de la discussion en toute simplicité.
                    </p>';

// Trello
$k= 'trello';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://kanboard.net/">Kanboard</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">board</b>';
$d[$k]['FDate']  = '2015';
$d[$k]['name']   = 'Trello';
$d[$k]['wkp']    = 'Trello';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = 'Libreboard';
$d[$k]['altOff'] = '';
$d[$k]['pos']    = '420,510,40';
$d[$k]['sDesc']  = 'Gestion de projets';
$d[$k]['lDesc']  = 'Gestionnaire de projets';
$d[$k]['mTitle'] = 'Gestionnaire de projets';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un gestionnaire de tâches visuel. Il permet de gérer des projets de manière collaborative, en suivant la méthode Kanban. Son système visuel permet de s’y retrouver au premier coup d’œil, quelque soit votre habitude à utiliser ce genre d’outil.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Lancez votre projet, et commencez à le gérer collectivement, tâche par tâche. Assignez une personne à chaque tache, définissez des fonctions, des avancements et des délais. Cette gestion visuelle vous permettra de voir l’état du projet en un coup d’œil.
                    </p>';

// Twitter
$k= 'twitter';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://twister.net.co/">Twister</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">tweet</b>';
$d[$k]['FDate']  = '2016';
$d[$k]['name']   = 'Twitter';
$d[$k]['wkp']    = 'Twitter';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '<a href="https://identi.ca">Identi.ca</a>';
$d[$k]['altOff'] = '<a href="http://twister.net.co/">Twister</a>, <a href="http://status.net/">StatusNet</a>';
$d[$k]['pos']    = '475,575,40';
$d[$k]['sDesc']  = 'Microblogging';
$d[$k]['lDesc']  = 'Gazouillez sur Internet';
$d[$k]['mTitle'] = 'Le microblogage libre';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de suivre des flux de microblogage et entretenir vos propres flux de manière décentralisée en utilisant le protocole P2P.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> utilisez un client de connexion, ouvrez un compte, abonnez-vous à des flux et tweetez à votre tour.
                    </p>';

// WeTransfer
$k= 'wetransfer';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = 'LUFI';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">drop</b>';
$d[$k]['FDate']  = '2015';
$d[$k]['name']   = 'Wetransfer';
$d[$k]['wkp']    = '';
$d[$k]['eq']     = 'Dropsend';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '';
$d[$k]['pos']    = '240,520,40';
$d[$k]['sDesc']  = 'Envoi de gros fichiers';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Youtube
$k= 'youtube';
$d[$k]['FL']     = 'http://framatube.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://mediagoblin.org/">Mediagoblin</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="rouge">tube</b></a>';
$d[$k]['FDate']  = '2016';
$d[$k]['name']   = 'Youtube';
$d[$k]['wkp']    = 'Youtube';
$d[$k]['eq']     = 'Vimeo, Dailymotion…';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://cumulusclips.org/">CumulusClips</a>,<a href="http://www.mediaspip.net/">MediaSpip</a>, <a href="http://www.kaltura.org/">Kaltura</a>, <a href="http://plumi.org/">Plumi</a>';
$d[$k]['pos']    = '635,560,40';
$d[$k]['sDesc']  = 'Hébergement de vidéos';
$d[$k]['lDesc']  = 'Partagez vos vidéos et conservez vos droits';
$d[$k]['mTitle'] = 'Libérez vos vidéos';
$d[$k]['mBody']  = '<p>
                        Sur '.$d[$k]['FL'].', vous pouvez télécharger vos vidéos, les partager avec votre entourage ou les ouvrir en lecture publique.
                        C’est le meilleur moyen de partager des vidéos sans céder vos droits.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> ouvrez un compte et téléchargez vos vidéos. Vous gardez vos droits et la liberté de modifier vos téléchargements.
                    </p>';

// 1000minds
$k= 'loomio';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://www.loomio.org">Loomio</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">loomio</b>';
$d[$k]['FDate']  = '2016';
$d[$k]['name']   = '1000minds';
$d[$k]['wkp']    = '';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = $d[$k]['S'];
$d[$k]['altOff'] = '';
$d[$k]['pos']    = '400,590,40';
$d[$k]['sDesc']  = 'Prise de décision';
$d[$k]['lDesc']  = 'Un outil pour mieux gérer les prises de décisions collectives';
$d[$k]['mTitle'] = 'Décidez ensembles,';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous aide à prendre des décisions communautaires. Discutez, échangez, mettez-vous d’accord et passez à l’action, le tout dans les délais que vous fixés au départ.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Lancez une discussion, et invitez les personnes concernées à venir apporter leur point de vue. Développez les idées, échangez quelque soit votre point de vue. Les avis peuvent tous s’exprimer, se partager et murir. Décidez ensemble et sortez une proposition finale, dans les délais définis.
                    </p>';

/********************
 * Pas sur la carte
 ********************/
// Google Maps
$k= 'gmaps';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://bitbucket.org/yohanboniface/umap">uMap</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">carte</b>';
$d[$k]['FDate']  = '2016';
$d[$k]['name']   = 'Google Map';
$d[$k]['wkp']    = 'Google_Maps';
$d[$k]['eq']     = 'Bing Maps, ViaMichelin, Mappy';
$d[$k]['altOn']  = '<a href="https://www.openstreetmap.org/">OpenStreetMap</a>'.$d[$k]['S'];
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '';
$d[$k]['sDesc']  = 'Cartographie';
$d[$k]['lDesc']  = 'Créer vos cartes personnalisées en ligne';
$d[$k]['mTitle'] = 'Créez vos cartes personnalisées en ligne';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' permet de créer des cartes personnalisées sur des fonds OpenStreetMap et de les afficher dans votre site.
                    </p>
                    <p><b class="violet">Fonctionnement :</b></p>
                    <ul>
                        <li>Choisir les fonds de carte</li>
                        <li>Ajouter des POI: marqueurs, lignes, polygones...</li>
                        <li>Choisir la couleur et les icônes</li>
                        <li>Gérer les options de la carte: afficher une minicarte, géolocaliser l’utilisateur...</li>
                        <li>Import des données géographiques en masse (geojson, gpx, kml, osm…)</li>
                        <li>Choisir la licence de vos données</li>
                        <li>Exporter et partager votre carte</li>
                    </ul>';

// JS Fiddle
$k= 'jsfiddle';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://jsbin.com/">JS Bin</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">xxx</b>';
$d[$k]['FDate']  = '2017';
$d[$k]['name']   = 'jsFiddle';
$d[$k]['wkp']    = '';
$d[$k]['eq']     = 'Codepen';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://dabblet.com/">Dabblet</a>…';
$d[$k]['pos']    = '';
$d[$k]['sDesc']  = 'Partage de code';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Padlet
$k= 'padlet';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://scrumblr.ca/">Scrumblr</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">xxx</b>';
$d[$k]['FDate']  = '2016';
$d[$k]['name']   = 'Padlet';
$d[$k]['wkp']    = '';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '';
$d[$k]['pos']    = '';
$d[$k]['sDesc']  = 'Organisation d’idées';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Pixlr
$k= 'pixlr';
$d[$k]['FL']     = 'http://framavectoriel.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-svg-edit/';
$d[$k]['S']      = '<a href="https://code.google.com/p/svg-edit/">SVG-Edit</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">vectoriel</b></a>';
$d[$k]['FDate']  = '(depuis <a href="http://www.framablog.org/index.php/post/2012/10/23/framavectoriel">octobre 2012</a>)';
$d[$k]['name']   = 'Pixlr';
$d[$k]['wkp']    = '';
$d[$k]['eq']     = 'Picozu';
$d[$k]['pos']    = '';
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
                    <video controls="controls" preload="none" width="620" height="360" poster="http://www.framatube.org/images/media/864l.jpg">
                        <source src="http://www.framatube.org/files/1227-introduction-a-svg-editjpg.mp4" type="video/mp4"></source>
                        <source src="http://www.framatube.org/files/1228-introduction-a-svg-editjpg.webm" type="video/webm"></source>
                    </video>
                    </div>
                    <p> La <a href="http://www.framatube.org/files/1228-introduction-a-svg-editjpg.webm">vidéo</a> au format webm <small>(Pour l’instant la vidéo est en anglais. Désolé.)</small></p>';

// Scribd
$k= 'scribd';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://webodf.org/">WebODF</a> ou <a href="https://pdf.yt/">PDFy</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">xxx</b>';
$d[$k]['FDate']  = '2016';
$d[$k]['name']   = 'Scribd';
$d[$k]['wkp']    = '';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '';
$d[$k]['pos']    = '';
$d[$k]['sDesc']  = 'Partage de PDF/ODP';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Transifex
$k= 'transifex';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://pootle.translatehouse.org/">Pootle</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">poulpe</b>';
$d[$k]['FDate']  = '2016';
$d[$k]['name']   = 'Transifex';
$d[$k]['wkp']    = '';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = 'Launchpad Translation';
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '';
$d[$k]['sDesc']  = 'Traduction de logiciels';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

/*
// Youporn
$k= 'youporn';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = 'GermanPorn';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">porn</b>';
$d[$k]['FDate']  = '2015';
$d[$k]['name']   = 'Youporn';
$d[$k]['wkp']    = 'Youporn';
$d[$k]['sDesc']  = 'Les codes du porno';
*/

/****************
 * Mises à jour *
 ****************/
// Etherpad Lite
$k = 'padlite'; $ko = 'gdocs';
$d[$k]['FL']     = $d[$ko]['FL'];
$d[$k]['S']      = $d[$ko]['S'];
$d[$k]['F']      = $d[$ko]['F'];
$d[$k]['lDesc']  = $d[$ko]['lDesc'];
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'];
$d[$k]['name']   = 'Remplacement d’Etherpad par la version « Lite » pour les pads publics';
$d[$k]['FDate']  = '2013';
$d[$k]['class']  = 'casque';

// Wisemapping
$k = 'framindmap2'; $ko = 'bubblus';
$d[$k]['FL']     = $d[$ko]['FL'];
$d[$k]['S']      = $d[$ko]['S'];
$d[$k]['F']      = $d[$ko]['F'];
$d[$k]['lDesc']  = $d[$ko]['lDesc'];
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'].'
    <p>
        <b class="violet">Mise à jour :</b> le logiciel qui propulse Framindmap sera Wisemapping (et non plus Mindmaps). Ce logiciel est plus complet, permet de lier des documents aux noeuds ou d’enregistrer vos cartes pour les retrouver et les partager facilement sur internet.
    </p>';
$d[$k]['name']   = 'Mindmaps remplacé par Wisemapping';
$d[$k]['FDate']  = '2014';
$d[$k]['class']  = 'casque';

// Framadate 0.8
$k = 'framadate2'; $ko = 'doodle';
$d[$k]['FL']     = $d[$ko]['FL'];
$d[$k]['S']      = $d[$ko]['S'];
$d[$k]['F']      = $d[$ko]['F'];
$d[$k]['lDesc']  = $d[$ko]['lDesc'];
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'].'
    <p>
        <b class="violet">Mise à jour</b> : la mise à jour de Framadate concerne une refonte graphique et technique du service. L’interface est plus claire, plus ergonomique. Et il sera désormais possible de répondre "peut-être" à un choix de sondage.
    </p>';
$d[$k]['name']   = 'Développement axé sur l’ergonomie et l’accessibilité';
$d[$k]['FDate']  = '2014';
$d[$k]['class']  = 'casque';

// MyPads
$k = 'mypads'; $ko = 'gdocs';
$d[$k]['FL']     = $d[$ko]['FL'];
$d[$k]['S']      = $d[$ko]['S'];
$d[$k]['F']      = $d[$ko]['F'];
$d[$k]['lDesc']  = $d[$ko]['lDesc'];
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'].'
    <p>
        <b class="violet">Mise à jour</b> : cette mise à jour de Framapad sera conséquente, car en plus de bénéficier d’instances dédiées (par exemple à l’education ou aux sciences), vous pourrez (enfin !) gérer des pads privés (gestion par groupe ou par mot de passe).
    </p>';
$d[$k]['name']    = 'Développement et intégration du plugin Mypads';
$d[$k]['FDate']   = '2015';
$d[$k]['class']   = 'casque';

$potion  = ['avaaz','dropbox','gslides','skype','trello','youtube','1000minds','gforms','gmaps','transifex','wetransfer'];
$fight   = ['bubblus','doodle','gdocs','greader','gspreadsheet',
            'pixlr','facebook','pocket','bitly','github',
            'gbooks','gsearch','imgur','kongregate','pastebin'];
?>
