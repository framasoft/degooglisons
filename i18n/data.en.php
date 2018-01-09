<?php
/*
 * $l = liens
 * $t = texte
 * $d = données camps et framaprojets
 * $e = éditeur
 */

include('data.php');

// Liens
$l['F'] = 'https://framasoft.org/';
$l['S'] = 'https://soutenir.framasoft.org/en';
$l['DIo'] = 'https://degooglisons-internet.org';
$l['DIoL'] = $l['DIo'].'/list/?l=en';
$l['Charte'] = 'https://framasoft.org/nav/html/charte.en.html';
$l['contact'] = 'https://contact.framasoft.org';
$l['participer'] = $l['contact'].'/participer';
$l['docs'] = 'https://docs.framasoft.org/en/';
$l['cloud'] = 'https://framacloud.org/en/cultiver-son-jardin';
$l['chatons'] = 'https://www.chatons.org/en';

// Images
$l['map'] = 'img/Carte2016-romains-en.png';

// Meta
$t['meta']['lang']      = 'en';
$t['meta']['title']     = 'De-google-ify Internet';
$t['meta']['framasoft'] = 'Framasoft';
$t['meta']['F']         = '<a href="'.$l['F'].'/?l=en"><b class="violet">Frama</b><b class="orange">soft</b></a>';
$t['meta']['DIo']       = '<a href="'.$l['DIo'].'/?l=en"><b class="violet">De-google-ify</b> <b class="orange">Internet</b></a>';
$t['meta']['start']     = 'Campaign began on 10/07/2014';
$t['meta']['edit']      = 'Last modification on the 12/10/2017';
$t['meta']['S']         = 'Support this project';
$t['meta']['lead']      = 'An initiative of the '.$t['meta']['F'].' network for a<br/>
                <a href="#leds">Free</a>, <a href="#leds" >Decentralized</a>,
                <a href="#leds">Ethical</a> Internet built on <a href="#leds">Solidarity</a> ';

// LEDS
$t['meta']['leds']['title']   = 'For an Internet…';

$t['meta']['leds']['ltitle']  = 'Free';
$t['meta']['leds']['ldesc']   = 'As far as standards and protocols are concerned, the story of 
                the Internet is one of free software. But its popularity and potential make big firms jealous. 
                They would like to claim control of it by establishing closed code in locked systems 
                that are not interoperable. 
                To keep the Internet faithful to the founding principles which led to its success, 
                it is important that there should be free apps on the Internet, that is to say, 
                apps with opensource codes, accessible under free licence.';

$t['meta']['leds']['dtitle']  = 'Decentralized';
$t['meta']['leds']['ddesc']   = 'The genius of the Internet must dwell at the margins of the network 
                in a peer-to-peer sharing dynamic, to avoid creating a Minitel 2.0. To insure equality
                for all concerned, from citizens to businesses, monopolies must not only be excluded, but also
                prevented from monopolizing personal or public data. Through clear
                tutorials explaining how to propagate free solutions for establishing a fairer Internet,
                we intend to facilitate the spreading of codes and a diversification of usages.';

$t['meta']['leds']['etitle']  = 'Ethics';
$t['meta']['leds']['edesc']   = 'We wish to support a participative and
                independent Internet. Exploitation, surveillance, censorship, and data
                appropriation are trends we refuse in favor of transparency (integrity), 
                clearly displayed policies for users of the various services, and the refusal of all forms of discrimination.';

$t['meta']['leds']['stitle']  = 'Solidarity';
$t['meta']['leds']['sdesc']   = 'Through the services we provide, we promote a model 
                based on cost participation, resource sharing, and accessibility 
                for the largest number of people. 
                Any abuse will thus be avoided, for we all remain fully aware of our common interests. 
                This model also has an educational purpose since, as we document the roll-out of services, 
                many users will in their turn be able to share those resources.';

$t['meta']['leds']['charte']  = 'To find out more about this, feel free to read <strong><a href="'.$l['Charte'].'">our detailed charter</a></strong>.';

// Carte
$t['map']['map']    = 'Click on the map to discover all alternatives…';
$t['map']['altMap'] = 'The year is 2016 AD. The whole web is occupied by centralized services… Well… not entirely. One small village of indomitable Free Software lovers still holds out against the invaders. And life is not easy for the legionaries who garrison the fortified camps of Closedum, Centralizum, Trackum, and Proprietarum.';

// Carte - Camps
$t['map']['camps']['village']     = 'In the freedom defenders’ village';
$t['map']['camps']['vp1']         = 'Engulfed in sprawling multinational firms, a few non-profit organizations keep up the struggle for an open web respectful of internet users.';
$t['map']['camps']['vp2']         = 'In addition to '.$t['meta']['F'].', the non-profit association leading the campaign described here, we may also mention <a href="http://april.org">April</a>,  <a href="http://laquadrature.net">la Quadrature du Net</a> or <a href="http://aful.org">l’Aful</a>. These organizations can only keep going with the help of your donations, so don’t forget to support them!';

$t['map']['camps']['fermetum']    = '<i lang="la">Closedum</i>';
$t['map']['camps']['fp1']         = 'Online services are often
                closed-source: once you start using them, it is very difficult
                to leave, because these companies do everything to keep you captive by
                preventing you, for example, from migrating your data elsewhere.';
$t['map']['camps']['fp2']         = 'Using open source services means making sure that you will never be controlled by a particular website, but also that you can always migrate your data elsewhere.';

$t['map']['camps']['centralisum'] = '<i lang="la">Centralizum</i>';
$t['map']['camps']['cp1']         = 'Centralized services raise many problems: they make your data very vulnerable (one inaccessible website and everything is down) and make it very easy for third parties to exploit your data.';
$t['map']['camps']['cp2']         = 'Using decentralized online services means maintaining a choice between using an online resource such as those proposed by Framasoft or installing/managing the service yourself.';

