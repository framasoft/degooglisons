<?php
require('../data.php');

$tips = '';
$timeline = array();

foreach ($data as $k => $v) {

    /* Icônes et texte pour compléter le code couleur */
    $icon = '';
    $alt_text = '';
    switch ($v['class']) {
        case 'fight' : $icon = '<span class="fa fa-fw fa-check vert" title="Projet actif"></span><span class="sr-only">Projet actif</span>'; break;
        case 'potion' : $icon = '<span class="fa fa-fw fa-clock-o orange" title="Projet en cours"></span><span class="sr-only">Projet en cours</span>'; break;
        case 'casque' : $icon = '<span class="fa fa-fw fa-refresh text-info" title="Projet mis à jour"></span><span class="sr-only">Projet mis à jour</span>'; break;
    }

    /* Front */
    if($v['class']=='casque') {
        $front = '
            <div class="front">
                <p class="pull-right">'.$icon.'</p>
                <h3>'.$v['alt_frama'].'</h3>
                <div class="front_old">'.$v['name'].'</div>
                <div class="front_new"></div>
            </div>';
    } else if ( $v['class']=='objectifs') {
        $front = '
            <div class="front">
                <h3>'.$v['description'].'</h3>
                <div class="front_old"><span class="fa fa-fw fa-heart"></span> '.$v['name'].'</div>
                <div class="front_new"><span class="fa fa-fw fa-paw"></span> '.$v['alt_frama'].'</div>
            </div>';
    } else {
        $front = '
            <div class="front">
                <p class="pull-right">'.$icon.'</p>
                <span class="logo"></span>
                <div class="k-fg">
                    <h3>'.$v['description'].'</h3>
                    <div class="front_old"><span class="fa fa-fw fa-eye"></span> '.$v['name'].'</div>
                    <div class="front_new"><span class="fa fa-fw fa-shield"></span> '.$v['alt_frama'].' <span class="soft_frama">('.$v['soft_frama'].')</span></div>
                </div>
            </div>';
    }

    /* Back */
    if($v['class']=='fight' || $v['class']=='casque' || $v['class']=='potion') {
        $utiliser_back = ''; $utiliser_modale = '';
        if($v['url_frama']!='') {
            $utiliser_back = '<a href="'.$v['url_frama'].'" class="btn btn-xs btn-primary btn-block">Utiliser</a>';
            $utiliser_modale = '<a href="'.$v['url_frama'].'" class="btn btn-primary">Utiliser</a>';
        }
        $back = '
            <div class="back">
                <p class="pull-right">'.$icon.'</p>
                <h4>'.$v['alt_frama'].'</h4>
                <p class="back_content">'.$v['long_desc'].'</p>

                <div class="col-xs-6">
                    '.$utiliser_back.'
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-xs btn-info btn-block" data-toggle="modal" data-target="#'.$v['id_frama'].'">+ d’infos</button>
                </div>

                <div class="modal fade" id="'.$v['id_frama'].'" tabindex="-1" role="dialog" aria-labelledby="'.$v['id_frama'].'Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
                                <h4 class="modal-title" id="'.$v['id_frama'].'Label">'.$v['modale_title'].'</h4>
                            </div>
                            <div class="modal-body">
                                    '.$v['modale_body'].'
                            </div>
                            <div class="modal-footer clearfix">
                                '.$v['modale_footer'].$utiliser_modale.'<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';

    } else if ( $v['class']=='objectifs') {
        $back = '
            <div class="back">
                <p class="back_content">'.$v['long_desc'].'</p>

                <div class="col-xs-6">
                    <a href="http://soutenir.framasoft.org" class="btn btn-xs btn-soutenir btn-block"><span class="fa fa-w fa-heart"></span> Soutenir</a>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-xs btn-info btn-block" data-toggle="modal" data-target="#'.$v['id_frama'].'">+ d’infos</button>
                </div>

                <div class="modal fade" id="'.$v['id_frama'].'" tabindex="-1" role="dialog" aria-labelledby="'.$v['id_frama'].'Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
                                <h4 class="modal-title" id="'.$v['id_frama'].'Label">'.$v['modale_title'].'</h4>
                            </div>
                            <div class="modal-body">
                                '.$v['modale_body'].'
                            </div>
                            <div class="modal-footer">
                                '.$v['modale_footer'].'<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    } else {
        $back = '
            <div class="back"></div>';
    }


    $tip = '
    <li class="'.$v['id_frama'].' '.$v['class'].'">
        <div class="tip-content">
            '.$front.'
            '.$back.'
        </div>
    </li>';
    preg_match('#(\d\d\d\d)#',$v['date_frama'],$year);
    if($year[0]=='2011' || $year[0]=='2012' || $year[0]=='2013') {
        $timeline['2011-2013'] .= $tip;
    } else {
        $timeline[$year[0]] .= $tip;
    }
};

