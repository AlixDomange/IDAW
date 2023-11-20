<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../frontend/index.php?page=login");
    exit();
?>