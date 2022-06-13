<?php
session_start();

// destroy the session
session_destroy();
header('Location: /php-crash/php-crash-main/13_sessions.php');
