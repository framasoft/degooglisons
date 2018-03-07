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
$l['docs'] = 'https://docs.framasoft.org/fr/';
$l['cloud'] = 'https://framacloud.org/fr/cultiver-son-jardin';
$l['chatons'] = 'https://chatons.org';

// Images
$l['map'] = $l['DIo'].'/img/Carte2016-romains.png';

// Meta
$t['meta']['lang']      = 'fr';
$t['meta']['title']     = 'Dégooglisons Internet';
$t['meta']['framasoft'] = 'Framasoft';
$t['meta']['F']         = '<a href="'.$l['F'].'"><b class="violet">Frama</b><b class="orange">soft</b></a>';
$t['meta']['DIo']       = '<a href="'.$l['DIo'].'"><b class="violet">Dégooglisons</b> <b class="orange">Internet</b></a>';
$t['meta']['start']     = 'Campagne commencée le 07/10/2014';
$t['meta']['edit']      = 'Dernière modification le 12/10/2017';
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

// Carte
$t['map']['map']    = 'Cliquez sur la carte pour découvrir les alternatives…';
$t['map']['altMap'] = 'Nous sommes en 2016 après Jésus-Christ. Toute la toile est occupée par des services centralisés…
                Toute ? Non ! Une communauté peuplée d’irreductibles libristes résite encore et toujours à l’envahisseur.
                Et la vie n’est pas facile pour les garnisons des camps retranchés de Fermetum, Centralisum, Espionnum et Privatum…';
// Carte - Camps
$t['map']['camps']['village']     = 'Village libriste';
$t['map']['camps']['vp1']         = 'Au milieu des multinationales tentaculaires, quelques organisations non-lucratives continuent de lutter activement
                    pour un Web ouvert et respectueux des internautes.';
$t['map']['camps']['vp2']         = 'En plus de '.$t['meta']['F'].', association loi 1901
                qui mène la présente campagne, nous pouvons citer <a href="http://april.org">l’April</a>,
                <a href="http://laquadrature.net">la Quadrature du Net</a> ou encore <a href="http://aful.org">l’Aful</a>.
                Ces associations vivent de vos dons, n’oubliez pas de les soutenir !';
$t['map']['camps']['fermetum']    = '<i lang="la">Fermetum</i>';
$t['map']['camps']['fp1']         = 'Les services en ligne sont souvent fermés : une fois que vous avez commencé à les utiliser,
                il est très difficile de s’en séparer car ces entreprises font tout pour vous garder captifs en
                vous empêchant, par exemple, de migrer vos données ailleurs facilement.';
$t['map']['camps']['fp2']         = 'Utiliser des services en ligne ouverts, c’est s’assurer qu’on ne sera jamais captif d’un site particulier
                et qu’il sera toujours possible d’aller voir ailleurs.';
$t['map']['camps']['centralisum'] = '<i lang="la">Centralisum</i>';
$t['map']['camps']['cp1']         = 'Les services centralisés posent de nombreux problèmes : ils rendent vos données très vulnérables (un seul site
                indisponible et plus rien n’est accessible) et facilitent énormément leur exploitation par des tiers.';
$t['map']['camps']['cp2']         = 'Utiliser des services en ligne décentralisés, c’est avoir le choix entre utiliser une instance en ligne comme celle
                proposée par Framasoft ou installer le service chez soi.';
$t['map']['camps']['espionnum']   = '<i lang="la">Espionnum</i>';
$t['map']['camps']['ep1']         = '« Si c‘est gratuit, c‘est que vous êtes le produit » : de nombreux services en ligne vivent de
                l’exploitation de vos données personnelles en les revendant à des sociétés publicitaires.
                De plus, la plupart de ces services sont basés aux États-Unis et obéissent aux lois américaines de type
                PATRIOT ACT qui nient totalement votre droit à la vie privée.';
$t['map']['camps']['ep2']         = 'Utiliser des services en ligne hébergés en Europe, c’est s’assurer de ne pas être dépendant des lois d’un autre
                continent. De plus, en hébergeant vous-même le service, plus aucun tiers ne peut violer votre vie privée.';
$t['map']['camps']['privatum']    = '<i lang="la">Privatum</i>';
$t['map']['camps']['pp1']         = 'Les services privateurs (« propriétaires » dans le langage courant) ont un fonctionnement totalement opaque :
                il est impossible de savoir exactement ce que fait le logiciel de vos données. Seul l’éditeur en a le contrôle.';
$t['map']['camps']['pp2']         = 'Utiliser des services en ligne libres, c’est avoir l’assurance d’un contrôle sur le fonctionnement du logiciel par la
                communauté et la possibilité de le modifier, de l’installer ailleurs, etc.';
$t['map']['camps']['nsa']         = '<abbr>NSA</abbr>';
$t['map']['camps']['np1']         = 'Les révélations d’Edward Snowden sur le programme PRISM de la <abbr>NSA</abbr> ont montré que les craintes sur la violation
                de masse de la vie privée des internautes étaient fondées.';
$t['map']['camps']['np2']         = 'Utiliser des services centralisés revient aujourd’hui à offrir sur un plateau ses données personnelles aux
                organisations de surveillance sans aucun moyen de contrôler l’usage qui en est fait.';


// Accueil
$t['why']['title']  = 'Accueil';
$t['why']['link']   = $l['current'];
$t['why']['desc']   = '';
$t['why']['js']     = '';

$t['why']['lp']['p1']      = 'Les géants du web <strong>centralisent nos vies numériques</strong> en échange de leurs services';
$t['why']['lp']['p2']      = 'Les communautés du <strong>logiciel libre</strong> offrent des <strong>services alternatifs éthiques</strong>';
$t['why']['lp']['p3']      = 'Le réseau <strong>Framasoft</strong> souhaite le <strong>démontrer</strong><br>en les <strong>hébergeant</strong>';

$t['why']['choice']['list1']= 'Vous cherchez un outil spécifique ?';
$t['why']['choice']['list2']= '(partage de fichiers, communication, travail collaboratif…)';
$t['why']['choice']['list3']= 'Trouvez le service libre<br>qui répondra à vos besoins.';
$t['why']['choice']['alt1'] = 'Vous utilisez un service connu ?';
$t['why']['choice']['alt2'] = '(de Google, Apple, Facebook, Amazon, Microsoft…)';
$t['why']['choice']['alt3'] = 'Découvrez les alternatives libres<br> pour le remplacer.';

$t['why']['more']['h2']    = 'Aller plus loin';
$t['why']['more']['p0']    = 'En route vers votre indépendance numérique...? La voie est libre !<br>
                              Dégooglisons Internet vous propose de la cheminer en plusieurs étapes.';
$t['why']['more']['p1']    = 'Découvrez et utilisez des services alternatifs (hébergés par Framasoft),
                              en vous aidant de notre <strong>documentation</strong> collaborative pour apprendre
                              comment ils fonctionnent, comment s’y connecter,
                              comment utiliser leurs fonctionnalités, etc.';
$t['why']['more']['b1']    = 'Documentation';
$t['why']['more']['p2']    = 'Si cela vous est disponible, hébergez librement les mêmes logiciels
                              directement sur les serveurs de votre école/association/entreprise/collectif/etc.,
                              grâce à nos tutoriels d’auto-hébergement regroupés sur le <strong>Framacloud</strong>.';
$t['why']['more']['b2']    = 'Framacloud';
$t['why']['more']['p3']    = 'Vous pouvez aussi chercher, près de chez vous, un hébergeur de confiance
                              et local parmi les membres du Collectif d’Hébergeurs Alternatifs,
                              Transparents, Ouverts, Neutres et Solidaires : les <strong>CHATONS</strong> !';
$t['why']['more']['b3']    = 'CHATONS';

$t['why']['why']['h2']     = 'Pourquoi ?';
$t['why']['why']['p0']     = 'Les services sont des logiciels, mais qui sont installés sur le cloud,
                              donc sur l’ordinateur de quelqu’un d’autre (les fameux « serveurs »).
                              Utiliser les services de Google, Apple, Facebook, Amazon, Microsoft...
                              (les « GAFAM »), signifie que vous leur confiez vos données,
                              les traces de votre vie que vous laissez sur Internet.
                              C’est donc une question de confiance.';
$t['why']['why']['p1']     = 'Cette confiance a permis à une poignée d’acteurs, les GAFAM,
                              d’obtenir un quasi-monopole sur nos vies numériques en centralisant
                              les données d’une immense partie de la population.
                              Les <strong>enjeux et dangers</strong> sont triples :
                              économiques, technologiques, culturels...';
$t['why']['why']['b1']     = 'Enjeux et dangers';
$t['why']['why']['p2']     = '<strong>Nos propositions</strong> sont simples :
                              trouver quelles conditions s’imposer pour que cette confiance soit justifiée.
                               Il s’agit de proposer des alternatives à la fois respectueuses de
                               nos êtres et nos diversités, mais qui en plus rendent impossible
                               la reproduction de tels monopoles.';
$t['why']['why']['b2']     = 'Nos propositions';
$t['why']['why']['p3']     = 'Pour que vous puissiez déterminer si vous pouvez nous faire confiance,
                              nous publions une présentation du réseau Framasoft (et de l’association loi 1901 qui le soutient),
                              accompagnée de nos rapports et documents administratifs,
                              dans la partie <strong>Qui sommes-nous ?</strong>';
$t['why']['why']['b3']     = 'Qui sommes-nous ?';

// Pourquoi - Enjeux
$t['why']['enje']['btn']   = 'Les enjeux';
$t['why']['enje']['title'] = 'Quels sont les enjeux ?';
$t['why']['enje']['p1']    = 'Ces dernières années ont vu se généraliser une <strong>concentration des acteurs d’Internet</strong> (Youtube appartient à Google,
                WhatsApp à Facebook, Skype à Microsoft, etc.). Cette centralisation est nuisible, non seulement parce qu’elle freine l’innovation,
                mais surtout parce qu’elle entraîne une perte de liberté pour les visiteurs. <strong>Les utilisateurs de ces derniers services
                ne contrôlent plus leur vie numérique</strong> : leurs comportements sont disséqués en permanence afin de mieux être ciblés par
                la publicité, et leurs données - pourtant privées (sites visités, mails échangés, vidéos regardées, etc.) - peuvent être analysées par des
                services gouvernementaux.';
