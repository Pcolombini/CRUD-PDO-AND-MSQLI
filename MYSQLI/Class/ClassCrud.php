<?php

class ClassCrud extends ClassConexao
{
    private $crud;
    private $contador;
    private $resultado;

    private function preparedStatements($query, $tipos, $parametros)
    {
        $this->countParametros($parametros);

        $conn = $this->connectDB();
        $this->crud = $conn->prepare($query);

        if ($this->contador > 0) {

            $callParametros = array();

            foreach ($parametros as $key => $parametros) {

                $callParametros[$key] = &$parametros[$key];

            }

            array_unshift($callParametros, $tipos);
            call_user_func_array(array($this->crud, 'bind_param'), $callParametros);
        }

        $this->crud->execute();
        $this->resultado = $this->crud->get_result();
    }

    private function countParametros($parametros)
    {
        $this->contador = count($parametros);
    }

    // MÉTODO DE INSERÇÃO
    public function insertDB($tabela, $condicao, $tipos, $parametros)
    {
        $this->preparedStatements("insert into {$tabela} values ({$condicao})", $tipos, $parametros);
        return $this->crud;
    }

}
