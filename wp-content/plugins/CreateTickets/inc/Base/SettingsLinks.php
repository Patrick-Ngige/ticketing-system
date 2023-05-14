<?php
/**
 * @package Cohort13Plugin
 */

namespace Inc\Base;

class SettingsLinks extends BaseController{

    // public $pluginfilename;
    function register(){
        add_filter("plugin_action_links_".$this->plugin_basename, [$this, 'settings_link']);
    }

    public function settings_link($links){
        $CreateTicketslink = '<a href="admin.php?page=add_members">Create tickets </a>';

        array_push($links, $CreateTicketslink);

        return $links;
    }
}