$t['why']['enje']['p2']    = 'La réponse que souhaite apporter Framasoft à cette problématique est simple : mettre en valeur, pour chacun de ces
                services privateurs de liberté, une alternative Libre, Ethique, Décentralisée et Solidaire.';

// Pourquoi - Dangers
$t['why']['dang']['btn']   = 'Les dangers';
$t['why']['dang']['title'] = 'Les dangers';
$t['why']['dang']['intro'] = 'Les services en ligne toujours plus centralisés de géants tentaculaires comme Google, Amazon, Facebook,
                Apple ou Microsoft (GAFAM) mettent en danger nos vies numériques.';
    // EPCF (Espionnum, Privatum, Centralisum, Fermetum)
$t['why']['dang']['e']     = 'Surveillance';
$t['why']['dang']['ep']    = 'Sous le prétexte de fournir une « meilleure expérience utilisateur », nos comportements sur Internet sont espionnés en
                permanence. Ces informations peuvent servir à afficher de la publicité ciblée, mais les révélations de l’affaire Snowden
                ont aussi prouvé que les géants de l’Internet étaient contraints de communiquer ces données (parfois extrêmement privées :
                emails échangés sur GMail, photos partagées sur Facebook, conversations Skype, géolocalisation des téléphones, etc.)
                à des services gouvernementaux. <strong>Sous prétexte de lutte contre le terrorisme</strong>, les états sont capables
                aujourd’hui d’obtenir bien plus d’informations qu’un « Big Brother » ne l’aurait jamais rêvé.';
$t['why']['dang']['erefs'] = 'https://my.framasoft.org/u/degooglisons/?searchtags=espionnage';
$t['why']['dang']['p']     = 'Vie privée';
$t['why']['dang']['pp']    = 'Nos données sont une extension de nous-mêmes. Elles peuvent indiquer où nous sommes, avec qui, notre orientation politique
                    ou sexuelle, les sites que nous avons visités, notre recette préférée, les sujets qui nous intéressent, etc.<br/>
                    Si une donnée seule, prise indépendamment, n’est pas forcément sensible, un ensemble de données peut le devenir
                    (par exemple si vous avez fait des recherches sur le cancer avant de souscrire à une assurance-vie).<br/>
                    Dans un monde où tout devient numérique (lecture, TV, téléphonie, musique, réseau social, etc.), <strong>notre vie privée
                    est un élément essentiel de ce qui fait de nous une personne singulière</strong>. Une personne malveillante qui aurait accès à votre
                    smartphone peut en apprendre suffisamment sur vous en quelques minutes pour vous causer des torts très importants (usurpation d’identité sur
                    Facebook, détournement d’informations professionnelles, achats effectués sans votre accord, etc.).';
$t['why']['dang']['prefs'] = 'https://my.framasoft.org/u/degooglisons/?searchtags=vie-privee';
$t['why']['dang']['c']     = 'Centralisation';
$t['why']['dang']['cp']    = 'Les acteurs majeurs de l’internet sont devenus de véritables pieuvres : Facebook possède WhatsApp et Instagram,
                    Google détient Youtube et Waze, Microsoft distribue Skype, etc.<br/> Cette concentration des acteurs pose de
                    multiples problèmes : que se passera-t-il si Facebook met la clé sous la porte ? Comment faire des recherches si Google subit une panne ?
                    <strong>Nous devenons peu à peu dépendants de services fournis par un petit nombre d’acteurs.</strong> Par exemple, Apple (iPhone),
                    Google (Android) et Microsoft (Windows Phone) se partagent la quasi-totalité du marché des systèmes d’exploitation pour smartphones.<br/>
                    Par ailleurs, la taille de ces acteurs bride l’innovation : difficile de lancer une start-up face à Apple ou Google
                    (respectivement première et deuxième capitalisations boursièresmondiale).<br/>
                    Enfin, le manque de diversité de ces géants leur donne aussi la possibilité non seulement de collecter facilement
                    des informations personnelles, mais aussi d’altérer l’information qu’ils diffusent (une recherche Google sur le mot « nucléaire »
                    n’affichera pas les mêmes liens suivant que Google vous perçoit comme un militant écologiste ou un pro-nucléaire).';
$t['why']['dang']['crefs'] = 'https://my.framasoft.org/u/degooglisons/?searchtags=centralisation';
$t['why']['dang']['f']     = 'Fermeture';
$t['why']['dang']['fp']    = 'Les services web affichés sur votre ordinateur ou votre smartphone sont généralement exécutés dans le
                    « cloud » : des serveurs dispersés sur la planète, stockant à la fois vos données (mails, photos, fichiers, etc.) mais aussi le code
                    des applications.<br>
                    Pour les données, cela pose le problème de leur pérennité (que deviennent vos fichiers si Dropbox ferme demain ?)
                    mais aussi de votre capacité à changer de services (comment faire pour récupérer l’ensemble de vos photos sur Facebook ou Picasa, et les
                    réinsérer avec les commentaires dans un autre service ?).<br>
                    Pour les applications, cela implique que <strong>vous êtes à la merci de changements impromptus selon le bon vouloir du fournisseur</strong>
                    (ajout de publicité, modification de l’interface, etc.), mais surtout que vous n’avez quasiment aucun contrôle sur ce que l’application peut
                    faire. Ce sont des « boîtes noires » qui peuvent agir de façon malveillante (envoyer des SMS à votre insu, exécuter du code indésirable, etc.).<br>
                    Bref, ces sociétés nous enferment dans des cages dorées, certes, mais des cages malgré tout !';
$t['why']['dang']['frefs'] = 'https://my.framasoft.org/u/degooglisons/?searchtags=fermeture';

// Pourquoi - Nos propositions
$t['why']['prop']['btn']   = 'Nos propositions';
$t['why']['prop']['title'] = 'Ce que nous proposons';
$t['why']['prop']['intro'] = 'Framasoft souhaite faire face à ces dangers menaçant nos vies numériques en proposant des services libres, éthiques,
                décentralisés et solidaires.';
    // LEDS (Libre, Éthique, Décentralisé, Solidaire)
$t['why']['prop']['l']     = 'Liberté';
$t['why']['prop']['lp1']   = 'L’histoire d’Internet elle-même est une histoire de logiciels libres, tant du point de vue des standards que des protocoles employés.
                Sa popularité et son potentiel font aussi des envieux, et de grandes entreprises aimeraient s’en attribuer le contrôle en imposant
                du code fermé dans des systèmes verrouillés et non-interopérables.';
$t['why']['prop']['lp2']   = 'Pour qu’Internet reste fidèle à ses principes fondateurs qui l’ont conduit à son succès, nous devons y trouver des applications libres,
                c’est-à-dire dont le code source est ouvert, accessible et sous licences libres.';
$t['why']['prop']['lp3']   = 'Framasoft s’engage à n’utiliser que des logiciels au code source « libre ».';
$t['why']['prop']['e']     = 'Éthique';
$t['why']['prop']['ep1']   = 'Nous plébiscitons un Internet fait de partage et d’indépendance.';
$t['why']['prop']['ep2']   = 'L’exploitation, la surveillance, la censure et l’appropriation des données sont
                des valeurs que nous refusons au profit de la transparence (la probité), de l’exposition
                claire des conditions d’utilisation des services, et du refus des discriminations.';
$t['why']['prop']['ep3']   = 'Framasoft s’engage à ne pas exploiter les données des utilisateurs de ses services, et à promouvoir un Web ouvert et équitable.';
$t['why']['prop']['d']     = 'Décentralisation';
$t['why']['prop']['dp1']   = 'L’intelligence d’Internet doit reposer sur chaque acteur du réseau dans une
                dynamique de partage de pair à pair, pour éviter de créer un Minitel 2.0.';
$t['why']['prop']['dp2']   = 'Pour assurer l’égalité de tous, citoyens comme entrepreneurs, les monopoles doivent
                non seulement être évités, mais empêchés de s’accaparer les données personnelles ou publiques.';
$t['why']['prop']['dp3']   = 'En expliquant, par des tutoriels, comment multiplier les solutions libres permettant un
                Internet plus équitable, nous facilitons l’essaimage du code et diversifions les usages.';
$t['why']['prop']['dp4']   = 'Framasoft s’engage à faciliter l’auto-hébergement et l’interopérabilité, afin de ne pas «&nbsp;enfermer&nbsp;» ses utilisateurs.';
$t['why']['prop']['s']     = 'Solidarité';
$t['why']['prop']['sp1']   = 'À travers les services que nous déployons, nous promouvons un modèle économique
                fondé sur la mutualisation des coûts, le partage des ressources, et l’accessibilité
                au plus grand nombre.';
$t['why']['prop']['sp2']   = 'Ce modèle possède aussi un caractère éducatif car nous pensons qu’en documentant
                le déploiement des services, un grand nombre d’utilisateurs seront en mesure de partager
                à leur tour ces ressources.';
$t['why']['prop']['sp3']   = 'Nous pensons que ne pas infantiliser les utilisateurs et faire partager la responsabilité de l’utilisation des services permettra de réguler les abus.';
$t['why']['prop']['sp4']   = 'Framasoft s’engage à promouvoir le respect et l’autonomie de ces utilisateurs (tant que la réciproque sera vraie).';
    // Service & Charte
$t['why']['prop']['s&c']   = 'Services et Charte';
$t['why']['prop']['s&cp']  = 'Vous pouvez retrouver en ligne la liste des services que nous proposons déjà (et ceux en préparation) ainsi que notre charte :';
$t['why']['prop']['charte'] = 'Charte des services';

