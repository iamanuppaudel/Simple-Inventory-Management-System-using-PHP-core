<?php

if ($_SESSION['user'] == NULL) {
    header('location:login.php');
}