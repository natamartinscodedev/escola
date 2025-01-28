<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações dos Professores.</title>
</head>
<body>
    <h2><?= $title ?>:</h2>
    <div>
    <?php foreach($dadosProf as $value): ?>
            <p><?= $value->nome ?></p> 
        <?php endforeach; ?>
    </div>
</body>
</html>