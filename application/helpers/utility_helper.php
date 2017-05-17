<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('public_dir()')) {
    function public_dir()
    {
        return base_url() . 'public/';
    }
}

if (!function_exists('css_dir()')) {
    function css_dir()
    {
        return public_dir() . 'css/';
    }
}

if (!function_exists('js_dir()')) {
    function js_dir()
    {
        return public_dir() . 'js/';
    }
}

if (!function_exists('img_dir()')) {
    function img_dir()
    {
        return public_dir() . 'img/';
    }
}