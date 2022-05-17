<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('css_url')) {
	function css_url($file) {
		return site_url("assets/css/".$file);
	}
}

if ( ! function_exists('js_url')) {
	function js_url($file) {
		return site_url("assets/js/".$file);
	}
}

if ( ! function_exists('img_url')) {
	function img_url($file) {
		return site_url("assets/img/".$file);
	}
}

if ( ! function_exists('lib_url')) {
	function lib_url($file) {
		return site_url("assets/lib/".$file);
	}
}

if ( ! function_exists('upfile_url')) {
	function upfile_url($file) {
		return site_url("uploadedFile/".$file);
	}
}

?>