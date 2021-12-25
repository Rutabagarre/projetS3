<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL);

include('Core/AutoLoad.php');
AutoLoad::start();

include('Core/App.php');
$app = new App();
