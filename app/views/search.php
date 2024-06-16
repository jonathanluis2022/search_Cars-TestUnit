<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Pesquisar Carros</title>
</head>
<body>
    <header>
        <div class="cabecalho">
            <h1>Pesquisar Carros</h1>
        </div>
    </header>

    <main>
        <table id="tabela">
            <h1>Tabela de Pesquisa</h1>
            <div class="cabecalho_da_tabela">
                <header>
                    <form action="" method="get">
                        <label for="busca">Pesquisar</label>
                        <input placeholder="Digite..." 
                            value='<?php if(isset($_GET['busca'])) echo htmlspecialchars($_GET['busca']); ?>'
                            type="text" name="busca" id="busca">
                        <button type="submit">Pesquisar</button>
                    </form>
                </header>
            </div>

            <div class="resultados">
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Ano</th>
                    </tr>

                    <?php if (empty($results)) { ?>
                        <tr>
                            <td colspan='3'>Digite algo para pesquisar seu carro</td>
                        </tr>
                    <?php } else { 
                        foreach ($results as $car) { ?>
                            <tr>
                                <td><?= $car['make_display'] ?></td>
                                <td><?= $car['model_name'] ?></td>
                                <td><?= $car['model_year'] ?></td>
                            </tr>
                        <?php } 
                    } ?>
                </thead>
            </div>
        </table>
    </main>
</body>
</html>
