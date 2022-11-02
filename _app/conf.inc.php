<?php
// $dotenv = Dotenv\Dotenv::createUnsafeImmutable($ENV);
// $dotenv->load();
//definndo variaveis para conexao com o servidor
define('HOST',getenv('MYSQL_HOST'));

define('USER',getenv('MYSQL_USERNAME'));

define('PASS',getenv('MYSQL_PASSWORD'));

define('DBSA',getenv('MYSQL_DATABASE'));



//defenindo tabelas existentes no servidor
define('TABLE','marcador');
define('TABLE1','linha11');
define('TABLE2', 'marcadorlinnha1');

//DEENINDO O DESENHO DA LINHA
define('LINHA1','linha1');
define('LINHA2','linha2');
define('LINHA3','linha3');
define('LINHA4','linha4');
define('LINHA5','linha5');
define('LINHA6','linha6');
define('LINHA7','linha7');
define('LINHA8','linha8');
define('LINHA9','linha9');
define('LINHA10','linha10');
define('LINHA11','linha11');

//DEFENINDO AS PARAGENS DE CADA LINHA
define('PARAGEM1', 'paragens1');
define('PARAGEM2', 'paragens2');
define('PARAGEM3', 'paragens3');
define('PARAGEM4', 'paragens4');
define('PARAGEM5', 'paragens5');
define('PARAGEM6', 'paragens6');
define('PARAGEM7', 'paragens7');
define('PARAGEM8', 'paragens8');
define('PARAGEM9', 'paragens9');
define('PARAGEM10', 'paragens10');
define('PARAGEM11', 'paragens11');
//DEFENINDO TODAS AS PARAGENS
define('PARAGEM', 'paragens');


$link= mysqli_connect(HOST,USER,PASS,DBSA) OR die('erro ao conectar!');
