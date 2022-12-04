<?php
if (!defined('ABSPATH')) {
    exit;
}
function errorMessage($error_datas)
{
    ?>
    <div class="notice notice-error is-dismissible ">
        <p><?php echo ($error_datas["errors"][0]["message"]) ?></p>
    </div>
<?php
}

function wpErrorMessage()
{
    ?>
    <div class="notice notice-error is-dismissible">
        <p>Something went wrong...Please check your internet connection</p>
    </div>
<?php
}