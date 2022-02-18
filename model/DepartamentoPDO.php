<?php

class DepartamentoPDO {

    /**
     * Metodo buscarDepartamentosPorCod
     * 
     * Metodo que nos sirve para buscar un departamento mediante el codigo del departamento en la base de datos
     * 
     * @param string $codDepartamento Codigo del departamento
     * @return boolean|\Departamento Si existe, un objeto con el contenido del departamento, si no existe false
     */
    public static function buscarDepartamentosPorCod($codDepartamento) {
        //Consulta SQL para validar si el codigo de departamento existe
        $consultaBuscarDepartamento = <<<CONSULTA
            SELECT * FROM T02_Departamento WHERE T02_CodDepartamento='{$codDepartamento}';
        CONSULTA;

        $oResultado = DBPDO::ejecutarConsulta($consultaBuscarDepartamento);
        $oResultado = $oResultado->fetchObject();

        if ($oResultado) {
            return new Departamento(
                    $oResultado->T02_CodDepartamento,
                    $oResultado->T02_DescDepartamento,
                    $oResultado->T02_FechaCreacionDepartamento,
                    $oResultado->T02_VolumenDeNegocio
            );
        } else {
            return false;
        }
    }

    public static function buscaDepartamentosPorDesc($descDepartamento = '') {
        $aRespuesta = [];
        //Consulta SQL para validar si la descripcion del departamento existe
        $consultaBuscarDepartamentoDesc = <<<CONSULTA
            SELECT * FROM T02_Departamento WHERE T02_DescDepartamento LIKE '%{$descDepartamento}%';
        CONSULTA;

        $oResultado = DBPDO::ejecutarConsulta($consultaBuscarDepartamentoDesc);
        $aDepartamentos = $oResultado->fetchAll();

        if ($aDepartamentos) {
            foreach ($aDepartamentos as $oDepartamento) {
                $aRespuesta[$oDepartamento['T02_CodDepartamento']] = new Departamento(
                        $oDepartamento['T02_CodDepartamento'],
                        $oDepartamento['T02_DescDepartamento'],
                        $oDepartamento['T02_FechaCreacionDepartamento'],
                        $oDepartamento['T02_VolumenDeNegocio'],
                        $oDepartamento['T02_FechaBajaDepartamento']
                );
            }
            return $aRespuesta;
        } else {
            return false;
        }
    }

}
