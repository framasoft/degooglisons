<?php
require('i18n.php');
$page = 'map';

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

$options = '
    <option id="o-village" aria-describeby="#t-village">'.$t['map']['camps']['village'].'</option>
    <!-- Big camps -->
    <option id="o-fermetum" aria-describeby="#t-fermetum">'.$t['map']['camps']['fermetum'].'</option>
    <option id="o-centralisum" aria-describeby="#t-centralisum">'.$t['map']['camps']['centralisum'].'</option>
    <option id="o-espionnum" aria-describeby="#t-espionnum">'.$t['map']['camps']['espionnum'].'</option>
    <option id="o-privatum" aria-describeby="#t-privatum">'.$t['map']['camps']['privatum'].'</option>
    <!-- NSA -->
    <option id="o-nsa" aria-describeby="#t-nsa">'.$t['map']['camps']['nsa'].'</option>
    <!-- Little camps -->';

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

    if(isset($v['pos']) && $v['pos']!='') {

        $areas .= '
        <area id="a-'.$k.'" coords="'.$v['pos'].'" alt="'.$v['pos'].'" shape="circle" data-maphilight=\'{"strokeColor":"'.$color.'","strokeWidth":2,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1" >';

        $options .= '
        <option id="o-'.$k.'" aria-describeby="#t-'.$k.'">'.$v['name'].'</option>';

        if (strlen($v['FDate'])==4) {
            $release =
                str_replace(array('violet','vert','rouge'), 'fc_g8', $v['F']).'<br />
                <span class="small">'.$t['_release planned on '].'
                    <a href="/liste/#'.$v['FDate'].'">'.$v['FDate'].'</a><br/>
                    '.$t['_ with your help'].'<br/>
                    <a href="'.$l['S'].'" class="btn btn-xs btn-soutenir" tittle="'.$t['meta']['S'].'">
                        <i class="fa fa-fw fa-heart"></i><span class="sr-only">'.$t['meta']['S'].'</span>
                    </a>
                </span>';
        } else {
            $release =
                $v['F'].'<br/>
                <span class="small">'.$t['_since'].' '.$v['FDate'].'</span>';
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
        $text .= '
        <div id="t-'.$k.'" class="c-text c-little '.$v['class'].'">
            <h3>';
                //$text .= ($v['wkp']!='') ? '<a href="http://fr.wikipedia.org/wiki/'.$v['wkp'].'">'.$v['name'].'</a>' : $v['name'];
                $text .= $v['sDesc'].'<br/><span class="pull-right">'.$v['F'].'</span></h3>

            <table class="table table-bordered">
                <thead class="fb_g2">
                    <tr>
                        <th class="text-center"><span title="'.$e['google']['name'].', '.$e['apple']['name'].', '.$e['facebook']['name'].', '.$e['amazon']['name'].', '.$e['microsoft']['name'].'">'.$t['_GAFAM'].'</span> '.$t['_& co'].'<br/>
                            '.$e['google']['fa'].$e['apple']['fa'].$e['facebook']['fa'].$e['amazon']['fa'].$e['microsoft']['fa'].'
                        </th>
                        <th class="text-center">Logiciels<br/>
                            <span title="'.$t['_Libre, Éthique, Décentralisé et Solidaire'].'">LEDS</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="fb_g0">
                    <tr>
                        <td rowspan="'.$rowspan.'">
                            <p>
                                '.$v['name'].'<br/>
                                <span class="fc_g8">'.str_replace(', ','<br/>',$v['eq']).'</span>
                            </p>
                            <p class="text-center" style="position:absolute; bottom: -5px;
left: 25%;"><i class="fa fa-fw fa-4x fa-user-secret fc_g5"></i></p>
                        </td>
                        <td>
                            <p class="text-center">
                                '.$release.'
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-fw fa-lg fa-server fc_g5 pull-right" data-toggle="tooltip" data-placement="top" title="'.$t['_Alternative(s) offline: '].'"></i>
                            <span class="sr-only">'.$t['_Alternative(s) offline: '].'</span>'.str_replace(', ','<br/>',$v['altOff']).'
                        </td>
                    </tr>
                    '.$alton.'
                </tbody>
            </table>
        </div>';
    }
}

include('header.php');

