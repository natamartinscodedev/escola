<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
</head>
<body>
     <div>
        <h1><?= $title ?></h1>     
     </div>
     <div>
        <?php foreach($dadosEscola as $value): ?>
            <p><?= $value->nome ?></p> 
            <p><?= $value->endereco ?></p> 
            <p><?= $value->telefone ?></p> 
            <p><?= $value->email ?></p>
            <a href="{<?= $value->site ?>}">site</a>
            <p><?= $value->cnpj ?></p> 
            <p>site</p> 
        <?php endforeach; ?>
     </div>
</body> 
</html>