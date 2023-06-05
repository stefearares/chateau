<?php
session_start();


if (isset($_POST['action'])) {
    $_SESSION['cos'][$_POST['action']]= 1;

}