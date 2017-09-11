<?php
if($_POST["message"]) {
    mail("raki432@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>