<?php

$l['current'] = str_replace(array(realpath ($_SERVER['DOCUMENT_ROOT']),'/i18n'),'', dirname(__FILE__)).'/';

/************
 * Éditeurs *
 ************/

$e = [
    // GAFAM…
    'google'    => ['name' => 'Google',    'fa' => '<i class="fa fa-fw fa-google"></i>'],
    'apple'     => ['name' => 'Apple',     'fa' => '<i class="fa fa-fw fa-apple"></i>'],
    'facebook'  => ['name' => 'Facebook',  'fa' => '<i class="fa fa-fw fa-facebook"></i>'],
    'amazon'    => ['name' => 'Amazon',    'fa' => '<i class="fa fa-fw fa-amazon"></i>'],
    'microsoft' => ['name' => 'Microsoft', 'fa' => '<i class="fa fa-fw fa-windows"></i>'],
    // … & cie
    'avaaz'     => ['name' => 'Avaaz'],
    'bitly'     => ['name' => 'Bitly'],
    'doodle'    => ['name' => 'Doodle AG'],
    'dropbox'   => ['name' => 'Dropbox', 'fa' => '<i class="fa fa-fw fa-dropbox"></i>'],
    'evernote'  => ['name' => 'Evernote'],
    'github'    => ['name' => 'GitHub', 'fa' => '<i class="fa fa-fw fa-github"></i>'],
    'imgur'     => ['name' => 'Imgur'],
    'pastebin'  => ['name' => 'Pastebin'],
    'trello'    => ['name' => 'Trello Inc', 'fa' => '<i class="fa fa-fw fa-trello"></i>'],
    'twitter'   => ['name' => 'Twitter', 'fa' => '<i class="fa fa-fw fa-twitter"></i>'],
    'pocket'    => ['name' => 'Read It Later', 'fa' => '<i class="fa fa-fw fa-get-pocket"></i>']
];

/**************
 * Categories *
 **************/
$c = [
    'home'      => ['name' => '', 'fa' => '<i class="fa fa-fw fa-home"></i>'],
    'web'       => ['name' => '', 'fa' => '<i class="fa fa-fw fa-globe"></i>'],
    'office'    => ['name' => '', 'fa' => '<i class="fa fa-fw fa-area-chart"></i>'],
    'social'    => ['name' => '', 'fa' => '<i class="fa fa-fw fa-group"></i>'],
    'files'     => ['name' => '', 'fa' => '<i class="fa fa-fw fa-upload"></i>'],
    'media'     => ['name' => '', 'fa' => '<i class="fa fa-fw fa-music"></i>'],
    'geo'       => ['name' => '', 'fa' => '<i class="fa fa-fw fa-compass"></i>'],
    'hobbies'   => ['name' => '', 'fa' => '<i class="fa fa-fw fa-bicycle"></i>'],
    'site'      => ['name' => '', 'fa' => '<i class="fa fa-fw fa-html5"></i>'],
    'dev'       => ['name' => '', 'fa' => '<i class="fa fa-fw fa-code-fork"></i>']
];

// Preset Objectifs (must be in first in list.php)
$d['tip2017'] = array();
$d['tip2016'] = array();
$d['tip2015'] = array();
$d['tip2014'] = array();

/****************
 * Services web *
 ****************/
// Avaaz
$k= 'avaaz';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://www.drupal.org/project/webform">WebForm</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">pétition</b>';
$d[$k]['name']   = 'Avaaz';
$d[$k]['eq']     = 'Change.org';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '<a href="https://github.com/WhiteHouse/petition">WeThePeople</a>, <a href="https://github.com/mysociety/petitions">MySociety</a>, <a href="https://www.drupal.org/project/webform">WebForm</a>';
$d[$k]['pos']    = '205,625,40';
$d[$k]['FDate']  = '2016';
$d[$k]['cat']    = 'social';

// Bit.ly
$k= 'bitly';
$d[$k]['FL']     = 'https://frama.link';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-lstu/';
$d[$k]['S']      = '<a href="https://git.framasoft.org/luc/lstu"><abbr>Lstu</abbr></a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b>.<b class="vert">link</b></a>';
$d[$k]['name']   = 'Bit.ly';
$d[$k]['eq']     = $e['google']['fa'].'goo.gl, '.$e['twitter']['fa'].'t.co, tinyurl.com';
$d[$k]['altOn']  = '<a href="http://lstu.fr/">LSTU</a>, <a href="http://ur1.ca/">ur1.ca</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://yourls.org/">YOURLS</a>, <a href="http://lilurl.sourceforge.net/">LilURL</a>';
$d[$k]['pos']    = '570,320,40';
$d[$k]['FDate']  = '<a href="http://framablog.org/2015/03/16/huit-re-framapic-framabin-framasoft-met-les-bouchees-triples/">2015</a>';
$d[$k]['cat']    = 'web';

