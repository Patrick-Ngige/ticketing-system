<?php
/**
 * @package CreateTicketsPlugin
 */

namespace Inc\Pages;

class CreateTickets{
    public function register(){
        $this->create_table_to_db();
        $this->add_ticket_to_db();
    }

    //CREATING THE TABLE IN DATABASE
    function create_table_to_db(){
        global $wpdb;

        $table_name = $wpdb->prefix.'tickets';

        $tickets_details = "CREATE TABLE IF NOT EXISTS ".$table_name."(
            ticket_id varchar(200) NOT NULL AUTO_INCREMENT ,
            ticket_task text NOT NULL,
            assignee  text NOT NULL,
            issued_date date NOT NULL
        );";

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($tickets_details);
    }

    function add_ticket_to_db(){
        if(isset($_POST['submitbtn'])){
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