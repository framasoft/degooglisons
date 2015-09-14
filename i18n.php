<?php
    $langs = [
        'fr_FR' => 'Français', // keep French in first
        'en_GB' => 'English',
        'es_ES' => 'Español',
    ];
    
    // Default language fr_FR
    if(!isset($_SESSION['lang']) OR !in_array($_SESSION['lang'], $langs)) {
        $_SESSION['lang'] = 'fr_FR';
    }
    // Manual set by form
    if (isset($_POST['lang']) && is_string($_POST['lang']) && in_array($_POST['lang'], array_keys($langs))) {
        $_SESSION['lang'] = $_POST['lang'];
    // Check available languages
    } else {
        $browserLangs = array();
        foreach ($langs as $k => $v) {
            $isoLangs[] = strtolower(substr($k,0,2));
        }

        if (isset($_SERVER) && array_key_exists('HTTP_ACCEPT_LANGUAGE', $_SERVER)) {
            preg_match_all("/([[:alpha:]]{1,8}(?:-[[:alpha:]|-]{1,8})?)" .
                           "(?:\\s*;\\s*q\\s*=\\s*(?:1\\.0{0,3}|0\\.\\d{0,3}))?\\s*(?:,|$)/i",
                           $_SERVER['HTTP_ACCEPT_LANGUAGE'], $hits);
            foreach ($hits[1] as $hit) {
                $browserLangs[] = strtolower(substr($hit,0,2));
            }
        }
        
        if(in_array('fr', $browserLangs)) {
            // french is better
            $_SESSION['lang'] = 'fr';
        } else {
            // 1st default language
            foreach($browserLangs as $lang) {
                if(in_array($lang, $isoLangs)) {
                    $_SESSION['lang'] = $lang;
                    break;
                }
            }
        }
    }
    
    require('i18n/data.'.strtolower(substr($_SESSION['lang'],0,2)).'.php');
?>