// Accueil - Concrètement
$t['why']['conc']['btn']   = 'Concrètement';
$t['why']['conc']['title'] = 'Concrètement';
$t['why']['conc']['p1']    = 'Le projet « Dégooglisons Internet » - qui ne concerne d’ailleurs pas que Google - consiste à <strong>proposer des services
                alternatifs face à un maximum de services que nous évaluons comme menaçants pour nos vies numériques</strong>.';
$t['why']['conc']['p2']    = 'Google Docs, Skype, Dropbox, Facebook, Twitter, Google Agenda, Youtube, Doodle, Yahoo! Groups, et bien d’autres sont des
                services extrêment pratiques, mais <strong>ils sont devenus bien trop gros et nous ont rendus dépendants</strong>.
                Framasoft souhaite entrer en résistance, et propose un plan de mise en place d’applications alternatives sur plusieurs années.';
$t['why']['conc']['p3']    = 'Ces services sont libres, gratuits, ouverts à tous (dans la limite de nos capacités techniques et financières), tels
                des <strong><a href="http://fr.wikipedia.org/wiki/Biens_communs" title="Bien communs">biens communs</a> numériques</strong>.
                Dans un souci de décentralisation d’internet et de promotion de l’auto-hébergement, nous ferons le maximum afin que chacun
                puisse installer ses propres services (pour soi, pour son association, son entreprise).';
$t['why']['conc']['p4']    = 'Évidemment, nous n’avons pas la prétention de <em>concurrencer</em> ces services, nous souhaitons juste proposer un espace numérique
                neutre, non-commercial et non-agressif envers ses utilisateurs.';
$t['why']['conc']['p5']    = 'Accéder à la liste des services que nous proposons :';

/* Bloc Nous contacter */
$t['why']['conc']['ctitle'] = 'Nous contacter';
$t['why']['conc']['sp1']   = 'Nous sommes une petite association
                (moins de 40 membres, moins de 10 salarié·e·s)
                qui répond à des demandes très variées :
                </p><ul>
                    <li>Invitations à des événements ;</li>
                    <li>Demandes presse et médias ;</li>
                    <li>Besoin d’aide sur nos services ;</li>
                    <li>Partage d’expérience technique ;</li>
                    <li>Éclaircissements de tous ordres…</li>
                </ul><p>';
$t['why']['conc']['sp2']   = 'Afin de vous répondre de manière humaine et personnalisée, nous avons mis en place un formulaire unique qui nous permet de trouver au plus vite la personne la mieux à même de vous répondre. Promis, on fera de notre mieux, mais les journées ne font que 24 heures ;).';
$t['why']['conc']['cbtn']  = 'Contacter Framasoft';

/* Bloc Nous soutenir */
$t['why']['conc']['stitle'] = 'Nous soutenir';
$t['why']['conc']['sp3']     = 'Comme toutes nos actions, nos services ne sont pas gratuits :
                ils sont financés par les dons des personnes qui nous soutiennent par un don,
                ponctuel ou régulier.
                Environ 90 % des revenus de l’association Framasoft
                provient de l’économie du don et servent à financer :
                </p><ul>
                    <li>les salaires de nos permanent·e·s ;</li>
                    <li>les serveurs et dépenses techniques ;</li>
                    <li>les déplacements, flyers et communications ;</li>
                    <li>nos participations au monde du libre, etc.</li>
                </ul><p>
                Framasoft étant une association reconnue d’intérêt général,
                un don de 100€ vous reviendra, après défiscalisation, à 34 €.
                Nous avons mis en place un site unique pour nous soutenir,
                consulter nos rapports (validés par un commissaire aux comptes),
                et en savoir plus sur les dons reçus.';
$t['why']['conc']['sbtn']  = 'Soutenir Framasoft';

$t['why']['who']['btn']   = 'Qui sommes nous ?';

// Liste des services
$t['list']['title']      = 'Liste des services';
$t['list']['link']       = $l['current'].'liste';
$t['list']['desc']       = 'Liste des services en ligne libres, éthiques, décentralisé et solidaires que Framasoft propose (ou qui sont en préparation) pour dégoogliser Internet';
$t['list']['js']         = '
    <script src="'.$l['current'].'js/list.js" type="text/javascript"></script>';

// Liste des alternatives
$t['alt']['title']       = 'Liste des alternatives';
$t['alt']['link']        = $l['current'].'alternatives';
$t['alt']['desc']        = 'Liste des alternatives en ligne libres, éthiques, décentralisé et solidaires que Framasoft recommande pour dégoogliser internet';
$t['alt']['js']          = '
    <script src="'.$l['current'].'js/list.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/jquery.maphilight.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/imageMapResizer.min.js" type="text/javascript"></script>
    <script src="'.$l['current'].'js/map.js" type="text/javascript"></script>';
$t['alt']['alt1']        = 'Vous utilisez';
$t['alt']['alt2']        = ' recommande';
$t['alt']['alt3']        = 'repose sur ';
$t['alt']['altp1']       = $t['meta']['F'].' s’est donné comme objectif de <a href="'.$l['DIoL'].'">proposer une trentaine de services libres alternatifs</a>
                            face aux services qui aspirent nos données et nous enferment.<br>
                            Mais il existe bien d’autres services et acteurs qui œuvrent à dégoogliser internet.';
$t['alt']['altp2']       = 'Vous trouverez <a href="#tips" rel="nofollow">ci-dessous</a> une liste qui récapitule et complète les alternatives présentées sur la carte.
                            Elle est inspirée de <a href="https://prism-break.org/fr/">Prism-Break</a> qui propose aussi d’autres logiciels dans des domaines plus pointus.';
$t['alt']['altp3']       = 'Dans cette liste, chaque service est généralement composé d’<b>un site web complexe</b> <span aria-hidden="true">( <i class="fa fa-cloud"></i> )</span>
                            qui communique avec un <b>logiciel installé sur un ordinateur</b> <span aria-hidden="true">( <i class="fa fa-server"></i> )</span> où se trouvent les données personnelles
                            et auxquels on accède via divers <b>outils installés chez soi</b> <span aria-hidden="true">( <i class="fa fa-home"></i> )</span>.';
$t['alt']['altp4']       = 'Ainsi, lorsque nous utilisons internet, nous devons <b>accorder notre confiance à différents maillons de la chaîne</b>
                            qui nous relie aux données personnelles placées en ligne.
                            À moins de s’auto-héberger, <b>le <i lang="en">cloud</i> est toujours l’ordinateur de quelqu’un d’autre</b>.
                            Il est donc important de savoir à qui nous faisons confiance et ce que font les logiciels de nos données.';

// Espace médias
$t['medias']['title']    = 'Espace médias';
$t['medias']['link']     = $l['current'].'medias';
$t['medias']['subtitle'] = 'Historique de la campagne Dégooglisons Internet';
$t['medias']['intro']    = 'Dégooglisons Internet est une campagne qui a duré trois ans (oct. 2014 - oct. 2017), mais qui s’inscrit dans un cheminement plus général de Framasoft. <br/>Parcourez de la molette la fresque ci-dessous pour en découvrir les dates-clés (plein écran <a href="https://degooglisons-internet.org/fresque">disponible ici</a>).';
$t['medias']['desc']     = '';
$t['medias']['js']       = '';
$t['medias']['tabstitle']   = 'Visuels de la campagne Dégooglisons Internet';
$t['medias']['tabsintro']   = 'Les visuels ci dessous sont sous licence libre, les crédits sont précisés sous chaque onglet.<br/>Contrairement aux apparences, ces visuels sont en grand format (clic droit + «&nbsp;Enregistrer la cible du lien sous&hellip;&nbsp;»). Néanmoins, si vous avez besoin d’une plus haute résolution, n’hésitez pas à <a href="https://contact.framasoft.org/#presse">nous contacter</a>.';
$t['medias']['tabssaveas']  = 'Clic droit sur l’image et « Enregistrer l’image sous » pour la réutiliser';

$t['medias']['t1']          = 'Cartes';
$t['medias']['t1intro']     = 'Crédits cartes&nbsp;: <a href="http://ptilouk.net">Simon « Gee » Giraudot</a>, librement réutilisables sous la licence <a href="http://creativecommons.org/licenses/by-sa/4.0/deed.fr"><span lang="en">Creative Commons By</span>-<abbr>SA</abbr> 4.0</a>.';
$t['medias']['t1i1txt']     = 'Carte « Avant »';
$t['medias']['t1i1url']     = 'img/Carte2016-romains.png';
$t['medias']['t1i1desc']    = 'Carte de la France envahie par les services GAFAM (oct 2014)';
$t['medias']['t1i2txt']     = 'Carte « Après »';
$t['medias']['t1i2url']     = 'img/Carte2016-victoires.png';
$t['medias']['t1i2desc']    = 'Carte de la France avec les alternatives Framasoft (oct 2016)';
$t['medias']['t1i3txt']     = 'Carte animée';
$t['medias']['t1i3url']     = 'img/Carte2016-animation.gif';
$t['medias']['t1i3desc']    = 'Animation de la reconquête des services GAFAM (format .gif)';

$t['medias']['t2']          = 'Dessins Gee';
$t['medias']['t2intro']     = 'Crédits dessins&nbsp;: <a href="http://ptilouk.net">Simon « Gee » Giraudot</a>, librement réutilisables sous la licence <a href="http://creativecommons.org/licenses/by-sa/4.0/deed.fr"><span lang="en">Creative Commons By</span>-<abbr>SA</abbr> 4.0</a>.';
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

