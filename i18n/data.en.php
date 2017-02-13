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
$l['Charte'] = 'https://framasoft.org/nav/html/charte.en.html';
$l['contact'] = 'https://contact.framasoft.org';
$l['participer'] = $l['contact'].'/participer';

// Images
$l['map'] = 'img/Carte2016-victoires-en.png';

// Meta
$t['meta']['lang']      = 'en';
$t['meta']['title']     = 'De-google-ify Internet';
$t['meta']['framasoft'] = 'Framasoft';
$t['meta']['F']         = '<a href="'.$l['F'].'"><b class="violet">Frama</b><b class="orange">soft</b></a>';
$t['meta']['DIo']       = '<a href="'.$l['DIo'].'"><b class="violet">De-google-ify</b> <b class="orange">Internet</b></a>';
$t['meta']['start']     = 'Beginning of the campaign on the 10/07/2014';
$t['meta']['edit']      = 'Last modification on the 30/09/2016';
$t['meta']['S']         = 'Support this project';
$t['meta']['lead']      = 'An initiative of the '.$t['meta']['F'].' network for a<br/>
                <a href="#leds">Free</a>, <a href="#leds" >Decentralized</a>,
                <a href="#leds">Ethical</a> Internet built on <a href="#leds">Solidarity</a> ';

// LEDS
$t['meta']['leds']['title']   = 'For an Internet…';
$t['meta']['leds']['ltitle']  = 'Free';
$t['meta']['leds']['ldesc']   = 'As far as standards and protocols are concerned, the story of the Internet is one of
free software.
But its popularity and potential make big firms jealous. They would like to claim control of it by establishing closed code in locked systems that are not interoperable. To keep the Internet faithful to the founding principles which led to its success, it is important that there should be free apps on the Internet, that is to say, apps with opensource codes, accessible under free licence.';

$t['meta']['leds']['dtitle']  = 'Decentralized';
$t['meta']['leds']['ddesc']   = 'The genius of the Internet must dwell at
the margins of the network in a peer-to-peer sharing dynamic, to avoid
creating a Minitel 2.0. To insure equality for all concerned, from citizens to
businesses, monopolies must not only be excluded, but also
prevented from monopolizing personal or public data. Through clear
tutorials explaining how to propagate free solutions for establishing a fairer Internet, we intend to facilitate the spreading of codes and a diversification of usages.';

$t['meta']['leds']['etitle']  = 'Ethics';
$t['meta']['leds']['edesc']   = 'We wish to support a participative and
independent Internet. Exploitation, surveillance, censorship, and data
appropriation are trends we refuse in favor of transparency (integrity), clearly displayed policies for users of the various services, and the refusal of all forms of discrimination.';

$t['meta']['leds']['stitle']  = 'Solidarity';
$t['meta']['leds']['sdesc']   = 'Through the services we provide, we promote a model based on cost participation, resource sharing, and accessibility for the largest number of people. Any abuse will thus be avoided, for we all remain fully aware of our common interests. This model also has an educational purpose since, as we document the roll-out of services, many users will in their turn be able to share those resources.';

$t['meta']['leds']['charte']  = 'To find out more about this, feel free to read <strong><a href="'.$l['Charte'].'">our detailed charter</a></strong>.';

// Accueil
$t['home']['title']  = 'Main Page';
$t['home']['link']   = $l['current'];
$t['home']['desc']   = '';
$t['home']['css']    = '<link href="'.$l['current'].'css/home.css" rel="stylesheet" type="text/css" />';
$t['home']['js']     = '
    <script src="'.$l['current'].'js/jquery.maphilight.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/imageMapResizer.min.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/home.js" type="text/javascript"></script>';
$t['home']['map']    = 'Click on the map to discover all alternatives…';
$t['home']['altMap'] = 'The year is 2016 AD. The whole web is occupied by centralized services… Well… not entirely. One small village of indomitable Free Software lovers still holds out against the invaders. And life is not easy for the legionaries who garrison the fortified camps of Closedum, Centralizum, Trackum, and Proprietarum.';

// Accueil - Camps
$t['home']['camps']['village']     = 'In the freedom defenders’ village';
$t['home']['camps']['vp1']         = 'Engulfed in sprawling multinational firms, a few non-profit organizations keep up the struggle for an open web respectful of internet users.';
$t['home']['camps']['vp2']         = 'In addition to '.$t['meta']['F'].', the non-profit association leading the campaign described here, we may also mention <a href="http://april.org">April</a>,  <a href="http://laquadrature.net">la Quadrature du Net</a> or <a href="http://aful.org">l’Aful</a>. These organizations can only keep going with the help of your donations, so don’t forget to support them!';

$t['home']['camps']['fermetum']    = '<i lang="la">Closedum</i>';
$t['home']['camps']['fp1']         = 'Online services are often
closed-source: once you start using them, it is very difficult
to leave, because these companies do everything to keep you captive by
preventing you, for example, from migrating your data elsewhere.';
$t['home']['camps']['fp2']         = 'Using open source services means making sure that you will never be controlled by a particular website, but also that you can always migrate your data elsewhere.';

$t['home']['camps']['centralisum'] = '<i lang="la">Centralizum</i>';
$t['home']['camps']['cp1']         = 'Centralized services raise many problems: they make your data very vulnerable (one inaccessible website and everything is down) and make it very easy for third parties to exploit your data.';
$t['home']['camps']['cp2']         = 'Using decentralized online services means maintaining a choice between using an online resource such as those proposed by Framasoft or installing/managing the service yourself.';

$t['home']['camps']['espionnum']   = '<i lang="la">Trackum</i>';
$t['home']['camps']['ep1']         = '“If it’s free, you are the product”: many online services make a living by exploiting your personal data, i.e., selling it to advertising companies. Furthermore, most of these services are based in the United States and obey US laws like the PATRIOT ACT which deny all rights to privacy.';
$t['home']['camps']['ep2']         = 'Using online services hosted in Europe means ensuring that you are not dependent on the laws of another continent. In addition, by hosting the service yourself, no third party can violate your privacy.';

$t['home']['camps']['privatum']    = '<i lang="la">Proprietarum</i>';
$t['home']['camps']['pp1']         = 'Freedom-depriving services ("proprietary" in everyday language) are totally opaque: it is impossible to know exactly what the software does with your data. Only the publisher has control over it.';
$t['home']['camps']['pp2']         = 'Using Free online services means being sure the community has control over the software and maintains the ability to modify it, to install it elsewhere, etc.';

$t['home']['camps']['nsa']         = '<abbr>NSA</abbr>';
$t['home']['camps']['np1']         = 'Edward Snowden’s revelations about the PRISM program of the <abbr>NSA</abbr> showed that fears about massive violations of users’ privacy were well-founded.';
$t['home']['camps']['np2']         = 'Using centralized services
amounts to offering your personal data to surveillance organizations without any means to control what they do with it.';

// Accueil - Enjeux
$t['home']['enje']['btn']   = 'Stakes';
$t['home']['enje']['title'] = 'What is at stake?';
$t['home']['enje']['p1']    = 'In recent years, we have witnessed <strong> the widespread corporate concentration of Internet actors</strong>  (Youtube belonging to Google, WhatsApp to Facebook, Skype to Microsoft, etc.). This centralisation is detrimental, not only because it curbs innovation, but also because it results in a loss of freedom for users, <strong>who no longer control their digital existence<strong>: their behaviour is continually dissected and analysed so that they can be better targeted by publicity, and their data – which should be private (sites visited, emails exchanged, videos watched, etc.) – can be analysed by government services.';
$t['home']['enje']['p2']    = 'The way that Framasoft would like to deal with this issue is simple: to highlight and provide a Free, Ethical, Decentralised and Solidarity-based alternative to each of these services which deprive users of their freedom.';

// Accueil - Dangers
$t['home']['dang']['btn']   = 'Threats';
$t['home']['dang']['title'] = 'Threats';
$t['home']['dang']['intro'] = 'The increasingly centralized online services provided by sprawling giants like Google, Amazon, Facebook, Apple, or Microsoft (GAFAM) pose a threat to our digital lives.';

// EPCF (Espionnum, Privatum, Centralisum, Fermetum)
$t['home']['dang']['e']     = 'Surveillance';
$t['home']['dang']['ep']    = 'These services track us everywhere, while claiming to give us a better “user experience”. But our behaviour is under constant surveillance. This information can be used to display targeted adverts, but the revelations of the Snowden case have also shown that Internet giants have been forced to communicate this data (sometimes extremely private: emails from Gmail, photos shared on Facebook, Skype conversations, smartphone locations, etc.) to government services. Under the pretense of fighting terrorism, states are able to gather much more intelligence than a "Big Brother" would ever have dreamed of.';

