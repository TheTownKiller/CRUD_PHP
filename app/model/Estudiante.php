<?php
/**
 * Created by PhpStorm.
 * User: emman
 * Date: 14/01/2019
 * Time: 12:21
 */

namespace Modelo;
include("Persona.php");


class Estudiante extends Persona
{

    private $idGrupo;
    private $fecha_matricula; //aaaa-mm-dd
    private static $contadorE = 0;

    public function __construct($nif, $nombre, $fecha, $eCivil, $altura, $idGrupo, $fecha_matricula)
    {
        parent::__construct($nif, $nombre, $fecha, $eCivil, $altura);
        $this->idGrupo = $idGrupo;
        $this->fecha_matricula = $fecha_matricula;
        self::$contadorE++;
    }

}