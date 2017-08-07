<?php
require('i18n.php');

$page = 'why';

require('header.php');
?>
        <div class="row landing">
            <div class="container ombre">
                <div class="well col-sm-4 col-sm-offset-1">
                    <h1><?php echo $t['meta']['DIo'] ?></h1>
                    <p><?php echo $t['meta']['lead'] ?></p>
                </div>
            </div>
        </div>
        <div class="row choice">
            <div class="container ombre">
                <div class="col-xs-12 text-center">
                    <h2>Je cherche…</h2>
                    <p class="col-sm-6"><a href="list.php" class="btn btn-default fb_f0 h3">
                        Un service libre<br>répondant à mes besoins<br>
                        <img src="<?php echo $t['medias']['t2i4url'] ?>" alt="" />
                    </a></p>
                    <p class="col-sm-6"><a href="alt.php" class="btn btn-default fb_o0 h3">
                        Une alternative<br>à un service des GAFAM<br>
                        <img src="<?php echo $t['medias']['t2i3url'] ?>" alt="" />
                    </a></p>

                </div>
                <hr class="trait col-xs-12">
                <div  class="col-sm-6">
                    <h2 class="text-center">Aller plus loin</h2>
                    <p>blablabla</p>
                    <div  class="col-xs-8 col-xs-offset-2">
                        <a href="https://docs.framasoft.org" class="btn btn-warning btn-block"><i class="fa fa-fw fa-lg fa-learning" aria-hidden="true"></i> <?php echo $t['_Docs'] ?></a>
                        <a href="https://framacloud.org/fr/cultiver-son-jardin" class="btn btn-success btn-block"><i class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></i> <?php echo $t['_Framacloud'] ?></a>
                        <a href="/chatons.php" class="btn btn-soutenir btn-block"><i class="fa fa-fw fa-lg fa-paw" aria-hidden="true"></i> <?php echo $t['_CHATONS'] ?></a>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h2 class="text-center">Pourquoi ?</h2>
                    <p>blablabla</p>
                    <div  class="col-xs-8 col-xs-offset-2">
                        <a href="#enjeux" class="btn btn-danger btn-block"><?php echo $t['why']['enje']['btn'].'/'.$t['why']['dang']['btn'] ?></a>
                        <a href="#solutions" class="btn btn-success btn-block"><?php echo $t['why']['prop']['btn'] ?></a>
                        <a href="#who" class="btn btn-primary btn-block"><?php echo $t['why']['who']['btn'] ?></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="row" id="media">

        </div>

        <div class="row" id="enjeux">
            <div class="container ombre">
                <h2><?php echo $t['why']['enje']['title'] ?></h2>
                <p><?php echo $t['why']['enje']['p1'] ?></p>
                <p><?php echo $t['why']['enje']['p2'] ?> <a href="#dangers"><?php echo $t['_Read more'] ?></a></p>

                <div class="row">
                    <div class="col-sm-12">
                        <h2><?php echo $t['why']['dang']['title'] ?></h2>
                        <p><?php echo $t['why']['dang']['intro'] ?></p>
                    </div>
                <div class="clearfix">
                    <div class="col-sm-6">
                        <h3 id="t2-espionnum"><span class="fa fa-fw fa-eye"></span> <?php echo $t['why']['dang']['e'] ?></h3>
                        <p><?php echo $t['why']['dang']['ep'] ?></p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-espionnage-modal-lg"><?php echo $t['_Some examples ?'] ?></button>
                        </p>
                            <div class="modal fade bs-espionnage-modal-lg" id="espionnageModal" tabindex="-1" role="dialog" aria-labelledby="espionnageLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only"><?php echo $t['_Close'] ?></span></button>
                                    <h4 class="modal-title" id="espionnageLabel"><?php echo $t['why']['dang']['e'] ?></h4>
                                  </div>
                                  <div class="modal-body">
                                        <?php echo $t['why']['dang']['erefs'] ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $t['_Close'] ?></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <p class="text-center">
                            <img src="<?php echo $t['medias']['t2i2url'] ?>" alt="" />
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="t2-privatum"><span class="fa fa-fw fa-user"></span> <?php echo $t['why']['dang']['p'] ?></h3>
                        <p><?php echo $t['why']['dang']['pp'] ?></p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-vie-privee-modal-lg"><?php echo $t['_Some examples ?'] ?></button>
                        </p>
                            <div class="modal fade bs-vie-privee-modal-lg" id="viePriveeModal" tabindex="-1" role="dialog" aria-labelledby="viePriveeLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only"><?php echo $t['_Close'] ?></span></button>
                                    <h4 class="modal-title" id="viePriveeLabel"><?php echo $t['why']['dang']['p'] ?></h4>
                                  </div>
                                  <div class="modal-body">
                                      <?php echo $t['why']['dang']['prefs'] ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $t['_Close'] ?></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-sm-6">
                        <h3 id="t2-centralisum"><span class="fa fa-fw fa-dot-circle-o"></span> <?php echo $t['why']['dang']['c'] ?></h3>
                        <p><?php echo $t['why']['dang']['cp'] ?></p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-centralisation-modal-lg"><?php echo $t['_Some examples ?'] ?></button>
                        </p>
                            <div class="modal fade bs-centralisation-modal-lg" id="centralisationModal" tabindex="-1" role="dialog" aria-labelledby="centralisationLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only"><?php echo $t['_Close'] ?></span></button>
                                    <h4 class="modal-title" id="centralisationLabel"><?php echo $t['why']['dang']['c'] ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <?php echo $t['why']['dang']['crefs'] ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $t['_Close'] ?></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                    <div class="col-sm-6">
                        <h3 id="t2-fermetum"><span class="fa fa-fw fa-lock"></span> <?php echo $t['why']['dang']['f'] ?></h3>
                        <p><?php echo $t['why']['dang']['fp'] ?></p>
                        <p>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-fermeture-modal-lg"><?php echo $t['_Some examples ?'] ?></button>
                        </p>
                            <div class="modal fade bs-fermeture-modal-lg" id="fermetureModal" tabindex="-1" role="dialog" aria-labelledby="fermetureLabel" aria-hidden="true">
                              <div role="document" class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only"><?php echo $t['_Close'] ?></span></button>
                                    <h4 class="modal-title" id="fermetureLabel"><?php echo $t['why']['dang']['f'] ?></h4>
                                  </div>
                                  <div class="modal-body">
                                      <?php echo $t['why']['dang']['frefs'] ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $t['_Close'] ?></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                    <p class="col-sm-12 text-center">
                        <img src="<?php echo $t['medias']['t2i1url'] ?>" alt="" />
                    </p>
                </div>
                </div>
            </div>
        </div>
        <div class="row" id="solutions">
            <div class="container ombre">
                <div class="row">
                    <div class="col-sm-12">
                        <h2><a id="leds"></a><?php echo $t['why']['prop']['title'] ?></h2>
                            <p><?php echo $t['why']['prop']['intro'] ?></p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-unlock"></span> <?php echo $t['why']['prop']['l'] ?></h3>
                            <p><?php echo $t['why']['prop']['lp1'] ?></p>
                            <p><?php echo $t['why']['prop']['lp2'] ?></p>
                            <p><strong><?php echo $t['why']['prop']['lp3'] ?></strong></p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-eye-slash"></span> <?php echo $t['why']['prop']['e'] ?></h3>
                            <p><?php echo $t['why']['prop']['ep1'] ?></p>
                            <p><?php echo $t['why']['prop']['ep2'] ?></p>
                            <p><strong><?php echo $t['why']['prop']['ep3'] ?></strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-share-alt"></span> <?php echo $t['why']['prop']['d'] ?></h3>
                            <p><?php echo $t['why']['prop']['dp1'] ?></p>
                            <p><?php echo $t['why']['prop']['dp2'] ?></p>
                            <p><?php echo $t['why']['prop']['dp3'] ?></p>
                            <p><strong><?php echo $t['why']['prop']['dp4'] ?></strong></p>
                    </div>
                    <div class="col-sm-6">
                            <h3><span class="fa fa-fw fa-users"></span> <?php echo $t['why']['prop']['s'] ?></h3>
                            <p><?php echo $t['why']['prop']['sp1'] ?></p>
                            <p><?php echo $t['why']['prop']['sp2'] ?></p>
                            <p><?php echo $t['why']['prop']['sp3'] ?></p>
                            <p><strong><?php echo $t['why']['prop']['sp4'] ?></strong></p>
                    </div>
                </div>
                <p class="col-sm-12 text-center">
                    <img src="<?php echo $t['medias']['t2i5url'] ?>" alt="" />
                </p>
                <div class="col-md-8">
                    <h2><?php echo $t['why']['conc']['title'] ?></h2>
                    <p><?php echo $t['why']['conc']['p1'] ?></p>
                    <p><?php echo $t['why']['conc']['p2'] ?></p>
                    <p><?php echo $t['why']['conc']['p3'] ?></p>
                    <p><?php echo $t['why']['conc']['p4'] ?></p>
                    <p><?php echo $t['why']['conc']['p5'] ?></p>
                    <p class="text-center"><a href="<?php echo $l['DIoL'] ?>" class="btn btn-warning btn-lg" ><?php echo $t['list']['title'].' '.$t['meta']['framasoft'] ?></a></p>
                    <p><img src="img/cloud.jpg" alt="" class="center-block img-responsive" /></p>
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <h2><?php echo $t['why']['conc']['stitle'] ?></h2>
                        <p><?php echo $t['why']['conc']['sp1'] ?></p>
                        <p><?php echo $t['why']['conc']['sp2'] ?></p>
                        <p class="text-center">
                            <a href="<?php echo $l['participer'] ?>" class="btn btn-primary"><span class="fa fa-fw fa-envelope"></span> <?php echo $t['why']['conc']['cbtn'] ?></a>
                        </p>
                        <p><?php echo $t['why']['conc']['sp3'] ?></p>
                        <p class="text-center">
                            <a class="btn btn-lg btn-soutenir" href="<?php echo $l['S'] ?>"><span class="fa fa-w fa-heart"></span> <?php echo $t['why']['conc']['sbtn'] ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

<?php
include('footer.php')
?>
