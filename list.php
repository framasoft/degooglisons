<?php
require('i18n.php');

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
            if($u != '—') { // (Framaestro)
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

        // Frama
        $input = array("myframa", "agenda"); // tmp

        $tags  = 'tag-'.str_replace(' ', '-',strtolower(strip_tags($v['name'])));
        $tags .= ' tag-'.str_replace(',-', ' tag-',str_replace(' ', '-',strtolower(strip_tags($v['eq']))));
        $tags .= ' tag-'.str_replace(',-', ' tag-',str_replace(' ', '-',strtolower($v['tags'])));

        $frama = '
        <div class="col-md-3 col-sm-6 text-center '.$tags.'">
            <h3><i class="fa fa-2x '.$v['i'].'"></i><br><p>'.$v['F'].'</p></h3>
            <p class="desc">'.$v['hDesc'].'</p>
            <p><img class="img-responsive" src="img/screens/'.$input[rand(0,1)].'.png" alt="" /></p>
            <p>
                <div class="dropup pull-left">
                  <button class="btn btn-link btn-lg dropdown-toggle" type="button" id="dropdown-'.$k.'"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Premiers pas
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdown-'.$k.'">
                    <li><a href="'.$v['FL'].'" class="text-primary">Utiliser</a></li>
                    <li><a href="'.$v['CL'].'">Installer</a></li>
                    <li><a href="https://chatons.org">Chatons</a></li>
                  </ul>
                </div>
                <a href="'.$l['docs'].strtolower(strip_tags($d[$k]['S'])).'" class="btn btn-link btn-lg pull-right">Aide</a>
            </p>
        </div>';
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

$tablist = '<li><a href="#search" title="Recherche par mots-clés"><i class="fa fa-lg fa-search" aria-hidden="true"></i><span class="sr-only">Recherche par mots-clés</span></a></li>
            <li><a href="#all" title="Tous les services">Tous les services</a></li>';

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

                <a class="anchor" id="search" rel="nofollow"></a>
                <div class="clearfix" style="margin:30px auto">
                    <div class="col-sm-6 col-sm-offset-3">
                        <label class="col-sm-1 text-right" for="tags-select">
                            <i class="fa fa-2x fa-search"></i>
                            <span class="sr-only">Recherche par mots-clés</span>
                        </label>
                        <div class="col-sm-11">
                            <select id="tags-select" multiple="multiple">
                                <?php echo $options_search; ?>
                                <optgroup label="GAFAM">
                                    <?php echo $options_gafam; ?>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="panel-group col-xs-12">
                    <div  id="results_wrapper" class="panel panel-default clearfix">
                        <div class="panel-heading">
                                <h2 class="panel-title text-center h1">
                                    Résultats
                                </h2>
                        </div>
                        <div id="results" class="clearfix" >
                        </div>
                    </div>
                    <?php echo $tips; ?>
                    <a class="anchor" id="all" rel="nofollow"></a>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title text-center">Tous les services</h2>
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
<script>
    jQuery(document).ready(function({
        jQuery('#all .btn').popover();
    )});
</script>
<?php
include('footer.php')
?>