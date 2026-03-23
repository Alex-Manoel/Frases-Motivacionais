<?php
header("Content-Type: application/json");

$nome = $_POST['nome'] ?? '';

$frases = [
  "você é capaz de conquistar qualquer coisa!",
  "hoje é um ótimo dia para vencer!",
  "nunca desista dos seus sonhos!",
  "a persistência leva ao sucesso!",
  "acredite no seu potencial!"
];

$imagens = [
  "https://picsum.photos/300?random=1",
  "https://picsum.photos/300?random=2",
  "https://picsum.photos/300?random=3",
  "https://picsum.photos/300?random=4",
  "https://picsum.photos/300?random=5"
];

$frase = $frases[array_rand($frases)];
$imagem = $imagens[array_rand($imagens)];

$resposta = [
  "frase" => "$nome, $frase",
  "imagem" => $imagem
];

echo json_encode($resposta);