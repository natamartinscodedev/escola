<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Cadastros</title>
</head>
<body>
    <h2>Página de Cadastros.</h2>
    
    <form action="/cadastro/prof" method="post">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name"><br>
        
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf"><br>
        
        <label for="sala">Sala:</label>
        <input type="text" name="sala" id="sala"><br>
        
        <label for="turno">Turno:</label>
        <input type="text" name="turno" id="turno"><br>
        
        <button type="submit">Cadastrar Professor</button>
    </form>

    <form action="/cadastro/aluno" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br>
        
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf"><br>
        
        <label for="idade">Idade:</label>
        <input type="text" name="idade" id="idade"><br>
        
        <button type="submit">Cadastrar Aluno</button>
    </form>    

</body>
</html>