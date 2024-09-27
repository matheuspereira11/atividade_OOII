<?php
require_once 'vinhoporto.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

h1 {
    color: #6b3f00;
    text-align: center;
    margin-bottom: 20px;
}

p {
    color: #333;
    line-height: 1.6;
    font-size: 16px;
}

.destaque {
    font-weight: bold;
    color: #d9534f;
    font-size: 18px;
    margin-top: 10px;
    border: 1px solid #d9534f;
    padding: 10px;
    border-radius: 5px;
    background-color: #f9e3e3;
}

    </style>
</head>
<body>
<div class="container">
    <h1>vinho porto</h1>
    <p><?= $informacaoVinho ?></p>
    <p class="destaque"><?= $promocaoVinho ?></p>
</div>
</body>
</html>