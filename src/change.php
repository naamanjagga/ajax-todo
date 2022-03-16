<?php
session_start();
if(isset($_POST['action']) && $_POST['action']=='check1'){
    array_splice($_SESSION['todo'],$_POST['check'],1);
       echo json_encode($_SESSION['todo']);
}
?>