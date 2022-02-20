<?php
session_start();
$user = '';
$online = false;
if(isset($_SESSION['ONLINE'])){
    $online = true;
}
if(isset($_SESSION['USER'])){
    $user = $_SESSION['USER'];
}
?>
