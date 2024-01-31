<?php

function calcularResultado() {
    // Verifica se os campos do formulário foram enviados antes de tentar acessá-los
    if (isset($_POST['km_inicio']) && isset($_POST['km_fim']) && isset($_POST['data'])) {
        $km_inicio = $_POST['km_inicio'];
        $km_fim = $_POST['km_fim'];
        $data = $_POST['data'];

        // Verifica se $data não é nulo antes de passá-lo para strtotime
        if ($data !== null) {
            $timestamp = strtotime($data);
            $novaData = date('d/m/y', $timestamp);

            // Verifica se $km_inicio e $km_fim são números antes de fazer o cálculo
            if (is_numeric($km_inicio) && is_numeric($km_fim)) {
                $resultado = $km_inicio - $km_fim;
                return $resultado;
            } else {
                return "Os valores de km_inicio e km_fim devem ser numéricos.";
            }
        } else {
            return "O campo data não pode estar vazio.";
        }
    } else {
        return "Certifique-se de preencher todos os campos do formulário.";   // erro a ser exibido não acontecendo 
    }
}

?>
