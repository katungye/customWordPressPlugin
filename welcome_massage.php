<?php
/**
 * @package welcome_message
 */
/*
Plugin Name: welcome message
Plugin URI: 
Description: This a welcome plagin to test if all works.
Author: Katungye Johnson
Version: 0.1
Author URI: 
*/

if(! defined('ABSPATH')){
  die;
}

class welcome_message
{

  function activate(){
    

  }
  function deactivate(){
    

  }
  function uninstall(){
    
  }

  

}

alert("welcome to the site");

  function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

if (class_exists('welcome_message')){
//create a new instance of the class
$welcome_message = new welcome_message(); 

}

//on activation
register_activation_hook(__FILE__, array($welcome_message, 'activate'));

//on deactivation
register_deactivation_hook(__FILE__, array($welcome_message, 'deactivate'));

//on unistall


