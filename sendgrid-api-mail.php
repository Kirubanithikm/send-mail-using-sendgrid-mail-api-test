<?php
/*
Plugin Name:          Sendgrid-api-send
Plugin URI:           http://wordpress.org/plugins/hello-wordpress/
Description:          Send mail using sendgrid api!
Author:               Kirubanithi G
Version:              1.0.0
Requires at least:    5.2
Requires PHP:         7.2
Author URI:           http://example.org/
License:              GPL v2 or later
License URI:          https://www.gnu.org/licenses/gpl-2.0.html

 */
if (!defined('ABSPATH')) {
    exit;
}
include plugin_dir_path(__FILE__) . './Views/error-alart.php';
include plugin_dir_path(__FILE__) . './Views/succes-alart.php';
include plugin_dir_path(__FILE__) . './Views/warning-alart.php';
include plugin_dir_path(__FILE__) . './config.php';
/**
 * @return void
 */
function sendgridMailapi()
{
    if (isset($_POST['submit_sendgrid'])) {
        $email = sanitize_email($_POST['to_mail']);
        $subject = sanitize_title($_POST['subject']);
        $body = sanitize_textarea_field($_POST['message']);

        if (!empty($email) || !empty($subject) || !empty($body)) {
            sendToSendgrid($email, $subject, $body);
        } else {
            warningMessage();
        }
    }
    include plugin_dir_path(__FILE__) . './Views/form.php';
}

/**
 * @return void
 */
function sendgridApiApp()
{
    add_menu_page('sendgrid_mail_work', // page title
        'sendgrid_mail_api', // menu title
        'manage_options', // capability
        'sendgrid_api', // menu slug
        'sendgridMailapi', // callback function
    );
}
add_action('admin_menu', 'sendgridApiApp');