// Blogger
$k= 'blogger';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://www.pluxml.org/">PluXML</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">sites</b>';
$d[$k]['name']   = $e['google']['fa'].'Blogger';
$d[$k]['eq']     = 'Pages Jaunes, OverBlog, Skyblog';
$d[$k]['altOn']  = '<a href="http://wordpress.com">Wordpress</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://wordpress.org">Wordpress</a>';
$d[$k]['pos']    = '635,510,40';
$d[$k]['FDate']  = '2016';
$d[$k]['cat']    = 'site';

// Bubbl.us
$k= 'bubblus';
$d[$k]['FL']     = 'http://framindmap.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-wisemapping/';
$d[$k]['S']      = '<a href="http://wisemapping.com">Wisemapping</a>';
$d[$k]['F']      = '<a href="http://framindmap.org"><b class="violet">Fra</b><b class="vert">mindmap</b></a>';
$d[$k]['name']   = 'Bubbl.us';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = $d[$k]['S'].', <a href="https://www.mindmup.com">Mindmup</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="https://github.com/drichard/mindmaps">Mindmaps</a>, <a href="https://github.com/mindmup/mindmup">Mindmup</a>';
$d[$k]['pos']    = '380,155,40';
$d[$k]['FDate']  = '<a href="http://www.framablog.org/index.php/post/2012/10/16/framindmap-carte-mentale">2012</a>';
$d[$k]['cat']    = 'office';

// Doodle
$k= 'doodle';
$d[$k]['FL']     = 'https://framadate.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-framadate/';
$d[$k]['S']      = '<a href="https://git.framasoft.org/framasoft/framadate">Framadate</a>';
$d[$k]['F']      = '<a href="http://framadate.org"><b class="violet">Frama</b><b class="vert">date</b></a>';
$d[$k]['name']   = 'Doodle';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://kyela.net/">Kyélà</a>, <a href="https://dudle.inf.tu-dresden.de/">Dudle</a>';
$d[$k]['pos']    = '435,210,40';
$d[$k]['FDate']  = '<a href="http://www.framablog.org/index.php/post/2011/06/28/Planifier-vos-rendez-vous-avec-Framadate">2011</a>';
$d[$k]['cat']    = 'social';

// Dropbox
$k= 'dropbox';
$d[$k]['FL']     = 'https://framadrive.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-owncloud/';
$d[$k]['S']      = '<a href="http://owncloud.org/">OwnCloud</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">drive</b></a>';
$d[$k]['name']   = $e['dropbox']['fa'].'Dropbox';
$d[$k]['eq']     = $e['google']['fa'].'Google Drive, '.$e['apple']['fa'].'iCloud Drive, '.$e['microsoft']['fa'].'OneDrive';
$d[$k]['altOn']  = '<a href="http://owncloud.org/providers/#free">OwnCloud</a>, <a href="https://seacloud.cc">Seacloud</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="https://pyd.io/">Pyd.io</a>, <a href="http://www.seafile.com">Seafile</a>';
$d[$k]['pos']    = '345,585,40';
$d[$k]['FDate']  = '<a href="http://framablog.org/2015/10/05/framadrive-conservez-et-synchronisez-2-go-sur-nos-serveurs/">2015</a>';
$d[$k]['cat']    = 'files';

// Evernote
$k= 'evernote';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://laverna.cc/">Laverna</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">notes</b>';
$d[$k]['name']   = 'Evernote';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://www.tagspaces.org/">Tagspaces</a>';
$d[$k]['pos']    = '585,630,40';
$d[$k]['FDate']  = '2017';
$d[$k]['cat']    = 'office';

// Facebook
$k= 'facebook';
$d[$k]['FL']     = 'https://framasphere.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://diasporafoundation.org/">Diaspora*</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">sphère</b></a>';
$d[$k]['name']   = $e['facebook']['fa'].'Facebook';
$d[$k]['eq']     = 'LinkedIn, Viadeo, '.$e['google']['fa'].'Google+';
$d[$k]['altOn']  = '<a href="http://the-federation.info/">Pods Diaspora*</a>, <a href="https://pod.movim.eu">Pods Movim</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="https://movim.eu/">Movim</a>, <a href="http://salut-a-toi.org">Salut à Toi</a>, <a href="http://friendica.com">Friendica</a>';
$d[$k]['pos']    = '255,465,40';
$d[$k]['FDate']  = '<a href="http://www.framablog.org/index.php/post/2014/10/07/framasphere-reseau-social-libre-et-gratuit">2014</a>';
$d[$k]['cat']    = 'social';

