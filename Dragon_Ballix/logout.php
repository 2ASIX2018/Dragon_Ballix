<?php

session_start();

session_start();

if (!isset($_SESSION["username"])) header("Location: index.php");


$_SESSION = array();
