<?php
use Lib\FrontController\FrontController;
include '../config.php';
include '../App/Autoload/bootstrap.php';

(new FrontController())->run();