// Github
$k= 'github';
$d[$k]['FL']     = 'http://git.framasoft.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-gitlab-et-mattermost/';
$d[$k]['S']      = '<a href="https://gitlab.com/">Gitlab</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">git</b></a>';
$d[$k]['name']   = $e['github']['fa'].'GitHub';
$d[$k]['eq']     = $e['google']['fa'].'Google Code, SourceForge';
$d[$k]['altOn']  = $d[$k]['S'].', <a href="http://savannah.gnu.org/">Savannah</a>, <a href="http://gna.org/">Gna!</a>, <a href="http://tuxfamily.org/">TuxFamily</a>, <a href="https://adullact.net/">Adullact</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://kallithea-scm.org/">Kallithea</a>, <a href="http://gitlist.org/">Gitlist</a>';
$d[$k]['pos']    = '530,400,40';
$d[$k]['FDate']  = '<a href="http://framablog.org/2015/03/13/google-code-ferme-ses-portes-nous-on-les-ouvre/">2015</a>';
$d[$k]['cat']    = 'dev';

// Gmail
$k= 'gmail';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://www.caliopen.org/">Caliopen</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">mail</b>';
$d[$k]['name']   = $e['google']['fa'].'GMail';
$d[$k]['eq']     = $e['microsoft']['fa'].'Outlook, Yahoo Mail, Orange';
$d[$k]['altOn']  = '<a href="https://www.protonmail.com/">ProtonMail</a>, <a href="https://mixmail.fr/">Mixmail</a>, <a href="http://mailoo.org">Mailoo</a>, <a href="https://sud-ouest.org">Sud-Ouest</a>';
$d[$k]['altOff'] = '<a href="https://blue-mind.net">Blue-mind</a>, <a href="https://kolab.org/">Kolab</a>, <a href="https://roundcube.net/">Roundcube</a>, <a href="http://www.rainloop.net/">Rainloop</a>';
$d[$k]['pos']    = '650,760,40';
$d[$k]['FDate']  = '2017';
$d[$k]['cat']    = 'social';

// Google Agenda
$k= 'gagenda';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://owncloud.org/">Owncloud</a>';
$d[$k]['F']      = '<b class="violet">Fram</b><b class="vert">agenda</b>';
$d[$k]['name']   = $e['google']['fa'].'Google Agenda';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://www.zkoss.org/product/">ZK Calendar</a>, <a href="http://baikal-server.com/">Baïkal</a>, <a href="http://www.k5n.us/webcalendar.php">Webcalendar</a>';
$d[$k]['pos']    = '570,560,40';
$d[$k]['FDate']  = '2016';
$d[$k]['cat']    = 'office';

// Google Books
$k= 'gbooks';
$d[$k]['FL']     = 'http://framabookin.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-d-un-serveur-opds/';
$d[$k]['S']      = '<a href="https://github.com/rvolz/BicBucStriim">BicBucStriim</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="rouge">bookin</b></a>';
$d[$k]['name']   = $e['google']['fa'].'Google Books';
$d[$k]['eq']     = $e['amazon']['fa'].'Amazon';
$d[$k]['altOn']  = '<a href="http://fr.wikisource.org/wiki/Wikisource:Accueil">WikiSource</a>, <a href="http://gallica.bnf.fr/html/livres/livres">Gallica</a>, <a href="https://inventaire.io">Inventaire</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="https://github.com/seblucas/cops">Cops</a>, <a href="http://calibre2opds.com/">Calibre2OPDS</a>';
$d[$k]['pos']    = '663,345,40';
$d[$k]['FDate']  = '<a href="http://framablog.org/2015/06/22/framabookin-devenez-le-concurrent-damazon">2015</a>';
$d[$k]['cat']    = 'media';

// Google Docs
$k= 'gdocs';
$d[$k]['FL']     = 'https://framapad.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-detherpad/';
$d[$k]['S']      = '<a href="http://etherpad.org/">Etherpad</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">pad</b></a>';
$d[$k]['name']   = $e['google']['fa'].'Google Docs';
$d[$k]['eq']     = $e['microsoft']['fa'].'Office 365, Zoho Office';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '390,75,40';
$d[$k]['FDate']  = '<a href="http://www.framablog.org/index.php/post/2011/03/28/framapad-collaboration-en-ligne">2011</a>';
$d[$k]['cat']    = 'office';

// Google Form
$k= 'gforms';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://www.drupal.org/project/webform">Webform</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">forms</b>';
$d[$k]['FDate']  = '2017';
$d[$k]['name']   = $e['google']['fa'].'Google Forms';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '<a href="https://www.limeservice.com/en/">LimeService</a>, <a href="http://webform.com">Webform</a>';
$d[$k]['altOff'] = '<a href="https://www.limesurvey.org/en/">LimeSurvey</a>, <a href="https://github.com/spiral-project/daybed">DayBed</a>';
$d[$k]['pos']    = '265,635,40';
$d[$k]['FDate']  = '2016';
$d[$k]['cat']    = 'office';

