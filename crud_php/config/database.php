<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
 26014987-2 - Maria Eduarda Delbone Cardoso
Data: 28 de Outubro de 2026
Descritivo: Configuração e conexão com o banco de dados MySQL (PDO)
*******************************************************************************/
class Database {
    private $host = "localhost";
    private $db_name = "crud_db";
    private $username = "root";
    private $password = ""; // No XAMPP, a senha padrão do root é vazia
    public $conn;

    public function getConnection(){
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Erro de conexão: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>
