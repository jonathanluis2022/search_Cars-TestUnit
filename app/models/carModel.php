<?php
class CarModel
{
    public function searchCars($query)
    {
        $url = "https://www.carqueryapi.com/api/0.3/?cmd=getTrims&keyword=" . urlencode($query);
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        $resultados_filtrados = [];
        $combinacoes_unicas = [];

        if (isset($data['Trims']) && count($data['Trims']) > 0) {
            foreach ($data['Trims'] as $car) {
                $marca = strtolower($car['make_display']);
                $modelo = strtolower($car['model_name']);
                $chave_unica = $marca . "-" . $modelo;

                if ((strpos($marca, $query) === 0 || strpos($modelo, $query) === 0) && !isset($combinacoes_unicas[$chave_unica])) {
                    $combinacoes_unicas[$chave_unica] = true;
                    $resultados_filtrados[] = $car;
                }
            }
        }

        return $resultados_filtrados;
    }
}