$t['medias']['t8']          = 'Dessins Péhä';
$t['medias']['t8intro']     = 'Crédits dessins&nbsp;: <a href="https://lesptitsdessinsdepeha.wordpress.com/">Péhä</a>, librement réutilisables sous la licence <a href="http://creativecommons.org/licenses/by/3.0/deed.fr"><span lang="en">Creative Commons By</span> 3.0</a>.';
$t['medias']['t8i1txt']     = 'Dessin « Fichiers »';
$t['medias']['t8i1url']     = 'img/Peha-Framadrop-CC-BY.png';
$t['medias']['t8i2txt']     = 'Dessin « Projet »';
$t['medias']['t8i2url']     = 'img/Peha-Framagit-CC-BY.png';
$t['medias']['t8i3txt']     = 'Dessin « Réseaux Sociaux »';
$t['medias']['t8i3url']     = 'img/Peha-Framapiaf-Framasphere-CC-BY.png';
$t['medias']['t8i4txt']     = 'Dessin « Visio-conf »';
$t['medias']['t8i4url']     = 'img/Peha-Framatalk-CC-BY-SA.png';
$t['medias']['t8i5txt']     = 'Dessin « Dégooglisons »';
$t['medias']['t8i5url']     = 'img/Peha-Banquet-Degooglisons-CC-By.png';

$t['medias']['t9']          = 'Infographie Framasoft';
$t['medias']['t9intro']     = 'Crédits infographie&nbsp;: <a href="https://geoffreydorne.com/">Geoffrey Dorne</a>, librement réutilisables sous la licence <a href="http://creativecommons.org/licenses/by-sa/4.0/deed.fr"><span lang="en">Creative Commons By-SA</span> 4.0</a>.';
$t['medias']['t9i1txt']     = 'Infographie « Le Monde de Framasoft »';
$t['medias']['t9i1url']     = 'img/infographie_Le-Monde-de-Framasoft_CC-By-SA-Geoffrey-Dorne-1920px.jpg';
$t['medias']['t9i2txt']     = 'Source (fichier.pdf grand format)';
$t['medias']['t9i2url']     = 'img/infographie_framasoft_2017.pdf';


