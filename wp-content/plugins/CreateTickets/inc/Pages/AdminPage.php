<?php

/**
 * @package $CreateTicketsPlugin
 */

namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

class AdminPage extends BaseController{

    public $settings;

    public $pages;

    function register(){
        $this->settings = new SettingsApi();

        $this->setPages();


        $this->settings->AddPages( $this->pages )->register();
    }

    public function setPages(){ 
        $this->pages= [
        [
            'page_title'=> 'Ticketing System',
            'menu_title'=> 'Create Tickets',
            'capability' => 'manage_options', 
            'menu_slug'=> 'create_ticket',
            'callback'=> function(){ return require_once( "$this->plugin_path/templates/createticket.php");}  ,
            'icon_url'=> 'dashicons-plus',
            'position'=> 200
        ],
        [
            'page_title'=> 'Ticketing System',
            'menu_title'=> 'View Tickets',
            'capability' => 'manage_options', 
            'menu_slug'=> 'view_ticket',
            'callback'=> function(){ return require_once( "$this->plugin_path/templates/viewtickets.php");}  ,
            'icon_url'=> 'dashicons-list-view',
            'position'=> 201
        ]
        ];
    }

}