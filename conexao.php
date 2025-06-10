<?php
//define o endereco do servidor onde está o banco de dados
//Localhost - significa que o banco está na mesma máquina que o código
$host = 'localhost';

//define o nome do banco de dados
$db = 'bloco_recados';

//define o nome do usuario do BD
$user = 'root';

//define a senha do banco de dados
$pass = '';

//define padrão de caracteres usados na comunicação
$charset = 'utf8mb4';

//Monta a string de conexão informando ao PHP os dados do BD
//DSN - Data Source Name
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

//cria um array de opções para configurar a conexão
$options = [
    //define o modo de erro para exceções
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //deine o modo padrão de retorno de dados
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

//usa um bloco try-catch para validar conexão com BD
try{
    $pdo = new PDO($dsn,$user,$pass,$options);
}catch(\PDOException $e){
    //caso ocorra um erro
    die('Erro na conexão'. $e->getMessage());
}

?>