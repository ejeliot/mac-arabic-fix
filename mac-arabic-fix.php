<?php
/*
Plugin Name: MacArabicFix
Description: Filters input for a sequence of arabic characters that crash Mac applications
Version: 0.1
Author: Ed Eliot
*/
add_action('init', function() {
    foreach (array($_GET, $_POST, $_REQUEST) as &$array) {
        foreach ($array as &$value) {
            $value = str_replace('ﺲﻤَـَّﻭُﻮُﺤﺧ ̷̴ﺥ ̷̴ﺥ ̷̴ﺥ ﺎﻣﺍﺮﺘﻴﺧ ̷̴ﺥ', '', $value);    
        }
    }
});
