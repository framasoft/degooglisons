<?php
require('i18n.php');

require('function.php');

$page = 'list';
$tips = '';
$options_gafam  = '';
$options_search = '';

$tags_gafam  = array();
$tags_search = array();

foreach ($d as $k => $v) {
    if((substr($k,0,3) == 'tip') || (substr($k,0,3) == 'up-')) {
        $tip = '';
    } else {

        if(in_array($k, $fight)) {
            $tags_eq = explode(', ', strip_tags($v['eq']));
            if($u != '—') { // (Framaestro n’a pas d’équivalent Gafam)
                array_push($tags_gafam, strip_tags($v['name']));
            }
            foreach($tags_eq as $u) {
                if($u != '') {
                    array_push($tags_gafam, $u);
                }
            }
            $tags_tags = explode(', ', $v['tags']);
            foreach($tags_tags as $u) {
                if($u != '' && $u != '—') {
                    array_push($tags_search, $u);
                }
            }
        }

        $tags = explode(",", strtolower($v['tags']));

        $tagsClass  = 'tag-'.str_replace(' ', '-',strtolower(strip_tags($v['name'])));
        $tagsClass .= ' tag-'.str_replace(',-', ' tag-',str_replace(' ', '-',strtolower(strip_tags($v['eq']))));
        $tagsClass .= ' tag-'.str_replace(',-', ' tag-',str_replace(' ', '-',strtolower($v['tags'])));
        $tagsClass  = str_replace('tag- ','',$tagsClass);

        $tagsLink = '';
        foreach($tags as $u) {
            if($u != '' && $u != ' ') {
                $tagsLink .=
                    '<li>
                        <a href="#tag-'.str_replace(' ', '-',strtolower($u)).'" class="btn btn-xs btn-default">'.
                            preg_replace('/ /', '', strtolower($u), 1).
                        '</a>
                    </li>';
            }
        }
        $tagsLink  = str_replace('--', '-',$tagsLink);

        $frama = '
        <div class="col-md-3 col-sm-6 text-center '.$tagsClass.'">
            <h3><i class="fa fa-2x '.$v['i'].'"></i><br><p>'.$v['F'].'</p></h3>
            <p class="desc">'.$v['tDesc'].'</p>
            <p><img class="img-responsive" src="/img/screens/'.t($d[$k]['F'],'noframa').'.png" alt="" /></p>
            <div class="clearfix">
                <a href="'.$v['FL'].'" class="btn btn-link btn-lg pull-left">'.t($t['_Use'],'U').'</a>
                <div class="dropup pull-right">
                  <button class="btn btn-link  btn-lg dropdown-toggle" type="button" id="dropdown-'.$k.'"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-lg fa-question-circle-o" aria-hidden="true"></i>
                    <span class="sr-only">'.t('Plus','U').'</span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdown-'.$k.'">
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#modal-t-'.$k.'" >En savoir plus</a></li>
                    <li><a href="'.$l['docs'].str_replace('*','',t($d[$k]['S'],'l')).'">Documentation</a></li>
                    <!--<li><a href="'.$v['CL'].'">Installer</a></li>
                    <li><a href="https://chatons.org">Chatons</a></li>-->
                  </ul>
                </div>
            </div>
        </div>'.
        modal(
            't-'.$k,

            '<img class="pull-left" src="'.$l['F'].'/nav/img/icons/'.t($d[$k]['F'],'noframa').'.png">'.
            '<span class="frama">'.$v['F'].'</span><br>'.
            '<span class="desc">'.$v['lDesc'].'</span>',

            '<div class="web-browser">
                <div class="toolbar">
                    <img src="/img/browser-left.svg" alt="" />
                    <div class="search-bar"></div>
                    <img src="/img/browser-right.svg" alt="" />
                </div>
                <img src="/img/screens/'.t($d[$k]['F'],'noframa').'-full.png" class="img-responsive" alt="" />
            </div>'.
            $v['mBody'],

            '<ul class="list-inline col-md-6 text-left">'
                .$tagsLink.'
            </ul>
            <div class="col-md-6 text-right">
                <a href="'.$l['docs'].str_replace('*','',t($d[$k]['S'],'l')).'" class="btn btn-lg btn-link">'.t($t['_Docs'],'U').'</a>
                <a href="'.$v['FL'].'" class="btn btn-lg btn-link">'.t($t['_Use'],'U').'</a>
            </div>',

            'lg'
        );

        $tip = $frama;
    }
    $c2[$v['c2']]['html'] .= $tip;
};