// Google Groupes
$k= 'ggroups';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://www.sympa.org/">Sympa</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">listes</b>';
$d[$k]['name']   = $e['google']['fa'].'Google Groupes';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '<a href="http://riseup.net/">Riseup</a>, <a href="https://www.ouvaton.org/">Ouvaton</a>, <a href="https://www.sud-ouest.org/">Sud-Ouest</a>, <a href="https://www.fdn.fr/Listes-de-diffusion.html">FDN</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://www.gnu.org/software/mailman/">Mailman</a>';
$d[$k]['pos']    = '405,693,40';
$d[$k]['FDate']  = '2016';
$d[$k]['cat']    = 'social';

// Google Maps
$k= 'gmaps';
$d[$k]['FL']     = 'https://framacarte.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://bitbucket.org/yohanboniface/umap">uMap</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">carte</b></a>';
$d[$k]['name']   = 'Google Maps';
$d[$k]['eq']     = 'Bing Maps, ViaMichelin, Mappy';
$d[$k]['altOn']  = '<a href="https://www.openstreetmap.org/">OpenStreetMap</a>, <a href="http://umap.openstreetmap.fr">uMap</a>';
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '620,420,40';
$d[$k]['FDate']  = '<a href="http://framablog.org/2015/12/">2015</a>'; // à actualiser quand l'article sera paru
$d[$k]['cat']    = 'geo';

// Google Reader
$k= 'greader';
$d[$k]['FL']     = 'https://framanews.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://tt-rss.org/">TinyTinyRSS</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">news</b></a>';
$d[$k]['name']   = $e['google']['fa'].'Google Reader';
$d[$k]['eq']     = 'Feedly';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://freshrss.org/">FreshRSS</a>, <a href="https://miniflux.net/">Miniflux</a>';
$d[$k]['pos']    = '455,92,40';
$d[$k]['FDate']  = '<a href="http://www.framablog.org/index.php/post/2013/06/27/framanews-rss-google-reader">2013</a>';
$d[$k]['cat']    = 'web';

// Google Search
$k= 'gsearch';
$d[$k]['FL']     = 'https://framabee.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-searx/';
$d[$k]['S']      = '<a href="https://github.com/asciimoo/searx">Searx</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">bee</b></a>';
$d[$k]['name']   = $e['google']['fa'].'Google Search';
$d[$k]['eq']     = $e['microsoft']['fa'].'Bing, Yahoo';
$d[$k]['altOn']  = '<a href="https://duckduckgo.com/">DuckDuckGo</a>, <a href="https://startpage.com/">StartPage</a> (<a href="https://www.ixquick.com/">Ixquick</a>), <a href="https://www.qwant.com/">Qwant</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://fr.wikipedia.org/wiki/YaCy">YaCy</a>, <a href="http://fr.wikipedia.org/wiki/Seeks">Seeks</a>, <a href="http://codingteam.net/project/mysearch">MySearch</a>';
$d[$k]['pos']    = '390,350,40';
$d[$k]['FDate']  = '<a href="http://framablog.org/2015/05/05/framabee-le-meta-moteur-qui-va-vous-butiner-le-web/">2015</a>';
$d[$k]['cat']    = 'web';

// Google Slides
$k= 'gslides';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://strut.io/">Strut</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">slides</b>';
$d[$k]['name']   = $e['google']['fa'].'Google Slides';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = $d[$k]['S'];
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '515,490,40';
$d[$k]['FDate']  = '2016';
$d[$k]['cat']    = 'office';

// Google Spreadsheet
$k= 'gspreadsheet';
$d[$k]['FL']     = 'http://framacalc.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://ethercalc.org/">Ethercalc</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">calc</b></a>';
$d[$k]['name']   = $e['google']['fa'].'Google Spreadsheet';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://www.zkoss.org/product/zkspreadsheet">ZK Spreadsheet</a>';
$d[$k]['pos']    = '385,270,40';
$d[$k]['FDate']  = '<a href="http://www.framablog.org/index.php/post/2012/10/03/framacalc-tableur-sur-internet">2012</a>';
$d[$k]['cat']    = 'office';

// Img.ur
$k= 'imgur';
$d[$k]['FL']     = 'https://framapic.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-lutim/';
$d[$k]['S']      = '<a href="https://git.framasoft.org/luc/lutim">Lutim</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">pic</b></a>';
$d[$k]['name']   = 'Img.ur';
$d[$k]['eq']     = $e['facebook']['fa'].'Instagram';
$d[$k]['altOn']  = '<a href="http://pix.toile-libre.org/">Toile libre</a>, <a href="https://lut.im">Lutim</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://www.mad5.de/ownstagram/">ownStagram</a>, <a href="https://coquelicot.potager.org/">Coquelicot</a>';
$d[$k]['pos']    = '665,197,40';
$d[$k]['FDate']  = '<a href="http://framablog.org/2015/03/16/huit-re-framapic-framabin-framasoft-met-les-bouchees-triples/">mars 2015</a>';
$d[$k]['cat']    = 'files';