$t['medias']['presstitle']  = 'Revue de presse';
$t['medias']['pressintro']  = 'La campagne « Dégooglisons Internet » a déjà fait parler d’elle durant ses deux ans d’existance. Voici quelques extraits de notre <a href="https://wiki.framasoft.org/speakabout">revue de presse</a>.';
$t['medias']['pressth1']    = 'Date';
$t['medias']['pressth2']    = 'Média';
$t['medias']['pressth3']    = 'Liens';
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
    ['01/11/2014', 'France Inter (Comme un bruit qui court)',
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
$t['_Docs']             = 'Documentation';
$t['_Framacloud']       = 'Framacloud';
$t['_CHATONS']          = 'Chatons';
$t['_Install']          = 'Installer';
$t['_Project updated']  = 'Projet mis à jour';
$t['_Project loading']  = 'Projet en cours';
$t['_Project running']  = 'Projet actif';
$t['_ is an instance based on '] = ' est une instance basée sur le logiciel libre ';
$t['_Read more']        = 'En savoir plus';
$t['_Some examples ?']  = 'Des exemples ?';
$t['_Back to top']      = 'Retour en haut';
$t['_Editor: ']         = 'Éditeur : ';
$t['_Equivalent(s): ']             = 'Équivalent(s) : ';
$t['_Alternative(s) online: ']     = 'Alternative en ligne';
$t['_Alternative(s) offline: ']    = 'Alternative à installer';
$t['_Framasoft service: ']         = 'Service Framasoft : ';
$t['_Nous proposons le service']   = 'Nous proposons le service';
$t['_Nous proposerons le service'] = 'Nous proposerons ';
$t['_release planned on ']         = 'sortie prévue en ';
$t['_Autres alternatives libres']  = 'Autres alternatives libres';
$t['_Select the language']         = 'Choisir la langue';
$t['_Change the language']         = 'Changer la langue';
$t['_OK']                          = 'OK';
$t['_since']                       = 'depuis';
$t['_GAFAM']                       = 'GAFAM';
$t['_GAFAM Logos']                 = $e['google']['fa'].$e['apple']['fa'].$e['facebook']['fa'].$e['amazon']['fa'].$e['microsoft']['fa'];
$t['_GAFAM Title']                 = $e['google']['name'].', '.$e['apple']['name'].', '.$e['facebook']['name'].', '.$e['amazon']['name'].', '.$e['microsoft']['name'];
$t['_& co']                        = '& cie';
$t['_Software']                    = 'Logiciels';
$t['_LEDS']                        = 'LEDS';
$t['_Libre, Éthique, Décentralisé et Solidaire'] = 'Libre, Éthique, Décentralisé et Solidaire';
$t['_ with your help']             = ' avec votre aide';
$t['_Chercher une alternative à un service propriétaire'] = 'Chercher une alternative à un service propriétaire';
$t['_Search by tags']              = 'Recherche par mots-clés';
$t['_Results']                     = 'Résultats';
$t['_All services']                = 'Tous les services';
$t['_Retour à la carte']           = 'Retour à la carte';
$t['_Comme alternative aux services des '] = 'Comme alternative aux services des ';
$t['_, tels :']                      = ', tels :';

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
$d[$k]['sDesc']   = '';                                                 // Description courte (sur alt.php)
$d[$k]['lDesc']   = '';                                                 // Description longue (sous-titre des modales)

$d[$k]['tDesc']   = '';                                                 // Description tweet (140 car. sur list.php)
$d[$k]['hDesc']   = '';                                                 // Description très longue (framanav, framasoft.org et list.php)

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

// Bit.ly
$k= 'bitly';
$d[$k]['sDesc']  = 'Réduction d’URL';
$d[$k]['lDesc']  = 'Racourcissez les adresses web sans pister personne';

$d[$k]['tDesc']  = 'Raccourcir et/ou personnaliser une adresse web (URL) en deux clics, et sans pister quiconque (alternative à Bit.ly ou Goo.gl).';
$d[$k]['hDesc']  = 'Avec Frama.link, il est possible de raccourcir des
                    adresses web trop longues. Sur les réseaux sociaux et
                    le microblogging, un lien raccourci permet d’économiser
                    de l’espace et gagner en clarté.';

$d[$k]['mTitle'] = 'Finies les adresses trop longues';
$d[$k]['mBody']  = '<p>
                        Avec '.$d[$k]['F'].' ou <a href="https://huit.re">Huit.re</a>, il est possible de raccourcir des adresses web trop longues sans toutefois en tracer l’utilisation.
                        Sur les réseaux sociaux et le microblogging, disposer d’une adresse raccourcie permet d’économiser de l’espace et gagner en clarté.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> entrez l’adresse dans sa version originale et Frama.link la raccourcira.
                    </p>';
$d[$k]['tags']   = 'partager, liens';


// Blogger
$k= 'blogger';
$d[$k]['sDesc']  = 'Hébergement de sites';
$d[$k]['lDesc']  = 'Créez un site web qui respectera vos visiteurs';

$d[$k]['tDesc']  = 'Créer un blog, une page ou un site web qui respectera vos visiteurs autant que vos  publications (alternative à Blogger ou Tumblr).';
$d[$k]['hDesc']  = '';

$d[$k]['mTitle'] = 'Votre site web en quelques clics';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de créer un site web facilement, avec des outils libres et de l’héberger sur nos serveurs. Aucune publicité ni traquage ne portera atteinte aux données de vos visiteurs et visiteuses.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Choisissez votre sous-domaine, le type de site que vous voulez créer (page web, blog) puis laissez-vous guider.
                    </p>';
$d[$k]['tags']   = 'site, vitrine, web, html';

// Bubbl.us
$k= 'bubblus';
$d[$k]['name']   = 'Bubbl.us';
$d[$k]['sDesc']  = 'Cartes heuristiques';
$d[$k]['lDesc']  = 'Fabriquez vos cartes mentales';

$d[$k]['tDesc']  = 'Concevoir, publier et partager des cartes mentales simplement, seul ou en collaborant chacun son tour (alternative à Bubbl.us).';
$d[$k]['hDesc']  = 'Interface fluide et intuitive pour créer rapidement et
                    simplement des cartes heuristiques à même votre navigateur.
                    Pertinent en situation de brainstorming ou de prise de notes.';

$d[$k]['mTitle'] = 'Pourquoi créer une carte mentale ?';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet d’organiser un brainstorming, ordonner vos idées à plusieurs, apprendre et faire apprendre une leçon, réaliser des classifications, identifier les éléments importants.
                    </p>
                   <p><video controls="controls" preload="none"
                              width="558" height="387" poster="https://www.framatube.org/images/media/903l.jpg">
                        <source src="https://www.framatube.org/files/1288-tutoriel-video-wisemapping-claire-cassaigne.mp4" type="video/mp4"/>
                        <source src="https://www.framatube.org/files/1288-tutoriel-video-wisemapping-claire-cassaigne.webm" type="video/webm"/>
                    </video></p>
                   <p><small><em>Tutoriel réalisé par Claire Cassaigne</em> - La <a href="https://www.framatube.org/files/1288-tutoriel-video-wisemapping-claire-cassaigne.webm?download=1">vidéo</a> au format webm</small></p>
                    <p>
                        <b class="violet">Pourquoi utiliser Framindmap ?</b> Il est utilisable en ligne, sans installation, aucune inscription n’est requise, vous pouvez exporter
                        votre document sous forme d’image, c’est un logiciel libre et gratuit, les données vous appartiennent.
                    </p>';
$d[$k]['tags']   = 'produire, mindmap, brainstorming';

// Change.org
$k= 'change';
$d[$k]['sDesc']  = 'Pétitions';
$d[$k]['lDesc']  = 'Lancez vos pétitions sans offrir les adresses de vos soutiens';

$d[$k]['tDesc']  = 'Lancer des pétitions depuis une plateforme éthique, qui n’exploite pas les données des signataires (alternative à Avaaz, Change.org).';
$d[$k]['hDesc']  = '';

$d[$k]['mTitle'] = 'Libérez vos pétitions';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de lancer des pétitions sur les sujets qui vous tiennent à cœur. En quelques clics, votre pétition est publiée et les adresses de vos soutiens ne seront pas exploités par des régies publicitaires.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Inscrivez-vous, lancez une nouvelle pétition en suivant les instructions. Votre sondage sera créé. Vos soutiens n’aurons pas besoin de s’inscrire pour pouvoir y participer.
                    </p>';
$d[$k]['tags']   = 'pétition, diffuser';

// Del.icio.us
$k= 'delicious';
$d[$k]['sDesc']  = 'Marque-pages';
$d[$k]['lDesc']  = 'Retrouvez facilement vos liens, et vos services Framasoft';

$d[$k]['tDesc']  = 'Trier et conserver ses adresses web (dont les liens vers ses Frama-services) dans un classeur numérique (alternative à Del.icio.us).';
$d[$k]['hDesc']  = 'MyFrama est un petit fourre-tout numérique, qui vous
                    permet de conserver et retrouver les liens que vous aimez
                    à la manière de del.ico.us ! Avec un système d´étiquettes
                    et de tri automatique, vous pouvez ranger aisément vos
                    onglets et marque-pages, et utiliser le bouton MyFrama
                    pour retrouver les services Framasoft que vous utilisez !';

$d[$k]['mTitle'] = 'Triez tout le web si vous voulez (mais c´est long)';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un petit fourre-tout numérique,
                        qui vous permet de conserver et retrouver les
                        liens que vous aimez à la manière de del.ico.us !
                        Avec un système d´étiquettes et de tri automatique,
                        vous pouvez ranger aisément vos onglets et marque-pages,
                        et utiliser le bouton MyFrama pour retrouver les
                        services Framasoft que vous utilisez !
                    </p>
                    <p>
                      <b class="violet">Fonctionnement :</b> Créez votre
                      compte, puis ajoutez le marque-pages interactif
                      (Bookmarklet) à la barre personelle de voter navigateur.
                      Utilisez-le pour conserver un lien (<abbr>URL</abbr>)
                      en lui adjoignant un titre, une description et des étiquettes.
                      Le bouton MyFrama sur nos sites sert à conserver le
                      lien du service que vous utilisez : avec lui, tout est
                      trié automatiquement !
                      Pensez à créer vos propres règles de tri automatiques
                      qui ajoutent l´étiquette de votre choix aux morceaux
                      d´adresses web que vous identifierez !
                    </p>';
$d[$k]['tags']   = 'partager, veille, liens';

// Doodle
$k= 'doodle';
$d[$k]['sDesc']  = 'Réunions et sondages';
$d[$k]['lDesc']  = 'Plannifiez vos réunions ou prenez des décisions';

$d[$k]['tDesc']  = 'Déterminer collaborativement la meilleure date et heure d’une réunion, ou créer un mini-sondage très simplement (alternative à Doodle).';
$d[$k]['hDesc']  = 'Framadate c’est un peu comme Doodle mais en libre.
                    Rien de plus simple de créer un rendez-vous ou un sondage
                    sans inscription pour y inviter vos collaborateurs.';

$d[$k]['mTitle'] = 'Organiser des rendez-vous simplement et librement';
$d[$k]['mBody']  = '<p>
                        Avec '.$d[$k]['F'].' vous serez en mesure de
                        planifier un rendez-vous à plusieurs ou créer
                        un sondage en ligne. Framadate ne stocke
                        pas vos données !
                    </p>
                    <p class="violet">Fonctionnalités :</p>
                    <ul>
                        <li>envoi de courriel à chaque réponse</li>
                        <li>modification du sondage en cours</li>
                        <li>planification d’une dead-line</li>
                        <li>nommez votre sondage et communiquez l’adresse à vos collaborateurs</li>
                    </ul>';
$d[$k]['tags']   = 'organiser, réunion, date, sondage';

// Dropbox
$k= 'dropbox';
$d[$k]['sDesc']  = 'Stockage de documents';
$d[$k]['lDesc']  = 'Hébergez, synchronisez et partagez vos documents';

$d[$k]['tDesc']  = 'Obtenir un espace de stockage en ligne pour y héberger, synchroniser (voire partager) ses fichiers (alternative à Dropbox, Google Drive).';
$d[$k]['hDesc']  = 'Framadrive vous permet de stocker vos documents en ligne,
                    de les synchroniser sur vos ordinateurs, mobiles, etc…
                    et de les partager avec qui vous voulez.';

$d[$k]['mTitle'] = 'Héberger ses documents en ligne';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de stocker en ligne
                        vos documents, de les synchroniser sur vos
                        ordinateurs, tablettes, téléphones, etc et de
                        les partager avec qui vous voulez…
                    </p>
                    <p>
                    Nous avons ouvert 5000 comptes d´une capacité de 2 Go
                    afin de permettre de tester une alternative libre…
                    Pour une solution plus importante ou plus disponible,
                    vous pouvez aller chercher un hébergement chez les
                    <a href="https://chatons.org">CHATONS</a> dont notre
                    partenaire <a href="https://indiehosters.net">Indie Hosters</a>
                    (ou vous essayer à l´auto hébergement avec
                    <a href="http://yunohost.org/">Yunohost</a>,
                    <a href="http://labriqueinter.net/">la Brique internet</a>
                    ou <a href="https://cozy.io/fr/">My Cozy Cloud</a>).
                    </p>';
$d[$k]['tags']   = 'stocker, sauvegarder, fichiers, partager, agenda, calendrier, contacts, tâches';

// Evernote
$k= 'evernote';
$d[$k]['sDesc']  = 'Prise de notes';
$d[$k]['lDesc']  = 'Vos notes, images et liens favoris à portée de doigt&nbsp;!';

$d[$k]['tDesc']  = 'Synchroniser ses notes, images et liens favoris entre ses appareils avec la sécurité qu’offre le chiffrement (alternative à Evernote).';
$d[$k]['hDesc']  = 'Avec Framanotes vous pouvez prendre et conserver des notes,
                    images, liens… et même des fichiers ; et les synchroniser
                    avec tous vos appareils (voire les partager avec des ami⋅e⋅s).';

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
$d[$k]['tags']   = 'noter, partager, chiffrement';

// Facebook
$k= 'facebook';
$d[$k]['sDesc']  = 'Réseau social';
$d[$k]['lDesc']  = 'Échangez sur un réseau social éthique et décentralisé';

$d[$k]['tDesc']  = 'Partager sur un réseau social éthique et décentralisé, sans voir son profil exploité à des fins publicitaires (alternative à Facebook).';
$d[$k]['hDesc']  = 'Framasphère est un réseau social libre, basé sur le
                    logiciel décentralisé Diaspora*.
                    Retrouvez vos amis sur Framasphère - ou d’autres pods Diaspora* -
                    et échangez avec eux sans être pisté.';

$d[$k]['mTitle'] = 'Rejoignez vos amis en zone libre';
$d[$k]['mBody']  = '<p>
                        Sur '.$d[$k]['F'].', vous pouvez retrouver un réseau social qui respecte vos données. Framasphère est un nœud (appelé <i>pod</i>)
                        du réseau social libre Diaspora*.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> échanger des messages et photos avec n’importe quelle autre personne du réseau Diaspora*, gérer vos contacts, tags,
                        mentions, repartages… Vous pouvez aussi publier sur d’autres réseaux sociaux (Facebook, Twitter, Tumblr ou Wordpress).
                    </p>';
$d[$k]['tags']   = 'social, réseau, partager';

// Github
$k= 'github';
$d[$k]['sDesc']  = 'Hébergement de code';
$d[$k]['lDesc']  = 'Publiez votre code (libre) sur une plateforme libre !';

$d[$k]['tDesc']  = 'Publier son code (de préférence libre !), et collaborer à celui des autres, sur une forge logicielle libre (alternative à Github).';
$d[$k]['hDesc']  = 'Framagit est un outil qui s’adresse avant tout aux développeurs.
                    Il permet d’héberger vos projets de logiciels libres et
                    de travailler collaborativement dessus.';

$d[$k]['mTitle'] = 'Hébergement de code libre';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un outil qui s’adresse avant tout aux développeurs. Il permet la création de 42 dépôts maximum par compte (si vous avez besoin de plus, songez sérieusement à vous auto-héberger). Et, petit plus par rapport à GitHub, vous pouvez créer des dépôts privés.</p>
                    </p>
                    <p>Il est également possible de « mirrorer » automatiquement vos dépôts sur GitHub : vous continuez à « engraisser la bête », mais vous êtes déjà moins dépendant, et vous conservez une visibilité auprès des presque 10 millions d’inscrits sur GitHub. Votre dépôt sur notre Framagit est automatiquement poussé sur votre dépôt Github. C’est d’ailleurs la solution retenue par Framasoft, qui dispose toujours d’un compte GitHub, alors que les développements sont réalisés sur notre forge.</p>';
$d[$k]['tags']   = 'coder, forge, développement';

// Gmail
$k= 'gmail';
$d[$k]['sDesc']  = 'Service de messagerie';
$d[$k]['lDesc']  = 'Hébergez vos mails, sans la NSA dedans';

$d[$k]['tDesc']  = '';
$d[$k]['hDesc']  = '';

$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = $t['meta']['F'].' ne proposera pas d’alternative à '.strip_tags($d[$k]['name']).', '.strip_tags($d[$k]['eq']).', mais <a href="#'.$k.'" class="btn-alt">il existe d’autres acteurs</a> qui proposent des services d’email.';
$d[$k]['mFooter']= ' ';
$d[$k]['tags']   = '';

// Google Agenda
$k= 'gagenda';
$d[$k]['sDesc']  = 'Agenda partagé';
$d[$k]['lDesc']  = 'Choisissez qui verra votre planning';

$d[$k]['tDesc']  = 'Créer des agendas personnels ou professionnels, confidentiels ou publics, seul ou en collaboration, et les synchroniser sur ses appareils.';
$d[$k]['hDesc']  = 'Avec Framagenda vous pouvez créer des agendas personnels,
                    professionnels, le planning d´une salle ou des activités
                    de votre organisation, et les partager librement.
                    Vous restez maîtres de vos données, et vous choisissez
                    auprès de qui, où et quand elles s´affichent.';

$d[$k]['mTitle'] = 'Vos rendez-vous vous appartiennent';
$d[$k]['mBody']  = '<p>
                        Avec '.$d[$k]['F'].' vous pouvez créer des agendas personnels, professionnels, le planning d´une salle ou des activités de votre organisation, et les partager librement. Vous restez maîtres de vos données, et vous choisissez auprès de qui, où et quand elles s´affichent.
                    </p>
                    <p class="violet">Fonctionnalités :</p>
                    <ul>
                        <li>création de multiples agendas</li>
                        <li>listes de contacts et de tâches</li>
                        <li>synchronisation sur vos appareils</li>
                        <li>partager des agendas</li>
                        <li>inviter (par email) des participants à des rendez-vous</li>
                        <li>possibilité d´affichage public des agendas</li>
                    </ul>';
$d[$k]['tags']   = 'date, organiser, partager, agenda, calendrier, contacts, tâches';

// Google Books
$k= 'gbooks';
$d[$k]['sDesc']  = 'Livres en ligne';
$d[$k]['lDesc']  = 'Téléchargez des ebooks sous licence libre';

$d[$k]['tDesc']  = 'Consulter une bibliothèque en ligne de livres numériques sous licence libre, pour les télécharger à volonté (alternative à Google Book).';
$d[$k]['hDesc']  = 'Notre bibliothèque contient quelques centaines d’ouvrages
                    libres ou du domaine public. Elle est consultable en ligne
                    sur les plateformes mobiles. Vous pouvez l’ajouter
                    directement une application de lecture d’ebook grâce au
                    flux <abbr>OPDS</abbr>.';

$d[$k]['mTitle'] = 'Catalogue d’ouvrages accessibles pour tous';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est le catalogue <abbr>OPDS</abbr> de Framasoft. « Euh… Oui, mais encore ? », nous direz-vous. Un catalogue <abbr>OPDS</abbr> est un site auquel vous pouvez vous abonner avec un logiciel supportant cette fonctionnalité (certaines liseuses en embarquent un, pour Android, il existe Aldiko et bien d’autres), vous donnant accès rapidement et simplement à tout une bibliothèque depuis votre ordinateur, smartphone ou tablette.
                    </p>
                    <p>Le catalogue <abbr>OPDS</abbr> de Framasoft vous donne accès à des centaines d’ouvrages non protégés par « copyright ».</p>';
$d[$k]['tags']   = 'kindle, ebook, lire';

// Google Docs
$k= 'gdocs';
$d[$k]['sDesc']  = 'Rédaction collaborative';
$d[$k]['lDesc']  = 'Rédigez vos textes en ligne et à plusieurs';

$d[$k]['tDesc']  = 'Rédiger un texte en ligne, à plusieurs, en temps réel, avec l’aide d’un historique, du tchat, des commentaires… (alternative à Google Docs).';
$d[$k]['hDesc']  = 'Écrivons tous ensemble sur le même document dans une
                    interface de rédaction collective en ligne.
                    Aucune inscription requise, on se donne un pseudo,
                    une couleur et on se lance !';

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
$d[$k]['tags']   = 'document, texte, collaborer';

// Google Form
$k= 'gforms';
$d[$k]['sDesc']  = 'Questionnaires en ligne';
$d[$k]['lDesc']  = 'Créez simplement des questionnaires';

$d[$k]['tDesc']  = 'Créer un questionnaire en ligne, simple ou complexe, sur une plateforme respectueuse des donnéees de chacun (alternative à Google Forms).';
$d[$k]['hDesc']  = 'Framaforms vous permet de créer les questionaires dont
                    vous avez besoin, que ce soit dans un cadre scolaire,
                    familial ou associatif. Créez vos questions en fonction
                    de vos besoins, des formulaires à choix multiples aux
                    champs de texte libre.';

$d[$k]['mTitle'] = 'Création de questionaires';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de créer les questionnaires qu´il vous faut, que ce soit dans un cadre scolaire, familial ou associatif. Créez vos questions en fonction de vos besoins, des formulaires à choix multiples aux champs de texte libre.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement</b> : créez un compte sur Framaforms et lancez-vous dans la création des questionnaires, en fonction de vos besoins. Vos sondés n’ont pas besoin de s’inscrire pour pouvoir répondre. Vous disposez d’une synthèse des réponses.
                    </p>';
$d[$k]['tags']   = 'formulaire, diffusion, groupes';

// Google Groupes
$k= 'ggroups';
$d[$k]['sDesc']  = 'Listes de diffusion';
$d[$k]['lDesc']  = 'Créez une liste de discussion par email';

$d[$k]['tDesc']  = 'Créer une liste de diffusion, c’est à dire une adresse email unique pour l’ensemble des emails de son groupe (alternative à Google Groups).';
$d[$k]['hDesc']  = 'Framalistes vous permet de créer des liste de diffusion
                    emails : toute personne s´abonnant à votre liste pourra
                    recevoir les emails qui y sont envoyés, et y participer
                    à son tour. À vous de choisir si cette liste est
                    publique, semi-privée ou privée.';

$d[$k]['mTitle'] = 'Échangez sans être lus par Big Brother';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de créer des liste de diffusion emails : toute personne s´abonnant à votre liste pourra recevoir les emails qui y sont envoyés, et y participer à son tour. À vous de choisir si cette liste est publique, semi-privée ou privée.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement</b> : créez un compte sur Framalistes pour faire, paramétrer et gérer votre liste de diffusion, ou tout simplement pour y rechercher les listes qui vous intéressent et gérer vos abonnements.
                    </p>';
$d[$k]['tags']   = 'groupes, discussion, diffusion, liste';

// Google Maps
$k= 'gmaps';
$d[$k]['sDesc']  = 'Cartographie';
$d[$k]['lDesc']  = 'Personnalisez vos cartes géographiques en ligne';

$d[$k]['tDesc']  = 'Personnaliser et dessiner sur des fonds de cartes, seul ou en collaboration, et les partager aisément (alternative à Google Maps).';
$d[$k]['hDesc']  = 'Framacarte vous permet de dessiner, marquer, colorier,
                    annoter… les fonds de carte
                    d’<a href="https://fr.wikipedia.org/wiki/Openstreetmap">OpenStreetMap</a>
                    pour les afficher ensuite dans votre site web ou les imprimer.';

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
$d[$k]['tags']   = 'carte, maps';

// Google Reader
$k= 'greader';
$d[$k]['sDesc']  = 'Lecteur de flux';
$d[$k]['lDesc']  = 'Suivez l’actualité et faites vos choix librement';

$d[$k]['tDesc']  = 'Rassembler les flux d’actualité (RSS, Atom) de blogs, chaînes vidéos, etc. en un seul lieu de consultation (alternative à Google Reader).';
$d[$k]['hDesc']  = 'En vous abonnant aux flux RSS de vos sites préférés,
                    restez informés de toutes leurs actualités avec Framanews !';

$d[$k]['mTitle'] = 'Toujours au courant, jamais en retard';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous propose un lecteur de flux RSS en ligne, vous permettant d’être toujours au courant de l’actualité à partir des flux RSS de vos sites préférés !
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> après avoir créé votre compte, enregistrez vos flux RSS et suivez-les.
                        Comment faire plus simple ?
                    </p>';
$d[$k]['tags']   = 'feed, rss, news, reader, veille';

// Google Search
$k= 'gsearch';
$d[$k]['sDesc']  = 'Moteur de recherche';
$d[$k]['lDesc']  = 'Et si vos recherches n’étaient plus fichées par Google ?';

$d[$k]['tDesc']  = 'Faire ses recherches sur un moteur qui va interroger Google, Bing, Yahoo, Wikipedia, etc. en anonymisant les requêtes et éviter le pistage.';
$d[$k]['hDesc']  = 'Framabee est un meta-moteur de recherche libre et anonyme.
                    Vos recherches effectuées au travers de ce moteur sont envoyées
                    à différents moteurs avant d’être affichées dans votre navigateur.
                    L’intérêt ? Notre moteur est alors un intermédiaire entre
                    vous et Google (et autres), ainsi vos données personnelles
                    (adresse IP, historique de vos recherches, géolocalisation, profil)
                    ne sont pas enregistrées chez eux.';

$d[$k]['mTitle'] = 'Une recherche anonyme';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un meta-moteur de recherche anonyme. Cela signifie que vos recherches effectuées au travers de ce moteur sont envoyées à différents moteurs, avant d’être affichées dans votre navigateur. L’intérêt, c’est que c’est notre moteur qui fait alors office d’intermédiaire entre vous et Google (ou les autres moteurs). Votre adresse IP n’est donc pas enregistrée chez eux. </p>
                        <p>Evidemment, vous devez avoir confiance en Framasoft/Framabee si vous souhaitez l’utiliser, c’est pourquoi nous proposons une <a href="'.$l['Charte'].'">charte</a>.
                    </p>';
$d[$k]['tags']   = 'rechercher, anonymat';

// Google Slides
$k= 'gslides';
$d[$k]['sDesc']  = 'Présentations';
$d[$k]['lDesc']  = 'Concevez de beaux diaporamas sans vous fatiguer';

$d[$k]['tDesc']  = 'Concevoir des diaporamas et présentations en ligne, avec la possibilité de collaborer et les partager (alternative à PowerPoint365).';
$d[$k]['hDesc']  = 'Framaslides vous permet de créer directement en ligne un
                    diaporama ou une présentation, d’y accéder avec une
                    simple connexion internet, et de la partager.';

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
$d[$k]['tags']   = 'diaporama, présentation, document';

// Google Spreadsheet
$k= 'gspreadsheet';
$d[$k]['sDesc']  = 'Tableur collaboratif';
$d[$k]['lDesc']  = 'Partagez vos tableaux et collaborez !';

$d[$k]['tDesc']  = 'Collaborer en ligne, à plusieurs et en temps réel sur des feuilles de calcul en ligne (alternative à Excel365, Google Spreadsheet).';
$d[$k]['hDesc']  = 'Framacalc est au tableur ce que Framapad est au
                    traitement de texte, autrement dit la possibilité
                    d’éditer simplement et collectivement en ligne
                    sur un même document.';

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
$d[$k]['tags']   = 'tableur, document';

// Img.ur
$k= 'imgur';
$d[$k]['sDesc']  = 'Envoi d’images';
$d[$k]['lDesc']  = 'Partagez vos images anonymement';

$d[$k]['tDesc']  = 'Envoyer ses images en ligne, pour les partager seules avec un seul lien, ou en faire une galerie (alternative à Img.ur).';
$d[$k]['hDesc']  = 'Framapic vous permet de partager facilement des images,
                    par exemple pour les publier sur Twitter, Facebook,
                    ou … Framasphère !';

$d[$k]['mTitle'] = 'Partagez vos images facilement';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de partager facilement des images, par exemple pour les partager sur Twitter, Facebook, ou … Framasphère !
                    </p>
                    <p>Attention, ce service n’est pas un équivalent de flickr ou instagram : il ne s’agit pas d’un service d’hébergement de photos d’utilisateurs, mais bien d’un service d’hébergement d’images anonymes (même nous, nous n’avons pas accès au contenu, qui est chiffré).</p>
                    <p>
                        '.$d[$k]['F'].' permet d’envoyer des images de façon anonyme. Vous pouvez décider du moment de leur suppression (dès la première visualisation, 24H/7j/30j/1an après leur mise en ligne).
                    </p>';
$d[$k]['tags']   = 'partager, images, galerie, chiffrement';

// Meetup
$k= 'meetup';
$d[$k]['sDesc']  = 'Événements communautaires';
$d[$k]['lDesc']  = 'Organisez des rencontres et des groupes d´intérêts';
$d[$k]['hDesc']  = '';

$d[$k]['tDesc']  = '';

$d[$k]['mTitle'] = 'Gardez le contrôle sur les rencontres que vous organisez';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de proposer des événements et rencontres, et de garder le contact avec la communauté qui partage vos intérêts !
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> à venir.
                    </p>';
$d[$k]['tags']   = '';

// Minecraft
$k= 'minecraft';
$d[$k]['sDesc']  = 'Jeu éducatif';
$d[$k]['lDesc']  = 'Découvrez le jeu éducatif à creuser';

$d[$k]['tDesc']  = 'Jouer à construire ensemble dans ce jeu un monde ouvert qui a de nombreuses applications pédagogiques (alternative à Minecraft).';
$d[$k]['hDesc']  = 'Framinetest est un serveur du jeu Minetest, un jeu « bac à sable »
                    dont vous construisez et décomposez les blocs pour le modifier et
                    avec lequel vous pouvez réaliser vos propres applications pédagogiques.';

$d[$k]['mTitle'] = 'Construisez vos propres applications pédagogiques';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un serveur du jeu Minetest, un jeu "bac à sable" dont vous construisez et décomposez les blocs pour le modifier.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Téléchargez le logiciel client, connectez vous sur notre serveur et jouez.
                    </p>';
$d[$k]['tags']   = 'jeu, éducation';

// Padlet
$k= 'padlet';
$d[$k]['sDesc']  = 'Organisation d’idées';
$d[$k]['lDesc']  = 'Faites vos brainstrormings en ligne et à plusieurs';

$d[$k]['tDesc']  = 'Créer un tableau de notes collaboratif, en ligne et en temps réel pour animer ses brainstormings (alternative à Padlet).';
$d[$k]['hDesc']  = 'Framemo vous permet de créer un tableau à colonnes où quiconque peut venir y déposer des notes colorées.
                    Tel Framapad, aucune inscription n´est requise, les modifications se voient et sont enregistrées en direct.';

$d[$k]['mTitle'] = 'Tempête de post-it libres';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de créer un tableau à colonnes où quiconque peut venir y déposer des notes colorées. Tel <a href="https://framapad.org><b class="violet>Frama</b><b class="vert">pad</b></a>, aucune inscription n´est requise, et les modifications se voient et sont enregistrées en direct.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> allez sur le site, créez un tableau, renseignez votre pseudonyme, puis partagez l´URL (l´adresse web) avec vos collaborateurs. C´est aussi simple que cela !
                    </p>';
$d[$k]['tags']   = 'collaborer, brainstorming';

// Pastebin
$k= 'pastebin';
$d[$k]['sDesc']  = 'Textes chiffrés';
$d[$k]['lDesc']  = 'Rédigez et partagez en toute discrétion';

$d[$k]['tDesc']  = 'Rédiger des textes, écrits et codes pour les partager confidentiellement grâce au chiffrement de bout en bout (alternative à Pastebin).';
$d[$k]['hDesc']  = 'Avec Framabin, vous pouvez partager des informations que
                    seuls vous et votre correspondant aurez le pouvoir de
                    déchiffrer, et ceci de manière très simple.';

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
$d[$k]['tags']   = 'partager, noter, texte, chiffrement';

// Pocket
$k= 'pocket';
$d[$k]['sDesc']  = 'Sauvegarde de contenu';
$d[$k]['lDesc']  = 'Sauvegardez et lisez plus tard';

$d[$k]['tDesc']  = 'Mettre de côté les articles blogs et onglet « à lire plus tard » pour les retrouver aisément sur tous ses appareils (alternative à Pocket).';
$d[$k]['hDesc']  = 'Framabag vous permet de mettre de côté les articles
                    que vous n’avez pas le temps de lire tout de suite.';

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
$d[$k]['tags']   = 'veille';

// Scribd
$k= 'scribd';
$d[$k]['sDesc']  = 'Partage de d’écrits';
$d[$k]['lDesc']  = 'Affichez et partagez vos documents';
$d[$k]['hDesc']  = '';

$d[$k]['tDesc']  = '';

$d[$k]['mTitle'] = 'Votre lectorat aussi a des droits';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' permet d´héberger des documents PDF et des présentations (ODP) afin de les donner à lire au grand public. Votre lectorat n´aura pas besoin de créer un compte ni de subir publicités et traquages, et pourra se concentrer sur ce que vous partagez.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Créez un compte, téléversez vos documents et utilisez le lien de partage (ou le code d´affichage pour votre site).
                    </p>';
$d[$k]['tags']   = '';

// Shrtct
$k= 'loomio';
$d[$k]['sDesc']  = 'Prise de décision';
$d[$k]['lDesc']  = 'Prenez vos décisions ensemble, collaborativement';

$d[$k]['tDesc']  = 'Créer une équipe et y inviter ses collaborateurs pour discuter et prendre des décisions communautaires à l’aide de divers outils de vote.';
$d[$k]['hDesc']  = 'Framavox vous aide à prendre des décisions communautaires.
                    Discutez, échangez, mettez-vous d’accord et passez à l’action,
                    le tout dans les délais que vous vous êtes fixés au départ.';

$d[$k]['mTitle'] = 'Décidez ensembles,';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous aide à prendre des décisions communautaires. Discutez, échangez, mettez-vous d’accord et passez à l’action, le tout dans les délais que vous fixés au départ.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Lancez une discussion, et invitez les personnes concernées à venir apporter leur point de vue. Développez les idées, échangez quelque soit votre point de vue. Les avis peuvent tous s’exprimer, se partager et murir. Décidez ensemble et sortez une proposition finale, dans les délais définis.
                    </p>';
$d[$k]['tags']   = 'discussion, groupes, organiser, décider';

// Skype
$k= 'skype';
$d[$k]['sDesc']  = 'Visioconférence';
$d[$k]['lDesc']  = 'Échangez en audio-vidéo en trois clics seulement';

$d[$k]['tDesc']  = 'Créer ou rejoindre un salon de vidéoconférence (avec tchat et partage d’écran) en 3 clics, depuis son navigateur web (alternative à Skype).';
$d[$k]['hDesc']  = 'Framatalk vous permet de discuter avec vos amis sans
                    installation complexe de logiciel ni inscription.
                    Tout se passe entre vous et vos amis, directement depuis
                    votre navigateur web.';

$d[$k]['mTitle'] = 'Vidéoconférence';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de discuter simplement avec vos amis, sans installation complexe de logiciel. Vous échangez sans aucune analyse des données liées aux conversations. Tout se passe entre vous et vos amis.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Directement à partir de votre navigateur web, vous êtes mis en relation avec vos amis, sans devoir installer de logiciel supplémentaire. Une fois connecté, donnez l’autorisation à votre navigateur d’utiliser votre micro et votre webcam, et profitez de la discussion en toute simplicité.
                    </p>';
$d[$k]['tags']   = 'discussion, vidéo';

// Slack
$k= 'slack';
$d[$k]['sDesc']  = 'Communication collaborative';
$d[$k]['lDesc']  = 'Discutez avec votre équipe sur un tchat boosté aux stéroïdes';

$d[$k]['tDesc']  = 'Communiquer avec son équipe sans passer par les groupes Facebook (ni Slack). Partage d’images, canaux publics et privés, indexation…';
$d[$k]['hDesc']  = 'Framateam est un service de <b>tchat</b> libre
                    qui permet de communiquer avec son équipe en notifiant ses collègues,
                    de conserver ses conversations et d’y faire des recherches.';

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
$d[$k]['tags']   = 'discussion, groupes';

// Trello
$k= 'trello';
$d[$k]['sDesc']  = 'Gestion de projets';
$d[$k]['lDesc']  = 'Gérez vos projets communs jusqu’au moindre détail';

$d[$k]['tDesc']  = 'Gérer ses projets communs avec de multiples outils : équipes, tableaux de tâches, plannings, rappels et emails… (alternative à Trello).';
$d[$k]['hDesc']  = 'Framaboard est un gestionnaire collaboratif de tâches
                    et de projets, en suivant la méthode Kanban.
                    Son système visuel permet de s’y retrouver au premier
                    coup d’œil, quelle que soit votre habitude à utiliser
                    ce genre d’outil.';

$d[$k]['mTitle'] = 'Gestionnaire de projets';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' est un gestionnaire de tâches visuel. Il permet de gérer des projets de manière collaborative, en suivant la méthode Kanban. Son système visuel permet de s’y retrouver au premier coup d’œil, quelque soit votre habitude à utiliser ce genre d’outil.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Lancez votre projet, et commencez à le gérer collectivement, tâche par tâche. Assignez une personne à chaque tache, définissez des fonctions, des avancements et des délais. Cette gestion visuelle vous permettra de voir l’état du projet en un coup d’œil.
                    </p>';
$d[$k]['tags']   = 'organiser, calendrier, agenda, tâches, projet';

// WeTransfer
$k= 'wetransfer';
$d[$k]['sDesc']  = 'Envoi de gros fichiers';
$d[$k]['lDesc']  = 'Partagez vos fichiers de manière anonyme';

$d[$k]['tDesc']  = 'Partager de lourds fichiers avec une adresse web, de manière confidentielle avec le chiffrement de bout en bout (alternative à WeTransfer).';
$d[$k]['hDesc']  = 'Avec Framadrop, fini les pièces jointes trop lourdes qui
                    empêchent l’envoi d’un <span lang="en">email</span>.
                    Ce service libre vous permet de partager facilement des
                    fichiers de manière sécurisée.';

$d[$k]['mTitle'] = 'Partagez vos fichiers facilement';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de partager facilement des fichiers comme, par exemple, lorsque vous voulez envoyez une pièce jointe par email et que le fichier dépasse la taille maximale autorisée.
                    </p>
                    <p>Attention, ce service n’est pas un équivalent de Dropbox ou Google Drive : il ne s’agit pas d’un service d’hébergement de fichiers  (pour ça il y a <b class="violet">Frama</b><b class="vert">drive</b>), mais bien d’un service d’envoi de fichiers anonymes (le contenu est automatiquement chiffré avant envoi, nous n’y avons pas accès).</p>
                    <p>
                        '.$d[$k]['F'].' permet d’envoyer des fichiers de façon anonyme. Vous pouvez décider du moment de leur suppression (dès le premier téléchargement, 24H/7j/30j/60j après leur mise en ligne).
                    </p>';
$d[$k]['tags']   = 'partager, fichiers, chiffrement';

// Youtube
$k= 'youtube';
$d[$k]['sDesc']  = 'Hébergement de vidéos';
$d[$k]['lDesc']  = 'Devenez YouTube à la place de Google';

$d[$k]['tDesc']  = '';
$d[$k]['hDesc']  = 'Vidéos en français (ou sous-titrées en français) autour
                    du logiciel libre en particulier et du Libre en général.
                    Interviews, conférences, documentaires, extraits télévisés…
                    pour s’informer mais aussi informer les autres.';

$d[$k]['mTitle'] = 'Libérez vos vidéos';
$d[$k]['mBody']  = '<p>
                        Sur '.$d[$k]['F'].', vous pouvez télécharger vos vidéos, les partager avec votre entourage ou les ouvrir en lecture publique.
                        C’est le meilleur moyen de partager des vidéos sans céder vos droits.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> ouvrez un compte et téléchargez vos vidéos. Vous gardez vos droits et la liberté de modifier vos téléchargements.
                    </p>';
$d[$k]['tags']   = 'partager, vidéo';

/********************
 * Pas sur la carte
 ********************/
// JS Fiddle
$k= 'jsfiddle';
$d[$k]['sDesc']  = 'Partage de code';
$d[$k]['lDesc']  = '';
$d[$k]['hDesc']  = '';

$d[$k]['tDesc']  = '';

$d[$k]['mTitle'] = '';
$d[$k]['mBody']  = '';
$d[$k]['tags']   = '';
// Kongregate
$k= 'kongregate';
$d[$k]['sDesc']  = 'Jeux';
$d[$k]['lDesc']  = 'Une compilation de jeux libre';

$d[$k]['tDesc']  = 'Retrouver une sélection de jeux sous licence libre, à jouer en ligne ou à installer sur son ordinateur (alternative à Kongregate).';
$d[$k]['hDesc']  = 'Framagames est une compilation de jeux libres qui se
                    jouent en ligne, se téléchargent sur son PC, sa tablette…
                    et ne nécessitent aucune installation supplémentaire.';

$d[$k]['mTitle'] = 'Faites une pose, jouez quelques instants';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].', vous propose un certain nombre de jeux libres, disponibles aussi bien pour une utilisation en ligne qu’hors ligne. Faites une pause et profitez de l’un des jeux proposés.
                        <small>(et <a href="https://fr.wikipedia.org/wiki/Angry_Birds#Collecte_de_donn.C3.A9es_par_la_NSA">contrairement à Angry Birds</a>, la NSA ne vous espionnera pas ;) )</small>
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Chacun des jeux est directement utilisable sur le site ou téléchargeable pour une utilisation hors ligne. Sélectionnez votre jeu et lancez-vous.
                    </p>';
