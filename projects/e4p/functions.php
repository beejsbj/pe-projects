<?php



	function showPageErrors() {
    	ini_set('display_errors', 1);
    	ini_set('display_startup_errors', 1);
    	error_reporting(E_ALL);
	}
	// showPageErrors();



	function isChecked($name, $value){
  		if ($name == $value){
    		return 'checked';
  		}
}