// Meetup
$k= 'meetup';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://github.com/psycojoker/wanawana">WanaWana</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">meet</b>';
$d[$k]['name']   = 'Meetup';
$d[$k]['eq']     = $e['facebook']['fa'].'Facebook Event';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '452,540,40';
$d[$k]['FDate']  = '2016';
$d[$k]['cat']    = 'social';

// Pastebin
$k= 'pastebin';
$d[$k]['FL']     = 'https://framabin.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-zerobin/';
$d[$k]['S']      = '<a href="http://sebsauvage.net/wiki/doku.php?id=php:zerobin">Zerobin</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">bin</b></a>';
$d[$k]['name']   = 'Pastebin';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://0bin.net/">0bin</a>';
$d[$k]['pos']    = '650,270,40';
$d[$k]['FDate']  = '<a href="http://framablog.org/2015/03/16/huit-re-framapic-framabin-framasoft-met-les-bouchees-triples/">2015</a>';
$d[$k]['cat']    = 'files';

// Pocket
$k= 'pocket';
$d[$k]['FL']     = 'http://framabag.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://www.wallabag.org/">Wallabag</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">bag</b></a>';
$d[$k]['name']   = $e['pocket']['fa'].'Pocket';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '362,430,40';
$d[$k]['FDate']  = '<a href="http://www.framablog.org/index.php/post/2014/02/05/Framabag-service-libre-gratuit-interview-developpeur">2014</a>';
$d[$k]['cat']    = 'web';

// Shrtct
$k= 'loomio';
$d[$k]['FL']     = 'https://framavox.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-loomio/';
$d[$k]['S']      = '<a href="https://www.loomio.org">Loomio</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">vox</b></a>';
$d[$k]['name']   = 'Shrtct';
$d[$k]['eq']     = '1000minds';
$d[$k]['altOn']  = $d[$k]['S'];
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://liquidfeedback.org/">LiquidFeedback</a>';
$d[$k]['pos']    = '420,620,40';
$d[$k]['FDate']  = '<a href="http://framablog.org/2016/06/07/framavox-discutez-decidez-et-faites-entendre-votre-voix">2016</a>';
$d[$k]['cat']    = 'social';

// Skype
$k= 'skype';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="https://jitsi.org/Projects/JitsiMeet">Jitsi Meet</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">talk</b>';
$d[$k]['name']   = $e['microsoft']['fa'].'Skype';
$d[$k]['eq']     = $e['google']['fa'].'Hangouts';
$d[$k]['altOn']  = $d[$k]['S'].', <a href="https://vroom.im/">Vroom.im</a>, <a href="https://hubl.in/">Hubl.in</a>';
$d[$k]['altOff'] = '<a href="https://jitsi.org/">Jitsi</a>, <a href="https://tox.chat/">Tox</a>, <a href="https://ring.cx">Ring</a>';
$d[$k]['pos']    = '330,675,40';
$d[$k]['FDate']  = '2016';
$d[$k]['cat']    = 'social';

// Trello
$k= 'trello';
$d[$k]['FL']     = 'https://framaboard.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-kanboard/';
$d[$k]['S']      = '<a href="http://kanboard.net/">Kanboard</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">board</b></a>';
$d[$k]['name']   = $e['trello']['fa'].'Trello';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://wekan.io/">Wekan</a>';
$d[$k]['pos']    = '370,510,40';
$d[$k]['FDate']  = '<a href="http://framablog.org/2015/10/07/framaboard-les-libristes-ont-reinvente-le-tableau-blanc-mais-en-mieux/">2015</a>';
$d[$k]['cat']    = 'office';

// Twitter
$k= 'twitter';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://twister.net.co/">Twister</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">tweet</b>';
$d[$k]['name']   = $e['twitter']['fa'].'Twitter';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '<a href="https://babytwit.fr/">Babytwit</a>, <a href="https://pump.io">Pump.io</a>, <a href="https://quitter.se/">Quitter</a>';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="https://gnu.io/social/">GNUSocial</a>';
$d[$k]['pos']    = '500,605,40';
$d[$k]['FDate']  = '2017';
$d[$k]['cat']    = 'social';

// WeTransfer
$k= 'wetransfer';
$d[$k]['FL']     = 'https://framadrop.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-lufi/';
$d[$k]['S']      = '<a href="https://git.framasoft.org/luc/lufi">Lufi</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">drop</b></a>';
$d[$k]['name']   = 'Wetransfer';
$d[$k]['eq']     = 'Dropsend';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="https://coquelicot.potager.org/">Coquelicot</a>, <a href="https://gitlab.com/mojo42/Jirafeau">Jirafeau</a>';
$d[$k]['pos']    = '253,548,40';
$d[$k]['FDate']  = '<a href="http://framablog.org/2015/10/09/framadrop-emailez-de-gros-fichiers-en-toute-securite/">2015</a>';
$d[$k]['cat']    = 'files';