$d[$k]['mFooter']= '<p class="precisions">Framagames est une compilation de jeux libres. Les crédits sont indiqués sur le site.</p>';
$d[$k]['tags']   = 'jeu';

// Maestro
$k= 'maestro';
$d[$k]['sDesc']  = 'Collaboration flexible';
$d[$k]['lDesc']  = 'Orchestrez vos projets collaboratifs';

$d[$k]['tDesc']  = 'Rassembler un pad, une vidéo-conférence et bien d’autres outils en une seule fenêtre et seule une adresse web : idéal pour les réunions.';
$d[$k]['hDesc']  = 'Besoin en même temps d’un pad pour prendre des notes,
                    d’un tableau d’organisation, et d’une vidéo-conférence ?
                    Avec Framaestro, c’est vous qui organisez les outils qu’il vous faut, sur une seule et unique page web.';

$d[$k]['mTitle'] = 'Ochestrez vos projets collaboratifs';
$d[$k]['mBody']  = '<p>
                        Besoin en même temps d’un pad pour prendre des notes, d’un tableau d’organisation, et d’une vidéo-conférence ?
                        Avec '.$d[$k]['F'].', c’est vous qui organisez les outils qu’il vous faut, sur une seule et unique page web.
                    </p>';
$d[$k]['tags']   = 'collaborer';

