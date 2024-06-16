<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../app/models/CarModel.php';

class CarModelTest extends TestCase
{
    private $carModel;

    protected function setUp(): void
    {
        $this->carModel = new CarModel();
    }

    public function test_verificar_pesquisas_e_resultados()
    {
        $query = "Toyota";
        $result = $this->carModel->searchCars($query);
        $this->assertIsArray($result); //si é um array
        $this->assertArrayHasKey('model_year', $result[0]); //primeiro indice do array exixte a chave "model_year"
    }

    public function test_pesquisa_esta_vazia()
    {
        $query = " ";
        $result = $this->carModel->searchCars($query);
        $this->assertEmpty($result);
    }
}
