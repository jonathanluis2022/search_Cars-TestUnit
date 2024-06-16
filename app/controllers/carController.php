<?php

class CarController
{
    private $carModel;

    public function __construct()
    {
        $this->carModel = new CarModel();
    }

    public function search()
    {
        $busca = isset($_GET['busca']) ? $_GET['busca'] : '';
        $results = $this->carModel->searchCars($busca);
        include_once __DIR__ . '/../views/search.php';
    }
}