// Pixlr
$k= 'pixlr';
$d[$k]['sDesc']  = 'Dessin vectoriel';
$d[$k]['lDesc']  = 'Créez rapidement des images vectorielles au format SVG';

$d[$k]['tDesc']  = 'Créer et éditer des images à base de formes (vectorielles, au format SVG) très simplement et en quelques clics. Les enfants adorent.';
$d[$k]['hDesc']  = 'Pour créer et éditer simplement et rapidement de belles
                    images en ligne au format ouvert SVG. Les enfants adorent !';

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
$d[$k]['tags']   = 'images, dessiner';

// Transifex
$k= 'transifex';
$d[$k]['sDesc']  = 'Traduction de logiciels';
$d[$k]['lDesc']  = 'Ouvrez un espace de traduction à votre logiciel';
$d[$k]['hDesc']  = '';

$d[$k]['tDesc']  = '';

$d[$k]['mTitle'] = 'Pour que votre code devienne polyglotte !';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous offre une interface de traduction simple pour traduire les chaînes de caractères de votre code de manière collaborative.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> Créez un compte, téléversez vote code, et modérez les diverses participations.
                    </p>';
$d[$k]['tags']   = '';

// Twitter
$k= 'twitter';
$d[$k]['sDesc']  = 'Microblogging';
$d[$k]['lDesc']  = 'Gazouillez sur Internet';

