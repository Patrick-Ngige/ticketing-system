<?php
/**
 * @package CreateTicketPlugin
 */

/*
    Plugin Name: Create tickets
    Plugin URI: http://ticketing-system.org
    Description: A plugin to add, edit and assign tickets  
    Version: 1.0.0
    Author: PK
    Author URI: http://pk.org
    Licence: GPLv2 
*/

// security check
defined('ABSPATH') or die('Security Breach!!!');


// Checking if composer exists
if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once(dirname(__FILE__).'/vendor/autoload.php');

}

function activate_CreateTicketsPlugin(){
    Inc\Base\Activate::activate();
}

function deactivate_CreateTicketsPlugin(){
    Inc\Base\Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'activate_CreateTicketsPlugin');

register_deactivation_hook(__FILE__, 'deactivate_CreateTicketsPlugin');


//Considering all classes as a service
if(class_exists('Inc\\Init')){
    // echo 'jhgjh';
    Inc\Init::register_services(); 
}