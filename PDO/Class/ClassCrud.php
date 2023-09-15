<?php 

class ClassCrud extends ClassConexao
{
    private $crud;
    private $contador;

    // PREPARAÇÕES DECLARATIVAS
    private function preparedStatements($query, $parametros)
    {
        $this->countParamentros($parametros);
        $this->crud = $this->connectDB()->prepare($query);
        
        if ($this->contador > 0) {
            for ($i = 1; $i <= $this->contador; $i++) {

                $this->crud->bindValue($i,$parametros[$i - 1]);

            }
        }

        $this->crud->execute();
    }

    // CONTADOR DE PARAMETROS
    private function countParamentros($parametros)
    {
        $this->contador = count($parametros);
    }
}
