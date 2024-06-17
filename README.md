# Projeto Pesquisar Carros

Este projeto implementa uma funcionalidade simples para pesquisar carros utilizando a API CarQuery. O objetivo é permitir que os usuários digitem o nome de uma marca de carro e vejam os modelos correspondentes.

## Model

A classe `CarModel` está localizada em `/app/models/CarModel.php` e contém o método `searchCars($query)`. Este método realiza uma pesquisa na API CarQuery para obter informações sobre modelos de carros com base em uma palavra-chave de pesquisa.

## Controller

O `CarController`, localizado em `/app/controllers/CarController.php`, gerencia a lógica de controle da aplicação. Ele instancia a classe `CarModel` para acessar os métodos de pesquisa e processa os dados de entrada do usuário para exibir os resultados na view.

## Testes

Foram implementados testes unitários utilizando PHPUnit - Os testes incluem:

- **Pesquisa com consulta válida:** Verifica se a pesquisa retorna resultados válidos para uma marca de carro existente.
- **Pesquisa com consulta inválida:** Confirma que a pesquisa retorna um array vazio quando uma marca de carro inválida é fornecida.
- **Pesquisa com consulta vazia:** Garante que a pesquisa retorne um array vazio quando nenhum termo de pesquisa é fornecido.

## Resultados do Projeto

O progresso neste projeto foi muito bom para eu desenvolver habilidades com a estrutura mvc . Os teste Unitarios , ajuda eu compreender melhor a logia , o valor e estado de cada metodo e atribultos