ksort($timeline);

foreach($timeline as $k => $v) {
    $tips .= '
        <a class="anchor" id="'.$k.'"></a>
        <div class="row year">
            <h2>'.$k.'</h2>
            <ul class="tips">
                '.$v.'
            </ul>
        </div>
    ';
}

?><!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <title>Dégooglisons Internet - Liste des services - Framasoft</title>
        <meta charset="utf-8" />
        <meta name="title" content="Dégooglisons Internet - Liste des services - Framasoft" />
        <meta name="description" content="Liste des services en ligne libres, éthiques, décentralisé et solidaires que Framasoft propose (ou qui sont en préparation) pour dégoogliser Internet" />
        <meta name="author" content="Framasoft" />
        <link rel="shortcut icon" href="../img/favicon.png">
        <link href="https://n4.framasoft.org/nav/lib/bootstrap/css/bootstrap.min.css" media="all" rel="stylesheet">
        <link href="../css/liste.css" rel="stylesheet" type="text/css" />
        <script src="https://n4.framasoft.org/nav/lib/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="https://n4.framasoft.org/nav/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('a[href="#leds"]').on('click', function() {
                    $('.leds').slideDown('slow');
                });
                $('.leds .close').on('click', function() {
                    $('.leds').slideUp();
                });
                $('.nav-year a').on('click', function() {
                    var offset = $($(this).attr('href')).offset();
                    $('html, body').animate({
                        scrollTop: $($(this).attr('href')).offset().top
                    }, 1000);

                });

                // Fix slide up on focus
                $('.tips .back a,.tips .back button').on('focus', function() {
                    $('.tip-content').removeClass('show-back');
                    $(this).parent().parent().parent('.tip-content').addClass('show-back');
                });
                $('.tips .back a,.tips .back button').on('focusout', function() {
                    $('.tip-content').removeClass('show-back');
                });
                // Remove link in the front
                $('.front a').contents().unwrap();
                // Slide up on click for tablet/mobile
                $('.objectifs .front,.potion .front,.casque .front, .fight .front').on('click', function() {
                    $(this).parent('.tip-content').addClass('show-back');
                });
            });
            $(window).scroll(function() {
                var $sticky = $("#sticky");
                if($(window).scrollTop() > 140) {
                    $("#sticky").css('position','fixed');
                } else {
                    $("#sticky").css('position','relative');
                };
            });

        </script>
    </head>
    <body data-spy="scroll" data-target=".nav-year">
        <script src="https://n4.framasoft.org/nav/nav.js" type="text/javascript"></script>
        <div class="row" id="mainHeader">
            <div class="container ombre">
                <header class="header">
                    <div class="row">
                        <h1 class="col-md-6"><a href="../"><span class="violet">Dégooglisons</span> <span class="orange">Internet</span></a></h1>
                        <p class="lead col-md-6">
                            Une initiative du réseau <span class="violet">Frama</span><span class="orange">soft</span>
                            en faveur d’un internet <a href="#leds">libre</a>, <a href="#leds">décentralisé</a>,
                            <a href="#leds">éthique</a> et <a href="#leds">solidaire</a>
                        </p>
                    </div>

                    <hr class="trait clearfix" />

                    <div id="sticky" class="container hidden-xs">

                        <nav class="navbar navbar-default nav-year col-md-6" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                                    <span class="sr-only">Navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                <ul class="nav navbar-nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#2011-2013">2011-2013</a></li>
                                    <li><a href="#2014">2014</a></li>
                                    <li><a href="#2015">2015</a></li>
                                    <li><a href="#2016">2016</a></li>
                                    <li><a href="#2017">2017</a></li>
                                    <!--<li><a href="#framalab">Framalab</a></li>-->
                                </ul>
                            </div><!-- /.navbar-collapse -->

                        </nav>

                        <div class="col-md-6 hidden-sm">
                            <p class="text-center" style="margin:0"><a class="btn btn-lg btn-soutenir" href="http://soutenir.framasoft.org"><span class="fa fa-w fa-heart"></span> Soutenir ce projet</a></p>
                        </div>

                    </div>
                </header>
            </div>
        </div>
        <main>
        <a id="leds" class="anchor"></a>
        <div class="row leds">
            <div class="container ombre">
                <h2 class="col-xs-12">Pour un Internet… <button type="button" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button></h2>
                <div class="row col-xs-12">
                    <div class="col-md-6">
                        <h3 id="internet-libre"><span class="fa fa-fw fa-unlock"></span> Libre</h3>
                        <p>L’histoire d’Internet elle-même est une histoire de logiciels libres, tant du point de vue des standards que des protocoles employés. Sa popularité et son potentiel font
                        aussi des envieux, et de grandes entreprises aimeraient s’en attribuer le contrôle en imposant du code fermé dans des systèmes verrouillés et non-interopérables. Pour qu’Internet
                        reste fidèle à ses principes fondateurs qui l’ont conduit à son succès, nous devons y trouver des applications libres, c’est à dire dont le code source est ouvert, accessible et
                        sous licences libres.</p>
                    </div>
                    <div class="col-md-6">
                        <h3 id="internet-decentralise"><span class="fa fa-fw fa-share-alt"></span> Décentralisé</h3>
                        <p>L’intelligence d’Internet doit se situer à la périphérie du réseau dans une dynamique de partage de pair à pair, pour éviter de créer un Minitel 2.0. Pour assurer l’égalité
                            de tous, citoyens comme entrepreneurs, les monopoles doivent non seulement être évités, mais empêchés de s’accaparer les données personnelles ou publiques. En expliquant,
                            par des tutoriels, comment multiplier les solutions libres permettant un Internet plus équitable, nous facilitons l’essaimage du code et diversifions les usages.</p>
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col-md-6">
                        <h3 id="internet-ethique"><span class="fa fa-fw fa-eye-slash"></span> Éthique</h3>
                        <p>Nous plébiscitons un Internet fait de partage et d’indépendance. L’exploitation, la surveillance, la censure et l’appropriation des données sont des valeurs que nous refusons
                        au profit de la transparence (la probité), de l’exposition claire des conditions d’utilisation des services, et du refus des discriminations.</p>
                    </div>
                    <div class="col-md-6">
                        <h3 id="internet-solidaire"><span class="fa fa-fw fa-group"></span> Solidaire</h3>
                        <p>À travers les services que nous déployons, nous promouvons un modèle économique fondé sur la mutualisation des coûts, le partage des ressources, et l’accessibilité au plus grand
                            nombre. Pour cette raison les abus seront évités car nous avons tous conscience de la communauté des biens. Ce modèle possède aussi un caractère éducatif car nous pensons
                            qu’en documentant le déploiement des services, un grand nombre d’utilisateurs seront en mesure de partager à leur tour ces ressources.</p>
                    </div>
                </div>
                <div class="row col-xs-12">
                    <p class="text-center well">Pour en savoir plus, consultez <strong><a href="https://n4.framasoft.org/nav/html/charte.html">notre charte</a></strong> détaillée.</p>
                </div>
            </div>
        </div>
        <div id="tips" class="row">
            <div class="container ombre">
                <?php echo $tips; ?>
                <p class="signature text-right small" style="margin-right:20px">Campagne commencée le 07/10/2014<br>Dernière modification le 17/07/2015</p>
            </div>
        </div>

        </main>
    </body>
</html>
