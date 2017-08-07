<?php

require('i18n.php');

require('function.php');

$page = 'alt';

$tips = '';

$areas = '
    <!-- Village -->
    <area id="a-village" coords="175,125,70" class="village" alt="'.$t['map']['camps']['village'].'" title="'.$t['map']['camps']['village'].'" shape="circle" data-maphilight=\'{"strokeColor":"6A5687","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <!-- Big camps -->
    <area id="a-fermetum" coords="100,225,55" alt="Fermetum" title="Fermetum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <area id="a-centralisum" coords="175,270,55" alt="Centralisum" title="Centralisum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <area id="a-espionnum" coords="250,245,55" alt="Espionnum" title="Espionnum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <area id="a-privatum" coords="275,155,55" alt="Privatum" title="Privatum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <!-- NSA -->
    <area id="a-nsa" coords="485,315,50" alt="NSA" title="NSA"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1" >
    <!-- Little camps -->';

$options = '';

$text = '';

foreach ($d as $k => $v) {

    $color = '757575';
    if(!isset($d[$k]['class'])) {
        $v['class'] = '';
        switch (substr($k,0,3)) {
            case 'tip' : $v['class'] = 'objectifs'; break;
            case 'up-' : $v['class'] = 'casque'; break;
        }
        if(in_array($k, $potion)) {
            $v['class'] = 'potion';
            $color = 'D2703A';
        } elseif(in_array($k, $fight)) {
            $v['class'] = 'fight';
            $color = '677835';
        }
    }

    // GAFAM & cie
    $gafam = explode(', ', strip_tags($v['eq']));
    array_unshift($gafam, strip_tags($v['name']));

    $gafam_html = '';

    foreach($gafam as $w) {
        if ($w != '') {
            $gafam_img = 'img/gafam/'.str_replace(' ', '-', strtolower($w)).'.png';
            $gafam_html .= '<li class="list-group-item">';
            if(file_exists($gafam_img)) {
                $gafam_html .= '<img src="'.$l['current'].$gafam_img.'" alt="" />&nbsp;';
            }
            $gafam_html .= $w.'</li>';
        }
    }



    if(isset($v['pos']) && $v['pos']!='') {

        $areas .= '
        <area id="a-'.$k.'"  alt="'.$v['pos'].'"
              coords="'.$v['pos'].'" shape="circle"
              data-maphilight=\'{"strokeColor":"'.$color.'","strokeWidth":2,"fillColor":"ffffff","fillOpacity":0.2}\'
              href="javascript:void(0);" tabindex="-1" >';

        $options .= '
        <option id="o-'.$k.'" aria-describeby="#t-'.$k.'">'.$v['name'].'</option>';

        if (strlen($v['FDate'])==4) {
            $release =
                str_replace(array('violet','vert','rouge'), 'fc_g8', $v['F']).'
                <span class="small">'.$t['_release planned on '].'
                    <a href="/liste/#'.$v['FDate'].'">'.$v['FDate'].'</a>
                    '.$t['_ with your help'].' <a href="'.$l['S'].'" class="btn btn-xs btn-soutenir" tittle="'.$t['meta']['S'].'">
                        <i class="fa fa-fw fa-heart" aria-hidden="true"></i><span class="sr-only">'.$t['meta']['S'].'</span>
                    </a>
                </span>';
        } else {
            $release =
                $v['F'].' <span class="small">'.$t['_since'].' '.$v['FDate'].'</span>';
        }
        if ($v['altOn']!='') {
            $alton  = '
                    <tr>
                        <td>
                            <i class="fa fa-fw fa-lg fa-cloud fc_g5 pull-right" data-toggle="tooltip" data-placement="top" title="'.$t['_Alternative(s) online: '].'"></i>
                            <span class="sr-only">'.$t['_Alternative(s) online: '].'</span>'.str_replace(', ','<br/>',$v['altOn']).'
                        </td>
                    </tr>';
            $rowspan = 3;
        } else {
            $alton  = '';
            $rowspan = 2;
        }

        if(!isset($d[$k]['mFooter'])) {
            $v['mFooter'] = '<p class="precisions">'.$v['F'].$t['_ is an instance based on '].$v['S'];
            $v['mFooter'] .= (isset($v['CL']) && $v['CL'] != '') ? '<br><i class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></i> Découvrir comment l’<a href="'.$v['CL'].'" class="text-success">'.$t['_Install'].' sur un serveur</a></p>' : '</p>';
        }

        $docs = (!isset($v['DL'])) ? '' : '<a href="'.$v['DL'].'" class="btn btn-warning">'.$t['_Docs'].'</a>';

        $text .= modal(
                    't-'.$k,
                    $v['sDesc'].'<span class="pull-right">'.$v['F'].'</span>',
                    '<div class="well"><p>Comme alternative aux services des <span title="'.$e['google']['name'].', '.$e['apple']['name'].', '.$e['facebook']['name'].', '.$e['amazon']['name'].', '.$e['microsoft']['name'].'">'.$e['google']['fa'].$e['apple']['fa'].$e['facebook']['fa'].$e['amazon']['fa'].$e['microsoft']['fa'].'</span> '.$t['_& co'].', tels :</p>
                        <ul class="list-group">'.$gafam_html.'</ul>
                        <p>Nous proposons le service '.$release.'</p>
                    </div>'.$v['mBody'],
                    $v['mFooter'].'
                    <a href="'.$v['FL'].'" class="btn btn-primary">'.$t['_Use'].'</a>
                    '.$docs.'
                    <a href="#'.$k.'" class="btn btn-default btn-alt">Autres alternatives</a>'
                );
    }

    if((substr($k,0,3) == 'tip') || (substr($k,0,3) == 'up-')) {
        $tip = '';
    } else {

        $gafam_html = '
            <a class="anchor" id="'.$k.'" rel="nofollow"></a>
            <h3 class="h5"><a href="#'.$k.'" rel="nofollow">'.$v['sDesc'].'</a></h3>
            <ul class="list-group">
            '.$gafam_html.'
            </ul>
        ';

        // Frama
        $frama = '
            <ul class="list-group">
                ';
        $frama_img = '';

        if (strlen($v['FDate'])==4 && $v['F']!='') {
            // Framaservice in the future
            //$frama .= '<li class="list-group-item">'.str_replace(array('violet','vert','rouge'), 'fc_g8', $v['F']).' <small>(<a href="/liste/#'.$v['FDate'].'">'.$v['FDate'].'</a>)</small></li>';

        } elseif ($v['F']!='') {

            // Frama or LEDS service online
            $leds_img = 'img/leds/'.str_replace(' ', '-', strtolower(strip_tags($v['F']))).'.png';
            if(file_exists($leds_img) && !strstr($leds_img,'frama')) {
                $frama_img .= '<img src="'.$l['current'].$leds_img.'" alt="" />&nbsp;';
            }
            $frama .= '<li class="list-group-item">'.$frama_img.$v['F'].'<i class="fa fa-cloud fc_g5 pull-right" data-toggle="tooltip" data-placement="top" title="'.$t['_Alternative(s) online: '].'"></i></li>';

        }

        if ($v['S'] != '') {
            $leds_img = 'img/leds/'.str_replace(' ', '-', strtolower(strip_tags($v['S']))).'.png';
            if(file_exists($leds_img)) {
                $frama_img .= '<img src="'.$l['current'].$leds_img.'" alt="" />&nbsp;';
            }
            $frama .= '<li class="list-group-item">'.$frama_img.$v['S'].'<i class="fa fa-server fc_g5 pull-right" data-toggle="tooltip" data-placement="top" title="'.$t['_Alternative(s) offline: '].'"></i></li>';
        }

        $frama .= '
            </ul>';

        // LEDS
        $leds_html = '
            <ul class="list-group">';

        // online
        $leds = explode(', ', str_replace($v['S'], '', $v['altOn']));
        foreach($leds as $w) {
            if ($w != '') {
                $leds_img = 'img/leds/'.str_replace(' ', '-', strtolower(strip_tags($w))).'.png';
                $leds_html .= '<li class="list-group-item">';
                if(file_exists($leds_img)) {
                    $leds_html .= '<img src="'.$l['current'].$leds_img.'" alt="" />&nbsp;';
                }
                $leds_html .= '<i class="fa fa-cloud fc_g5 pull-right" data-toggle="tooltip" data-placement="top" title="'.$t['_Alternative(s) online: '].'"></i>'.$w.'</li>';
            }
        }

        // offline
        $leds = explode(', ', str_replace($v['S'], '', $v['altOff']));
        foreach($leds as $w) {
            if ($w != '') {
                $leds_img = 'img/leds/'.str_replace(' ', '-', strtolower(strip_tags($w))).'.png';
                $leds_html .= '<li class="list-group-item">';
                if(file_exists($leds_img)) {
                    $leds_html .= '<img src="'.$l['current'].$leds_img.'" alt="" />&nbsp;';
                }
                $leds_html .= '<i class="fa fa-server fc_g5 pull-right" data-toggle="tooltip" data-placement="top" title="'.$t['_Alternative(s) offline: '].'"></i>'.$w.'</li>';
            }
        }

        $leds_html .= '
            </ul>';

        $tip = '
                        <tr>
                            <td>'.$gafam_html.'</td>
                            <td>
                                '.$frama.$leds_html.'
                            </td>
                        </tr>';
    }
    if($v['c1']== 'home') {
            $c1[$v['c1']]['html'] .= str_replace('fa-server', 'fa-home',
                                     str_replace('fa-cloud', 'fa-home',
                                     str_replace('title="'.$t['_Alternative(s) online: '].'"', 'title="'.$c1['home']['name'].'"',
                                     str_replace('title="'.$t['_Alternative(s) offline: '].'"', 'title="'.$c1['home']['name'].'"',
                                        $tip
                                     ))));
    } else {
        $c1[$v['c1']]['html'] .= $tip;
    }
};

