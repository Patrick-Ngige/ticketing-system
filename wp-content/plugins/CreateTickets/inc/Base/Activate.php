<?php
/**
 * @package CreateTicketPlugin
 */

 namespace Inc\Base;
 class Activate{
    static function activate(){
        // CreateTickets::CreateTickets();
        flush_rewrite_rules();
    }
 }