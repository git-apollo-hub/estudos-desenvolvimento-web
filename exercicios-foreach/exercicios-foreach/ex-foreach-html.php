<?php 

$frutas = [
    ['nome' => 'Maçã', 'preco' => 3.50],
    ['nome' => 'Banana', 'preco' => 1.99],
    ['nome' => 'Uva', 'preco' => 8.90],
];

foreach ($frutas as $fruta) {
    echo 'Nome: ' . $fruta['nome'] . ' Valor: ' . $fruta['preco'] . '<br>';
}

?>


<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Select</title>
</head>
<body>
    <h1>Testando Select</h1>

    <select name="fruta" >
        <?php foreach ($frutas as $fruta): ?>
        <option value="<?php echo $fruta['preco'];?>"><?php echo $fruta['nome'];?></option>
        <?php endforeach;?>
    </select>

    <table>
            <thead>
                <tr>
                    <th>Fruta</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($frutas as $fruta): ?>
                    <tr>
                        <td><?php echo $fruta['nome'];?></td>
                        <td><?php echo $fruta['preco'];?></td>
                    </tr>
                    <?php endforeach;?>
            </tbody>
    </table>


</body>
</html>