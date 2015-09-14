<?php 
    $internav = '';
    foreach ($t as $k => $v) {
        if($k!='meta' && substr($k,0,1)!='_') {
            $internav .= '<li><a href="'.$v['link'].'"';
            $internav .= ($page == $k) ? ' class="active"' : '';
            $internav .= '>'.$v['title'].'</a></li>';
        }
    }
?>

<!DOCTYPE html>
<html lang="<?php echo $t['meta']['lang'] ?>" dir="ltr">
<head>
    <meta charset="utf-8" />
    
    <title><?php echo $t['meta']['title'].' - '.$t[$page]['title'].' - '.$t['meta']['framasoft'] ?></title>
    
    <link rel="shortcut icon" href="https://n4.framasoft.org/nav/img/icons/favicon-violet.png">
    
    <link href="https://n4.framasoft.org/nav/lib/bootstrap/css/bootstrap.min.css" media="all" rel="stylesheet">
    <link href="css/core.css" rel="stylesheet" type="text/css" />
    <?php echo $t[$page]['css'] ?>

    <script src="https://n4.framasoft.org/nav/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="https://n4.framasoft.org/nav/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <?php echo $t[$page]['js'] ?>
</head>
<body>
    <script src="https://n4.framasoft.org/nav/nav.js" type="text/javascript"></script>
        <div class="row" id="internav">
            <div class="container">
                <ul class="nav navbar-nav navbar-right">
                    <?php echo $internav ?>
                </ul>
            </div>
        </div>
        <div class="row" id="mainHeader">
            <div class="container ombre">
                <header>
                    <div class="row">
                        <h1 class="col-md-6"><?php echo $t['meta']['DIo'] ?></h1>
                        <p class="lead col-md-6">
                            <?php echo $t['meta']['lead'] ?>
                        </p>
                    </div>

                    <hr class="trait clearfix" />
                </header>
            </div>
        </div>
        <main>
            <a id="leds" class="anchor"></a>
            <div class="row leds">
                <div class="container ombre">
                    <h2 class="col-xs-12"><?php echo $t['meta']['leds']['title'] ?> <button type="button" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button></h2>
                    <div class="row col-xs-12">
                        <div class="col-md-6">
                            <h3 id="internet-libre"><span class="fa fa-fw fa-unlock"></span> <?php echo $t['meta']['leds']['ltitle'] ?></h3>
                            <p><?php echo $t['meta']['leds']['ldesc'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <h3 id="internet-decentralise"><span class="fa fa-fw fa-share-alt"></span> <?php echo $t['meta']['leds']['dtitle'] ?></h3>
                            <p><?php echo $t['meta']['leds']['ddesc'] ?></p>
                        </div>
                    </div>
                    <div class="row col-xs-12">
                        <div class="col-md-6">
                            <h3 id="internet-ethique"><span class="fa fa-fw fa-eye-slash"></span> <?php echo $t['meta']['leds']['etitle'] ?></h3>
                            <p><?php echo $t['meta']['leds']['edesc'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <h3 id="internet-solidaire"><span class="fa fa-fw fa-group"></span> <?php echo $t['meta']['leds']['stitle'] ?></h3>
                            <p><?php echo $t['meta']['leds']['sdesc'] ?></p>
                        </div>
                    </div>
                    <div class="row col-xs-12">
                        <p class="text-center well"><?php echo $t['meta']['leds']['charte'] ?></p>
                    </div>
                </div>
            </div>
