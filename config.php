<?php
if (!defined('ABSPATH')) {
    exit;
}
function sendToSendgrid($email, $subject, $body)
{
    $data_values = array(
        "personalizations" => array(
            array(
                "to" => array(
                    array("email" => $email),
                ),
            ),
        ),
        "from" => array("email" => "nivithann06@gmail.com"),
        "subject" => $subject,
        "content" => array(
            array(
                "type" => "text/html",
                "value" => $body,
            ),
        ),
    );

    $auth_config = array(
        'method' => 'POST',
        'headers' => array(
            'Authorization' => 'Bearer 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', //api_token
            'Content-Type' => 'application/json',
        ),
        'body' => json_encode($data_values),
    );

    $url = "https://api.sendgrid.com/v3/mail/send";

    $api_sendgrid = wp_remote_post($url, $auth_config);
    if (!is_wp_error($api_sendgrid)) {
        $error_datas = json_decode($api_sendgrid['body'], true);
        if ((!empty($error_datas))) {
            errorMessage($error_datas);
        } else {
            successMessage($email);
        }
    } else {
        wpErrorMessage();
    }
}