$d[$k]['tDesc']  = 'Échanger de courts messages de manière publique, confidentielle ou privée sur cette alternative à Twitter éthique et décentralisée.';
$d[$k]['hDesc']  = 'Framapiaf est un service libre de <b>microblogging</b>,
                    basé sur le logiciel décentralisé Mastodon.
                    Retrouvez vos amis sur Framapiaf - ou d’autres instances
                    Mastodon, GNU Social, Friendica - et échangez avec eux sans être pisté.';

$d[$k]['mTitle'] = 'Le microblogage libre';
$d[$k]['mBody']  = '<p>
                        '.$d[$k]['F'].' vous permet de suivre des flux de microblogage et entretenir vos propres flux de manière décentralisée.
                    </p>
                    <p>
                        <b class="violet">Fonctionnement :</b> utilisez un client de connexion, ouvrez un compte, abonnez-vous à des flux et tweetez à votre tour.
                    </p>';
$d[$k]['tags']   = 'réseau, social, microblog';

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

// Patreon
$k= 'patreon';
$d[$k]['sDesc']  = 'Micropaiement et financement participatif';

// Paypal
$k= 'paypal';
$d[$k]['sDesc']  = 'Paiements en ligne';

// Universalis
$k= 'universalis';
$d[$k]['sDesc']  = 'Encyclopédie';


/**************
 * Categories *
 **************/
$c1['home']['name']    = 'Chez soi';
$c1['web']['name']     = 'Web';
$c1['office']['name']  = 'Bureautique';
$c1['social']['name']  = 'Société';
$c1['files']['name']   = 'Partage de fichiers';
$c1['media']['name']   = 'Médias & culture';
$c1['geo']['name']     = 'Géo';
$c1['hobbies']['name'] = 'Loisirs';
$c1['site']['name']    = 'Sites web';
$c1['dev']['name']     = 'Développement';

$c2['collab']['name']  = 'Travailler collaborativement';
$c2['prod']['name']    = 'Concevoir des outils pratiques';
$c2['orga']['name']    = 'S’organiser ensemble';
$c2['com']['name']     = 'Échanger à plusieurs';
$c2['share']['name']   = 'Transmettre liens et fichiers';
$c2['tools']['name']   = 'Synchroniser et partager';
$c2['search']['name']  = 'Mieux profiter du web';
$c2['games']['name']   = 'Se divertir librement';



?>
