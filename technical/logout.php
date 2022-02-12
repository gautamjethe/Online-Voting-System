<?php
    session_start();
    session_destroy();
    header("location: /technical/index.php");
?>