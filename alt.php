<?php

require('i18n.php');

$page = 'list';

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
            $gafam_img = 'img/gafam/'.str_replace(' ', '-', strtolower($w)).'.png';
            if(file_exists($gafam_img)) {
                $gafam_html .= '<li class="list-group-item"><img src="'.$gafam_img.'" alt="" />&nbsp;'.$w.'</li>';
            } else {
                $gafam_html .= '<li class="list-group-item">'.$w.'</li>';
            }
        }

        $gafam_html .= '
            </ul>
        ';

        $gafam_html = str_replace('<li class="list-group-item"></li>', '', $gafam_html);

        // Frama
        $frama = '
            <ul class="list-group">
                <li class="list-group-item">';

        if (strlen($v['FDate'])==4) {
            $frama .= str_replace(array('violet','vert','rouge'), 'fc_g8', $v['F']).' (<a href="/liste/#'.$v['FDate'].'">'.$v['FDate'].'</a>)</li>';
        } else {
            $frama .= $v['F'].'<i class="fa fa-cloud fc_g5 pull-right" data-toggle="tooltip" data-placement="top" title="'.$t['_Alternative(s) online: '].'"></i></li>';
        }
        if ($v['S'] != '') {
            $frama .= '<li class="list-group-item">'.$t['list']['alt3'].$v['S'].'<i class="fa fa-server fc_g5 pull-right" data-toggle="tooltip" data-placement="top" title="'.$t['_Alternative(s) offline: '].'"></i></li>';
        }

        $frama .= '
            </ul>';

        // Others
        $others = '
            <ul class="list-group">
                <li class="list-group-item online">'.str_replace(', ','</li><li class="list-group-item online">', $v['altOn']).'</li>
                <li class="list-group-item offline">'.str_replace(', ','</li><li class="list-group-item offline">', str_replace($v['S'], '', $v['altOff'])).'</li>
            </ul>';
        $others = str_replace('<li class="list-group-item online"></li>', '', $others);
        $others = str_replace('<li class="list-group-item offline"></li>', '', $others);
        $others = str_replace(' online">',' online"><i class="fa fa-cloud fc_g5 pull-right" data-toggle="tooltip" data-placement="top" title="'.$t['_Alternative(s) online: '].'"></i>
', $others);
        $others = str_replace(' offline">',' offline"><i class="fa fa-server fc_g5 pull-right" data-toggle="tooltip" data-placement="top" title="'.$t['_Alternative(s) offline: '].'"></i>', $others);

        $tip = '
                        <tr>
                            <td>'.$gafam_html.'</td>
                            <td>'.$frama.'</td>
                            <td>'.$others.'</td>
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
                        <th class="text-center" scope="col">'.$t['list']['alt1'].'</th>
                        <th class="text-center" scope="col" colspan="2">'.$t['meta']['F'].' '.$t['list']['alt2'].'</th>
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
                <p><?php echo $t['list']['altp1']; ?></p>

                <p><?php echo $t['list']['altp2']; ?></p>

                <p><?php echo $t['list']['altp3']; ?></p>

                <p class="text-center" id="network"><a href="#home"><i class="fa fa-fw fa-home"></i></a> → <i class="fa fa-fw fa-cloud"></i> → <i class="fa fa-fw fa-server"></i></p>

                <p><?php echo $t['list']['altp4']; ?></p>
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
