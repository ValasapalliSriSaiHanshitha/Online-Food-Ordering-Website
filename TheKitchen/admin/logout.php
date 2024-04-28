<?php


session_start();

session_destroy();

session_start();

$_SESSION['msg'] = 'Logged out successfully!';

header('location: index.php');