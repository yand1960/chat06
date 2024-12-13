<?php
session_start();

include("../dal/chatdb.php");
$user = $_SESSION["user"];
$message = $_REQUEST["msg"];
addMessage($user, $message);
