<?php

require_once '../app/models/CarModel.php';
require_once '../app/controllers/CarController.php';

$controller = new CarController();
$controller->search();
