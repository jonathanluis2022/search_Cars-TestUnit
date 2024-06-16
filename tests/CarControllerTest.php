<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../app/controllers/CarController.php';

class CarControllerTest extends TestCase
{
    private $controller;

    protected function setUp(): void
    {
        $this->controller = new CarController();
    }

    public function testSearchWithEmptyQuery()
    {
        // Simula uma requisição GET com busca vazia
        $_GET['busca'] = ' ';
        
        // Captura a saída do buffer de inclusão
        ob_start(); 
        $this->controller->search();
        $output = ob_get_clean();

        // Verifica se o output contém a mensagem de nenhum resultado encontrado
        $this->assertStringContainsString('Nenhum resultado encontrado', $output);
    }

    public function testSearchWithValidQuery()
    {
        // uma busca válida
        $_GET['busca'] = 'Toyota';
        
        // Captura a saída do buffer de inclusão
        ob_start();
        $this->controller->search();
        $output = ob_get_clean();

        // Verifica se o output contém os resultados esperados
        $this->assertStringContainsString('Tabela de Pesquisa', $output);
        $this->assertStringContainsString('Toyota', $output);
        $this->assertStringContainsString('Modelo', $output);
        $this->assertStringContainsString('Ano', $output);
    }
}

?>
