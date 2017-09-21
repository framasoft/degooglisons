<?php

    $langs_options = '';
    foreach ($langs as $k => $v) {
        $langs_options .= '
            <li><a href="?l='.substr($k,0,2).'">'.$v.'</a></li>';
    }

    $internav = ''; $currentPage = '';
    foreach ($t as $k => $v) {
        if($k!='meta' && substr($k,0,1)!='_') {
            $internav .= '<li><a href="'.$v['link'].$paramLang.'" class="btn btn-link"';
            if ($page == $k) {
                $internav .=  ' class="active"';
                $currentPage = $v['link'];
            }
            $internav .= '>'.$v['title'].'</a></li>';
        }
    }
?>

<!DOCTYPE html>
<html lang="<?php echo $t['meta']['lang'] ?>" dir="ltr">
<head>
    <meta charset="utf-8" />

    <title><?php echo $t['meta']['title'].' - '.$t[$page]['title'].' - '.$t['meta']['framasoft'] ?></title>

    <link rel="shortcut icon" href="https://framasoft.org/nav/img/icons/favicon-violet.png">

    <link href="https://framasoft.org/nav/lib/bootstrap/css/bootstrap.min.css" media="all" rel="stylesheet">
    <link href="<?php echo $l['current'] ?>css/core.css" rel="stylesheet" type="text/css" />
    <?php echo $t[$page]['css'] ?>
    <link href="https://framasoft.org/nav/lib/font-awesome/css/font-awesome.min.css" media="all" rel="stylesheet">
    <link href="https://framasoft.org/nav/css/frama.css" media="all" rel="stylesheet">
    <link href="css/select2.min.css" media="all" rel="stylesheet">

    <script src="https://framasoft.org/nav/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="https://framasoft.org/nav/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/select2.min.js" type="text/javascript"></script>
    <?php echo $t[$page]['js'] ?>
</head>
<body class="<?php echo basename($_SERVER['SCRIPT_FILENAME'], '.php'); ?>">
    <script src="https://framasoft.org/nav/nav.js" type="text/javascript"></script>
        <div class="row" id="mainHeader">
            <div class="container ombre">
                <header class="row">
                    <h1><?php echo $t['meta']['DIo'] ?>
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    title="<?php echo $t['_Change the language'] ?>">
                                    <i class="fa fa-lg fa-language" aria-hidden="true"></i> Langue <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <?php echo $langs_options ?>
                                </ul>
                            </div>
                        </div>
                    </h1>
                    <p class="lead text-center">
                        <?php echo $t[$page]['title'] ?>
                    </p>
                    <hr class="trait clearfix" />
                </header>
            </div>
        </div>
        <main>
