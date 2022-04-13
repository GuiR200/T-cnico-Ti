<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
</head>
<body>

    <form action="cadastro.php" method="post">
        <input type="text" name="nomeCompleto" placeholder="Digite seu Nome completo" required maxlength="50"><br><br>
        <input type="number" name="Idade" placeholder="Digite sua Idade" required min="0"><br><br>
        <!-- CAMPOS NOVOS -->
        <input type="radio" name="genero" value="F" required>Feminino<br>
        <input type="radio" name="genero" value="M" required>Masculino<br>
        <input type="radio" name="genero" value="X" required>Prefiro não dizer<br><br>

        <select name="estado" required>
            <option value="">Selecione seu estado</option>
            <option value="PR">Paraná</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="SC">Santa Catarina</option>
        </select><br><br>

        <input type="checkbox" name="termos" required>Aceito os termos<br><br>
        <!-- SUBMIT -->
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>