<?php
require('i18n.php');
$page = 'medias';

include('header.php');
?>
<div id="medias" class="row">
    <div class="container ombre">
        <div class="col-xs-12">
        <h2><?php echo $t['medias']['subtitle'] ?></h2>
        <p><?php echo $t['medias']['intro'] ?></p>

        <p class="col-md-3 col-md-offset-3 text-center">
            <a class="btn btn-primary btn-lg btn-block" href="<?php echo $l['current'].$t['medias']['btnCPurl'] ?>">
                <i class="fa fa-fw fa-file-text-o"></i> <?php echo $t['medias']['btnCPtxt'] ?>
            </a>
        </p>
        <p class="col-md-3 text-center">
            <a class="btn btn-primary btn-lg btn-block" href="<?php echo $l['current'].$t['medias']['btnDPurl'] ?>">
                <i class="fa fa-fw fa-file-pdf-o"></i> <?php echo $t['medias']['btnDPtxt'] ?>
            </a>
        </p>

        <div class="row">
            <div class="col-md-8">
                <h3><?php echo $t['medias']['1title'] ?></h3>
                <p><?php echo $t['medias']['1intro'] ?></p>
                <?php echo $t['medias']['1list'] ?>
            </div>

            <div class="col-md-4">
                <h3><?php echo $t['medias']['2title'] ?></h3>
                <p><?php echo $t['medias']['2intro'] ?></p>
                <?php echo $t['medias']['2list'] ?>
            </div>
        </div>

        <!-- Visuels-->
        <h2><?php echo $t['medias']['tabstitle'] ?></h2>
        <p><?php echo $t['medias']['tabsintro'] ?></p>

        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#cartes" aria-controls="cartes" role="tab" data-toggle="tab"><?php echo $t['medias']['t1'] ?></a></li>
            <li role="presentation"><a href="#dessins" aria-controls="dessins" role="tab" data-toggle="tab"><?php echo $t['medias']['t2'] ?></a></li>
            <li role="presentation"><a href="#stickers" aria-controls="stickers" role="tab" data-toggle="tab"><?php echo $t['medias']['t7'] ?></a></li>
            <li role="presentation"><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab"><?php echo $t['medias']['t3'] ?></a></li>
            <li role="presentation"><a href="#presentation" aria-controls="presentation" role="tab" data-toggle="tab"><?php echo $t['medias']['t6'] ?></a></li>
            <li role="presentation"><a href="#screenshots" aria-controls="screenshots" role="tab" data-toggle="tab"><?php echo $t['medias']['t4'] ?></a></li>
            <li role="presentation"><a href="#animations" aria-controls="animations" role="tab" data-toggle="tab"><?php echo $t['medias']['t5'] ?></a></li>
        </ul>

        <div class="tab-content">

            <!-- Cartes -->
            <div role="tabpanel" class="tab-pane active" id="cartes">
                <div class="row">
                <?php for ($i=1; $i<=3; $i++) { ?>
                <div class="col-sm-4">
                    <div class="thumbnail text-center">
                        <h3><?php echo $t['medias']['t1i'.$i.'txt'] ?></h3>
                        <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                             title="<?php echo $t['medias']['tabssaveas'] ?>" alt=""
                             src="<?php echo $l['current'].$t['medias']['t1i'.$i.'url'] ?>" />
                        <p class="text-center"><?php echo $t['medias']['t1i'.$i.'desc'] ?></p>
                    </div>
                </div>
                <?php } ?>
                </div>
            </div>
            <!-- Dessins -->
            <div role="tabpanel" class="tab-pane" id="dessins">
                <div class="row">
                    <?php for ($i=1; $i<=6; $i++) { ?>
                    <div class="col-sm-4">
                        <div class="thumbnail text-center">
                            <h3><?php echo $t['medias']['t2i'.$i.'txt'] ?></h3>
                            <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                                 title="<?php echo $t['medias']['tabssaveas'] ?>" alt=""
                                 src="<?php echo $l['current'].$t['medias']['t2i'.$i.'url'] ?>" />
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="thumbnail text-center">
                            <h3><?php echo $t['medias']['t5i6txt'] ?></h3>
                            <video controls="controls" width="540" height="360">
                                <source src="<?php echo $l['current'].$t['medias']['t5i6url'] ?>.webm" type="video/webm" />
                                <source src="<?php echo $l['current'].$t['medias']['t5i6url'] ?>.mp4" type="video/mp4" />
                            </video>
                            <pre>&lt;video controls="controls" width="540" height="360"&gt;&lt;source src="<?php echo $l['DIo'].'/'.$t['medias']['t5i6url'] ?>.webm" type="video/webm" /&gt;&lt;source src="<?php echo $l['DIo'].'/'.$t['medias']['t5i6url'] ?>.mp4" type="video/mp4"&gt;&lt;/video&gt;</pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Stickers -->
            <div role="tabpanel" class="tab-pane" id="stickers">
                <div class="row">
                    <?php for ($i=1; $i<=6; $i++) { ?>
                    <div class="col-sm-4">
                        <div class="thumbnail text-center">
                            <h3><?php echo $t['medias']['t7i'.$i.'txt'] ?></h3>
                            <a href="<?php echo $l['current'].str_replace('.png', '.svg', $t['medias']['t7i'.$i.'url']) ?>"><img class="img-responsive" data-toggle="tooltip" data-placement="top"
                                 title="<?php echo $t['medias']['tabssaveas'] ?>" alt=""
                                 src="<?php echo $l['current'].$t['medias']['t7i'.$i.'url'] ?>" /></a>
                            <p class="text-center"><?php echo $t['medias']['t7i'.$i.'desc'] ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- Vidéos -->
            <div role="tabpanel" class="tab-pane" id="videos">
                <p><?php echo $t['medias']['t3intro'] ?></p>
                <div class="row">
                    <div class="col-md-6">
                        <h3><?php echo $t['medias']['t3v1txt'] ?></h3>
                        <video poster="<?php echo $t['medias']['t3v1img'] ?>"
                               controls="controls" width="540" height="360"
                               class="img-responsive">
                            <source src="<?php echo $t['medias']['t3v1webm'] ?>" type="video/webm" />
                            <source src="<?php echo $t['medias']['t3v1mp4'] ?>" type="video/mp4" />
                        </video>
                        <pre>&lt;video poster="<?php echo $t['medias']['t3v1img'] ?>" controls="controls" width="540" height="360"&gt;&lt;source src="<?php echo $t['medias']['t3v1webm'] ?>" type="video/webm" /&gt;&lt;source src="<?php echo $t['medias']['t3v1mp4'] ?>" type="video/mp4"&gt;&lt;/video&gt;</pre>
                   </div>
                   <div class="col-md-6">
                        <h3><?php echo $t['medias']['t3v2txt'] ?></h3>
                        <video poster="<?php echo $t['medias']['t3v2img'] ?>"
                               controls="controls" width="540" height="360"
                               class="img-responsive">
                            <source src="<?php echo $t['medias']['t3v2webm'] ?>" type="video/webm" />
                            <source src="<?php echo $t['medias']['t3v2mp4'] ?>" type="video/mp4" />
                        </video>
                        <pre>&lt;video poster="<?php echo $t['medias']['t3v2img'] ?>" controls="controls" width="540" height="360"&gt;&lt;source src="<?php echo $t['medias']['t3v2webm'] ?>" type="video/webm" /&gt;&lt;source src="<?php echo $t['medias']['t3v2mp4'] ?>" type="video/mp4"&gt;&lt;/video&gt;</pre>
                   </div>
               </div>
            </div>
            <!-- Présentation -->
            <div role="tabpanel" class="tab-pane" id="presentation">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="text-center">
                            <h3><?php echo $t['medias']['t6'] ?></h3>
                            <iframe src="<?php echo $l['DIo'].'/'.$t['medias']['t6url'] ?>" width="800" height="600" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
                            <pre>&lt;iframe src="<?php echo $l['DIo'].'/'.$t['medias']['t6url'] ?>" width="800" height="600" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"&gt;&lt;/iframe&gt;</pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Screenshots -->
            <div role="tabpanel" class="tab-pane" id="screenshots">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="col-sm-6">
                            <div class="thumbnail text-center">
                                <h3><b class="violet">Frama</b><b class="vert">listes</b></h3>
                                <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                                 title="<?php echo $t['medias']['tabssaveas'] ?>" alt=""
                                 src="<?php echo $l['current'] ?>img/framalistes.png" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="thumbnail text-center">
                                <h3><b class="violet">Frama</b><b class="vert">notes</b></h3>
                                <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                                 title="<?php echo $t['medias']['tabssaveas'] ?>" alt=""
                                 src="<?php echo $l['current'] ?>img/framanotes.png"  />
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="thumbnail text-center">
                                <h3><b class="violet">Frama</b><b class="vert">talk</b></h3>
                                <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                                 title="<?php echo $t['medias']['tabssaveas'] ?>" alt=""
                                 src="<?php echo $l['current'] ?>img/framatalk.jpg" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="thumbnail text-center">
                                <h3><b class="violet">Fram</b><b class="vert">agenda</b></h3>
                                <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                                 title="<?php echo $t['medias']['tabssaveas'] ?>" alt=""
                                 src="<?php echo $l['current'] ?>img/framagenda.png" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="thumbnail text-center">
                                <h3><b class="violet">My</b><b class="vert">Frama</b></h3>
                                <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                                 title="<?php echo $t['medias']['tabssaveas'] ?>" alt=""
                                 src="<?php echo $l['current'] ?>img/myframa.jpg" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail text-center">
                            <h3><b class="violet">Frama</b><b class="vert">forms</b></h3>
                            <img class="img-responsive" data-toggle="tooltip" data-placement="top"
                             title="<?php echo $t['medias']['tabssaveas'] ?>" alt=""
                             src="<?php echo $l['current'] ?>img/framaforms.png" />
                        </div>
                    </div>
                </div>
            </div>

        <!-- Revue de web-->
        <h2><?php echo $t['medias']['presstitle'] ?></h2>
        <p><?php echo $t['medias']['pressintro'] ?></p>
        <div class="col-sm-8 col-sm-offset-2 well">
            <table class="table">
                <thead>
                    <tr>
                        <th><?php echo $t['medias']['pressth1'] ?></th>
                        <th><?php echo $t['medias']['pressth2'] ?></th>
                        <th><?php echo $t['medias']['pressth3'] ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($t['medias']['presslist'] as $v) {
                    echo '
                    <tr>
                        <td>'.$v[0].'</td>
                        <td>'.$v[1].'</td>
                        <td><a href="'.$v[2].'">'.$v[3].'</a></td>
                    </tr>';
                }?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <h2 class="col-xs-12"><?php echo $t['medias']['framatitle'] ?></h2>
            <div class="col-sm-8">
                <?php echo $t['medias']['framalist'] ?>

                <p class="text-center">
                    <img src="<?php echo $l['current'] ?>img/biglogo.png" alt="" style="width:220px; margin:10px 30px"/>
                    <img src="<?php echo $l['current'] ?>img/biglogo-noir.png" alt="" style="width:220px; margin:10px 30px"/>
                </p>
            </div>

            <div class="col-sm-4 well">
                <p><?php echo $t['medias']['framap1'] ?></p>
                <p><?php echo $t['medias']['framap2'] ?></p>
                <p><?php echo $t['medias']['framap3'] ?></p>
            </div>
        </div>

<?php
include('footer.php')
?>
