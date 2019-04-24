<?php
require_once '../start.php';

if (empty($_SESSION)){
    header('Location: ../index.php');
    exit();
}