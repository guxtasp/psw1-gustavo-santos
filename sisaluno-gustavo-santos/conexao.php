<?php 
//Criar as constantes com as credencias de acesso ao banco de dados
define('SERVER', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'Gustavo1@');
define('DBNAME', 'SIS_ALUNO');

//Criar a conexão com banco de dados usando o PDO e a porta do banco de dados
//Utilizar o Try/Catch para verificar a conexão.
try {

    $conexao = new pdo('mysql:host=' . SERVER . ';dbname=' .
                                     DBNAME, USUARIO, SENHA);
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso.
     Erro gerado " . $e->getMessage();
}
