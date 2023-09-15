<?php 

abstract class ClassConexao
{
    // REALIZARÁ A CONEXÃO COM O BANCO DE DADOS
    protected function connectDB()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=crud","root","");
            return $conn;
        } catch (PDOException $erro) {
           return $erro->getMessage();
        }
    }
}