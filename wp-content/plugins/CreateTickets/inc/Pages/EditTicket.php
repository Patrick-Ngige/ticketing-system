<?php
/**
 * @package CreateTicketsPlugin
 */

namespace Inc\Pages;

class CreateTickets{
    public function register(){
        $this->add_ticket_to_db();
    }


    function add_ticket_to_db(){
        if(isset($_POST['update'])){
            $data =[
                'ticket_id'=> $_POST['t_id'],
                'ticket_task'=> $_POST['t_task'],
                'assignee'=> $_POST['assignee'],
                'issued_date'=> $_POST['issued_date']
            ];

        }
    }
}