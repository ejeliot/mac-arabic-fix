<?php
/*
Plugin Name: MacArabicFix
Description: Filters POST input for a sequence of arabic characters that crash Mac applications
Version: 0.1
Author: Ed Eliot
*/
add_action('init', function() {
    foreach ($_POST as &$value) {
        $value = str_replace('ﺲﻤَـَّﻭُﻮُﺤﺧ ̷̴ﺥ ̷̴ﺥ ̷̴ﺥ ﺎﻣﺍﺮﺘﻴﺧ ̷̴ﺥ', '', $value);    
    }
});