// Youtube
$k= 'youtube';
$d[$k]['FL']     = 'https://framatube.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://mediadrop.net/">Mediadrop</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="rouge">tube</b></a>';
$d[$k]['name']   = $e['google']['fa'].'Youtube';
$d[$k]['eq']     = 'Vimeo, Dailymotion, Netflix';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://butterproject.org/">Butter (PopcornTime)</a>, <a href="http://mediagoblin.org/">Mediagoblin</a>, <a href="http://cumulusclips.org/">CumulusClips</a>, <a href="http://www.kaltura.org/">Kaltura</a>, <a href="http://plumi.org/">Plumi</a>';
$d[$k]['pos']    = '665,590,40';
$d[$k]['FDate']  = '2017';
$d[$k]['cat']    = 'media';

/********************
 * Pas sur la carte
 ********************/
// JS Fiddle
$k= 'jsfiddle';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://jsbin.com/">JS Bin</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">xxx</b>';
$d[$k]['name']   = 'jsFiddle';
$d[$k]['eq']     = 'Codepen';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="http://dabblet.com/">Dabblet</a>';
$d[$k]['pos']    = '';
$d[$k]['FDate']  = '2017';
$d[$k]['cat']    = 'dev';

// Kongregate
$k= 'kongregate';
$d[$k]['FL']     = 'http://framagames.org';
$d[$k]['CL']     = '';
$d[$k]['S']      = 'divers';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">games</b></a>';
$d[$k]['name']   = 'Kongregate';
$d[$k]['eq']     = 'Angry Bird, Candy Crush';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '';
$d[$k]['pos']    = '';
$d[$k]['FDate']  = '<a href="http://framablog.org/2015/06/18/framagames-des-jeux-pour-changer-les-idees-aux-lyceens/">2015</a>';
$d[$k]['cat']    = 'hobbies';

// Padlet
$k= 'padlet';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://scrumblr.ca/">Scrumblr</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">xxx</b>';
$d[$k]['name']   = 'Padlet';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '';
$d[$k]['FDate']  = '2016';
$d[$k]['cat']    = 'office';

// Pixlr
$k= 'pixlr';
$d[$k]['FL']     = 'http://framavectoriel.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-svg-edit/';
$d[$k]['S']      = '<a href="https://code.google.com/p/svg-edit/">SVG-Edit</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">vectoriel</b></a>';
$d[$k]['name']   = 'Pixlr';
$d[$k]['eq']     = 'Picozu, Google Drawing';
$d[$k]['pos']    = '';
$d[$k]['FDate']  = '<a href="http://www.framablog.org/index.php/post/2012/10/23/framavectoriel">2012</a>';
$d[$k]['cat']    = 'office';

// Scribd
$k= 'scribd';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://webodf.org/">WebODF</a> ou <a href="https://pdf.yt/">PDFy</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">xxx</b>';
$d[$k]['name']   = 'Scribd';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '';
$d[$k]['FDate']  = '2016';
$d[$k]['cat']    = 'files';

// Slack
$k= 'slack';
$d[$k]['FL']     = 'https://framateam.org';
$d[$k]['CL']     = 'http://framacloud.org/cultiver-son-jardin/installation-de-gitlab-et-mattermost/';
$d[$k]['S']      = '<a href="http://www.mattermost.org/">Mattermost</a>';
$d[$k]['F']      = '<a href="'.$d[$k]['FL'].'"><b class="violet">Frama</b><b class="vert">team</b></a>';
$d[$k]['name']   = 'Slack';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = $d[$k]['S'].', <a href="https://rizzoma.com/">Rizzoma</a>, <a href="https://rocket.chat/">Rocket.chat</a>';
$d[$k]['pos']    = '';
$d[$k]['FDate']  = '<a href="http://framablog.org/2016/05/10/framateam-liberez-vos-equipes-des-groupes-facebook-et-de-slack/">2016</a>';
$d[$k]['cat']    = 'social';

// Transifex
$k= 'transifex';
$d[$k]['FL']     = '';
$d[$k]['CL']     = '';
$d[$k]['S']      = '<a href="http://pootle.translatehouse.org/">Pootle</a>';
$d[$k]['F']      = '<b class="violet">Frama</b><b class="vert">poulpe</b>';
$d[$k]['name']   = 'Transifex';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '<a href="https://launchpad.net/launchpad">Rosetta (Launchpad)</a>';
$d[$k]['altOff'] = $d[$k]['S'];
$d[$k]['pos']    = '';
$d[$k]['FDate']  = '2016';
$d[$k]['cat']    = 'dev';

/****************
 * Mises à jour *
 ****************/
