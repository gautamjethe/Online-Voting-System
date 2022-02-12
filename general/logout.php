<?php
    session_start();
    session_destroy();
    header("location: /general/index.php");
?>