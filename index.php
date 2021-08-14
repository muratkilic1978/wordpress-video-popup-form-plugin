<?php
/*
* Plugin Name: WordPress Video Popup Form 
* Plugin URI: http://localhost
* Description: This is a WordPress Popup Form with an video element for a specific client. The plugin is made with PHP, HTML, CSS and JS 
* Version: 1.7.7
* Author: Murat Kilic
* Author http://localhost
* License: GPL2
*/
function video_popup_form(){
    $content = '';
    $content .= '<div id="popup-container">';
    $content .= '<div class="box slide-top" id="popup-box">';
    $content .= '<div class="popupCloseButton" id="closeBtn">&#10008;</div>';
    $content .= '<div class="video-teaser">';
    $content .= '<video width="400" height="340" muted loop autoplay>';
    $content .= '<source src=" '.plugins_url("video-popup-form/video/intro_pop.mp4").'" type="video/mp4">';
    $content .= '</video>';
    $content .= '</div>';
    $content .= '<div id="promotion-header">';
    $content .= '<h4 id="promotion-header-title">Se vores nye miniserie #UNG<span id="promotion-subheader-title"> Få et indblik i livet som studerende på TH-Langs HF</span></h4>';
    $content .= '</div>';
    $content .= '<form action="#">';
    $content .= '<div class="button-holder">';
    $content .= '<div class="button-element">'; 
    $content .= '<a href="http://thlangs-hf2.emmalange.dk/"><button class="btn btn-primary btn-lg active" role="button">KLIK HER!</button></a>';
    $content .= '</div>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</div>';
    $content .= '</div>';
    return $content;
}


function register_styles_plugin(){
    
    wp_enqueue_style('CustomStylesheet',plugins_url('video-popup-form/css/style.css'));
    
    wp_deregister_script('jquery');
    
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.1.1.min.js',array(),null,true);
    
    wp_enqueue_script('CustomScript',plugins_url('video-popup-form/js/script.js'),array('jquery'),null,true);
    
    
}


add_shortcode('show_video_popup_form','video_popup_form');
add_action('wp_enqueue_scripts','register_styles_plugin');
