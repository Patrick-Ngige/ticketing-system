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
        if(isset($_GET['ticket_id'])){
            $data =[
                'ticket_id'=> $_POST['t_id'],
                'ticket_task'=> $_POST['t_task'],
                'assignee'=> $_POST['assignee'],
                'issued_date'=> $_POST['issued_date']
            ];

            global $wpdb;
            global $addmsg;
            global $errormsg;

            $addmsg = false;
            $errormsg = false;

            $table_name = $wpdb->prefix.'tickets';

            $results = $wpdb->insert($table_name, $data, $format=NULL);

            if($results == true){
                $addmsg = true;
                echo "<script> alert('Ticket created successfully!'); </script>";
            }else{
                $errormsg = true;
                echo "<script> alert('failed!!!'); </script>";
            }
        }
    }
}