$t['home']['dang']['erefs'] = '
                  <ul>
                      <li>Numerama, the 13/05/2014 : <a href="http://www.numerama.com/magazine/29353-la-nsa-accusee-d-avoir-piege-les-routeurs-americains.html">La NSA accusée d’avoir piégé les routeurs américains</a></li>
                    <li>Numerama, the 12/09/2014 : <a href="http://www.numerama.com/magazine/30539-yahoo-revele-le-chantage-des-usa-pour-espionner-les-internautes.html">Yahoo révèle le chantage des USA pour espionner les internautes</a></li>
                    <li>Numerama, the 04/07/2013 : <a href="http://www.numerama.com/magazine/26435-prism-l-allemagne-qui-espionne-aussi-deconseille-le-web-americain.html">PRISM : l’Allemagne, qui espionne aussi, déconseille le web américain</a></li>
                    <li>Le Monde, the 27/06/2013: <a href="http://www.lemonde.fr/sciences/article/2013/06/27/il-est-temps-de-parler-des-metadonnees_3437125_1650684.html">Il est temps de parler des métadonnées</a></li>
                    <li>Atlantico, the 25/11/2013, <a href="http://www.atlantico.fr/pepites/espionnage-etat-veut-attaquer-nos-donnees-personnelles-908758.html">Espionnage : l’Etat veut s’attaquer à nos données personnelles</a></li>
                    <li>Le Monde, the 20/03/2014 : <a href="http://www.lemonde.fr/international/article/2014/03/20/dgse-orange-des-liaisons-incestueuses_4386264_3210.html">Espionnage : comment Orange et les services secrets coopèrent</a></li>
                        <li>Le Monde, the 15/09/2014: <a href="http://www.lemonde.fr/proche-orient/article/2014/09/15/terrorisme-un-projet-de-loi-dangereux_4487639_3218.html">Terrorisme : un projet de loi dangereux</a></li>
                        <li>Présumés Terroristes, september 2014 : <a href="https://presumes-terroristes.fr/">Loi Terrorisme. Sacrifier les libertés sous prétexte de lutte contre le terrorisme ? NON !</a></li>
                        <li>Europe1, the 12/02/2014 : <a href="http://www.europe1.fr/high-tech/et-si-samsung-se-mettait-a-espionner-ses-propres-smartphones-1799713">Et si Samsung se mettait à "espionner" ses propres smartphones?</a></li>
                        <li>Rue89, the 13/12/2008 :<a href="http://rue89.nouvelobs.com/2008/12/13/ecoutes-ce-qui-est-possible-avec-votre-telephone-portable">Ecoutes : ce qui est possible avec votre téléphone portable</a></li>
                        <li>Le Monde, the 21/03/2014 : <a href="http://www.lemonde.fr/international/article/2014/03/21/la-france-suspectee-de-cyberattaque_4387232_3210.html">La France suspectée de cyberespionnage</a></li>
                        <li>Pixels (Le Monde), the 14/09/2014 : <a href="http://www.lemonde.fr/pixels/article/2014/09/13/la-nsa-et-le-gchq-auraient-pirate-cinq-operateurs-telecom-allemands_4487181_4408996.html">La NSA et le GCHQ auraient piraté cinq opérateurs télécom allemands</a></li>
                        <li>Pixels (Le Monde), the 16/09/2014 :  <a href="http://www.lemonde.fr/pixels/breve/2014/09/16/tim-cook-estime-que-les-etats-unis-sont-alles-trop-loin-dans-la-collecte-des-donnees_4488172_4408996.html">Tim Cook estime que les Etats-Unis sont allés trop loin dans la collecte des données</a></li>
                        <li>Liberation, the 01/07/2014 :  <a href="http://www.liberation.fr/monde/2014/07/01/la-nsa-espionnait-193-pays-et-aussi-l-ue-et-le-fmi_1054881">La NSA espionnait 193 pays</a></li>
                        <li>Numerama, the 24/07/2014 : <a href="http://www.numerama.com/magazine/30101-des-backdoors-sur-ios-tout-ce-qu-il-faut-savoir.html">Des backdoors sur iOS ? Tout ce qu’il faut savoir</a></li>
                        <li>Bug Brother (Le Monde), the 11/02/2014 : <a href="http://bugbrother.blog.lemonde.fr/2014/02/11/le-gif-qui-revele-la-paranoia-de-la-nsaqui-espionne-donc-aussi-vos-enfants-parents-amis/">Le .gif qui révèle la paranoïa de la NSA, et pourquoi elle espionne aussi vos parents & amis</a></li>
                        <li>Rue89, the 15/08/2013 :  <a href="http://rue89.nouvelobs.com/2013/08/15/les-messages-envoyes-compte-gmail-peuvent-etre-interceptes-alors-244954">Les e-mails envoyés sur Gmail peuvent être interceptés. Et alors ?</a></li>
                        <li>Écrans.fr, the 07/06/2013 : <a href="http://ecrans.liberation.fr/ecrans/2013/06/07/le-fbi-a-acces-aux-comptes-facebook-google-yahoo_909023">Le FBI a accès aux comptes Facebook, Google, Yahoo!…</a></li>
                          <li>Le Monde.fr, the 27/01/2014 : <a href="http://www.lemonde.fr/technologies/article/2014/01/27/des-applications-mobiles-utilisees-par-la-nsa-et-son-homologue-britannique_4355371_651865.html">Des applications de smartphones "mises sur écoute" par la NSA</a></li>
                    </ul>';

$t['home']['dang']['p']     = 'Privacy';

$t['home']['dang']['pp']    = 'Our data is an extension of ourselves. It tells third-parties where we are, who we are with, our political and sexual orientations, sites we have visited, our favorite recipes, our favorite topics of interest, and so on. While a single data point is not always sensitive, the loss of large amounts of aggregated data can be dangerous (for example if you browse topics about cancer before subscribing to a life insurance)<br>
<strong>Your private life is an essential part of your individuality</strong>, and in a world where everything has been digitized (ebooks, TV, phones, music, social networks, etc.), it would only take a malicious hacker with access to your smartphone a few minutes to cause you serious harm (taking control of your identity on Facebook, consulting your professional or medical information, making purchases without your authorisation, etc.).';

$t['home']['dang']['prefs'] = '
                    <ul>
                        <li>Numerama, the 17/05/2014 : <a href="http://www.numerama.com/magazine/29400-et-maintenant-google-lit-vos-factures.html">Et maintenant Google lit vos factures</a></li>
                        <li>Numerama, the 06/02/2014 : <a href="http://www.numerama.com/magazine/28299-yahoo-transfere-votre-vie-privee-en-irlande.html">Yahoo transfère votre vie privée en Irlande</a></li>
                        <li>L’Expansion, the 16/01/2014 : <a href="http://lexpansion.lexpress.fr/high-tech/e-commerce-vos-donnees-personnelles-sont-en-danger_1326103.html">E-commerce: vos données personnelles sont en danger</a></li>
                        <li>Numerama, the 21/02/2014 : <a href="http://www.numerama.com/magazine/28515-donnees-personnelles-la-chute-de-confiance.html">Données personnelles : la chute de confiance</a></li>
                        <li>INRIA, the 12/04/2013 : <a href="http://hal.inria.fr/hal-00812734">Internet du futur : performances et respect de la vie privée</a></li>
                        <li>Numerama, the 04/08/2014 : <a href="http://www.numerama.com/magazine/30187-google-a-signale-un-usager-qui-avait-envoye-des-photos-pedopornographiques-par-mail.html">Google a signalé un usager qui avait envoyé des photos pédopornographiques par mail</a></li>
                        <li>Rue89, the 03/07/2013 : <a href="http://rue89.nouvelobs.com/2013/07/31/payer-carte-sans-code-sans-contact-sans-risque-244508">Payer par carte mais sans code : le "sans contact", pas sans risque</a></li>
                        <li>Slate, the 03/10/2014 : <a href="http://www.slate.fr/story/92887/apple-google-facebook-sante">Après Apple et Google, Facebook se penche aussi sur notre santé</a></li>
                        <li>CNIL, mai 2014 : <a href="http://www.cnil.fr/fileadmin/documents/La_CNIL/publications/DEIP/CNIL_CAHIERS_IP2_WEB.pdf ">Le corps, nouvel objet connecté (Cahiers IP num. 2)</a></li>
                        <li>Numerama, the 22/08/2014 : <a href="http://www.numerama.com/magazine/30323-apple-approche-les-mutuelles-pour-divulguer-le-comportement-des-assures.html">Apple approche les mutuelles pour divulguer le comportement des assurés</a></li>
                        <li>JDN, the 23/01/2014 : <a href="http://www.journaldunet.com/ebusiness/le-net/iwatch-apple-incroyable.shtml">Apple embauche des experts en contrôles sanguins</a></li>
                        <li>Challenges, the 06/06/2014 : <a href="http://www.challenges.fr/entreprise/20140606.CHA4685/comment-l-assureur-axa-va-surveiller-votre-conduite.html">Comment l’assureur Axa va surveiller votre conduite</a></li>
                        <li>UFC-Que-Choisir, the 25/03/2014 : <a href="http://www.quechoisir.org/telecom-multimedia/internet/communique-donnees-personnelles-l-ufc-que-choisir-attaque-les-reseaux-sociaux-et-appelle-les-consommateurs-a-garder-la-main-sur-leurs-donnees"> L’UFC-Que Choisir attaque les réseaux sociaux et appelle les consommateurs à garder la main sur leurs données</a></li>
                        <li>Ecrans.fr, the 22/01/2011 :  <a href="http://ecrans.liberation.fr/ecrans/2011/10/22/facebook-la-memoire-cachee_956055">Facebook: la mémoire cachée</a></li>
                        <li>Clubic, the 25/03/2013 : <a href="http://www.clubic.com/internet/google/actualite-549552-google-reader-fermeture-liee-problematiques-vie-privee.html">Google Reader : une fermeture liée aux problématiques de vie privée ?</a></li>
                        <li>Rue89, the 14/01/2014 : <a href="http://rue89.nouvelobs.com/2014/01/14/google-lance-les-objets-connectes-sincruste-chez-249023">Google se lance dans les objets connectés et s’incruste chez vous</a></li>
                        <li>Numerama the 30/06/2014 : <a href="http://www.numerama.com/magazine/29852-facebook-a-teste-sa-capacite-de-manipulation-mentale-des-foules.html">Facebook a testé sa capacité de manipulation mentale des foules</a></li>
                        <li>Numerama, the 18/08/2014 : <a href="http://www.numerama.com/magazine/30290-comment-chrome-envoie-tous-vos-mots-de-passe-a-google.html">Comment Chrome envoie tous vos mots de passe à Google</a></li>
                        <li>Rue89, the 29/08/2014 : <a href="http://rue89.nouvelobs.com/2014/08/29/iphone-6-apres-lempreinte-digitale-apple-veut-ficher-etat-sante-254496">iPhone 6 : après l’empreinte digitale, Apple veut ficher votre état de santé</a></li>
                        <li>LDN, the 17/04/2014 : <a href="http://ldn-fai.net/je-nai-rien-a-cacher/">Je n’ai rien à cacher</a></li>
                        <li>Numerama, the 26/09/2014 : <a href="http://www.numerama.com/magazine/30707-facebook-sait-ou-vous-passez-votre-lune-de-miel-maj.html">Même si vous dites rien, Facebook sait où vous passez votre lune de miel</a></li>
                        <li>Journal du Net, the 16/07/14 : <a href="http://www.journaldunet.com/ebusiness/le-net/informations-rassemblees-par-google.shtml">Soyons honnêtes, la quantité  d’informations que Google rassemble à notre sujet est effrayante</a></li>
                        <li>Big Browser, the 18/11/14 : <a href="http://bigbrowser.blog.lemonde.fr/2014/11/18/comment-avoir-bonne-presse-un-dirigeant-duber-propose-de-fouiller-la-vie-privee-des-journalistes-trop-critiques/">Comment avoir bonne presse ? Un dirigeant d’Uber propose de fouiller la vie privée des journalistes trop critiques</a></li>
                    </ul>';

