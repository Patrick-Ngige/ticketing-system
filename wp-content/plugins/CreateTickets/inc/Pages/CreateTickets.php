<?php
/**
 * @package CreateTicketsPlugin
 */

namespace Inc\Pages;

class CreateTickets
{
    public function register()
    {
        $this->create_table_to_db();
        $this->add_ticket_to_db();
        $this->update_ticket_to_db();
        $this->restore_ticket();
    }

    //CREATING THE TABLE IN DATABASE
    function create_table_to_db()
    {
        global $wpdb;

        $table_name = $wpdb->prefix . 'tickets';

        $tickets_details = "CREATE TABLE IF NOT EXISTS " . $table_name . "(
            ticket_id varchar(200) NOT NULL ,
            ticket_task text NOT NULL,
            assignee  text NOT NULL,
            issued_date date NOT NULL,
            ticket_status int NOT NULL DEFAULT 0,
            deleted int NOT NULL DEFAULT 0,
            PRIMARY KEY (ticket_id) 
        );";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($tickets_details);
    }

    function add_ticket_to_db()
    {

        global $wpdb;
        global $addmsg;
        global $errormsg;

        $addmsg = false;
        $errormsg = false;

        $table_name = $wpdb->prefix . 'tickets';

        if (isset($_POST['submitbtn'])) {
            $data = [
                'ticket_id' => $_POST['t_id'],
                'ticket_task' => $_POST['t_task'],
                'assignee' => $_POST['assignee'],
                'issued_date' => $_POST['issued_date'],
                'ticket_status' => 0,
                'deleted' => 0
            ];

            $results = $wpdb->insert($table_name, $data, $format = NULL);

            if ($results == true) {
                $addmsg = true;
                echo "<script> alert('Ticket created successfully!'); </script>";
            } else {
                $errormsg = true;
                echo "<script> alert('failed!!!'); </script>";
            }
        }
    }

    function update_ticket_to_db()
    {
        global $wpdb;
        global $success_msg;
        global $error_msg;
        $table_name = $wpdb->prefix . 'tickets';

        if (isset($_POST['update'])) {
            $data = [
                'ticket_id' => $_POST['edt_id'],
                'ticket_task' => $_POST['edt_task'],
                'assignee' => $_POST['edt_assignee'],
                'issued_date' => $_POST['edt_issued_date']
            ];

            $ticket_id = $_GET['ticket_id'];
            $result = $wpdb->update($table_name, $data, array('ticket_id' => "$ticket_id"));

            if ($result) {
                $success_msg = "Ticked deleted successfully";
            } else {
                $error_msg = "Error deleting ticket";
            }
        }
    }

    function restore_ticket()
    {
      
    }
}