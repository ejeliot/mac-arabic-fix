<?php
/*
Plugin Name: MacArabicFix
Description: A simple plugin that strips a sequence of arabic characters from any post input
             that cause mac and iOS apps to crash then viewed
Version: 0.1
Author: Ed Eliot
*/
add_action('init', function() {
    if (!empty($_POST)) {
        foreach ($_POST as $key => &$value) {
            $value = str_replace('ﺲﻤَـَّﻭُﻮُﺤﺧ ̷̴ﺥ ̷̴ﺥ ̷̴ﺥ ﺎﻣﺍﺮﺘﻴﺧ ̷̴ﺥ', '', $value);    
        }
    }
});
