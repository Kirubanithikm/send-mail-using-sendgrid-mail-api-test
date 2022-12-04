<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
function successMessage($email)
{
    ?>
    <div class="notice notice-success is-dismissible">
        <p>Congratulation..!!! Mail sent successfully to :<?php echo $email?></p>  
    </div>
<?php
}