$t['map']['camps']['espionnum']   = '<i lang="la">Trackum</i>';
$t['map']['camps']['ep1']         = '“If it’s free, you are the product”: many online services make a living by exploiting your personal data, i.e., selling it to advertising companies. Furthermore, most of these services are based in the United States and obey US laws like the PATRIOT ACT which deny all rights to privacy.';
$t['map']['camps']['ep2']         = 'Using online services hosted in Europe means ensuring that you are not dependent on the laws of another continent. In addition, by hosting the service yourself, no third party can violate your privacy.';

$t['map']['camps']['privatum']    = '<i lang="la">Proprietarum</i>';
$t['map']['camps']['pp1']         = 'Freedom-depriving services ("proprietary" in everyday language) are totally opaque: it is impossible to know exactly what the software does with your data. Only the publisher has control over it.';
$t['map']['camps']['pp2']         = 'Using Free online services means being sure the community has control over the software and maintains the ability to modify it, to install it elsewhere, etc.';

$t['map']['camps']['nsa']         = '<abbr>NSA</abbr>';
$t['map']['camps']['np1']         = 'Edward Snowden’s revelations about the PRISM program of the <abbr>NSA</abbr> showed that fears about massive violations of users’ privacy were well-founded.';
$t['map']['camps']['np2']         = 'Using centralized services
                amounts to offering your personal data to surveillance organizations without any means to control what they do with it.';


// Accueil
$t['why']['title']  = 'Main Page';
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
$t['why']['enje']['btn']   = 'Stakes';
$t['why']['enje']['title'] = 'What is at stake?';
$t['why']['enje']['p1']    = 'In recent years, we have witnessed <strong> the widespread corporate concentration of Internet actors</strong>  (Youtube belonging to Google, WhatsApp to Facebook, Skype to Microsoft, etc.). This centralisation is detrimental, not only because it curbs innovation, but also because it results in a loss of freedom for users, <strong>who no longer control their digital existence</strong>: their behaviour is continually dissected and analysed so that they can be better targeted by publicity, and their data – which should be private (sites visited, emails exchanged, videos watched, etc.) – can be analysed by government services.';
$t['why']['enje']['p2']    = 'The way that Framasoft would like to deal with this issue is simple: to highlight and provide a Free, Ethical, Decentralised and Solidarity-based alternative to each of these services which deprive users of their freedom.';

// Pourquoi - Dangers
$t['why']['dang']['btn']   = 'Threats';
$t['why']['dang']['title'] = 'Threats';
$t['why']['dang']['intro'] = 'The increasingly centralized online services provided by sprawling giants like Google, Amazon, Facebook, Apple, or Microsoft (GAFAM) pose a threat to our digital lives.';

// EPCF (Espionnum, Privatum, Centralisum, Fermetum)
$t['why']['dang']['e']     = 'Surveillance';
$t['why']['dang']['ep']    = 'These services track us everywhere, while claiming to give us a better “user experience”. But our behaviour is under constant surveillance. This information can be used to display targeted adverts, but the revelations of the Snowden case have also shown that Internet giants have been forced to communicate this data (sometimes extremely private: emails from Gmail, photos shared on Facebook, Skype conversations, smartphone locations, etc.) to government services. Under the pretense of fighting terrorism, states are able to gather much more intelligence than a "Big Brother" would ever have dreamed of.';

$t['why']['dang']['erefs'] = 'https://my.framasoft.org/u/degooglisons/?searchtags=espionnage';

$t['why']['dang']['p']     = 'Privacy';

$t['why']['dang']['pp']    = 'Our data is an extension of ourselves. It tells third-parties where we are, who we are with, our political and sexual orientations, sites we have visited, our favorite recipes, our favorite topics of interest, and so on. While a single data point is not always sensitive, the loss of large amounts of aggregated data can be dangerous (for example if you browse topics about cancer before subscribing to a life insurance)<br>
<strong>Your private life is an essential part of your individuality</strong>, and in a world where everything has been digitized (ebooks, TV, phones, music, social networks, etc.), it would only take a malicious hacker with access to your smartphone a few minutes to cause you serious harm (taking control of your identity on Facebook, consulting your professional or medical information, making purchases without your authorisation, etc.).';

$t['why']['dang']['prefs'] = 'https://my.framasoft.org/u/degooglisons/?searchtags=vie-privee';

$t['why']['dang']['c']     = 'Centralization';
$t['why']['dang']['cp']    ='Major actors of the Internet have become real giants: Google owns Youtube and Waze, Facebook has acquired WhatsApp and Instagram, Microsoft distributes Skype, etc.<br>
This concentration of actors creates multiple issues: what if Facebook were suddenly shut down? And how could we browse the Web if Google went down?
<strong>We rely more and more on services provided by a small group of suppliers.</strong> For example, Apple (iPhone), Google (Android) and Microsoft (Windows Phone) dominate almost the entire mobile OS industry.<br>
Furthermore, the size of these actors impedes innovation: it’s hard to launch a startup that can match up to Apple or Google (the first and second worldwide market capitalisations, respectively).<br>
Finally, The lack of diversity of the giants means they can track many people who are unaware that there may be alternatives, and it can influence the kind of data you receive (a Google search will produce different results for the term “nuclear power” depending on whether Google considers you to be an environmentalist or pro-nuclear power).';

$t['why']['dang']['crefs'] = 'https://my.framasoft.org/u/degooglisons/?searchtags=centralisation';

$t['why']['dang']['f']     = 'Termination';
$t['why']['dang']['fp']    = 'Web services used on your computer, smartphone, tablets (and other devices) are usually hosted on the “cloud”: servers spread across the planet, that host not only your data (emails, pictures, files, etc.), but also the application code.<br>
For your data, this raises the issue of sustainability (what would become of your files if Dropbox were to close tomorrow?) and of your ability to switch easily between services (how would you recover your data from Facebook or Picasa and import it, with all the adjoining comments, into another service?). <br>
For applications, this means that <strong>you are completely at the mercy of
your service provider</strong> when it comes to proliferation of
advertisements, changes to the user interface, etc., and that you have hardly any control over the way an application works. It is a “black box” that can exhibit malicious behaviour (sending spam SMS without your knowledge, executing malicious code, and so on).<br>
In short, these companies trap us in gilded cages: gilded yes, but cages nonetheless!';

