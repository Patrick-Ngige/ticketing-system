<?php


function TS_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header');
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'TS_setup');

/**
 * adding theme support
 *
 */

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-thumbnails');

add_theme_support('post-formats',['aside','image','video']);


//custom meta boxes:ticket post type



function ticket_meta_box() {
    add_meta_box( 'ticket-employee', __( 'Assigned Employee', 'textdomain' ), 'ticket_employee_callback', 'ticket' );
    add_meta_box( 'ticket-status', __( 'Status', 'textdomain' ), 'ticket_status_callback', 'ticket' );
}
add_action( 'add_meta_boxes', 'ticket_meta_box' );

function ticket_employee_callback( $post ) {
    $assigned_employee = get_post_meta( $post->ID, 'assigned_employee', true );
    ?>
    <label for="assigned_employee">Employee:</label>
    <select name="assigned_employee" id="assigned_employee">
        <?php
        $users = get_users( array( 'role__in' => array( 'employee' ) ) );
        foreach ( $users as $user ) {
            $selected = '';
            if ( $assigned_employee == $user->ID ) {
                $selected = 'selected="selected"';
            }
            ?>
            <option value="<?php echo $user->ID; ?>" <?php echo $selected; ?>><?php echo $user->display_name; ?></option>
            <?php
        }
        ?>
    </select>
    <?php
}

function ticket_status_callback( $post ) {
    $status = get_post_meta( $post->ID, 'status', true );
    ?>
    <label for="status">Status:</label>
    <select name="status" id="status">
        <option value="open" <?php selected( $status, 'open' ); ?>>Open</option>
        <option value="in_progress" <?php selected( $status, 'in_progress' ); ?>>In Progress</option>
        <option value="done" <?php selected( $status, 'done' ); ?>>Done</option>
    </select>
    <?php
}

//CUSTOM FIELD (CF) REST API
function cp_rest_api(){
    register_rest_field(
        'post', 
        'custom_field',
        [
            'get_callback' => 'get_custom_field'
        ]
        );

}

function get_custom_field($obj){
    $post_id = $obj['id'];
     echo '<pre>';
     print_r($post_id);
     echo '</pre>';

     return get_post_meta($post_id, 'Custom Field', true);


}

add_action('rest_api_init', 'cp_rest_api');