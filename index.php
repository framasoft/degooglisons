<?php
require('i18n.php');
$page = 'home';

$areas = '
    <!-- Village -->
    <area id="a-village" coords="165,120,60" class="village" alt="'.$t['home']['camps']['village'].'" title="'.$t['home']['camps']['village'].'" shape="circle" data-maphilight=\'{"strokeColor":"6A5687","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <!-- Big camps -->
    <area id="a-fermetum" coords="95,215,50" alt="Fermetum" title="Fermetum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <area id="a-centralisum" coords="165,260,50" alt="Centralisum" title="Centralisum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <area id="a-espionnum" coords="240,240,50" alt="Espionnum" title="Espionnum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <area id="a-privatum" coords="260,150,50" alt="Privatum" title="Privatum"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1">
    <!-- NSA -->
    <area id="a-nsa" coords="460,300,45" alt="NSA" title="NSA"  shape="circle" data-maphilight=\'{"strokeColor":"0C5B7A","strokeWidth":3,"fillColor":"ffffff","fillOpacity":0.2}\' href="javascript:void(0);" tabindex="-1" >
    <!-- Little camps -->';

$options = '
    <option id="o-village" aria-describeby="#t-village">'.$t['home']['camps']['village'].'</option>
    <!-- Big camps -->
    <option id="o-fermetum" aria-describeby="#t-fermetum">'.$t['home']['camps']['fermetum'].'</option>
    <option id="o-centralisum" aria-describeby="#t-centralisum">'.$t['home']['camps']['centralisum'].'</option>
    <option id="o-espionnum" aria-describeby="#t-espionnum">'.$t['home']['camps']['espionnum'].'</option>
    <option id="o-privatum" aria-describeby="#t-privatum">'.$t['home']['camps']['privatum'].'</option>
    <!-- NSA -->
    <option id="o-nsa" aria-describeby="#t-nsa">'.$t['home']['camps']['nsa'].'</option>
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

        <div class="row" id="bloc-carte">
            <div class="container ombre">
                <div class="col-md-8 map">
                    <h2 class="h3"><?php echo $t['home']['map'] ?></h2>
                    <div class="">
                        <img src="<?php echo $l['map'] ?>" alt="<?php echo $t['home']['altMap'] ?>" style="width:100%" id="carte" usemap="#cartemap" />
                        <map id="cartemap" name="cartemap">
                            <?php echo $areas; ?>
                        </map>
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
                            <h3><?php echo $t['home']['camps']['village'] ?></h3>
                            <p><?php echo $t['home']['camps']['vp1'] ?></p>
                            <p><?php echo $t['home']['camps']['vp2'] ?></p>
                        </div>
                        <!-- Big camps -->
                        <div id="t-fermetum" class="c-text">
                            <h3><?php echo $t['home']['camps']['fermetum'] ?></h3>
                            <p><?php echo $t['home']['camps']['fp1'] ?></p>
                            <p><?php echo $t['home']['camps']['fp2'] ?> <a href="#t2-fermetum"><?php echo $t['_Read more'] ?></a></p>
                        </div>
                        <div id="t-centralisum" class="c-text">
                            <h3><?php echo $t['home']['camps']['centralisum'] ?></h3>
                            <p><?php echo $t['home']['camps']['cp1'] ?></p>
                            <p><?php echo $t['home']['camps']['cp2'] ?> <a href="#t2-centralisum"><?php echo $t['_Read more'] ?></a></p>
                        </div>
                        <div id="t-espionnum" class="c-text">
                            <h3><?php echo $t['home']['camps']['espionnum'] ?></h3>
                            <p><?php echo $t['home']['camps']['ep1'] ?></p>
                            <p><?php echo $t['home']['camps']['ep2'] ?> <a href="#t2-espionnum"><?php echo $t['_Read more'] ?></a></p>
                        </div>
                        <div id="t-privatum" class="c-text">
                            <h3><?php echo $t['home']['camps']['privatum'] ?></h3>
                            <p><?php echo $t['home']['camps']['pp1'] ?></p>
                            <p><?php echo $t['home']['camps']['pp2'] ?> <a href="#t2-privatum"><?php echo $t['_Read more'] ?></a></p>
                        </div>
                        <!-- NSA -->
                        <div id="t-nsa" class="c-text">
                            <h3><?php echo $t['home']['camps']['nsa'] ?></h3>
                            <p><?php echo $t['home']['camps']['np1'] ?></p>
                            <p><?php echo $t['home']['camps']['np2'] ?></p>
                        </div>
                        <!-- Little camps -->
                        <?php echo $text; ?>
                    </div>
                    <div id="menu">
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#enjeux" class="btn btn-info btn-block"><?php echo $t['home']['enje']['btn'] ?></a></p>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#dangers" class="btn btn-danger btn-block"><?php echo $t['home']['dang']['btn'] ?></a></p>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#solutions" class="btn btn-success btn-block"><?php echo $t['home']['prop']['btn'] ?></a></p>
                        </div>
                        <div class="col-md-6 col-sm-3 col-xs-6">
                            <p><a href="#concret" class="btn btn-primary btn-block"><?php echo $t['home']['conc']['btn'] ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="enjeux">
            <div class="container ombre">
                <h2><?php echo $t['home']['enje']['title'] ?></h2>
                <p><?php echo $t['home']['enje']['p1'] ?></p>
                <p><?php echo $t['home']['enje']['p2'] ?> <a href="#dangers"><?php echo $t['_Read more'] ?></a></p>
            </div>
        </div>

        <div class="row" id="dangers">
            <div class="container ombre">
                <div class="row">
                    <div class="col-sm-12">
                        <h2><?php echo $t['home']['dang']['title'] ?></h2>
                        <p><?php echo $t['home']['dang']['intro'] ?></p>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="t2-espionnum"><span class="fa fa-fw fa-eye"></span> <?php echo $t['home']['dang']['e'] ?></h3>
                        <p><?php echo $t['home']['dang']['ep'] ?></p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-espionnage-modal-lg"><?php echo $t['_Some examples ?'] ?></button>
                        </p>
                            <div class="modal fade bs-espionnage-modal-lg" id="espionnageModal" tabindex="-1" role="dialog" aria-labelledby="espionnageLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only"><?php echo $t['_Close'] ?></span></button>
                                    <h4 class="modal-title" id="espionnageLabel"><?php echo $t['home']['dang']['e'] ?></h4>
                                  </div>
                                  <div class="modal-body">
                                        <?php echo $t['home']['dang']['erefs'] ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $t['_Close'] ?></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="t2-privatum"><span class="fa fa-fw fa-user"></span> <?php echo $t['home']['dang']['p'] ?></h3>
                        <p><?php echo $t['home']['dang']['pp'] ?></p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-vie-privee-modal-lg"><?php echo $t['_Some examples ?'] ?></button>
                        </p>
                            <div class="modal fade bs-vie-privee-modal-lg" id="viePriveeModal" tabindex="-1" role="dialog" aria-labelledby="viePriveeLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only"><?php echo $t['_Close'] ?></span></button>
                                    <h4 class="modal-title" id="viePriveeLabel"><?php echo $t['home']['dang']['p'] ?></h4>
                                  </div>
                                  <div class="modal-body">
                                      <?php echo $t['home']['dang']['prefs'] ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $t['_Close'] ?></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h3 id="t2-centralisum"><span class="fa fa-fw fa-dot-circle-o"></span> <?php echo $t['home']['dang']['c'] ?></h3>
                        <p><?php echo $t['home']['dang']['cp'] ?></p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-centralisation-modal-lg"><?php echo $t['_Some examples ?'] ?></button>
                        </p>
                            <div class="modal fade bs-centralisation-modal-lg" id="centralisationModal" tabindex="-1" role="dialog" aria-labelledby="centralisationLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only"><?php echo $t['_Close'] ?></span></button>
                                    <h4 class="modal-title" id="centralisationLabel"><?php echo $t['home']['dang']['c'] ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <?php echo $t['home']['dang']['crefs'] ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $t['_Close'] ?></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="t2-fermetum"><span class="fa fa-fw fa-lock"></span> <?php echo $t['home']['dang']['f'] ?></h3>
                        <p><?php echo $t['home']['dang']['fp'] ?></p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-fermeture-modal-lg"><?php echo $t['_Some examples ?'] ?></button>
                        </p>
                            <div class="modal fade bs-fermeture-modal-lg" id="fermetureModal" tabindex="-1" role="dialog" aria-labelledby="fermetureLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only"><?php echo $t['_Close'] ?></span></button>
                                    <h4 class="modal-title" id="fermetureLabel"><?php echo $t['home']['dang']['f'] ?></h4>
                                  </div>
                                  <div class="modal-body">
                                      <?php echo $t['home']['dang']['frefs'] ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $t['_Close'] ?></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="solutions">
            <div class="container ombre">
                <div class="row">
                    <div class="col-sm-12">
                        <h2><a id="leds"></a><?php echo $t['home']['prop']['title'] ?></h2>
                            <p><?php echo $t['home']['prop']['intro'] ?></p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-unlock"></span> <?php echo $t['home']['prop']['l'] ?></h3>
                            <p><?php echo $t['home']['prop']['lp1'] ?></p>
                            <p><?php echo $t['home']['prop']['lp2'] ?></p>
                            <p><strong><?php echo $t['home']['prop']['lp3'] ?></strong></p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-eye-slash"></span> <?php echo $t['home']['prop']['e'] ?></h3>
                            <p><?php echo $t['home']['prop']['ep1'] ?></p>
                            <p><?php echo $t['home']['prop']['ep2'] ?></p>
                            <p><strong><?php echo $t['home']['prop']['ep3'] ?></strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-share-alt"></span> <?php echo $t['home']['prop']['d'] ?></h3>
                            <p><?php echo $t['home']['prop']['dp1'] ?></p>
                            <p><?php echo $t['home']['prop']['dp2'] ?></p>
                            <p><?php echo $t['home']['prop']['dp3'] ?></p>
                            <p><strong><?php echo $t['home']['prop']['dp4'] ?></strong></p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-users"></span> <?php echo $t['home']['prop']['s'] ?></h3>
                            <p><?php echo $t['home']['prop']['sp1'] ?></p>
                            <p><?php echo $t['home']['prop']['sp2'] ?></p>
                            <p><?php echo $t['home']['prop']['sp3'] ?></p>
                            <p><strong><?php echo $t['home']['prop']['sp4'] ?></strong></p>
                    </div>
                    <div class="col-sm-12">
                        <div class="well text-center">
                            <h3><?php echo $t['home']['prop']['s&c'] ?></h3>
                            <p><?php echo $t['home']['prop']['s&cp'] ?></p>
                            <p>
                                <a href="<?php echo $l['DIoL'] ?>" class="btn btn-warning"><?php echo $t['list']['title'].' '.$t['meta']['framasoft'] ?></a>
                                <a href="<?php echo $l['Charte'] ?>" class="btn btn-primary"><?php echo $t['home']['prop']['charte'].' '.$t['meta']['framasoft'] ?></a>
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
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
<?php
include('footer.php')
?>
