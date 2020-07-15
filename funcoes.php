<?php

// O codigo abaixo faz conexão com o MySQL através de PDO
function conecta_bd() {
    $PDO = new PDO("mysql:host=localhost;dbname=ua10;charset=utf8", "root", null);
    return $PDO;
}