$tablist = '<li><a href="#bloc-carte" title="Retour à la carte" data-toggle="tooltip" data-placement="bottom"><img src="img/carte_petite.png" alt="Retour à la carte" /></a></li>';

foreach($c1 as $k => $v) {


    if ( $k != '') {
    $tips .= '
        <a class="anchor" id="'.$k.'" rel="nofollow"></a>
        <div class="panel panel-default">
            <div class="panel-heading">
                    <h2 class="panel-title text-center">
                        '.$v['fa'].'&nbsp;'.$v['name'].'
                    </h2>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">'.$t['alt']['alt1'].'</th>
                        <th class="text-center" scope="col">'.$t['meta']['F'].' '.$t['alt']['alt2'].'</th>
                    </tr>
                </thead>
                <tbody>
                '.$v['html'].'
                </tbody>
            </table>
        </div>
    ';
    $tablist .= '<li><a href="#'.$k.'" title="'.$v['name'].'" data-toggle="tooltip" data-placement="bottom">'.$v['fa'].'&nbsp;<span>'.$v['name'].'</span></a></li>';

    }
}

include('header.php');

?>
        <div class="row" id="bloc-carte">
            <div class="container ombre">
                <div class="map row">
                    <h2 class="h3"><?php echo $t['map']['map'] ?></h2>

                    <p><select id="c-select" title="Choisir le camp" class="form-control">
                        <?php echo $options; ?>
                    </select></p>

                    <div id="map-container">

                        <img src="<?php echo str_replace('#','', str_replace('victoires','fantome', $l['map'])) ?>" alt="<?php echo $t['map']['altMap'] ?>" id="carte" usemap="#cartemap" />

                        <map id="cartemap" name="cartemap" style="position:absolute; top:0; width:100%; z-index:15">
                            <?php echo $areas; ?>
                        </map>

                        <video poster="<?php echo $l['map'] ?>" <!--autoplay loop--> muted>
                            <source src="<?php echo str_replace('victoires','animation', str_replace('.png','.webm', $l['map'])) ?>" type="video/webm" />
                            <source src="<?php echo str_replace('victoires','animation', str_replace('.png','.mp4', $l['map'])) ?>" type="video/mp4">
                            <img src="<?php echo $l['map'] ?>" alt="" style="width:100%;" />
                        </video>
                    </div>
                </div>

                <?php echo modal(
                        't-village',
                        $t['map']['camps']['village'],
                        '<p>'.$t['map']['camps']['vp1'].'</p>
                         <p>'.$t['map']['camps']['vp2'].'</p>'
                    );
                    echo modal(
                        't-fermetum',
                        $t['map']['camps']['fermetum'],
                        '<p>'.$t['map']['camps']['fp1'].'</p>
                         <p>'.$t['map']['camps']['fp2'].'<a href="#t2-fermetum">'.$t['_Read more'].'</a></p>'
                    );
                    echo modal(
                        't-espionnum',
                        $t['map']['camps']['espionnum'],
                        '<p>'.$t['map']['camps']['ep1'].'</p>
                         <p>'.$t['map']['camps']['ep2'].'<a href="#t2-espionnum">'.$t['_Read more'].'</a></p>'
                    );
                    echo modal(
                        't-centralisum',
                        $t['map']['camps']['centralisum'],
                        '<p>'.$t['map']['camps']['cp1'].'</p>
                         <p>'.$t['map']['camps']['cp2'].'<a href="#t2-centralisum">'.$t['_Read more'].'</a></p>'
                    );
                    echo modal(
                        't-privatum',
                        $t['map']['camps']['privatum'],
                        '<p>'.$t['map']['camps']['pp1'].'</p>
                         <p>'.$t['map']['camps']['pp2'].'<a href="#t2-privatum">'.$t['_Read more'].'</a></p>'
                    );
                    echo modal(
                        't-nsa',
                        $t['map']['camps']['nsa'],
                        '<p>'.$t['map']['camps']['np1'].'</p>
                         <p>'.$t['map']['camps']['np2'].'</p>'
                    );
                ?>
                <!-- Little camps -->
                <?php echo $text; ?>
            </div>
        </div>

        <div class="row" id="alt-intro">
            <div class="container ombre">
                <p><?php echo $t['alt']['altp1']; ?></p>

                <p><?php echo $t['alt']['altp2']; ?></p>

                <p><?php echo $t['alt']['altp3']; ?></p>

                <p class="text-center" id="network"><a href="#home"><i class="fa fa-fw fa-home"></i></a> → <i class="fa fa-fw fa-cloud"></i> → <i class="fa fa-fw fa-server"></i></p>

                <p><?php echo $t['alt']['altp4']; ?></p>
            </div>
        </div>

        <div id="tips" class="row">
            <div class="container ombre">
                <div id="sticky" class="container hidden-xs cats">
                    <nav class="navbar navbar-default nav-cats" role="navigation">
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav nav-tabs" role="tablist">
                                <?php echo $tablist; ?>
                            </ul>
                        </div>

                    </nav>
                </div>

                <div class="panel-group">
                    <?php echo $tips; ?>
                </div>

<?php
include('footer.php')
?>