// Etherpad Lite
$k = 'up-padlite'; $ko = 'gdocs'; // prefixe "up-" obligatoire ; $ko est l'id du projet initial
$d[$k]['FL']     = $d[$ko]['FL']; // Copier/Coller
$d[$k]['S']      = $d[$ko]['S'];
$d[$k]['F']      = $d[$ko]['F'];
$d[$k]['FDate']  = '2013';

// Wisemapping
$k = 'up-framindmap2'; $ko = 'bubblus';
$d[$k]['FL']     = $d[$ko]['FL'];
$d[$k]['S']      = $d[$ko]['S'];
$d[$k]['F']      = $d[$ko]['F'];
$d[$k]['FDate']  = '2014';

// Framadate 0.8
$k = 'up-framadate2'; $ko = 'doodle';
$d[$k]['FL']     = $d[$ko]['FL'];
$d[$k]['S']      = $d[$ko]['S'];
$d[$k]['F']      = $d[$ko]['F'];
$d[$k]['FDate']  = '2014';

// MyPads
$k = 'up-mypads'; $ko = 'gdocs';
$d[$k]['FL']     = $d[$ko]['FL'];
$d[$k]['S']      = $d[$ko]['S'];
$d[$k]['F']      = $d[$ko]['F'];
$d[$k]['FDate']   = '2015';

/**********************
 * Status des projets *
 **********************/
// $potion = alternatives en préparation
// $fight = alternatives opérationnelles
$potion  = ['avaaz','gslides','skype','youtube','1000minds','gforms','transifex'];
$fight   = ['bubblus','doodle','dropbox','gdocs','greader','gspreadsheet',
            'pixlr','facebook','pocket','bitly','github','gbooks','gmaps',
            'gsearch','imgur','kongregate','loomio','pastebin','slack','trello','wetransfer'];

/**********************
 * Projets hors Frama *
 **********************/
// AirBnB
$k= 'airbnb';
$d[$k]['S']      = '';
$d[$k]['F']      = '<a href="http://www.bewelcome.org/">BeWelcome</a>';
$d[$k]['name']   = 'AirBnB';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '<a href="https://www.trustroots.org/">Trustroots</a>';
$d[$k]['altOff'] = '<a href="http://trac.bewelcome.org/">BW Rox</a>';
$d[$k]['cat']    = 'hobbies';

// AWeber
$k= 'aweber';
$d[$k]['S']      = '';
$d[$k]['F']      = '<a href="https://www.phplist.com/">PHP List</a>';
$d[$k]['name']   = 'AWeber';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '<a href="https://www.phplist.com/">PHP List</a>';
$d[$k]['cat']    = 'social';

// Blablacar
$k= 'blablacar';
$d[$k]['S']      = '';
$d[$k]['F']      = '<a href="http://www.covoiturage-libre.fr/">Covoiturage Libre</a>';
$d[$k]['name']   = 'Blablacar';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '';
$d[$k]['cat']    = 'hobbies';

// Camptocamp
$k= 'routard';
$d[$k]['S']      = '';
$d[$k]['F']      = '<a href="https://fr.wikivoyage.org">Wikivoyage</a>';
$d[$k]['name']   = 'Guide du Routard';
$d[$k]['eq']     = 'Petit Futé, Voyage Michelin';
$d[$k]['altOn']  = '<a href="http://camptocamp.org">CampToCamp</a>';
$d[$k]['altOff'] = '<a href="https://github.com/c2corg/camptocamp.org">CampToCamp</a>';
$d[$k]['cat']    = 'hobbies';

// Chrome
$k= 'gchrome';
$d[$k]['S']      = '';
$d[$k]['F']      = '<a href="https://www.mozilla.org/fr/firefox/products/">Firefox</a>';
$d[$k]['name']   = 'Google Chrome';
$d[$k]['eq']     = 'Edge (Internet Explorer), Safari, Opera';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '<a href="https://www.torproject.org/projects/torbrowser.html.en">Tor Browser</a>, <a href="http://www.qupzilla.com/">Qupzilla</a>, <a href="http://www.midori-browser.org/">Midori</a>';
$d[$k]['cat']    = 'home';


// Deezer
$k= 'deezer';
$d[$k]['S']      = '';
$d[$k]['F']      = '<a href="http://dogmazic.net">Dogmazic</a>';
$d[$k]['name']   = 'Deezer';
$d[$k]['eq']     = 'Spotify, Soundcloud';
$d[$k]['altOn']  = '<a href="http://jamendo.com">Jamendo</a>';
$d[$k]['altOff'] = '';
$d[$k]['cat']    = 'media';