$t['why']['dang']['frefs'] = 'https://my.framasoft.org/u/degooglisons/?searchtags=fermeture';

// Pourquoi - Nos propositions
$t['why']['prop']['btn']   = 'Our proposals';
$t['why']['prop']['title'] = 'Our proposals';
$t['why']['prop']['intro'] = 'Framasoft wishes to face the threats to our digital lives by offering free, ethical, decentralised, and solidarity-based services.';

// LEDS (Libre, Éthique, Décentralisé, Solidaire)
$t['why']['prop']['l']     = 'Freedom';
$t['why']['prop']['lp1']   = 'The story of the Internet itself is one of free software, and this goes for standards as well as protocols. Its potential and popularity are a cause for envy, and large companies would like nothing better than to control it by imposing closed-source, locked-down, and non-interoperable systems.';
$t['why']['prop']['lp2']   = 'For the Internet to stay true to its
founding principles, those which have led to its success, users must be
able to choose free software, that is to say, software whose source code remains open and accessible and is covered by a free software license.';
$t['why']['prop']['lp3']   = 'Framasoft is thus committed to using only software with “free” source code.';

$t['why']['prop']['e']     = 'Ethics';
$t['why']['prop']['ep1']   = 'We promote an Internet based on independence and sharing.';
$t['why']['prop']['ep2']   = 'We oppose the exploitation, surveillance, censorship and appropriation of data in favour of transparency (probity), clear presentation of services’ terms of use and refusing discrimination.';
$t['why']['prop']['ep3']   = 'Framasoft undertakes not to exploit its users’ data, and to promote a fair and open Web.';

$t['why']['prop']['d']     = 'Decentralization';
$t['why']['prop']['dp1']   = 'Internet intelligence must remain with each individual player on the network, in a spirit of sharing among peers, to avoid creating a Minitel (a pre-Internet videotext terminal and service) version 2.0.';
$t['why']['prop']['dp2']   = 'To ensure equality for all, whether citizens or businesses, not only is it essential to avoid monopolies, but large organizations must be prevented from grabbing personal or public data.';
$t['why']['prop']['dp3']   = 'Using tutorials to explain how to increase the use of free solutions that will allow a fairer Internet, we help to distribute codes and diversify usage.';
$t['why']['prop']['dp4']   = 'Framasoft is thus committed to facilitating self-hosting and interoperability, so that its users don’t get “locked in”.';

$t['why']['prop']['s']     = 'Solidarity';
$t['why']['prop']['sp1']   = 'Through the services we deploy, we promote an economic model based on sharing costs and resources, and providing widespread access.';
$t['why']['prop']['sp2']   = 'This model also has an educational aspect because we believe that by documenting ways to setup services, many users will in turn be able to share these resources.';
$t['why']['prop']['sp3']   = 'We think that, by not infantilizing users and by sharing responsibility for the use of services, it will be possible to regulate abuse.';
$t['why']['prop']['sp4']   = 'Framasoft is thus committed to promoting respect and autonomy for its users (as long as this is reciprocated).';

// Service & Charte
$t['why']['prop']['s&c']   = 'Services and Charter';
$t['why']['prop']['s&cp']  = 'You can find online the list of the services we already offer (and those yet to come), together with our charter:';
$t['why']['prop']['charte'] = 'Framasoft service charter';

// Accueil - Concrètement
$t['why']['conc']['btn']   = 'In practice';
$t['why']['conc']['title'] = 'In practice';
$t['why']['conc']['p1']    = 'The “de-google-ify Internet” project -
which does not exclusively concern Google - consists in <strong> offering as many alternative services as possible to those we consider a threat to our digital lives</strong>.';
$t['why']['conc']['p2']    = 'Google Docs, Skype, Dropbox, Facebook, Twitter, Google Agenda, Youtube, Doodle, Yahoo! Groups, and many others, are extremely convenient services but <strong>they have become far too large and have made us dependent on them</strong>.
Framasoft wishes to resist this trend and is putting forward a roadmap for setting up alternative services over several years.';
$t['why']['conc']['p3']    = 'These services are free, gratis, open to all (insofar as our technical and financial capabilities allow us), as <strong><a href="http://en.wikipedia.org/wiki/Commons" title="Bien communs">digital commons</a></strong>.
With the goal of decentralising the Internet and promoting self-hosting, we will do our best to ensure that everyone can install their own services (for themselves, for their organisation, or their company).';
$t['why']['conc']['p4']    = 'We are not aiming to compete with these services of course. We merely wish to offer a space that is neutral, non-commercial, and in no way aggressive towards its users.';
$t['why']['conc']['p5']    = '<strong>See the list of services we are already offering (and those that we are preparing):</strong>';
$t['why']['conc']['stitle'] = 'Support';
$t['why']['conc']['sp1']   = 'A project with such a wide scope cannot happen without <strong>your support</strong>.';
$t['why']['conc']['sp2']   = 'Whether you are a developer, a graphic designer, systems administrator, etc., you can contact us to take an active part in the project.';
$t['why']['conc']['cbtn']  = 'Contact Framasoft';
$t['why']['conc']['sp3']     = 'The simplest and quickest way to help us remains financial support: it allows us to pay for the infrastructure (servers) and the permanent staff committed to the success of this ambitious project. Framasoft is a public interest association ]: a €100 donation will cost you €34, after tax exemption (if you are in France).';
$t['why']['conc']['sbtn']  = 'Donate<br /> to Framasoft';

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
$t['list']['title']     = 'List of services';
$t['list']['link']      = $l['current'].'list';
$t['list']['desc']      = 'List of free, ethical, decentralized, and solidarity-based online services offered by Framasoft (or in progress) to de-google-ify Internet';
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
$t['medias']['title']   = 'Media area';
$t['medias']['link']    = 'medias';
$t['medias']['desc']    = '';
$t['medias']['css']     = '<link href="'.$l['current'].'css/list.css" rel="stylesheet" type="text/css" />';
$t['medias']['js']      = '<script src="'.$l['current'].'js/leds.js" type="text/javascript"></script>';

