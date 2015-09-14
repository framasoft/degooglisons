<?php
require('i18n.php');

$page = 'list';

$tips = '';
$timeline = array('2011-2013' => '','2014' => '','2015' => '','2016' => '','2017' => '');

foreach ($d as $k => $v) {
    if(!isset($d[$k]['class'])) {
        $v['class'] = '';
        switch (substr($k,0,3)) {
            case 'tip' : $v['class'] = 'objectifs'; break;
            case 'up-' : $v['class'] = 'casque'; break;
        }
        if(in_array($k, $potion)) {
            $v['class'] = 'potion';
        } elseif(in_array($k, $fight)) {
            $v['class'] = 'fight';
        }
    }

    if(!isset($d[$k]['mFooter'])) {
        $v['mFooter'] = '<p class="precisions">'.$v['F'].$t['_ is an instance based on '].$v['S'].'</p>';
        $v['mFooter'] .= (isset($v['CL']) && $v['CL'] != '') ? '<a href="'.$v['CL'].'" class="btn btn-success"><i class="glyphicon glyphicon-tree-deciduous"></i> '.$t['_Install'].'</a>' : '';
    }

    /* Icônes et texte pour compléter le code couleur */
    $icon = '';
    $alt_text = '';
    switch ($v['class']) {
        case 'fight' : $icon = '<span class="fa fa-fw fa-check vert" title="'.$t['_Project running'].'"></span><span class="sr-only">'.$t['_Project running'].'</span>'; break;
        case 'potion' : $icon = '<span class="fa fa-fw fa-clock-o orange" title="'.$t['_Project loading'].'"></span><span class="sr-only">'.$t['_Project loading'].'</span>'; break;
        case 'casque' : $icon = '<span class="fa fa-fw fa-refresh text-info" title="'.$t['_Project updated'].'"></span><span class="sr-only">'.$t['_Project updated'].'</span>'; break;
    }

    /* Front */
    if($v['class']=='casque') {
        $front = '
            <div class="front">
                <p class="pull-right">'.$icon.'</p>
                <h3>'.$v['F'].'</h3>
                <div class="front_old">'.$v['name'].'</div>
                <div class="front_new"></div>
            </div>';
    } else if ( $v['class']=='objectifs') {
        $front = '
            <div class="front">
                <h3>'.$v['sDesc'].'</h3>
                <div class="front_old"><span class="fa fa-fw fa-heart"></span> '.$v['name'].'</div>
                <div class="front_new"><span class="fa fa-fw fa-paw"></span> '.$v['F'].'</div>
            </div>';
    } else {
        $front = '
            <div class="front">
                <p class="pull-right">'.$icon.'</p>
                <span class="logo"></span>
                <div class="k-fg">
                    <h3>'.$v['sDesc'].'</h3>
                    <div class="front_old"><span class="fa fa-fw fa-eye"></span> '.$v['name'].'</div>
                    <div class="front_new"><span class="fa fa-fw fa-shield"></span> '.$v['F'].' <span class="soft_frama">('.$v['S'].')</span></div>
                </div>
            </div>';
    }

    /* Back */
    if(($v['class']=='fight' || $v['class']=='casque' || $v['class']=='potion')
        && ($v['lDesc'] != '' && $v['mTitle'] !='' && $v['mBody'] != '')) {
        $utiliser_back = ''; $utiliser_modale = '';
        if($v['FL']!='') {
            $utiliser_back = '<a href="'.$v['FL'].'" class="btn btn-xs btn-primary btn-block">'.$t['_Use'].'</a>';
            $utiliser_modale = '<a href="'.$v['FL'].'" class="btn btn-primary">'.$t['_Use'].'</a>';
        }
        $back = '
            <div class="back">
                <p class="pull-right">'.$icon.'</p>
                <h4>'.$v['F'].'</h4>
                <p class="back_content">'.$v['lDesc'].'</p>

                <div class="col-xs-6">
                    '.$utiliser_back.'
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-xs btn-info btn-block" data-toggle="modal" data-target="#'.$k.'">'.$t['_More'].'</button>
                </div>

                <div class="modal fade" id="'.$k.'" tabindex="-1" role="dialog" aria-labelledby="'.$k.'Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">'.$t['_Close'].'</span></button>
                                <h4 class="modal-title" id="'.$k.'Label">'.$v['mTitle'].'</h4>
                            </div>
                            <div class="modal-body">
                                    '.$v['mBody'].'
                            </div>
                            <div class="modal-footer clearfix">
                                '.$v['mFooter'].$utiliser_modale.'<button type="button" class="btn btn-default" data-dismiss="modal">'.$t['_Close'].'</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';

    } else if ( $v['class']=='objectifs') {
        $back = '
            <div class="back">
                <p class="back_content">'.$v['lDesc'].'</p>

                <div class="col-xs-6">
                    <a href="'.$l['S'].'" class="btn btn-xs btn-soutenir btn-block"><span class="fa fa-w fa-heart"></span> '.$t['_Support'].'</a>
                </div>
                <div class="col-xs-6">
                    <button class="btn btn-xs btn-info btn-block" data-toggle="modal" data-target="#'.$k.'">'.$t['_More'].'</button>
                </div>

                <div class="modal fade" id="'.$k.'" tabindex="-1" role="dialog" aria-labelledby="'.$k.'Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">'.$t['_Close'].'</span></button>
                                <h4 class="modal-title" id="'.$k.'Label">'.$v['mTitle'].'</h4>
                            </div>
                            <div class="modal-body">
                                '.$v['mBody'].'
                            </div>
                            <div class="modal-footer">
                                '.$v['mFooter'].'<button type="button" class="btn btn-default" data-dismiss="modal">'.$t['_Close'].'</button>
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
    <li class="'.$k.' '.$v['class'].'">
        <div class="tip-content">
            '.$front.'
            '.$back.'
        </div>
    </li>';
    preg_match('#(\d\d\d\d)#',$v['FDate'],$year);
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

include('header.php');

?>
        <div id="sticky" class="container hidden-xs">
            <nav class="navbar navbar-default nav-year col-md-6" role="navigation">
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav nav-tabs" role="tablist">
                        <li class="active"><a href="#2011-2013">2011-2013</a></li>
                        <li><a href="#2014">2014</a></li>
                        <li><a href="#2015">2015</a></li>
                        <li><a href="#2016">2016</a></li>
                        <li><a href="#2017">2017</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

            </nav>

            <div class="col-md-6 hidden-sm">
                <p class="text-center" style="margin:0"><a class="btn btn-lg btn-soutenir" href="<?php echo $l['S'] ?>"><span class="fa fa-w fa-heart"></span> <?php echo $t['meta']['S'] ?></a></p>
            </div>
        </div>
        <div id="tips" class="row">
            <div class="container ombre">
                <?php echo $tips; ?>
<?php
include('footer.php')
?>
