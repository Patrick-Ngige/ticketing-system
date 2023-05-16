<?php

/**
 * @package CreateTicketsPlugin
 */

namespace Inc\Pages;




class EditTicket
{
    public function register()
    {
        $this->update_ticket_to_db();
    }

    function update_ticket_to_db()
    {

        global $wpdb;

        $table_name = $wpdb->prefix . 'tickets';

        if (isset($_POST['update'])) {
            $data = [
                'ticket_id' => $_POST['edt_id'],
                'user_login' => $_POST['edt_user_login'],
                'ticket_task' => $_POST['edt_task'],
                'assignee' => $_POST['edt_assignee'],
                'issued_date' => $_POST['edt_issued_date']
            ];

            $ticket_id = $_GET['ticket_id'];
            $result = $wpdb->update($table_name, $data, array('ticket_id' => "$ticket_id"));
        }

        
    }
}