$tags_gafam = array_unique($tags_gafam);
$tags_search = array_unique($tags_search);
sort($tags_gafam);
sort($tags_search);

foreach($tags_gafam as $v) {
    $options_gafam .= '
        <option id="tag-'.str_replace(' ','-',strtolower($v)).'">'.$v.'</option>';
}

foreach($tags_search as $v) {
    $options_search .= '
        <option id="tag-'.$v.'">'.$v.'</option>';
}

$tablist = '<li><a href="#tagssearch" title="'.$t['_Search by tags'].'">
                <i class="fa fa-lg fa-search" aria-hidden="true"></i>
                <span class="sr-only">'.$t['_Search by tags'].'</span>
            </a></li>
            <li><a href="#all">'.$t['_All services'].'</a></li>';

foreach($c2 as $k => $v) {


    if ( $k != '') {
    $tips .= '
        <a class="anchor" id="'.$k.'" rel="nofollow"></a>
        <div class="panel panel-default clearfix">
            <div class="panel-heading">
                    <h2 class="panel-title text-center h1">
                        '.$v['name'].'
                    </h2>
            </div>
            <div class="clearfix">'.$v['html'].'</div>
        </div>
    ';
    $tablist .= '<li><a href="#'.$k.'" title="'.$v['name'].'">'.$v['name'].'</a></li>';

    }
}

include('header.php');

?>
        <div id="tips" class="row">
            <div class="container ombre">

                <div id="sticky" class="container hidden-xs cats">
                    <div class="scroller scroller-left"><i class="glyphicon glyphicon-chevron-left"></i></div>
                    <div class="scroller scroller-right"><i class="glyphicon glyphicon-chevron-right"></i></div>
                    <nav class="navbar navbar-default nav-cats" role="navigation">
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav nav-tabs" role="tablist">
                                <?php echo $tablist; ?>
                            </ul>
                        </div>

                    </nav>
                </div>

                <a class="anchor" id="tagssearch" rel="nofollow"></a>
                <div class="clearfix" style="margin:30px auto">
                    <div class="col-sm-6 col-sm-offset-3 well">
                        <div class="clearfix" style="margin:10px 0">
                            <label class="col-sm-1 text-right" for="tags-select">
                                <i class="fa fa-2x fa-search"></i>
                                <span class="sr-only"><?php echo $t['_Search by tags'] ?></span>
                            </label>
                            <div class="col-sm-11">
                                <select id="tags-select" multiple="multiple">
                                    <?php echo $options_search; ?>
                                    <optgroup label="GAFAM et cie">
                                        <?php echo $options_gafam; ?>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix h4">
                            <ul class="list-inline text-center">
                                <li><a href="#tag-calendrier" class="btn btn-xs btn-default">calendrier</a></li>
                                <li><a href="#tag-chiffrement" class="btn btn-xs btn-default">chiffrement</a></li>
                                <li><a href="#tag-social" class="btn btn-xs btn-default">social</a></li>
                                <li><a href="#tag-partager" class="btn btn-xs btn-default">partager</a></li>
                                <li><a href="#tag-partager" class="btn btn-xs btn-default">jeu</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel-group col-xs-12">
                    <div  id="results_wrapper" class="panel panel-default clearfix">
                        <div class="panel-heading">
                                <h2 class="panel-title text-center h1">
                                    <?php echo $t['_Results'] ?>
                                </h2>
                        </div>
                        <div id="results" class="clearfix" >
                        </div>
                    </div>
                    <?php echo $tips; ?>
                    <a class="anchor" id="all" rel="nofollow"></a>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title text-center">
                                <?php echo $t['_All services'] ?>
                            </h2>
                        </div>
                        <div class="clearfix">
                            <ul class="list-inline">
<?php
                            foreach ($d as $k => $v) {
                                if(in_array($k, $fight)) {
                                    echo '
                                <li class="col-xs-4 col-sm-3 col-md-2 text-center" style="padding:20px">
                                    <a href="'.$v['FL'].'" class="btn btn-default btn-block"
                                       title="'.$v['sDesc'].'" rel="popover" data-placement="bottom" data-content="'.$v['lDesc'].'">
                                        <i class="fa fa-3x fa-fw '.$v['i'].' fc_g7"></i>
                                        <br/>'.strip_tags($v['F'], '<b>').'
                                    </a>
                                </li>';
                                }
                            }
?>
                            </ul>
                        </div>
                    </div>
                </div>

<?php
include('footer.php')
?>
