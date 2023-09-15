<?php 

abstract class ClassConexao
{
    // REALIZARÁ A CONEXÃO COM O BANCO DE DADOS
    protected function connectDB()
    {
        try {
            $conn = new mysqli("localhost","root","","crud");
            return $conn;
        } catch (Exception $erro) {
           return $erro->getMessage();
        }
    }
}