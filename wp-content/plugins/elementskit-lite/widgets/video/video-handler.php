<?php
namespace Elementor;


class ElementsKit_Widget_Video_Handler extends \ElementsKit_Lite\Core\Handler_Widget{

    static function get_name() {
        return 'elementskit-video';
    }

    static function get_title() {
        return esc_html__( 'Video', 'elementskit-lite' );
    }

    static function get_icon() {
        return 'eicon-youtube ekit-widget-icon ';
    }

    static function get_categories() {
        return [ 'elementskit-lite' ];
    }

    static function get_dir() {
        return \ElementsKit_Lite::widget_dir() . 'video/';
    }

    static function get_url() {
        return \ElementsKit_Lite::widget_url() . 'video';
    }
}