// Flickr
$k= 'flickr';
$d[$k]['S']      = '';
$d[$k]['F']      = '<a href="http://piwigo.com/">Piwigo</a>';
$d[$k]['name']   = 'Flickr';
$d[$k]['eq']     = 'Instagram, Picasa, Tumblr, Pinterest';
$d[$k]['altOn']  = '<a href="https://commons.wikimedia.org">Wikimedia Commons</a>, <a href="http://data.abuledu.org/wp/">Data Abulédu</a>, <a href="http://openclipart.org/">Openclipart</a>';
$d[$k]['altOff'] = '<a href="http://piwigo.org/">Piwigo</a>, <a href="http://www.zenphoto.org/">Zenphoto</a>, <a href="http://www.mad5.de/ownstagram/">ownStagram</a>';
$d[$k]['cat']    = 'media';

// Google Analytics
$k= 'ganalytics';
$d[$k]['S']      = '<a href="http://piwik.com/">Piwik</a>';
$d[$k]['F']      = '';
$d[$k]['name']   = 'Google Analytics';
$d[$k]['eq']     = 'Xiti';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '<a href="http://www.openwebanalytics.com/">Open Web Analytics</a>';
$d[$k]['cat']    = 'site';

// Orange
$k= 'orange';
$d[$k]['S']      = '';
$d[$k]['F']      = '<a href="https://www.ffdn.org/fr/membres">FFDN</a>';
$d[$k]['name']   = 'Orange';
$d[$k]['eq']     = 'SFR, Free, OVH';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '<a href="https://www.fdn.fr/">FDN</a>, <a href="http://tetaneutral.net/">Tetaneutral</a>, <a href="http://neutrinet.be/">Neutrinet</a>, <a href="http://www.illyse.net/">Illyse</a>, <a href="http://www.franciliens.net/">Franciliens.net</a>';
$d[$k]['cat']    = 'home';

// Outlook
$k= 'outlook';
$d[$k]['S']      = '';
$d[$k]['F']      = '<a href="https://www.mozilla.org/thunderbird">Thunderbird</a> + <a href="https://enigmail.net/">Enigmail</a>';
$d[$k]['name']   = 'Outlook';
$d[$k]['eq']     = 'Apple Mail';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '<a href="https://trac.torproject.org/projects/tor/wiki/torbirdy">Tor Birdy</a>, <a href="http://userbase.kde.org/KMail/fr">KMail</a>, <a href="http://sylpheed.sraoss.jp/en/">Sylpheed</a>';
$d[$k]['cat']    = 'home';

// OVH
$k= 'ovh';
$d[$k]['S']      = '';
$d[$k]['F']      = '<a href="http://chatons.org"><abbr title="Collectif des Hébergeurs Alternatifs Transparents Ouverts Neutres et Solidaires">CHATONS</abbr></a>';
$d[$k]['name']   = 'OVH';
$d[$k]['eq']     = 'Online';
$d[$k]['altOn']  = '<a href="http://www.rhien.org/Hebergeurs,59.html">RHIEN</a>, <a href="https://indiehosters.net/">IndieHosters</a>, <a href="https://www.zaclys.com/">La mère Zaclys</a>, <a href="http://www.infini.fr/">Infini</a>';
$d[$k]['altOff'] = '<a href="https://cozy.io/fr/">Cozy</a>, <a href="http://yunohost.org">Yunohost</a>, <a href="https://sandstorm.io/">Sandstorm</a>';
$d[$k]['cat']    = 'site';

// Paypal
$k= 'paypal';
$d[$k]['S']      = '';
$d[$k]['F']      = '<a href="http://bitcoin.org/">Bitcoin</a>';
$d[$k]['name']   = 'Paypal';
$d[$k]['eq']     = 'Orange Contact+, Google Wallet, Apple Pay';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '<a href="https://litecoin.org/">Litecoin</a>';
$d[$k]['cat']    = 'home';

// Universalis
$k= 'universalis';
$d[$k]['S']      = '';
$d[$k]['F']      = '<a href="http://wikipedia.org">Wikipedia</a>';
$d[$k]['name']   = 'Universalis';
$d[$k]['eq']     = '';
$d[$k]['altOn']  = '<a href="http://fr.vikidia.org/">Vikidia</a>, <a href="http://www.appropedia.org">Appropedia</a>';
$d[$k]['altOff'] = '<a href="http://www.okawix.com/">Okawix</a>, <a href="https://www.dokuwiki.org/">Dokuwiki</a>, <a href="https://www.mediawiki.org/">Mediawiki</a>';
$d[$k]['cat']    = 'media';

// Xmarks
$k= 'xmarks';
$d[$k]['S']      = '<a href="http://sebsauvage.net/wiki/doku.php?id=php:shaarli">Shaarli</a>';
$d[$k]['F']      = '';
$d[$k]['name']   = 'Xmarks';
$d[$k]['eq']     = 'Google Bookmarks';
$d[$k]['altOn']  = '';
$d[$k]['altOff'] = '';
$d[$k]['cat']    = 'web';


?>
