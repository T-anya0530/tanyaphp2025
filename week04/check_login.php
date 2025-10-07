<?php
session_start();


if (!isset($_SESSION["account"])) {
  
    $_SESSION["redirect_to"] = $_SERVER["REQUEST_URI"];
    header("Location: login.php");
    exit;
}