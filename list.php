<?php
require('i18n.php');

$page = 'list';
$tips = '';

foreach ($d as $k => $v) {
    if((substr($k,0,3) == 'tip') || (substr($k,0,3) == 'up-')) {
        $tip = '';
    } else {
        if(rand(0,1)==1) {
            $push = '  '; $pull= ' pull-right ';
            $color = 'fb_j0';
        } else {
            $push = ''; $pull= '';
            $color = '';
        }
        // Frama
        $input = array("myframa", "agenda"); // tmp
        $frama = '<div class="col-sm-3 text-center">
            <h3><i class="fa fa-2x '.$v['i'].'"></i><br>'.$v['F'].'</h3>
            <p>'.$v['sDesc'].'<br>'.$v['lDesc'].'</p>
            <p><img class="img-responsive" src="img/screens/'.$input[rand(0,1)].'.png" alt="" /></p>
            <p class="text-center">
                <a href="'.$v['FL'].'" class="btn btn-lg btn-primary">Utiliser</a>
                <a href="https://docs.framasoft.org/fr/'.strtolower(strip_tags($d[$k]['S'])).'" class="btn btn-info btn-lg">Aide</a>
            </p>
            <p class="text-center">
                <a href="'.$v['CL'].'" class="btn btn-xs btn-success">Installer</a>
                <a href="https://chatons.org" class="btn btn-xs btn-soutenir">Chatons</a>
            </p>
            </div>';
        $tip = $frama;
    }
    $c2[$v['c2']]['html'] .= $tip;
};

$tablist = '<li><a href="#all" title="Tous les services">Tous les services</a></li>';

foreach($c2 as $k => $v) {


    if ( $k != '') {
    $tips .= '
        <a class="anchor" id="'.$k.'" rel="nofollow"></a>
        <div class="panel panel-default clearfix" style="border-radius:0; border-bottom:5px solid #eee; border-top:0; border-left:0; border-right:0; margin-left:0;margin-right:0">
            <div class="panel-heading" style="background:#fff;">
                    <h2 class="panel-title text-center h1">
                        '.$v['fa'].'&nbsp;'.$v['name'].'
                    </h2>
            </div>
            <div class="clearfix">'.$v['html'].'</div>
        </div>
    ';
    $tablist .= '<li><a href="#'.$k.'" title="'.$v['name'].'">'.$v['fa'].'&nbsp;'.$v['name'].'</a></li>';

    }
}

include('header.php');

?>
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
                    <a class="anchor" id="all" rel="nofollow"></a>
                    <div class="panel panel-default" style="border-radius:0; border-bottom:5px solid #eee; border-top:0; border-left:0; border-right:0; margin-left:0;margin-right:0">
                        <div class="panel-heading" style="background:#fff;">
                            <h2 class="panel-title text-center">Tous les services</h2>
                        </div>
                        <div class="clearfix">
                            <ul class="list-inline">
<?php
                            foreach ($d as $k => $v) {
                                if(in_array($k, $fight)) {
                                    echo '
                                <li class="col-xs-4 col-sm-3 text-center" style="padding:20px">
                                    <a href="'.$v['FL'].'" class="btn btn-default btn-block"
                                       title="'.$v['sDesc'].'" rel="popover" data-placement="bottom" data-content="'.$v['lDesc'].'">
                                        <i class="fa fa-3x fa-fw '.$v['i'].' fc_b9"></i>
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