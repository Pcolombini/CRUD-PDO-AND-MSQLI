<?php 

class ClassConexao
{
    // REALIZARÁ A CONEXÃO COM O BANCO DE DADOS
    public function connectDB()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=crud","root","");
            return $conn;
        } catch (PDOException $erro) {
           return $erro->getMessage();
        }
    }
}