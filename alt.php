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
            $frama .= $v['F'].'</li>';
        }
        if ($v['S'] != '') {
            $frama .= '<li class="list-group-item">'.$t['list']['alt3'].$v['S'].'</li>';
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
        $others = str_replace(' online">',' online"><i class="fa fa-fw fa-lg fa-cloud fc_g5 pull-right" data-toggle="tooltip" data-placement="top" title="'.$t['_Alternative(s) online: '].'"></i>
', $others);
        $others = str_replace(' offline">',' offline"><i class="fa fa-fw fa-lg fa-server fc_g5 pull-right" data-toggle="tooltip" data-placement="top" title="'.$t['_Alternative(s) offline: '].'"></i>', $others);

        $tip = '
                        <tr>
                            <td>'.$gafam_html.'</td>
                            <td>'.$frama.'</td>
                            <td>'.$others.'</td>
                        </tr>';
    }
    $c[$v['cat']]['html'] .= $tip;
};

$tablist = '';

foreach($c as $k => $v) {


    if ( $k != '') {
    $tips .= '
        <div class="panel panel-default">
            <div class="panel-heading" id="h-'.$k.'">
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
    $tablist .= '<li class="list-group-item"><a href="#h-'.$k.'">'.$v['fa'].'&nbsp;'.$v['name'].'</a></li>';

    }
}

include('header.php');

?>
        <div class="row">
            <div class="container ombre">
                <div class="panel-group col-md-9">
                    <?php echo $tips; ?>
                </div>
                <div class="col-md-3">
                    <nav id="affix" class="navbar navbar-default nav-year" role="navigation">
                        <ul class="list-group" role="tablist">
                            <?php echo $tablist; ?>
                        </ul>
                    </nav>
                </div>
<?php
include('footer.php')
?>
