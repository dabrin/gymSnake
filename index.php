<?php
    require 'libs/Session.php';
    require 'libs/FrontController.php';
    Session::getInstance();
    FrontController::main();
?>