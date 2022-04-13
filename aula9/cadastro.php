<?php

function exibeErro($mensagem){
    echo "<h2>Erro - $mensagem</h2>";
}

function formataNome($nome){
    $nome = strtolower($nome);
    $nome = ucwords($nome);
    
    return $nome;
}

if(isset($_POST['nomeCompleto']) 
        && isset($_POST['Idade']) 
        && isset($_POST['genero']) 
        && isset($_POST['estado'])){

    $nome = $_POST['nomeCompleto'];
    $idade = $_POST['Idade'];
    $genero = $_POST['genero'];
    $estado = $_POST['estado'];
    $termos = $_POST['termos'];

    $temanhoDoNome = strlen($nome);

    if(empty($nome) || strlen($temanhoDoNome) > 50){
        exibeErro('Preenche o nome corretamente!');
    }else if(!is_numeric($idade) || $idade < 0){
        exibeErro('Preenche a seu idade corretamente!');
    }else if ($genero != 'F' && $genero != 'M' && $genero != 'X') {
        exibeErro('Selecione seu gênero!');
    } else if (empty($estado)) {
        exibeErro('Selecione seu estado!');
    } else if (!isset($_POST['termos'])) {
       exibeErro('Aceite os termos!');
    } else {
       $nome = formataNome($nome);

        echo "<h2>Cadastro efetuado com sucesso!<br>Boas vindas, $nome!</h2>";

        if ($idade >= 18) {
            echo "<h3>Versão completa disponível.</h3>";
        } else {
            echo "<h3>Versão habilitada: controle dos pais.</h3>";
        }
        if ($genero == 'M') {
            echo "<p>Gênero selecionado: Masculino.</p>";
        } else if ($genero == 'F') {
            echo "<p>Gênero selecionado: Feminino.</p>";
        } else {
            echo "<p>Você não quis selecionar seu gênero.</p>";
        }

        $estado = strtoupper($estado);

        echo "<p>Estado: $estado</p>";
    }

} else {
    exibeErro('Acesse pelo formulário.');
}