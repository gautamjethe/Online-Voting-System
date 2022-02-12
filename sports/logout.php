<?php
    session_start();
    session_destroy();
    header("location: /sports/index.php");
?>