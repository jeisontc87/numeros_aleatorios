<?php
$mensagem = "compra";
$idUnico = uniqid(); // uniqid gera um id unico
$resultado = substr($mensagem, 0, 2); //substr pega somente as primeiras letras da mensagem nesse caso [mensagem seguido de 0 pra iniciar da esquerda e contar e pegar somente 2 caracteres]
echo strtoupper("dh-" . $resultado . "4s25");//strtoupper transforma tudo em maiuscula