$t['home']['dang']['c']     = 'Centralization';
$t['home']['dang']['cp']    ='Major actors of the Internet have become real giants: Google owns Youtube and Waze, Facebook has acquired WhatsApp and Instagram, Microsoft distributes Skype, etc.<br>
This concentration of actors creates multiple issues: what if Facebook were suddenly shut down? And how could we browse the Web if Google went down?
<strong>We rely more and more on services provided by a small group of suppliers.</strong> For example, Apple (iPhone), Google (Android) and Microsoft (Windows Phone) dominate almost the entire mobile OS industry.<br>
Furthermore, the size of these actors impedes innovation: it’s hard to launch a startup that can match up to Apple or Google (the first and second worldwide market capitalisations, respectively).<br>
Finally, The lack of diversity of the giants means they can track many people who are unaware that there may be alternatives, and it can influence the kind of data you receive (a Google search will produce different results for the term “nuclear power” depending on whether Google considers you to be an environmentalist or pro-nuclear power).';

$t['home']['dang']['crefs'] = '
                      <ul>
                          <li>NextInpact, the 14/06/2014 : <a href="http://www.nextinpact.com/news/88112-les-geants-net-generent-nouveaux-rapports-force.htm">Les géants du Net génèrent de nouveaux rapports de force</a></li>
                        <li>Numerama, the 09/03/2013 : <a href="http://www.nextinpact.com/news/78092-edito-la-domination-et-centralisation-ennemis-numero-web.htm">La domination et la centralisation, les ennemis numéro un du web</a></li>
                        <li>Droit et Technologies, the 25/02/2013 : <a href="http://www.droit-technologie.org/actuality-1577/cloud-la-perte-totale-des-donnees-est-possible-la-preuve-par-2e2-et.html">Cloud : la perte totale des données est possible. La preuve par 2e2 et Megaupload.</a></li>
                        <li>INRIA, the 27/09/2011: <a href="http://www.inria.fr/actualite/actualites-inria/massification-du-web-les-consequences">La « massification » du web transforme les relations sociales</a></li>
                        <li>INRIA, the 13/03/2013 : <a href="http://www.inria.fr/centre/lille/agenda/data-et-big-data-le-nouvel-or-noir">Data et Big Data : le nouvel or noir?</a></li>
                        <li>Le Monde, the 12/06/2013: <a href="http://www.lemonde.fr/technologies/chat/2013/06/12/surveillance-d-internet-peut-on-encore-proteger-notre-vie-privee_3428413_651865.html">Pourquoi stocker toutes nos vies sur des serveurs aux Etats-Unis?</a></li>
                        <li>Rue89, the 17/07/2009 : <a href="http://rue89.nouvelobs.com/rue69/2009/07/13/pour-sauver-la-vertu-de-son-iphone-apple-censure-a-tout-va">Pour sauver la vertu de son iPhone, Apple censure à tout va</a></li>
                        <li>Nextinpact, the 08/04/2013 :  <a href="http://www.nextinpact.com/news/78883-appgratis-supprime-app-store-pour-son-reperage-promotions.htm">AppGratis supprimé de l’App Store pour son repérage des promotions</a></li>
                        <li>Ecrans.fr, the 25/04/2013 : <a href="http://ecrans.liberation.fr/ecrans/2013/04/25/google-devoile-une-flambee-de-la-censure_957911">Google dévoile une flambée de la censure</a></li>
                        <li>Nextinpact, the 24/04/2014 : <a href="http://www.nextinpact.com/news/87203-comment-etats-unis-veulent-enterrer-neutralite-net.htm">Comment les États-Unis veulent enterrer la neutralité du net</a></li>
                    </ul>';

$t['home']['dang']['f']     = 'Termination';
$t['home']['dang']['fp']    = 'Web services used on your computer, smartphone, tablets (and other devices) are usually hosted on the “cloud”: servers spread across the planet, that host not only your data (emails, pictures, files, etc.), but also the application code.<br>
For your data, this raises the issue of sustainability (what would become of your files if Dropbox were to close tomorrow?) and of your ability to switch easily between services (how would you recover your data from Facebook or Picasa and import it, with all the adjoining comments, into another service?). <br>
For applications, this means that <strong>you are completely at the mercy of
your service provider</strong> when it comes to proliferation of
advertisements, changes to the user interface, etc., and that you have hardly any control over the way an application works. It is a “black box” that can exhibit malicious behaviour (sending spam SMS without your knowledge, executing malicious code, and so on).<br>
In short, these companies trap us in gilded cages: gilded yes, but cages nonetheless!';

$t['home']['dang']['frefs'] = '
                    <ul>
                        <li>CNIL, the 03/01/2014 : <a href="http://www.legifrance.gouv.fr/affichCnil.do?oldAction=rechExpCnil&id=CNILTEXT000028450267&fastReqId=2000051504&fastPos=1">Exemple de sanction de la CNIL à l’encontre de Google</a></li>
                        <li>01Net, the 23/11/2012 : <a href="http://www.01net.com/editorial/580825/securite-le-cloud-est-plus-dangereux-que-les-virus/">Sécurité : le cloud est plus dangereux que les virus</a></li>
                        <li>CNIL, the 25/06/2012 : <a href="http://www.cnil.fr/fileadmin/images/la_cnil/actualite/Recommandations_pour_les_entreprises_qui_envisagent_de_souscrire_a_des_services_de_Cloud.pdf">Recommandations pour les entreprises qui envisagent de souscrire à des services de Cloud computing</a></li>
                        <li>INRIA, the 13/12/2013 : <a href="http://hal.inria.fr/hal-00918398">Quand les terminaux mobiles jouent les mouchards de poche</a></li>
                        <li>INAGlobal, the 04/02/2014 : <a href="http://www.inaglobal.fr/numerique/article/facebook-nen-fais-pas-une-affaire-de-donnees-personnelles">Facebook, n’en fais pas une affaire de données personnelles!</a></li>
                        <li>Rue89, the 03/02/2013 : <a href="http://rue89.nouvelobs.com/2013/02/03/qui-appartiennent-vos-donnees-sur-internet-mauvaises-nouvelles-et-conseils-239198">A qui appartiennent vos données sur Internet ? Mauvaises nouvelles et conseils</a></li>
                        <li>Atlantico, the 16/06/2014 : <a href="http://www.atlantico.fr/decryptage/quelle-cible-publicitaire-etes-pourquoi-avez-peut-etre-interet-utiliser-fonctions-facebook-et-google-pour-connaitre-que-geants-1617661.html">Quelle cible publicitaire êtes-vous?</a></li>
                        <li>Nextinpact, the 22/07/2009 : <a href="http://www.nextinpact.com/archive/52115-amazon-kindle-ebook-disparaitre-orwell.htm">Des ouvrages d’Orwell supprimés du Kindle par Amazon</a></li>
                        <li>Rue89, the 18/11/2013 : <a href="http://rue89.nouvelobs.com/2013/11/18/google-facebook-apple-superpuissances-ont-privatise-internet-247615">Google, Facebook, Apple… : ces superpuissances ont privatisé Internet</a></li>
                        <li>Liberation.fr, the 07/03/2014 : <a href="http://next.liberation.fr/sexe/2014/03/07/la-fin-du-porno-sur-vine-un-espace-de-liberte-en-moins_985232">La fin du porno sur Vine, un espace de liberté en moins</a></li>
                        <li>Liberation.fr, the 14/03/2014 : <a href="http://next.liberation.fr/sexe/2014/03/14/apple-censure-un-roman-francais-pour-cause-de-seins-nus_987120">Apple censure un roman français pour cause de seins nus</a></li>
                        <li>Rue89, the 29/05/2014 : <a href="http://rue89.nouvelobs.com/2014/05/29/chantage-google-apple-amazon-les-tontons-ecrabouilleurs-252521">Chantage : Google, Apple et Amazon, les tontons écrabouilleurs</a></li>
                        <li>Numerama, the 09/08/2014 : <a href="http://www.numerama.com/magazine/30226-quand-facebook-est-en-panne-le-trafic-des-sites-baisse.html">Quand Facebook est en panne, le trafic des sites baisse</a></li>
                        <li>NextInpact, the 22/08/2014 : <a href="http://www.nextinpact.com/news/89379-quand-twitter-deraille-avec-timeline-ses-utilisateurs.htm">Quand Twitter déraille avec la timeline de ses utilisateurs</a></li>
                          </ul>';

