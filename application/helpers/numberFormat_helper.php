<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('monnaie')) {
	function monnaie($nbr) {
		return number_format($nbr, 0, ',', ' ').' Ar';
	}
}

?>