?>
        <div class="row" id="concret">
            <div class="container ombre">
                <div class="col-md-8">
                    <h2><?php echo $t['home']['conc']['title'] ?></h2>
                    <p><?php echo $t['home']['conc']['p1'] ?></p>
                    <p><?php echo $t['home']['conc']['p2'] ?></p>
                    <p><?php echo $t['home']['conc']['p3'] ?></p>
                    <p><?php echo $t['home']['conc']['p4'] ?></p>
                    <p><?php echo $t['home']['conc']['p5'] ?></p>
                    <p class="text-center"><a href="<?php echo $l['DIoL'] ?>" class="btn btn-warning btn-lg" ><?php echo $t['list']['title'].' '.$t['meta']['framasoft'] ?></a></p>
                    <p><img src="img/cloud.jpg" alt="" class="center-block img-responsive" /></p>
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <h2><?php echo $t['home']['conc']['stitle'] ?></h2>
                        <p><?php echo $t['home']['conc']['sp1'] ?></p>
                        <p><?php echo $t['home']['conc']['sp2'] ?></p>
                        <p class="text-center">
                            <a href="<?php echo $l['participer'] ?>" class="btn btn-primary"><span class="fa fa-fw fa-envelope"></span> <?php echo $t['home']['conc']['cbtn'] ?></a>
                        </p>
                        <p><?php echo $t['home']['conc']['sp3'] ?></p>
                        <p class="text-center">
                            <a class="btn btn-lg btn-soutenir" href="<?php echo $l['S'] ?>"><span class="fa fa-w fa-heart"></span> <?php echo $t['home']['conc']['sbtn'] ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="bloc-carte">
            <div class="container ombre">
                <div class="col-md-8 map">
                    <h2 class="h3"><?php echo $t['map']['map'] ?></h2>
                    <div id="map-container">

                        <img src="<?php echo str_replace('victoires','fantome', $l['map']) ?>" alt="<?php echo $t['map']['altMap'] ?>" id="carte" usemap="#cartemap" />

                        <map id="cartemap" name="cartemap" style="position:absolute; top:0; width:100%; z-index:15">
                            <?php echo $areas; ?>
                        </map>

                        <video poster="<?php echo $l['map'] ?>" autoplay loop muted>
                            <source src="<?php echo str_replace('victoires','animation', str_replace('.png','.webm', $l['map'])) ?>" type="video/webm" />
                            <source src="<?php echo str_replace('victoires','animation', str_replace('.png','.mp4', $l['map'])) ?>" type="video/mp4">
                            <img src="<?php echo $l['map'] ?>" alt="" style="width:100%;" />
                        </video>
                    </div>
                </div>
                <div class="col-md-4 description">

                    <p class="text-center"><a class="btn btn-lg btn-soutenir center-block" href="<?php echo $l['S'] ?>"><span class="fa fa-w fa-heart"></span> <?php echo $t['meta']['S'] ?></a></p>
                    <p class="text-center"><a class="btn btn-warning btn-lg center-block" href="<?php echo $l['DIoL'] ?>"><?php echo $t['list']['title'] ?></a></p>

                    <div class="well">
                        <p><select id="c-select" title="Choisir le camp" class="form-control">
                            <?php echo $options; ?>
                        </select></p>

                        <!-- Village -->
                        <div id="t-village" class="c-text">
                            <h3><?php echo $t['map']['camps']['village'] ?></h3>
                            <p><?php echo $t['map']['camps']['vp1'] ?></p>
                            <p><?php echo $t['map']['camps']['vp2'] ?></p>
                        </div>
                        <!-- Big camps -->
                        <div id="t-fermetum" class="c-text">
                            <h3><?php echo $t['map']['camps']['fermetum'] ?></h3>
                            <p><?php echo $t['map']['camps']['fp1'] ?></p>
                            <p><?php echo $t['map']['camps']['fp2'] ?> <a href="#t2-fermetum"><?php echo $t['_Read more'] ?></a></p>
                        </div>
                        <div id="t-centralisum" class="c-text">
                            <h3><?php echo $t['map']['camps']['centralisum'] ?></h3>
                            <p><?php echo $t['map']['camps']['cp1'] ?></p>
                            <p><?php echo $t['map']['camps']['cp2'] ?> <a href="#t2-centralisum"><?php echo $t['_Read more'] ?></a></p>
                        </div>
                        <div id="t-espionnum" class="c-text">
                            <h3><?php echo $t['map']['camps']['espionnum'] ?></h3>
                            <p><?php echo $t['map']['camps']['ep1'] ?></p>
                            <p><?php echo $t['map']['camps']['ep2'] ?> <a href="#t2-espionnum"><?php echo $t['_Read more'] ?></a></p>
                        </div>
                        <div id="t-privatum" class="c-text">
                            <h3><?php echo $t['map']['camps']['privatum'] ?></h3>
                            <p><?php echo $t['map']['camps']['pp1'] ?></p>
                            <p><?php echo $t['map']['camps']['pp2'] ?> <a href="#t2-privatum"><?php echo $t['_Read more'] ?></a></p>
                        </div>
                        <!-- NSA -->
                        <div id="t-nsa" class="c-text">
                            <h3><?php echo $t['map']['camps']['nsa'] ?></h3>
                            <p><?php echo $t['map']['camps']['np1'] ?></p>
                            <p><?php echo $t['map']['camps']['np2'] ?></p>
                        </div>
                        <!-- Little camps -->
                        <?php echo $text; ?>
                    </div>
                </div>
            </div>
        </div>
<?php
include('footer.php')
?>