$t['medias']['subtitle']    = 'History of the De-google-ify Internet campaign';
$t['medias']['intro']       = 'To begin this third year of its campaign of alternative proposals for services provided by Google & co, Framasoft is launching six new services based on free software as of 3 October.';
$t['medias']['btnCPtxt']    = 'Read the<br/>press release';
$t['medias']['btnCPurl']    = 'img/2016_communique_degooglisons_Framasoft.html';
$t['medias']['btnDPtxt']    = 'Download the<br/>press release';
$t['medias']['btnDPurl']    = 'img/dossier_presse-Degooglisons_internet-2016.pdf';
$t['medias']['1title']      = 'Posts on the Framablog';
$t['medias']['1intro']      = '<a href="http://framablog.org">Framablog</a> is our main tool for communicating with the general public. All six of the new services launching our campaign will be presented during the week of 3 October 2016.';
$t['medias']['1list']       = '
                        <ul>
                            <li><em>Monday 03/10</em> : [FRENCH] <a href="https://framablog.org/2016/10/03/degooglisons-saison-3-30-services-alternatifs-aux-produits-de-google-co/">3rd Year De-google-ify Internet Campain </a>présentation.</li>
                            <li><em>Monday 03/10</em> : <a href="http://framablog.org/2016/10/03/framalistes-vos-groups-nont-plus-a-appartenir-a-google">Framalistes</a>, alternative to Google Groups.</li>
                            <li><em>Tuesday 04/10</em> : <a href="http://framablog.org/2016/10/04/framanotes-vos-notes-vous-appartiennent-for-ever">Framanotes</a>, alternative to Evernote.</li>
                            <li><em>Wednesday 05/10</em> : <a href="http://framablog.org/2016/10/05/framaforms-noffrez-plus-les-reponses-que-vous-collectez-a-google">Framaforms</a> alternative to Google Forms.</li>
                            <li><em>Thursday 06/10</em> : <a href="http://framablog.org/2016/10/06/framatalk-semez-la-discord-sur-skype-et-cie">Framatalk</a>, alternative to Skype.</li>
                            <li><em>Friday 07/10</em> : <a href="http://framablog.org/2016/10/07/framagenda-ne-partagez-plus-votre-planning-et-vos-contacts-avec-la-nsa">Framagenda</a> alternative to Google Agenda & Contacts.</li>
                            <li><em>Monday 10/10</em> : <a href="http://framablog.org/2016/10/10/myframa-vos-favoris-et-framasofteries-partout-avec-vous-rien-qua-vous">MyFrama</a> alternative to Del.icio.us &  Google Notes and account.</li>
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

$t['medias']['tabstitle']   = 'Visuals for de-google-ify year 3';
$t['medias']['tabsintro']   = 'Unless otherwise stated, all our visuals are made by <a href="http://ptilouk.net">Simon « Gee » Giraudot</a> and are freely reusable under the licence <a href="http://creativecommons.org/licenses/by-sa/4.0/"><span lang="en">Creative Commons By</span>-<abbr>SA</abbr> 4.0</a>.</em> These visuals are in large size (contrary to appearances). However, if you need a higher resolution, feel free to contact us.';
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
$t['medias']['t1i3desc']    = 'Animation: the recapture of GAFAM services (in .gif format)';

$t['medias']['t2']          = 'Drawings Gee';
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