// Accueil - Nos propositions
$t['home']['prop']['btn']   = 'Our proposals';
$t['home']['prop']['title'] = 'Our proposals';
$t['home']['prop']['intro'] = 'Framasoft wishes to face the threats to our digital lives by offering free, ethical, decentralised, and solidarity-based services.';

// LEDS (Libre, Éthique, Décentralisé, Solidaire)
$t['home']['prop']['l']     = 'Freedom';
$t['home']['prop']['lp1']   = 'The story of the Internet itself is one of free software, and this goes for standards as well as protocols. Its potential and popularity are a cause for envy, and large companies would like nothing better than to control it by imposing closed-source, locked-down, and non-interoperable systems.';
$t['home']['prop']['lp2']   = 'For the Internet to stay true to its
founding principles, those which have led to its success, users must be
able to choose free software, that is to say, software whose source code remains open and accessible and is covered by a free software license.';
$t['home']['prop']['lp3']   = 'Framasoft is thus committed to using only software with “free” source code.';

$t['home']['prop']['e']     = 'Ethics';
$t['home']['prop']['ep1']   = 'We promote an Internet based on independence and sharing.';
$t['home']['prop']['ep2']   = 'We oppose the exploitation, surveillance, censorship and appropriation of data in favour of transparency (probity), clear presentation of services’ terms of use and refusing discrimination.';
$t['home']['prop']['ep3']   = 'Framasoft undertakes not to exploit its users’ data, and to promote a fair and open Web.';

$t['home']['prop']['d']     = 'Decentralization';
$t['home']['prop']['dp1']   = 'Internet intelligence must remain with each individual player on the network, in a spirit of sharing among peers, to avoid creating a Minitel (a pre-Internet videotext terminal and service) version 2.0.';
$t['home']['prop']['dp2']   = 'To ensure equality for all, whether citizens or businesses, not only is it essential to avoid monopolies, but large organizations must be prevented from grabbing personal or public data.';
$t['home']['prop']['dp3']   = 'Using tutorials to explain how to increase the use of free solutions that will allow a fairer Internet, we help to distribute codes and diversify usage.';
$t['home']['prop']['dp4']   = 'Framasoft is thus committed to facilitating self-hosting and interoperability, so that its users don’t get “locked in”.';

$t['home']['prop']['s']     = 'Solidarity';
$t['home']['prop']['sp1']   = 'Through the services we deploy, we promote an economic model based on sharing costs and resources, and providing widespread access.';
$t['home']['prop']['sp2']   = 'This model also has an educational aspect because we believe that by documenting ways to setup services, many users will in turn be able to share these resources.';
$t['home']['prop']['sp3']   = 'We think that, by not infantilizing users and by sharing responsibility for the use of services, it will be possible to regulate abuse.';
$t['home']['prop']['sp4']   = 'Framasoft is thus committed to promoting respect and autonomy for its users (as long as this is reciprocated).';

// Service & Charte
$t['home']['prop']['s&c']   = 'Services and Charter';
$t['home']['prop']['s&cp']  = 'You can find online the list of the services we already offer (and those yet to come), together with our charter:';
$t['home']['prop']['charte'] = 'Framasoft service charter';

// Accueil - Concrètement
$t['home']['conc']['btn']   = 'In practice';
$t['home']['conc']['title'] = 'In practice';
$t['home']['conc']['p1']    = 'The “de-google-ify Internet” project -
which does not exclusively concern Google - consists in <strong> offering as many alternative services as possible to those we consider a threat to our digital lives</strong>.';
$t['home']['conc']['p2']    = 'Google Docs, Skype, Dropbox, Facebook, Twitter, Google Agenda, Youtube, Doodle, Yahoo! Groups, and many others, are extremely convenient services but <strong>they have become far too large and have made us dependent on them</strong>.
Framasoft wishes to resist this trend and is putting forward a roadmap for setting up alternative services over several years.';
$t['home']['conc']['p3']    = 'These services are free, gratis, open to all (insofar as our technical and financial capabilities allow us), as <strong><a href="http://en.wikipedia.org/wiki/Commons" title="Bien communs">digital commons</a></strong>.
With the goal of decentralising the Internet and promoting self-hosting, we will do our best to ensure that everyone can install their own services (for themselves, for their organisation, or their company).';
$t['home']['conc']['p4']    = 'We are not aiming to compete with these services of course. We merely wish to offer a space that is neutral, non-commercial, and in no way aggressive towards its users.';
$t['home']['conc']['p5']    = '<strong>See the list of services we are already offering (and those that we are preparing):</strong>';
$t['home']['conc']['stitle'] = 'Support';
$t['home']['conc']['sp1']   = 'A project with such a wide scope cannot happen without <strong>your support</strong>.';
$t['home']['conc']['sp2']   = 'Whether you are a developer, a graphic designer, systems administrator, etc., you can contact us to take an active part in the project.';
$t['home']['conc']['cbtn']  = 'Contact Framasoft';
$t['home']['conc']['sp3']     = 'The simplest and quickest way to help us remains financial support: it allows us to pay for the infrastructure (servers) and the permanent staff committed to the success of this ambitious project. Framasoft is a public interest association ]: a €100 donation will cost you €34, after tax exemption (if you are in France).';
$t['home']['conc']['sbtn']  = 'Donate<br /> to Framasoft';

// Liste des services
$t['list']['title']     = 'List of services';
$t['list']['roadmap']   = 'Roadmap';
$t['list']['link']      = 'list';
$t['list']['desc']      = 'List of free, ethical, decentralized, and solidarity-based online services offered by Framasoft (or in progress) to de-google-ify Internet';
$t['list']['css']       = '
    <link href="'.$l['current'].'css/list.css" rel="stylesheet" type="text/css" />';
$t['list']['js']        = '
    <script src="'.$l['current'].'js/list.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/leds.js" type="text/javascript"></script>';

// Liste des alternatives
$t['alt']['title']       = 'List of alternatives';
$t['alt']['link']        = $l['current'].'alternatives';
$t['alt']['desc']        = 'List of free, ethical, decentralized, and solidarity-based online alternatives recommended by Framasoft to de-google-ify Internet';
$t['alt']['css']         = '
    <link href="'.$l['current'].'css/list.css" rel="stylesheet" type="text/css" />';
$t['alt']['js']          = '
    <script src="'.$l['current'].'js/list.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/leds.js" type="text/javascript"></script>';
$t['alt']['alt1']        = 'You use';
$t['alt']['alt2']        = ' recommends';
$t['alt']['alt3']        = 'based on ';
$t['alt']['altp1']       = $t['meta']['F'].' aims to <a href="'.$l['DIoL'].'">offer around thirty free alternative services</a>
                            to provide a substitute for those services which, once they get hold of us, proceed to feed upon our data.<br>
                            But there are many other players working to de-google-ify Internet and many other such services.';
$t['alt']['altp2']       = 'Here is <a href="#tips" rel="nofollow">ci-dessous</a> a list summarizing and supplementing the alternatives already presented <a href="'.$l['DIo'].'">on the home page</a>.
                            It is inspired by <a href="https://prism-break.org/fr/">Prism-Break</a> which promotes other software in more specialized areas.';
$t['alt']['altp3']       = 'In the list, each service generally includes a <b>complex website</b> <span aria-hidden="true">(<i class="fa fa-fw fa-cloud"></i>)</span>
                            communicating with <b>software installed on a computer</b> <span aria-hidden="true">(<i class="fa fa-fw fa-server"></i>)</span> which stores personal data
                            and which can be accessed through various <b>home-based tools</b> <span aria-hidden="true">(<i class="fa fa-fw fa-home"></i>)</span>.';
$t['alt']['altp4']       = 'So when we use Internet, we must necessarily <b>trust several links in the chain</b>
                            joining us to our personal data online.
                            Unless we self-host, <b>the <i lang="en">cloud</i> is always someone else\'s computer</b>.
                            It is therefore important to know who we are being asked to trust and what their software is doing with our data.';

// Espace médias
$t['medias']['title']   = 'Media area';
$t['medias']['link']    = 'medias';
$t['medias']['desc']    = '';
$t['medias']['css']     = '<link href="'.$l['current'].'css/list.css" rel="stylesheet" type="text/css" />';
$t['medias']['js']      = '<script src="'.$l['current'].'js/leds.js" type="text/javascript"></script>';

$t['medias']['subtitle']    = '3 October 2016 : year 3 of the de-google-ification of the Internet.';
$t['medias']['intro']       = 'To begin this third year of its campaign of alternative proposals for services provided by Google & co, Framasoft is launching six new services based on free software as of 3 October.';
$t['medias']['btnCPtxt']    = 'Read the<br/>press release';
$t['medias']['btnCPurl']    = 'img/2016_communique_degooglisons_Framasoft.html';
$t['medias']['btnDPtxt']    = 'Download the<br/>press release';
$t['medias']['btnDPurl']    = 'img/dossier_presse-Degooglisons_internet-2016.pdf';
$t['medias']['1title']      = 'Posts on the Framablog';
$t['medias']['1intro']      = '<a href="http://framablog.org">Framablog</a> is our main tool for communicating with the general public. All six of the new services launching our campaign will be presented during the week of 3 October 2016.';
$t['medias']['1list']       = '
                        <ul>
                            <li><em>Monday 03/10</em> : Présentation de <a href="https://framablog.org/2016/10/03/degooglisons-saison-3-30-services-alternatifs-aux-produits-de-google-co/">la 3e année de la campagne Dégooglisons Internet</a>.</li>
                            <li><em>Monday 03/10</em> : <a href="http://framablog.org/2016/10/03/framalistes-vos-groups-nont-plus-a-appartenir-a-google">Framalistes</a>, alternative à Google Groups.</li>
                            <li><em>Tuesday 04/10</em> : <a href="http://framablog.org/2016/10/04/framanotes-vos-notes-vous-appartiennent-for-ever">Framanotes</a>, alternative à Evernote.</li>
                            <li><em>Wednesday 05/10</em> : <a href="http://framablog.org/2016/10/05/framaforms-noffrez-plus-les-reponses-que-vous-collectez-a-google">Framaforms</a> alternative à Google Forms.</li>
                            <li><em>Thursday 06/10</em> : <a href="http://framablog.org/2016/10/06/framatalk-semez-la-discord-sur-skype-et-cie">Framatalk</a>, alternative à Skype.</li>
                            <li><em>Friday 07/10</em> : <a href="http://framablog.org/2016/10/07/framagenda-ne-partagez-plus-votre-planning-et-vos-contacts-avec-la-nsa">Framagenda</a> alternative à Google Agenda & Contacts.</li>
                            <li><em>Monday 10/10</em> : <a href="http://framablog.org/2016/10/10/myframa-vos-favoris-et-framasofteries-partout-avec-vous-rien-qua-vous">MyFrama</a> alternative à Del.icio.us & au compte unifié Google.</li>
                        </ul>';
