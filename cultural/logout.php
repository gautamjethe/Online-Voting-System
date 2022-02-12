<?php
    session_start();
    session_destroy();
    header("location: /cultural/index.php");
?>