$t['medias']['presstitle']  = 'Press Release';
$t['medias']['pressintro']  = 'The “De-google-ify Internet” campaign already received a lot of attention during the first year. Here are some extracts from our <a href="https://wiki.framasoft.org/speakabout">Press release</a>.';
$t['medias']['pressth1']    = 'Date';
$t['medias']['pressth2']    = 'Media';
$t['medias']['pressth3']    = 'Link';
$t['medias']['presslist']   = [
    ['30/07/2017', 'Usbek & Rica',
    'https://usbeketrica.com/article/framasoft-une-amap-du-logiciel-libre',
    'Lien vers l’article'],
    ['04/02/2017', 'Mashable/France 24',
    'http://mashable.france24.com/tech-business/20170204-chatons-collectif-hebergeurs-framasoft',
    'Lien vers l’article'],
    ['24/08/2016', 'Opensource.com (anglais)',
    'https://opensource.com/business/16/8/open-source-alternatives-office-365',
    'Lien vers l’article'],
    ['27/02/2016', 'France 24 / Mashable',
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
$t['_Docs']             = 'Documentation';
$t['_Framacloud']       = 'Framacloud';
$t['_CHATONS']          = 'KITTENS';
$t['_Install']          = 'Install';
$t['_Project updated']  = 'Project updated';
$t['_Project loading']  = 'Project loading';
$t['_Project running']  = 'Project running';
$t['_ is an instance based on '] = ' is an instance based on ';
$t['_Read more']        = 'Read more';
$t['_Some examples ?']  = 'Some examples?';
$t['_Back to top']      = 'Back to top';
$t['_Editor: ']         = 'Editor: ';
$t['_Equivalent(s): ']          = 'Equivalent(s): ';
$t['_Alternative(s) online: ']  = 'Alternative(s) online';
$t['_Alternative(s) offline: '] = 'Alternative(s) offline';
$t['_Framasoft service: ']      = 'Framasoft service: ';
$t['_Nous proposons le service']   = 'Service we already provide';
$t['_Nous proposerons le service'] = 'We will provide ';
$t['_release planned on ']      = 'Release planned on';
$t['_Autres alternatives libres']  = 'Other Free alternatives';
$t['_Select the language']      = 'Select the language';
$t['_Change the language']      = 'Change the language';
$t['_OK']                       = 'OK';
$t['_since']                    = 'since';
$t['_GAFAM']                    = 'GAFAM';
$t['_GAFAM Logos']                 = $e['google']['fa'].$e['apple']['fa'].$e['facebook']['fa'].$e['amazon']['fa'].$e['microsoft']['fa'];
$t['_GAFAM Title']                 = $e['google']['name'].', '.$e['apple']['name'].', '.$e['facebook']['name'].', '.$e['amazon']['name'].', '.$e['microsoft']['name'];
$t['_& co']                     = '& co';
$t['_Software']                 = 'Software';
$t['_LEDS']                     = 'LEDS';
$t['_Libre, Éthique, Décentralisé et Solidaire'] = 'Free, Ethical, Decentralized and Solidarity-based';
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
$d[$k]['sDesc']  = 'URL shortener';
$d[$k]['lDesc']  = 'Short URLs that keep it discreet.';

$d[$k]['tDesc']  = 'Shorten and/or customize a web address (URL) in two clicks, and without tracking anyone (alternative to Bit.ly or Goo.gl).';
$d[$k]['hDesc']  = 'With Frama.link, too long links can be shortened. On social networks and microblogging, a shortened link saves space and improves clarity.';

$d[$k]['mTitle'] = 'Put an end to long URLs';
$d[$k]['mBody']  = '<p>
                            With '.$d[$k]['F'].' or <a href="https://huit.re">Huit.re</a>, you can shrink excessively long URLs without it being possible to track their use. On social networks or microblogs, a shortened web address can help save space or improve readability.
                    </p>
                    <p>
                          <b class="violet">How does it work?</b> Enter the original version of your URL: Frama.link shortens it. Copy the link.
                    </p>';
$d[$k]['tags']   = 'share, links';


// Blogger
$k= 'blogger';
$d[$k]['sDesc']  = 'Weblog hosting service';
$d[$k]['lDesc']  = 'Create a web site which respects your visitors';

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
$d[$k]['sDesc']  = 'Mind Map';
$d[$k]['lDesc']  = 'Create your mind maps';
$d[$k]['tDesc']  = 'Design, publish and share mind maps easily, on your own or with others in turn (alternative to Bubbl.us).';
$d[$k]['hDesc']  = 'Interface fluide et intuitive pour créer rapidement et
                    simplement des cartes heuristiques à même votre navigateur.
                    Pertinent en situation de brainstorming ou de prise de notes.';

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
                   <p><small><em>Tutorial made by Claire Cassaigne</em> - The <a href="https://framatube.org/files/1229-framindmap-creer-une-carte-mentale.webm">video</a> is available (in French) in WebM format.</small></p>
                    <p>
                         <b class="violet">Why would you use Framindmap?</b> This service is available online. No installation nor registration is required. You can choose your file format for export and save the map as an image. It is a free and open source software. The data are yours.
                    </p>';
$d[$k]['tags']   = 'produce, mindmap, brainstorming';

// Change.org
$k= 'change';
$d[$k]['sDesc']  = 'Petitions';
$d[$k]['lDesc']  = 'Launch your petitions without giving away the addresses of your backers';
$d[$k]['tDesc']  = 'Launch your petitions from an ethical platform, which doesn\t exploit your supporter\'s data (alternative to Avaaz, Change.org).';
$d[$k]['hDesc']  = '';


$d[$k]['mTitle'] = 'Free your petitions';
$d[$k]['mBody']  = '<p>
                            '.$d[$k]['F'].' allows you to launch petitions on issues that matter to you. With a few clicks, your petition is published and the addresses of your backers will not be  available for unwanted uses such as affiliate marketing.
                    </p>
                    <p>
                            <b class="violet">How does it work? </b> Sign up and launch a new petition by simply following the instructions. Your survey will be created. Your backers will not be required to register in order to participate.
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
$d[$k]['sDesc']  = 'Meetings and polls';
$d[$k]['lDesc']  = 'Schedule a meeting or create an opinion poll';
$d[$k]['tDesc']  = 'Collaboratively decide the best date and time for a meeting, or create a simple poll with ease (alternative to Doodle).';
$d[$k]['hDesc']  = 'Framadate is a bit like Doodle but libre software.
                    It couldn\'t be easier to invite your collaborators to organize
                    a meeting or create a poll with no need to register.';


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
$d[$k]['tags']   = 'organize, meeting, date, poll';

// Dropbox
$k= 'dropbox';
$d[$k]['sDesc']  = 'File hosting online service';
$d[$k]['lDesc']  = 'File hosting online service';

$d[$k]['tDesc']  = 'Obtain an online storage space for hosting, synchronizing (or sharing) your files (alternative to Dropbox, Google Drive).';
$d[$k]['hDesc']  = 'Framadrive allows you to store your documents on line,
                    to synchronize them across your computers, mobile devices, etc…
                    and to share them with whoever you want.';

$d[$k]['mTitle'] = 'File hosting online service';
$d[$k]['mBody']  = '<p>
                      '.$d[$k]['F'].' allows you to store your documents online, to synchronize them on your computers, tablets, phones, etc., and to share them with whoever you want.
                    </p>
                    <p>
            We opened 5000 accounts with a 2 Go capacity in order to test a free alternative … For a bigger or more sure alternative, you can search for a host through the <a href="https://chatons.org"> KITTENS</a> collective with our partner <a href="https://indiehosters.net">Indie Hosters</a> (or try self-hosting with <a href="http://yunohost.org/">Yunohost</a>, <a href="http://labriqueinter.net/">la Brique internet</a> or <a href="https://cozy.io/fr/">My Cozy Cloud</a>).
                    </p>';
$d[$k]['tags']   = 'store, save, files, share, agenda, calender, contacts, tasks';

// Evernote
$k= 'evernote';
$d[$k]['sDesc']  = 'Notetaking';
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
$d[$k]['sDesc']  = 'An ethical and decentralized social network';
$d[$k]['lDesc']  = 'An ethical and decentralized social network';

$d[$k]['tDesc']  = 'Share on an ethical and decentralized social network, without your profile being exploited for the benefit of advertisers (alternative to Facebook).';
$d[$k]['hDesc']  = 'Framasphère is a free social network, based on the
                    décentralized Diaspora* software.
                    Find your friends on Framasphère - or another Diaspora* pod -
                    without your exchanges being tracked.';

$d[$k]['mTitle'] = 'Join your friends in the libre zone';
$d[$k]['mBody']  = '<p>
                         '.$d[$k]['F'].' is a social network that respects your data and your privacy. Framasphere is a node (also called <i>pod </i>) of Diaspora *, a free social network.
                    </p>
                    <p>
                         <b class="violet">How does it work? </b> Share messages and photos with anyone on the Diaspora * network, manage your contacts, tags, mentions, reshares… You can also publish on other social networks (Facebook, Twitter, Tumblr) or on WordPress.
                    </p>';
$d[$k]['tags']   = 'social, network, sharing';

// Github
$k= 'github';
$d[$k]['sDesc']  = 'Distributed revision control (source code repository)';
$d[$k]['lDesc']  = 'Free code is good. On a free and open platform, it’s even better!';

$d[$k]['tDesc']  = 'Publish your code - preferably free software - and collaborate with others on a free software forge (alternative to Github).';
$d[$k]['hDesc']  = 'Framagit is a tool mostly for developers.
                    It helps you host your free software projects and collaborate with others.';

$d[$k]['mTitle'] = 'Hosting of Free code';
$d[$k]['mBody']  = '<p>
                         '.$d[$k]['F'].' is a tool that is primarily intended for developers. It allows you to create up to 42 repositories per account – if you need more, you should seriously consider self-hosting. Compared to GitHub, the little extra is that you can create private repos.</p>
                    </p>
                    <p>You can also mirror your repositories on GitHub automatically: you keep “feeding the beast” but you are less dependent, and you remain visible to the eyes of the nearly 10 million users registered on GitHub. Your repository on our Framagit is automatically pushed to your GitHub repository. This is also the choice made by Framasoft: we still have a GitHub account, while we continue to develop our projects.</p>';

// Gmail
$k= 'gmail';
$d[$k]['sDesc']  = 'Mailing service';
$d[$k]['lDesc']  = 'Your emails, without NSA inside';

$d[$k]['tDesc']  = '';
$d[$k]['hDesc']  = '';

$d[$k]['mTitle'] = 'Your emails, in a shielding shell';
$d[$k]['mBody']  = '';

// Google Agenda
$k= 'gagenda';
$d[$k]['sDesc']  = 'Shared calendar';
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
$d[$k]['sDesc']  = 'Online books';
$d[$k]['lDesc']  = 'An open library which offers thousands of books';

$d[$k]['tDesc']  = 'Consult an online library of digital books under a libre licence and download them freely (alternative to Google Books).';
$d[$k]['hDesc']  = 'Our library contains hundreds of works which are
                    under libre licences or in the public domain. You can
                    consult it online via mobile platforms. You can add it
                    directly to an ebook reading application thanks to the
                    flux <abbr>OPDS</abbr>.';

$d[$k]['mTitle'] = 'Catalog of books available to everyone';
$d[$k]['mBody']  = '<p>
                          '.$d[$k]['F'].' is Framasoft’s <abbr>OPDS</abbr>  catalog.  “OK, so what?” you may ask. An Open Publication Distribution System (<abbr>OPDS</abbr>) is a website you subscribe to with a software supporting this functionality – some E-readers embed one, such as Aldiko and others for Android. It provides you with quick and easy access to an entire library from your computer, smartphone, or tablet.
                    </p>
                    <p> Framasoft’s <abbr>OPDS</abbr> catalog gives you access to hundreds of non-copyrighted books.</p>';

// Google Docs
$k= 'gdocs';
$d[$k]['sDesc']  = 'Collaborative writing';
$d[$k]['lDesc']  = 'A collaborative real-time web-based editor';

$d[$k]['tDesc']  = 'Draft a text online, as a team, in real time, with the help of a timeslider, chat, comments… (alternative to Google Docs).';
$d[$k]['hDesc']  = 'Let\'s write together in the same document in an
                    interface for collective online drafting.
                    No registration required, give yourself a nickname
                    and a color and you\'re off!';

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
$d[$k]['tags']   = 'document, text, collaborate';

// Google Form
$k= 'gforms';
$d[$k]['sDesc']  = 'Online surveys';
$d[$k]['lDesc']  = 'An easy way to create your surveys';

$d[$k]['tDesc']  = 'Create an online survey, be it simple or complex, on a plateform that\'s respectful of your data (alternative to Google Forms).';
$d[$k]['hDesc']  = 'Framaforms allows you to design questionnaires and surveys to
                    meet your own specific needs, be it for school,
                    amily, an association, or work. Set up questions adapted
                    to your own specific context, with multiple choice questions
                    or free text fields.';

$d[$k]['mTitle'] = 'Online survey creation tool';
$d[$k]['mBody']  = '<p>
                          '.$d[$k]['F'].' allows you to design questionnaires and surveys to meet your own specific needs, be it for school, family, an association, or work. Set up questions adapted to your own specific context, with multiple choice questions or free text fields.
                    </p>
                    <p>
                          <b class="violet">How does it work?</b> create your account on Framaforms and start writing questionnaires to meet your needs. No registration is required for respondents to post their replies. You then have access to a synopsis of the results.
                    </p>';
$d[$k]['tags']   = 'forms, survey, groups';

// Google Groups
$k= 'ggroups';
$d[$k]['sDesc']  = 'Mailing lists';
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
$d[$k]['sDesc']  = 'Cartography';
$d[$k]['lDesc']  = 'Create you own maps online';

$d[$k]['tDesc']  = 'Customize and add to maps, on your own or in collaboration, and share them with ease (alternative to Google Maps).';
$d[$k]['hDesc']  = 'Framacarte allows you to add to, customize, color, 
                    annotate… the maps of
                    <a href="https://fr.wikipedia.org/wiki/Openstreetmap">OpenStreetMap</a>
                    and then display them on your own websiteor print them.';

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
$d[$k]['tags']   = 'cartography, maps';

// Google Reader
$k= 'greader';
$d[$k]['sDesc']  = 'Web-based feed reader';
$d[$k]['lDesc']  = 'Choose freely which news to follow';

$d[$k]['tDesc']  = 'Gather news feeds (RSS, Atom) from blogs, vidso channels, etc. in a single viewing place (alternative to Google Reader).';
$d[$k]['hDesc']  = 'If you want to subscribe to the RSS feeds of your favorite sites,
                    stay informed of all their news with Framanews !';

$d[$k]['mTitle'] = 'Stay up to date with the latest news';
$d[$k]['mBody']  = '<p>
                         '.$d[$k]['F'].' provides you with an online feed reader, which keeps you up to date with the latest news syndicated from the RSS feeds of your favorite websites!
                    </p>
                    <p>
                        <b class="violet">How does it work?</b> a Once your account is created, save your preferred RSS feeds and start following. It couldn’t be simpler.
                    </p>';
$d[$k]['tags']   = 'feed, rss, news, reader, follow';

// Google Search
$k= 'gsearch';
$d[$k]['sDesc']  = 'Search engine';
$d[$k]['lDesc']  = 'What if your online searches weren’t tracked by Google?';

$d[$k]['tDesc']  = 'Do your searches on an engine which will query Google, Bing, Yahoo, Wikipedia, etc. while making the requests anonymous and avoiding tracking.';
$d[$k]['hDesc']  = 'Framabee is an anonymous metasearch engine.
                    This means that your searches are sent to several search
                    engines and the results are then displayed in your web browser.
                    The advantage is that Framabee acts as an intermediary
                    between you and Google (or other search engines), so your
                    IP address, search history, location and profile
                    won’t be stored by any of them.';

$d[$k]['mTitle'] = 'Anonymous web search';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].'  is an anonymous metasearch engine. This means that your searches are sent to several search engines and the results are then displayed in your web browser. The advantage is that Framabee acts as an intermediary between you and Google (or other search engines), so your IP address won’t be stored by any of them. </p>
                         <p>>It goes without saying that you must trust Framasoft and its tools before using Framabee. This is why we wrote this <a href="'.$l['Charte'].'">charter</a>.
                    </p>';
$d[$k]['tags']   = 'search, anonymous';

// Google Slides
$k= 'gslides';
$d[$k]['sDesc']  = 'Presentations';
$d[$k]['lDesc']  = 'High quality user-friendly slideshows';

$d[$k]['tDesc']  = 'Create online slideshows and presentations, with the possibility of collaborating and sharing (alternative to PowerPoint365).';
$d[$k]['hDesc']  = 'Framaslides allows you to directly create an online
                    slideshow or presentation, to access it with a
                    simple internet connection, and to share it.';

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
$d[$k]['tags']   = 'slideshow, presentation, document';

// Google Spreadsheet
$k= 'gspreadsheet';
$d[$k]['sDesc']  = 'Collaborative spreadsheet';
$d[$k]['lDesc']  = 'Share your spreadsheets and work together!';

$d[$k]['tDesc']  = 'Collaborate online, in real time, on spreadsheets (an alternative to Excel365, Google Spreadsheet).';
$d[$k]['hDesc']  = 'Framacalc is to spreadsheets what Framapad is to
                    wordprocessing, in other words the possibility
                    to simply and collectively edit
                    the same document online';

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
$d[$k]['tags']   = 'spreadsheet, document';

// Img.ur
$k= 'imgur';
$d[$k]['sDesc']  = 'Sending pictures';
$d[$k]['lDesc']  = 'Share your pictures anonymously';

$d[$k]['tDesc']  = 'Send images online, share single images with a single link or make a gallery of them (alternative to Img.ur).';
$d[$k]['hDesc']  = 'Framapic makes it easy to share images,
                    for example for publishing them on Twitter, Facebook,
                    or … Framasphère!';

$d[$k]['mTitle'] = 'An easy way to share your images';
$d[$k]['mBody']  = '<p>
                         '.$d[$k]['F'].' provides a simple way to share images, e.g., on Twitter, Facebook or … on Framasphère!
                    </p>
                    <p> Note that this service differs significantly from flickr or instagram: it is not a hosting service for users’ pictures. Rather it hosts anonymous pictures and no one, including ourselves, has access to the cyphered content.</p>
                    <p>
                         '.$d[$k]['F'].' enables the user to send pictures anonymously. You can choose to suppress them at any time (from the first viewing, 24 hours/7days/30 days/1 year after putting them on line).
                    </p>';
$d[$k]['tags']   = 'share, images, gallery, encryption';

// Meetup
$k= 'meetup';
$d[$k]['sDesc']  = 'Community events';
$d[$k]['lDesc']  = 'Organise meetings and special interest groups';
$d[$k]['hDesc']  = '';

$d[$k]['tDesc']  = '';

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
$d[$k]['sDesc']  = 'Organizing ideas';
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
$d[$k]['sDesc']  = 'Anonymous notes';
$d[$k]['lDesc']  = 'Write and share confidentially';

$d[$k]['tDesc']  = 'Draft texts, notes and code and share them confidentially thanks to end-to-end encryption (alternative to Pastebin).';
$d[$k]['hDesc']  = 'With Framabin, you can share information that
                    only you and your correspondant are able to decypher
                    and it couldn\'t be easier to use.';

$d[$k]['mTitle'] = 'Communicate cyphered data';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' provides a simple way to share cyphered information exclusively with your correspondent. You can even choose the duration of access.
                    </p>
                    <p>
                          <b class="violet">What can it be used for?</b> You may need to communicate one or more pieces of confidential information without sending a standard e-mail or paper. Framabin enables you to send an address with simple but secure access. The server stores the cyphered data, which remains unreadable.
                    </p>';
$d[$k]['tags']   = 'share, note, text, encryption';

// Pocket
$k= 'pocket';
$d[$k]['sDesc']  = 'Content back-up';
$d[$k]['lDesc']  = 'Save it and read it later';

$d[$k]['tDesc']  = 'Put on one side blog articles and the "read later" tabs and find them again easily across devices (alternative to Pocket).';
$d[$k]['hDesc']  = 'Framabag allows you to put on one side the articles
                    that you don\'t have the time to read right away.';

$d[$k]['mTitle'] = 'Save it and read it later';
$d[$k]['mBody']  = '<p>
                         With '.$d[$k]['F'].', you won’t lose Internet contents that interest you, even if you don’t have time to read them right away. With one click, you save your selection and you can read it whenever you want. The application saves your selection so that you can enjoy reading it when you have more time.
                    </p>
                    <p>
                          Framabag is a <b class="violet">back-up service for web pages</b>. You store the relevant contents on the server, including texts and images. You can also share your articles and use extensions for Firefox, Chrome, Android, etc.
                    </p>';
$d[$k]['tags']   = 'bookmark';

// Scribd
$k= 'scribd';
$d[$k]['sDesc']  = 'Sharing PDF/ODP';
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
$d[$k]['sDesc']  = 'Decision-making tool';
$d[$k]['lDesc']  = 'The easiest way to make community decisions';

$d[$k]['tDesc']  = 'Create a team and invite in youe collaborators in order to discuss and take group decisions with the help of diverse voting tools.';
$d[$k]['hDesc']  = 'Framavox helps you to make group-based decisions.
                    Start a discussion, share ideas, come to an agreement,
                    all within the deadline that you have set yourselves.';

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

$d[$k]['tDesc']  = 'Obtain or rejoin a videoconference chatroom (with text based webchat and screen sharing) in 3 clicks, from your web browser (alternative to Skype).';
$d[$k]['hDesc']  = 'Framatalk  allows you to chat with your friends without
                    installing software or having to register.
                    The connection from you to your friends is direct through
                    your web browser.';

$d[$k]['mTitle'] = 'Videoconference';
$d[$k]['mBody']  = '<p>
                          '.$d[$k]['F'].' allows you to chat with your friends in the simplest possible way, without the need to set up any sophisticated software. Discussion is completely free: no data analysis will be carried out on your conversation. Everything stays between you and your friends.
                    </p>
                    <p>
                          <b class="violet">How does it work? </b> You are connected to your friends directly from your web browser, without the need to set up any extra software. Once connected, enable your web browser to use your microphone and your webcam and simply start talking.
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
$d[$k]['sDesc']  = 'Project management';
$d[$k]['lDesc']  = 'Project management';

$d[$k]['tDesc']  = 'Manage your group\'s projects with multiple tools: teams, task tables, schedules, reminders and emails… (alternative to Trello).';
$d[$k]['hDesc']  = 'Framaboard is a team based task and project
                    manager, incorporating the Kanban method.
                     It is designed so that you will know at a glance
                    where  to get started, no matter what task management tools
                    you generally use.';

$d[$k]['mTitle'] = 'Project management';
$d[$k]['mBody']  = '<p>
                          '.$d[$k]['F'].' is a visual task manager that handles your projects collaboratively according to the Kanban method. It is designed so that you will know at a glance how to get started, whatever task management tools you generally use.
                    </p>
                    <p>
                          <b class="violet">How does it work?</b>Launch your new project, identify the tasks or Work Breakdown Structure (WBS), and start managing each task collectively one by one. Assign a resource for each task and define functions, progress, and deadlines. This visual management tool enables you to see at a glance where you are in your project.
                    </p>';
$d[$k]['tags']   = 'organiser, calendar, agenda, task, project';

// WeTransfer
$k= 'wetransfer';
$d[$k]['sDesc']  = 'Send large files';
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
$d[$k]['sDesc']  = 'Video Hosting';
$d[$k]['lDesc']  = 'Share your videos, keep your rights';

$d[$k]['tDesc']  = '';
$d[$k]['hDesc']  = 'Videos in French (or with French subtitles)
                    about Free Software and the Free movement in general.du logiciel libre en particulier et du Libre en général.
                    Interviews, conferences, documentaries, TV recordings…
                    to get informed and also inform others.';

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
$d[$k]['hDesc']  = '';

$d[$k]['tDesc']  = '';

$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';

// Kongregate
$k= 'kongregate';
$d[$k]['sDesc']  = 'Games';
$d[$k]['lDesc']  = 'A compilation of free games';

$d[$k]['tDesc']  = 'Find a selection of open and free games you can play online or on your computer (as an alternative to Kongregate).';
$d[$k]['hDesc']  = 'Framagames is a compilation of free games you can play online, on your PC or on your tablet… and that need no complementary software for the installation.';

$d[$k]['mTitle'] = 'Have a break and play a while';
$d[$k]['mBody']  = '<p>
                         '.$d[$k]['F'].' offers you a compilation of free games, available for both online and offline use. Have a break and check them out!
                        <small>(and <a href="https://www.theguardian.com/world/2014/jan/27/nsa-gchq-smartphone-app-angry-birds-personal-data">in contrast to Angry Birds</a>, the NSA won’t be able to spy on you ;) )</small>
                    </p>
                    <p>
                        <b class="violet">How does it work?</b> Each game can be used directly on the website or downloaded for offline use. Choose your game and start playing.
                    </p>';
