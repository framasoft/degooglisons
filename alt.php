<?php

require('i18n.php');

$page = 'alt';

$tips = '';

foreach ($d as $k => $v) {
    if((substr($k,0,3) == 'tip') || (substr($k,0,3) == 'up-')) {
        $tip = '';
    } else {

        // GAFAM & cie
        $gafam = explode(', ', strip_tags($v['eq']));
        array_unshift($gafam, strip_tags($v['name']));

        $gafam_html = '
            <a class="anchor" id="'.$k.'" rel="nofollow"></a>
            <h3 class="h5"><a href="#'.$k.'" rel="nofollow">'.$v['sDesc'].'</a></h3>
            <ul class="list-group">';

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

        $gafam_html .= '
            </ul>
        ';

        // Frama
        $frama = '
            <ul class="list-group">
                ';
        $frama_img = '';

        if (strlen($v['FDate'])==4 && $v['F']!='') {
            // Framaservice in the future
            $frama .= '<li class="list-group-item">'.str_replace(array('violet','vert','rouge'), 'fc_g8', $v['F']).' <small>(<a href="/liste/#'.$v['FDate'].'">'.$v['FDate'].'</a>)</small></li>';

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
                                <div class="col-sm-6">'.$frama.'</div>
                                <div class="col-sm-6">'.$leds_html.'</div>
                            </td>
                        </tr>';
    }
    if($v['cat']== 'home') {
            $c[$v['cat']]['html'] .= str_replace('fa-server', 'fa-home',
                                     str_replace('fa-cloud', 'fa-home',
                                     str_replace('title="'.$t['_Alternative(s) online: '].'"', 'title="'.$c['home']['name'].'"',
                                     str_replace('title="'.$t['_Alternative(s) offline: '].'"', 'title="'.$c['home']['name'].'"',
                                        $tip
                                     ))));
    } else {
        $c[$v['cat']]['html'] .= $tip;
    }
};

$tablist = '';

foreach($c as $k => $v) {


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