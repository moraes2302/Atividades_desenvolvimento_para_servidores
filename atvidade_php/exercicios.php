<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Exercícios PHP</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f3f5f7;
        margin: 0;
        padding: 20px;
        color: #333;
    }
    h1 {
        text-align: center;
        background-color: #007bff;
        color: white;
        padding: 15px;
        border-radius: 10px;
    }
    h3, h2 {
        color: #007bff;
        border-bottom: 2px solid #007bff;
        padding-bottom: 5px;
    }
    .caixa {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        padding: 20px;
        margin: 20px auto;
        width: 80%;
    }
    strong {
        color: #000;
    }
</style>
</head>
<body>

<h1>Exercícios PHP - Desenvolvimento para servidores</h1>
<h2>Aluna: Ana Livia De Pontes Moraes</h2>

<div class="caixa">
<?php
// ==================== 1️ Preço da roupa ====================
echo "<h3>1 - Preço da roupa</h3>";

$peca = "Camiseta";
$tamanho = "G";
$preco = 0;

switch ($peca) {
    case "Camiseta":
        $preco = 50;
        break;
    case "Calça":
        $preco = 80;
        break;
    case "Jaqueta":
        $preco = 120;
        break;
    default:
        $preco = 40;
        break;
}

if ($tamanho == "G") {
    $preco = $preco + ($preco * 0.10);
}

echo "A peça <strong>$peca</strong> de tamanho <strong>$tamanho</strong> custa <strong>R$ $preco</strong>.<br><br>";
?>
</div>

<div class="caixa">
<?php
// ==================== 2️ Média de notas ====================
echo "<h3>2 - Média de notas</h3>";

$alunos = [
    "Ana" => [8, 7, 9, 6],
    "Bruno" => [5, 4, 6, 5],
    "Carla" => [9, 8, 10, 9]
];

foreach ($alunos as $nome => $notas) {
    $media = array_sum($notas) / count($notas);
    echo "$nome - Média: <strong>$media</strong> - ";
    if ($media >= 6) {
        echo "<span style='color:green'>Aprovado</span><br>";
    } else {
        echo "<span style='color:red'>Reprovado</span><br>";
    }
}
?>
</div>

<div class="caixa">
<?php
// ==================== 3️ Números pares entre 1 e 50 ====================
echo "<h3>3 - Números pares entre 1 e 50</h3>";

$pares = [];
$soma = 0;
$contador = 1;

while ($contador <= 50) {
    if ($contador % 2 == 0) {
        $pares[] = $contador;
        $soma = $soma + $contador;
    }
    $contador++;
}

echo "Números pares: " . implode(", ", $pares) . "<br>";
echo "Soma dos pares: <strong>$soma</strong><br>";
?>
</div>

<div class="caixa">
<?php
// ==================== 4️ Caixa eletrônico ====================
echo "<h3>4 - Caixa eletrônico</h3>";

$valor = 100;
$nota = 0;

switch ($valor) {
    case 20:
        $nota = 20;
        break;
    case 50:
        $nota = 50;
        break;
    case 100:
        $nota = 100;
        break;
    default:
        echo "Valor inválido!<br>";
        break;
}

$total = $valor;
$contador = 0;

while ($total >= $nota && $nota > 0) {
    $total = $total - $nota;
    $contador++;
}

if ($nota > 0) {
    echo "Saque de R$ $valor realizado com <strong>$contador</strong> nota(s) de R$ $nota.<br>";
}
?>
</div>

<div class="caixa">
<?php
// ==================== 5️ Carrinho de compras ====================
echo "<h3>5 - Carrinho de compras</h3>";

$carrinho = [
    ["produto" => "Mouse", "preco" => 50],
    ["produto" => "Teclado", "preco" => 120],
    ["produto" => "Headset", "preco" => 200]
];

$total = 0;

foreach ($carrinho as $item) {
    echo $item["produto"] . " - R$ " . $item["preco"] . "<br>";
    $total = $total + $item["preco"];
}

echo "<strong>Total: R$ $total</strong><br>";
?>
</div>

<div class="caixa">
<?php
// ==================== 6️ Aumento salarial ====================
echo "<h3>6 - Aumento salarial</h3>";

$salarios = [1800, 2200, 1500, 3000, 1900];

foreach ($salarios as $indice => $salario) {
    if ($salario < 2000) {
        $salarios[$indice] = $salario + ($salario * 0.10);
    }
}

foreach ($salarios as $valor) {
    echo "R$ $valor<br>";
}
?>
</div>

</body>
</html>