$d[$k]['mFooter']= '<p class="precisions">Framagames is a compilation of free games. All credits are available on the website.</p>';

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
$d[$k]['sDesc']  = 'Vectorial Drawing';
$d[$k]['lDesc']  = 'Create vector graphics quickly on open standard SVG';

$d[$k]['tDesc']  = 'Create and modify shape based images (vector graphics, in the SVG format) simply and in a few clicks. Children love it.';
$d[$k]['hDesc']  = 'For simple and quick creation and modification of beautiful
                    images online in the open SVG format. Children love it!';

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
$d[$k]['lDesc']  = 'Create a new translation project for your software';
$d[$k]['hDesc']  = '';

$d[$k]['tDesc']  = '';

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
$d[$k]['lDesc']  = 'Express yourself on the Internet';

$d[$k]['tDesc']  = 'Communicate through short messages in a public, confidential or private way with this ethical and decentralized alternative to Twitter.';
$d[$k]['hDesc']  = 'Framapiaf is a free <b>microblogging</b> service,
                    based on the decentralized software Mastodon.
                    Find your friends on Framapiaf - or other Mastodon, 
                    GNU Social, Friendica instances - and communicate with them without being tracked.';

$d[$k]['mTitle'] = 'Free microblogging';
$d[$k]['mBody']  = '<p>
                          '.$d[$k]['F'].' allows you to follow feeds and have your own feed, with a decentralized solution.
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
