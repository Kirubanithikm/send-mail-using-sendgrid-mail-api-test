<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<html>
<div style="margin: auto; width: 220px;">
<br>
<h2>Enter the details </h2>
        <form action="#" method="post" name="mail-form">
                <label >Customer mail:</label><br>
                 <input type="text" placeholder="Enter mail" name="to_mail"><br /><hr>
                 <label >Subject:</label><br>
                 <input type="text" placeholder="Enter subject" name="subject"><br /><hr>
                <label >Messages:</label><br>
                 <input type="text" placeholder="Enter message" name="message"><br />
                <br><hr>
                 <input type="submit" class="button-primary" name="submit_sendgrid" value="Submit">
        </form>
</div>
</html>
