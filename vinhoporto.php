<?php
require_once 'exer.php';
 
$vinhoporto = new Vinho("Graham's 10 Years Old Tawny", "porto", 197.00, 1970);
 
$informacaoVinho = $vinhoporto-> exibirMetodo();
$promocaoVinho = $vinhoporto-> exibirvalor() ? "promoção!" : "preço fora de promoção!";
?>
 