$t['medias']['2title']      = 'Link to services';
$t['medias']['2intro']      = 'Even though they will be presented throughout the week on our blog, these six new services will be online as early as 3 October. Click on the name of the service to try it.';
$t['medias']['2list']       = '
                        <ul>
                            <li><a href="https://framalistes.org"><b class="violet">Frama</b><b class="vert">listes</b></a></li>
                            <li><a href="https://framanotes.org"><b class="violet">Frama</b><b class="vert">notes</b></a></li>
                            <li><a href="https://framaforms.org"><b class="violet">Frama</b><b class="vert">forms</b></a></li>
                            <li><a href="https://framatalk.org"><b class="violet">Frama</b><b class="vert">talk</b></a></li>
                            <li><a href="https://framagenda.org"><b class="violet">Fram</b><b class="vert">agenda</b></a></li>
                            <li><a href="https://my.framasoft.org"><b class="violet">My</b><b class="vert">Frama</b></a></li>
                        </ul>';

$t['medias']['tabstitle']   = 'Visuals for de-google-ify year 3.';
$t['medias']['tabsintro']   = 'Unless otherwise stated, all our visuals are made by <a href="http://ptilouk.net">Simon « Gee » Giraudot</a> and are freely reusable under licence <a href="http://creativecommons.org/licenses/by-sa/4.0/"><span lang="en">Creative Commons By</span>-<abbr>SA</abbr> 4.0</a>.</em> These visuals are in large size (contrary to appearances). However, if you need a higher resolution, feel free to contact us.';
$t['medias']['tabssaveas']  = 'To reuse the picture, right click on the image and “save image as”';

$t['medias']['t1']          = 'Maps';
$t['medias']['t1i1txt']     = 'Map “Before”';
$t['medias']['t1i1url']     = 'img/Carte2016-romains-en.png';
$t['medias']['t1i1desc']    = 'Map of France invaded by GAFAM services (Oct 2014)';
$t['medias']['t1i2txt']     = 'Map “After”';
$t['medias']['t1i2url']     = 'img/Carte2016-victoires-en.png';
$t['medias']['t1i2desc']    = 'Map of France with Framasoft’s alternatives (Oct 2015)';
$t['medias']['t1i3txt']     = 'Animated map';
$t['medias']['t1i3url']     = 'img/Carte2016-animation-en.gif';
$t['medias']['t1i3desc']    = 'Animation de la reconquête des services GAFAM (format .gif)';

$t['medias']['t2']          = 'Drawings';
$t['medias']['t2i1txt']     = 'Drawing “Closed”';
$t['medias']['t2i1url']     = 'img/stevusjobus.png';
$t['medias']['t2i2txt']     = 'Drawing “Cyber Police”';
$t['medias']['t2i2url']     = 'img/cyberpolicus.png';
$t['medias']['t2i3txt']     = 'Drawing “Spies”';
$t['medias']['t2i3url']     = 'img/bourrepifix.png';
$t['medias']['t2i4txt']     = 'Drawing “Stallman”';
$t['medias']['t2i4url']     = 'img/stallmanoramix.png';
$t['medias']['t2i5txt']     = 'Drawing “oversight”';
$t['medias']['t2i5url']     = 'img/village.png';
$t['medias']['t2i6txt']     = 'Drawing “GAFAM”';
$t['medias']['t2i6url']     = 'img/GAFAM.png';
$t['medias']['t5i6txt']     = '<b class="violet">De-google-ify</b> <b class="orange">Internet</b>';
$t['medias']['t5i6url']     = 'img/anim_dio'; // .mp4 et .webm

$t['medias']['t3']          = 'Videos';
$t['medias']['t3intro']     = 'We have had the opportunity to explain our project at conferences. We have selected these two video recordings (and their embed code) so that you can freely reuse them on your websites.';
$t['medias']['t3v1txt']     = 'Short version (FR - 17mn)';
$t['medias']['t3v1img']     = 'https://framatube.org/images/media/925l.jpg';
$t['medias']['t3v1mp4']     = 'https://framatube.org/blip/gosset-owf-dio.mp4';
$t['medias']['t3v1webm']    = 'https://framatube.org/blip/gosset-owf-dio.webm';
$t['medias']['t3v2txt']     = 'Long version (FR - 24mn)';
$t['medias']['t3v2img']     = 'https://framatube.org/images/media/1059l.jpg';
$t['medias']['t3v2mp4']     = 'https://framatube.org/blip/de_google_ify.mp4';
$t['medias']['t3v2webm']    = 'https://framatube.org/blip/de_google_ify.webm';

$t['medias']['t4']          = 'Screenshot';

$t['medias']['t6']          = 'Presentation';
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
$t['medias']['t7i3desc']    = '<i lang="fr">Attention : Amazon très méchant</i>';
$t['medias']['t7i4txt']     = 'Facebook';
$t['medias']['t7i4url']     = 'img/stickerDiO_facebook.png';
$t['medias']['t7i4desc']    = 'Facebook is watching you.';
$t['medias']['t7i5txt']     = 'Apple';
$t['medias']['t7i5url']     = 'img/stickerDiO_apple.png';
$t['medias']['t7i5desc']    = 'Apple: Kids, don\'t do drugs.';
$t['medias']['t7i6txt']     = 'Microsoft';
$t['medias']['t7i6url']     = 'img/stickerDiO_microsoft.png';
$t['medias']['t7i6desc']    = 'Microsoft: do you need a backdoor?';

