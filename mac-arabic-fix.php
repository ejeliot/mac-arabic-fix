<?php
/*
Plugin Name: MacArabicFix
Description: Filters POST input for a sequence of arabic characters that crash Mac applications
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
