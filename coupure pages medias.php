<!-- Coupure 01 : from medias.php l.24 -->

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

<!-- Coupure 02 : from data.fr.php l.371 -->

$t['medias']['1title']      = 'Articles sur le Framablog';
$t['medias']['1intro']      = 'Le <a href="http://framablog.org">Framablog</a> est notre principal outil de communication envers le grand public. Les 6 nouveaux services proposés durant le lancement de cette campagne y seront présentées entre le 3 et le 10 octobre 2016.';
$t['medias']['1list']       = '
                        <ul>
                            <li><em>Lundi 03/10</em> : Présentation de <a href="https://framablog.org/2016/10/03/degooglisons-saison-3-30-services-alternatifs-aux-produits-de-google-co/">la 3e année de la campagne Dégooglisons Internet</a>.</li>
                            <li><em>Lundi 03/10</em> : <a href="http://framablog.org/2016/10/03/framalistes-vos-groups-nont-plus-a-appartenir-a-google">Framalistes</a>, alternative à Google Groups.</li>
                            <li><em>Mardi 04/10</em> : <a href="http://framablog.org/2016/10/04/framanotes-vos-notes-vous-appartiennent-for-ever">Framanotes</a>, alternative à Evernote.</li>
                            <li><em>Mercredi 05/10</em> : <a href="http://framablog.org/2016/10/05/framaforms-noffrez-plus-les-reponses-que-vous-collectez-a-google">Framaforms</a> alternative à Google Forms.</li>
                            <li><em>Jeudi 06/10</em> : <a href="http://framablog.org/2016/10/06/framatalk-semez-la-discord-sur-skype-et-cie">Framatalk</a>, alternative à Skype.</li>
                            <li><em>Vendredi 07/10</em> : <a href="http://framablog.org/2016/10/07/framagenda-ne-partagez-plus-votre-planning-et-vos-contacts-avec-la-nsa">Framagenda</a> alternative à Google Agenda & Contacts.</li>
                            <li><em>Lundi 10/10</em> : <a href="http://framablog.org/2016/10/10/myframa-vos-favoris-et-framasofteries-partout-avec-vous-rien-qua-vous">MyFrama</a> alternative à Del.icio.us & au compte unifié Google.</li>
                        </ul>';
$t['medias']['2title']      = 'Liens vers les services';
$t['medias']['2intro']      = 'Bien qu’elles soient présentées tout au long de la semaine sur notre blog, ces six nouveautés seront en ligne dès le 3 octobre. Cliquez sur le nom du service pour l’essayer.';
$t['medias']['2list']       = '
                        <ul>
                            <li><a href="https://framalistes.org"><b class="violet">Frama</b><b class="vert">listes</b></a></li>
                            <li><a href="https://framanotes.org"><b class="violet">Frama</b><b class="vert">notes</b></a></li>
                            <li><a href="https://framaforms.org"><b class="violet">Frama</b><b class="vert">forms</b></a></li>
                            <li><a href="https://framatalk.org"><b class="violet">Frama</b><b class="vert">talk</b></a></li>
                            <li><a href="https://framagenda.org"><b class="violet">Fram</b><b class="vert">agenda</b></a></li>
                            <li><a href="https://my.framasoft.org"><b class="violet">My</b><b class="vert">Frama</b></a></li>
                        </ul>';

<!--Coupure 03 : from medias.php l.36 -->
            <li role="presentation"><a href="#screenshots" aria-controls="screenshots" role="tab" data-toggle="tab"><?php echo $t['medias']['t4'] ?></a></li>

<!-- Coupure 04 : from medias.php l.162 -->

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

<!-- Coupure 05 : from data.fr.php l. -->