$t['medias']['presstitle']  = 'Press Release';
$t['medias']['pressintro']  = 'The “De-google-ify Internet” campaign already received a lot of attention during the first year. Here are some extracts from our <a href="https://wiki.framasoft.org/speakabout">Press release</a>.';
$t['medias']['pressth1']    = 'Date';
$t['medias']['pressth2']    = 'Media';
$t['medias']['pressth3']    = 'Link';
$t['medias']['presslist']   = [
    ['24/08/2016', 'Opensource.com (english)',
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
$t['medias']['framatitle']  = 'Framasoft in a few links';
$t['medias']['framalist']   = '
                        <ul >
                              <li><a href="https://contact.framasoft.org/#questions">Contact us</a> (This form relates directly to our press service).</li>
                            <li><a href="https://fr.wikipedia.org/wiki/Framasoft">Wikipedia page</a> dedicated to Framasoft.</li>
                            <li>Framasoft <a href="https://soutenir.framasoft.org/association">Complete presentation</a>.</li>
                            <li>Framasoft <a href="https://wiki.framasoft.org/speakabout">Press release</a>.</li>
                        </ul>';
$t['medias']['framap1']     = 'Framasoft is a freely available public education network which aims to promote and spread free software and free culture.';
$t['medias']['framap2']     = 'As a link between the world of free software and the general public, our association offers many projects (directory software, a publisher, a websearch engine, etc.), with three main goals: Free Software, Free Culture, and Free Services.';
$t['medias']['framap3']     = '<em>The logo is a realization of JosephK under licence <a href="http://creativecommons.org/licenses/by-sa/4.0/"><span lang="en">Creative Commons By</span>-<abbr>SA</abbr> 4.0</a>.</em>';

// Texte générique
$t['_Close']            = 'Close';
$t['_More']             = 'More';
$t['_Support']          = 'Support';
$t['_Use']              = 'Use';
$t['_Install']          = 'Install';
$t['_Project updated']  = 'Project updated';
$t['_Project loading']  = 'Project loading';
$t['_Project running']  = 'Project running';
$t['_ is an instance based on '] = ' is an instance based on ';
$t['_Read more']        = 'Read more';
$t['_Some examples ?']  = 'Some examples ?';
$t['_Back to top']      = 'Back to top';
$t['_Editor: ']         = 'Editor: ';
$t['_Equivalent(s): ']          = 'Equivalent(s): ';
$t['_Alternative(s) online: ']  = 'Alternative(s) online';
$t['_Alternative(s) offline: '] = 'Alternative(s) offline';
$t['_Framasoft service: ']      = 'Framasoft service: ';
$t['_release planned on ']      = 'Release planned on';
$t['_Select the language']      = 'Select the language';
$t['_Change the language']      = 'Change the language';
$t['_OK']                       = 'OK';
$t['_since']                    = 'since';
$t['_GAFAM']                    = 'GAFAM';
$t['_& co']                     = '& co';
$t['_Software']                 = 'Software';
$t['_LEDS']                     = 'LEDS';
$t['_Libre, Éthique, Décentralisé et Solidaire'] = 'Free, Ethical, Decentralized and Solidarity-based';
$t['_ with your help']          = ' with your help';

/*************
 * Objectifs *
 *************/
$d['tip2017'] = [
      'name'  => '€180,000 + 1,250 regular donors',
    'F'     => '11 employees',
    'mBody' => '<p>We should come close to our goal! Some “tricky” services still remain to be set up, like messaging services, viz., mailing lists and e-mail.</p>
                <p>On the one hand, these services are more expensive to set up: it’s easier to manage a website that generates a million views per day than to manage 10,000 e-mail accounts! On the other hand, we’ll have to ensure the smooth running of all the projects and services that will then have been set up. This includes maintenance, updates, support, etc.</p>
                <p>This implies that we should hire 3 new collaborators, mainly on technical profiles.</p>
                <p>To grasp the relatively tiny scale of our needs: our goal for 2017 —€180,000 and 1,250 regular donors— represents the approximate cost of 54 meters of motorway, or 0.0006% of Google’s annual revenue.</p>'
];
$d['tip2016'] = [
    'name'  => '€130,000 + 1,080 regular donors',
    'F'     => '8 employees',
    'mBody' => '<p>By early 2016, Framasoft will already be providing more than twenty online services. But we have no intention of stopping there! Indeed, we wish to provide more and new free alternatives to the services supplied by the Internet giants, such as:</p>
                <ul>
                    <li>A shared online agenda (as an alternative to Google Agenda)</li>
                    <li>A microblogging service (as an alternative to Twitter)</li>
                    <li>An open source video hosting service (as an alternative to Youtube)</li>
                </ul>
                <p>In order to implement these projects and maintain the existing projects, Framasoft would need to hire three new collaborators, i.e., a developer, a second sysadmin, and an administrator. </p>
                <p>ministrator. </p>
                <p>We are aware that we cannot abuse the kindness of our donators and systematically ask them for funds. Therefore we may try to reach the required amount with the help of grants. </p>
                <p>To appreciate the scale of our needs: our goal for 2016 —€130,000 and 1080 regular donors— represents the approximate cost of 38 meters of motorway, or 0.0004% of Google’s annual revenue.</p>'
];
$d['tip2015'] = [
    'name'  =>  '€70,000 + 780 regular donors',
    'F'     => '5 employees',
    'mBody' => '<p>Framasoft plans to start providing several important online services in 2015:</p>
                <ul>
                    <li>An online file storage service (as an alternative to Dropbox)</li>
                    <li>A sharing service for large files (as an alternative to WeTransfer)</li>
                    <li>An online presentation/slideshow service (as a sort of online alternative to MS PowerPoint)</li>
                    <li>A videoconferencing service (as an alternative to Skype), embedded in your web browser without requiring any software installation.</li>
                </ul>
                <p>In order to implement these projects and maintain the existing projects, Framasoft would need to hire, in addition to its current employees, a full-time sysadmin and two interns.</p>
                <p>To appreciate the scale of our needs: our goal for 2015 —€70,000 and 780 regular donors— represents the approximate cost of 21 meters of motorway, or 0.0002% of Google’s annual revenue.</p>'
];
$d['tip2014'] = [
    'name'  => '€ 35,000 + 550 regular donors',
    'F'     => '3 employees',
    'mBody' => '<p>2014 was particularly intense for the Framasoft NPO, since we had to establish and fine-tune our battleplan to help you resist Google, Facebook, and the others…</p>
                <p>Amongst other things, the organization has invested both time and money in the technical infrastructure which supports existing services. This will allow us to comfortably host the applications we intend to provide in coming years.</p>
                <p>You can help us meet these goals:</p>
                <ul>
                    <li>increase the size of our technical infrastructure, i.e., increase the computing power of our virtual machine cluster and its storage capacity</li>
                    <li>pay the wages of our two full-time employees</li>
                    <li>hire a third full-time employee (communication manager)</li>
                    <li>finance the development of upgrades to some of our existing services (Framadate and Framindmap, amongst others)</li>
                    <li>coordinate the entire project “De-Google-ify the Internet”</li>
                </ul>
                <p>Our target was to increase the number of regular donors from 400 to 550, as well as to collect €35,000 in one-time donations over the year.</p>
                <p>We remind you that Framasoft is a non-profit organisation and largely self-financed, thanks to the generosity of its donors. To appreciate the scale of our needs: our goal for 2014 —€35,000 and 550 regular donors— represents the approximate cost of 8 meters of motorway, or 0.000083% of Google’s annual revenue.</p>'
];
for ($i=2014; $i<2018; $i++) {
    $d['tip'.$i]['FDate']  = $i;
    $d['tip'.$i]['sDesc']   = 'Goals';
    $d['tip'.$i]['lDesc']   = 'You can help us meet these goals';
    $d['tip'.$i]['mTitle']  = 'Our goals for '.$i;
    $d['tip'.$i]['mFooter'] = '<a href="'.$l['S'].'" class="btn btn-soutenir"><i class="fa fa-fw fa-heart"></i> Support</a>';
}

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

// Avaaz
$k= 'avaaz';
$d[$k]['sDesc']  = 'Petitions';
$d[$k]['lDesc']  = 'Launch your petitions without giving away the addresses of your backers';
$d[$k]['mTitle'] = 'Free your petitions';
$d[$k]['mBody']  = '<p>
                            '.$d[$k]['F'].' allows you to launch petitions on issues that matter to you. With a few clicks, your petition is published and the addresses of your backers will not be  available for unwanted uses such as affiliate marketing.
                    </p>
                    <p>
                            <b class="violet">How does it work? </b> Sign up and launch a new petition by simply following the instructions. Your survey will be created. Your backers will not be required to register in order to participate.
                    </p>';

// Bit.ly
$k= 'bitly';
$d[$k]['sDesc']  = 'URL shortener';
$d[$k]['lDesc']  = 'Short URLs that keep it discreet.';
$d[$k]['mTitle'] = 'Put an end to long URLs';
$d[$k]['mBody']  = '<p>
                            With '.$d[$k]['F'].' or <a href="https://huit.re">Huit.re</a>, you can shrink excessively long URLs without it being possible to track their use. On social networks or microblogs, a shortened web address can help save space or improve readability.
                    </p>
                    <p>
                          <b class="violet">How does it work?</b> Enter the original version of your URL: Frama.link shortens it. Copy the link.
                    </p>';

// Blogger
$k= 'blogger';
$d[$k]['sDesc']  = 'Weblog hosting service';
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
$d[$k]['sDesc']  = 'Mind Map';
$d[$k]['lDesc']  = 'Create your mind maps';
$d[$k]['mTitle'] = 'Why would you create a mind map?';
$d[$k]['mBody']  = '<p>
                   '.$d[$k]['F'].' allows you to organize a brainstorming session, to sort out and order your ideas, alone or with others, to teach or learn a lesson, to carry out classifications, to identify key elements, etc.
                    </p>
                    <p><video controls="controls" preload="none"
                      width="420" height="248" poster="https://framatube.org/images/media/866l.jpg">
                      <source src="https://framatube.org/files/1230-framindmap-creer-une-carte-mentale.mp4" type="video/mp4"></source>
                      <source src="https://framatube.org/files/1229-framindmap-creer-une-carte-mentale.webm" type="video/webm"></source>
                      </video>
                   </p>
                   <p><small><em>Tutorial made by Claire Cassaigne</em> - The <a href="https://framatube.org/files/1229-framindmap-creer-une-carte-mentale.webm">video</a> is available in WebM format.</small></p>
                    <p>
                         <b class="violet">Why would you use Framindmap?</b> This service is available online. No installation nor registration is required. You can choose your file format for export and save the map as an image. It is a free and open source software. The data are yours.
                    </p>';

// Del.icio.us
$k= 'delicious';
$d[$k]['sDesc']  = 'Bookmark';
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
$d[$k]['sDesc']  = 'Meetings and polls';
$d[$k]['lDesc']  = 'Schedule a meeting or create an opinion poll';
$d[$k]['mTitle'] = 'A simple way to organize your meetings';
$d[$k]['mBody']  = '<p>
                       Using '.$d[$k]['F'].' you will be able to plan a meeting with several others or create an online survey. Framadate does not store your data!
                    </p>
                    <p class="violet">Features:</p>
                    <ul>
                        <li>Email notification for every answer</li>
                        <li>Modifications of the current poll</li>
                        <li>Planning of a deadline</li>
                        <li>Naming your survey and communicating its URL to contributors</li>
                    </ul>';

// Dropbox
$k= 'dropbox';
$d[$k]['sDesc']  = 'File hosting online service';
$d[$k]['lDesc']  = 'File hosting online service';
$d[$k]['mTitle'] = 'File hosting online service';
$d[$k]['mBody']  = '<p>
                      '.$d[$k]['F'].' allows you to store your documents online, to synchronize them on your computers, tablets, phones, etc., and to share them with whoever you want.
                    </p>
                    <p>
			Nous avons ouvert 5000 comptes d´une capacité de 2 Go afin de permettre de tester une alternative libre… Pour une solution plus importante ou plus disponible, vous pouvez aller chercher un hébergement chez les <a href="https://chatons.org">CHATONS</a> dont notre partenaire <a href="https://indiehosters.net">Indie Hosters</a> (ou vous essayer à l´auto hébergement avec <a href="http://yunohost.org/">Yunohost</a>, <a href="http://labriqueinter.net/">la Brique internet</a> ou <a href="https://cozy.io/fr/">My Cozy Cloud</a>).
                    </p>';

// Evernote
$k= 'evernote';
$d[$k]['sDesc']  = 'Notetaking';
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
$d[$k]['sDesc']  = 'An ethical and decentralized social network';
$d[$k]['lDesc']  = 'An ethical and decentralized social network';
$d[$k]['mTitle'] = 'Join your friends in the free zone';
$d[$k]['mBody']  = '<p>
                         '.$d[$k]['F'].' is a social network that respects your data and your privacy. Framasphere is a node (also called <i>pod </i>) of Diaspora *, a free social network.
                    </p>
                    <p>
                         <b class="violet">How does it work? </b> Share messages and photos with anyone on the Diaspora * network, manage your contacts, tags, mentions, reshares… You can also publish on other social networks (Facebook, Twitter, Tumblr) or on WordPress.
                    </p>';

// Github
$k= 'github';
$d[$k]['sDesc']  = 'Distributed revision control (source code repository)';
$d[$k]['lDesc']  = 'Free code is good. On a free and open platform, it’s even better!';
$d[$k]['mTitle'] = 'Hosting of Free code';
$d[$k]['mBody']  = '<p>
                         '.$d[$k]['F'].' is a tool that is primarily intended for developers. It allows you to create up to 42 deposits per account – if you need more, you should seriously consider self-hosting. Compared to GitHub, the little extra is that you can create private deposits.</p>
                    </p>
                    <p>You can also mirror your repositories on GitHub automatically: you keep “feeding the beast” but you are less dependent, and you remain visible to the eyes of the nearly 10 million users registered on GitHub. Your deposit on our Framagit is automatically pushed to your GitHub repository. This is also the choice made by Framasoft: we still have a GitHub account, while we continue to develop our projects.</p>';

// Gmail
$k= 'gmail';
$d[$k]['sDesc']  = 'Mailing service';
$d[$k]['lDesc']  = 'Your e-mails, with no NSA inside';
$d[$k]['mTitle'] = 'Your mails, in a shielding shell';
$d[$k]['mBody']  = '';

// Google Agenda
$k= 'gagenda';
$d[$k]['sDesc']  = 'Shared calendar';
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
$d[$k]['sDesc']  = 'Online books';
$d[$k]['lDesc']  = 'An open library which offers thousands of books';
$d[$k]['mTitle'] = 'Catalog of books available to everyone';
$d[$k]['mBody']  = '<p>
                          '.$d[$k]['F'].' is Framasoft’s <abbr>OPDS</abbr>  catalog.  “OK, so what?” you may ask. An Open Publication Distribution System (<abbr>OPDS</abbr>) is a website you subscribe to with a software supporting this functionality – some E-readers embed one, such as Aldiko and others for Android. It provides you with quick and easy access to an entire library from your computer, smartphone, or tablet.
                    </p>
                    <p> Framasoft’s <abbr>OPDS</abbr> catalog gives you access to hundreds of non-copyrighted books.</p>';

// Google Docs
$k= 'gdocs';
$d[$k]['sDesc']  = 'Collaborative writing';
$d[$k]['lDesc']  = 'A collaborative real-time web-based editor';
$d[$k]['mTitle'] = 'Collaborative writing service';
$d[$k]['mBody']  = '<p>
                          '.$d[$k]['F'].' is a collaborative online writing tool based on <a href="http://etherpad.org/">Etherpad</a>.
                        '.$d[$k]['S'].'.
                    </p>
                    <p>
                            A “pad” is an online text editor. But the great advantage here is the possibility of real-time collaborative writing: your contribution appears immediately on the screen of every other contributor, highlighted by a colour code.
                    </p>
                    <p class="violet">Features:</p>
                    <ul>
                        <li>Open a public or private pad</li>
                        <li>Write a document</li>
                        <li>Invite contributors</li>
                        <li>A colour code for each</li>
                        <li>Embedded chat</li>
                        <li>Version history</li>
                        <li>Export your work</li>
                        <li>Manage sessions and groups with MyPads!</li>
                    </ul>';

// Google Form
$k= 'gforms';
$d[$k]['sDesc']  = 'Online surveys';
$d[$k]['lDesc']  = 'An easy way to create your surveys';
$d[$k]['mTitle'] = 'Online survey creation tool';
$d[$k]['mBody']  = '<p>
                          '.$d[$k]['F'].' allows you to design questionnaires and surveys to meet your own specific needs, be it for school, family, an association, or work. Set up questions adapted to your own specific context, with multiple choice questions or free text fields.
                    </p>
                    <p>
                          <b class="violet">How does it work?</b> create your account on Framaforms and start writing questionnaires to meet your needs. No registration is required for respondents to post their replies. You then have access to a synopsis of the results.
                    </p>';

// Google Groups
$k= 'ggroups';
$d[$k]['sDesc']  = 'Mailing lists';
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
$d[$k]['sDesc']  = 'Cartography';
$d[$k]['lDesc']  = 'Create you own maps online';
$d[$k]['mTitle'] = 'Create you own maps online';
$d[$k]['mBody']  = '<p>
                          '.$d[$k]['F'].' allows you to create customised maps based on OpenStreetMap and show them on your website.
                    </p>
                    <p><b class="violet">How does it works ?</b></p>
                    <ul>
                        <li>Choose the background map</li>
                        <li>Add POI: marker, lines, polygons…</li>
                        <li>Choose colors and icons</li>
                        <li>Manage options of the map: add a littlemap, geolocalize user,…</li>
                        <li>Import geographics data (geojson, gpx, kml, osm…)</li>
                        <li>Choose a licence for your data</li>
                        <li>Export and share your map</li>
                    </ul>';

// Google Reader
$k= 'greader';
$d[$k]['sDesc']  = 'Web-based feed reader';
$d[$k]['lDesc']  = 'Choose freely which news to follow';
$d[$k]['mTitle'] = 'Stay up to date with the latest news';
$d[$k]['mBody']  = '<p>
                         '.$d[$k]['F'].' provides you with an online feed reader, which keeps you up to date with the latest news syndicated from the RSS feeds of your favorite websites!
                    </p>
                    <p>
                        <b class="violet">How does it work?</b> a Once your account is created, save your preferred RSS feeds and start following. It couldn’t be simpler.
                    </p>';

// Google Search
$k= 'gsearch';
$d[$k]['sDesc']  = 'Search engine';
$d[$k]['lDesc']  = 'What if your online searches weren’t tracked by Google?';
$d[$k]['mTitle'] = 'Anonymous web search';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].'  is an anonymous metasearch engine. This means that your searches are sent to several search engines and the results are then displayed in your web browser. The advantage is that Framabee acts as an intermediary between you and Google (or other search engines), so your IP address won’t be stored by any of them. </p>
                         <p>>It goes without saying that you must trust Framasoft and its tools before using Framabee. This is why we wrote this <a href="'.$l['Charte'].'">charter</a>.
                    </p>';

// Google Slides
$k= 'gslides';
$d[$k]['sDesc']  = 'Presentations';
$d[$k]['lDesc']  = 'High quality user-friendly slideshows';
$d[$k]['mTitle'] = 'An application for your slideshows';
$d[$k]['mBody']  = '<p>
                         '.$d[$k]['F'].' offers you a way to create slideshows easily and intuitively. With this application in your browser, no need to load heavy and sophisticated software.
                    </p>
                    <p class="violet">Features:</p>
                    <ul>
                        <li>a clear and intuitive interface &mdash; easy insertion of text, images, videos, and websites</li>
                        <li>local storage of a ready-to-use HTML version</li>
                    </ul>
                    <p><b class="violet">Later,</b> if we can afford it financially:</p>
                    <ul>
                        <li>cloud storage in a private space</li>
                        <li>collaborative writing features…</li>
                    </ul>';

// Google Spreadsheet
$k= 'gspreadsheet';
$d[$k]['sDesc']  = 'Participative spreadsheet';
$d[$k]['lDesc']  = 'Share your spreadsheets and work together!';
$d[$k]['mTitle'] = 'An online spreadsheet';
$d[$k]['mBody']  = '<p>
                         With '.$d[$k]['F'].', your data are automatically saved on the Internet. You and your colleagues can contribute to the same document at the same time. You can visualize every change in real time and work together on lists, calculations, data, statistics, and much, much more!
                    </p>
                    <p class="violet">Features:</p>
                    <ul>
                        <li>Collaborative edition (several users connected to the same spreadsheet)</li>
                        <li>Numerous features available (statistics, financial data, mathematics, text, etc.)</li>
                        <li>Options available to comment cells</li>
                        <li>Automated backup</li>
                        <li>Entry-level graphics (histograms, lines, dots)</li>
                        <li>HTML Export</li>
                        <li>Document size: up to 100 000 lines.</li>
                    </ul>';

// Img.ur
$k= 'imgur';
$d[$k]['sDesc']  = 'Sending pictures';
$d[$k]['lDesc']  = 'Share your pictures anonymously';
$d[$k]['mTitle'] = 'An easy way to share your images';
$d[$k]['mBody']  = '<p>
                         '.$d[$k]['F'].' provides a simple way to share images, e.g., on Twitter, Facebook or … on Framasphère!
                    </p>
                    <p> Note that this service differs significantly from flickr or instagram: it is not a hosting service for users’ pictures. Rather it hosts anonymous pictures and no one, including ourselves, has access to the cyphered content.</p>
                    <p>
                         '.$d[$k]['F'].' enables the user to send pictures anonymously. You can choose to suppress them at any time (from the first viewing, 24 hours/7days/30 days/1 year after putting them on line).
                    </p>';

// Meetup
$k= 'meetup';
$d[$k]['sDesc']  = 'Community events';
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
$d[$k]['sDesc']  = 'Organizing ideas';
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

// Pastebin
$k= 'pastebin';
$d[$k]['sDesc']  = 'Anonymous notes';
$d[$k]['lDesc']  = 'Write and share confidentially';
$d[$k]['mTitle'] = 'Communicate cyphered data';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' provides a simple way to share cyphered information exclusively with your correspondent. You can even choose the duration of access.
                    </p>
                    <p>
                          <b class="violet">What can it be used for?</b> You may need to communicate one or more pieces of confidential information without sending a standard e-mail or paper. Framabin enables you to send an address with simple but secure access. The server stores the cyphered data, which remains unreadable.
                    </p>';

// Pocket
$k= 'pocket';
$d[$k]['sDesc']  = 'Content back-up';
$d[$k]['lDesc']  = 'Save it and read it later';
$d[$k]['mTitle'] = 'Save it and read it later';
$d[$k]['mBody']  = '<p>
                         With '.$d[$k]['F'].', you won’t lose Internet contents that interest you, even if you don’t have time to read them right away. With one click, you save your selection and you can read it whenever you want. The application saves your selection so that you can enjoy reading it when you have more time.
                    </p>
                    <p>
                          Framabag is a <b class="violet">back-up service for web pages</b>. You store the relevant contents on the server, including texts and images. You can also share your articles and use extensions for Firefox, Chrome, Android, etc.
                    </p>';

// Scribd
$k= 'scribd';
$d[$k]['sDesc']  = 'Sharing PDF/ODP';
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
$d[$k]['sDesc']  = 'Decision-making tool';
$d[$k]['lDesc']  = 'The easiest way to make community decisions';
$d[$k]['mTitle'] = 'Decide together,';
$d[$k]['mBody']  = '<p>
                          '.$d[$k]['F'].' helps you to make group-based decisions. Start a discussion, share ideas, come to an agreement. Every decision has a clear deadline, so you can be sure to decide on time.
                    </p>
                    <p>
                          <b class="violet">How does it work? </b> Start a discussion, invite members to share their opinion, then develop a joint proposal that works for everybody. The decision is made as a group, taking all opinions into account. Anyone can propose actions. People can agree, abstain, disagree, or block. You can see how everyone feels, and why.
                    </p >';

// Skype
$k= 'skype';
$d[$k]['sDesc']  = 'Visioconference';
$d[$k]['lDesc']  = 'Chat freely with your friends';
$d[$k]['mTitle'] = 'Videoconference';
$d[$k]['mBody']  = '<p>
                          '.$d[$k]['F'].' allows you to chat with your friends in the simplest possible way, without the need to set up any sophisticated software. Discussion is completely free: no data analysis will be carried out on your conversation. Everything stays between you and your friends.
                    </p>
                    <p>
                          <b class="violet">How does it work? </b> You are connected to your friends directly from your web browser, without the need to set up any extra software. Once connected, enable your web browser to use your microphone and your webcam and simply get talking.
                    </p>';

// Slack
$k= 'slack';
$d[$k]['sDesc']  = 'Collaborative communication';
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
$d[$k]['sDesc']  = 'Project management';
$d[$k]['lDesc']  = 'Project management';
$d[$k]['mTitle'] = 'Project management';
$d[$k]['mBody']  = '<p>
                          '.$d[$k]['F'].' is a visual task manager that handles your projects collaboratively according to the Kanban method. It is designed so that you will know at a glance how to get started, whatever task management tools you generally use.
                    </p>
                    <p>
                          <b class="violet">How does it work?</b>Launch your new project, identify the tasks or Work Breakdown Structure (WBS), and start managing each task collectively one by one. Assign a resource for each task and define functions, progress, and deadlines. This visual management tool enables you to see at a glance where you are in your project.
                    </p>';

// WeTransfer
$k= 'wetransfer';
$d[$k]['sDesc']  = 'Send large files';
$d[$k]['lDesc']  = 'Share your files anonymously';
$d[$k]['mTitle'] = 'Share your files easily';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' provides an easy way to share files, for example, when you want to send an email attachment and the file exceeds the maximum allowed size.
                    </p>
                    <p>Note, however, that this service is not an equivalent of Dropbox or Google Drive : it is not a file hosting service  (for that we have <b class="violet">Frama</b><b class="vert">drive</b>), but really an anonymous file transfer service (the content is automatically coded before transfer, and we don\'t have access).</p>
                    <p>
                        '.$d[$k]['F'].' can send files anonymously. You decide when you wish to remove them (after the first download, 24H/7j/30j/60j after they go online).
                    </p>';

// Youtube
$k= 'youtube';
$d[$k]['sDesc']  = 'Video Hosting';
$d[$k]['lDesc']  = 'Share your videos, keep your rights';
$d[$k]['mTitle'] = 'Release your videos';
$d[$k]['mBody']  = '<p>
                         On '.$d[$k]['F'].', you can upload your videos, share them with your friends, or provide open access. This is certainly the best way to share your videos without transferring your rights.
                    </p>
                    <p>
                         <b class="violet">How does it work? </b> Open an account and upload your videos. You keep your rights and your freedom to change uploads.
                    </p >';

/********************
 * Pas sur la carte
 ********************/
// JS Fiddle
$k= 'jsfiddle';
$d[$k]['sDesc']  = 'Share Code';
$d[$k]['lDesc']  = '';
$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Kongregate
$k= 'kongregate';
$d[$k]['sDesc']  = 'Games';
$d[$k]['lDesc']  = 'A compilation of free games';
$d[$k]['mTitle'] = 'Have a break and play a while';
$d[$k]['mBody']  = '<p>
                         '.$d[$k]['F'].' offers you a compilation of free games, available for both online and offline use. Have a break and check them out!
                        <small>(and <a href="https://fr.wikipedia.org/wiki/Angry_Birds#Collecte_de_donn.C3.A9es_par_la_NSA">in contrast to Angry Birds</a>, the NSA won’t be able to spy on you ;) )</small>
                    </p>
                    <p>
                        <b class="violet">How does it work? </b> Each game can be used directly on the website or downloaded for offline use. Choose your game and start playing.
                    </p>';
$d[$k]['mFooter']= '<p class="precisions">Framagames is a compilation of free games. All credits are available on the website.</p>';

// Pixlr
$k= 'pixlr';
$d[$k]['sDesc']  = 'Vectorial Drawing';
$d[$k]['lDesc']  = 'Create vector graphics quickly on open standard SVG';
$d[$k]['mTitle'] = 'Create vector graphics quickly on open standard SVG';
$d[$k]['mBody']  = '<p>
                           '.$d[$k]['F'].' is a very simple (even simplistic) drawing software.
                    </p>
                    <p><b class="violet">How does it work? </b></p>
                    <ul>
                        <li>Available online, without any installation</li>
                        <li>No registration required</li>
                        <li>Export your documents to bitmap or vector format</li>
                        <li>Free software, open to all</li>
                          <li>Ethics: none of your data gets stored</li>
                    </ul>
                    <div style="text-align:center">
                    <video controls="controls" preload="none" width="620" height="360" poster="https://framatube.org/images/media/864l.jpg">
                        < source src="https://framatube.org/files/1227-introduction-a-svg-editjpg.mp4" type="video/mp4"></source>
                         <source src="https://framatube.org/files/1228-introduction-a-svg-editjpg.webm" type="video/webm"></source>
                    </video>
                    </div>
                    <p><a href="https://framatube.org/files/1228-introduction-a-svg-editjpg.webm">Video</a> in webm format</p>';

// Transifex
$k= 'transifex';
$d[$k]['sDesc']  = 'Software translation';
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
$d[$k]['lDesc']  = 'Express yourself on the Internet';
$d[$k]['mTitle'] = 'Free microblogging';
$d[$k]['mBody']  = '<p>
                          '.$d[$k]['F'].' allows you to follow feeds and have your own feed, with a decentralized solution using P2P protocol.
                    </p>
                    <p>
                         <b class="violet">How does it work?</b> Choose a client, open an account, then subscribe to various feeds and tweet.
                    </p>';

/****************
 * Mises à jour *
 ****************/
// Etherpad Lite
$k = 'up-padlite'; $ko = 'gdocs';    // prefix "up-" compulsory ; $ko is the id of the initial project
$d[$k]['lDesc']  = $d[$ko]['lDesc']; // Copy/Paste
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'];
$d[$k]['name']   = 'Replacing Etherpad by the “lite” version for public pads';

// Wisemapping
$k = 'up-framindmap2'; $ko = 'bubblus';
$d[$k]['lDesc']  = $d[$ko]['lDesc'];
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'].'
    <p>
           <b class="violet">Update:</b> the software underlying Framindmap is now Wisemapping rather than Mindmaps. This software is more complete, allowing you to bind documents at the nodes or save your work in such a way that it can easily be found and shared on the internet.
    </p>';
$d[$k]['name']   = 'Mindmaps replaced by Wisemapping';

// Framadate 0.8
$k = 'up-framadate2'; $ko = 'doodle';
$d[$k]['lDesc']  = $d[$ko]['lDesc'];
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'].'
    <p>
           <b class="violet">Update:</b> this update of Framadate involves a graphic and technical overhaul of the service. The interface is clearer and more ergonomic. It’s now possible to answer a survey option by “maybe”.
    </p>';
$d[$k]['name']   = 'Development axis: ergonomy and accessibility';

// MyPads
$k = 'up-mypads'; $ko = 'gdocs';
$d[$k]['lDesc']  = $d[$ko]['lDesc'];
$d[$k]['mTitle'] = $d[$ko]['mTitle'];
$d[$k]['mBody']  = $d[$ko]['mBody'].'
    <p>
          <b class="violet">Update:</b> This update is important. You can now have dedicated instances (for science or education, for example). Moreover, you can now manage private pads (by groups or passwords).
          </p>';
$d[$k]['name']    = 'Development and integration of Mypads plugin';

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

// Paypal
$k= 'paypal';
$d[$k]['sDesc']  = 'Online payments';

// Universalis
$k= 'universalis';
$d[$k]['sDesc']  = 'Encyclopedia';

/**************
 * Categories *
 **************/
$c['home']['name']    = 'At home';
$c['web']['name']     = 'Web';
$c['office']['name']  = 'Office';
$c['social']['name']  = 'Social';
$c['files']['name']   = 'File sharing';
$c['media']['name']   = 'Media & culture';
$c['geo']['name']     = 'Geo';
$c['hobbies']['name'] = 'Hobbies';
$c['site']['name']    = 'Website';
$c['dev']['name']     = 'Development';

?>