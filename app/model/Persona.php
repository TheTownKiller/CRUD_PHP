<?php
/**
 * Created by PhpStorm.
 * User: mauricio
 * Date: 31/01/2018
 * Time: 11:41
 */

namespace Modelo;


    abstract class Persona implements Humano
    {
        private $nif;
        private $nombre;
        private $fecha;
        private $eCivil; //'S,C,D,A'
        private $altura; //entero cms.
        protected static $contador = 0;

        /**
         * Persona constructor.
         * @param $nif
         * @param $nombre
         * @param $fecha
         * @param $eCivil
         * @param $altura
         */

        public  function  __construct($nif, $nombre, $fecha, $eCivil, $altura){
            $this->nif = $nif;
            $this->nombre = $nombre;
            $this->fecha = $fecha;
            $this->eCivil = $eCivil;
            $this->altura = $altura;
        }

        public function __destruct()
        {
            self::$contador--;
        }

        /**
         * @return mixed
         */
        public function getNif()
        {
            return $this->nif;
        }

        /**
         * @param mixed $nif
         */
        public function setNif($nif): void
        {
            $this->nif = $nif;
        }

        /**
         * @return mixed
         */
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * @param mixed $nombre
         */
        public function setNombre($nombre): void
        {
            $this->nombre = $nombre;
        }

        /**
         * @return mixed
         */
        public function getFecha()
        {
            return $this->fecha;
        }

        /**
         * @param mixed $fecha
         */
        public function setFecha($fecha): void
        {
            $this->fecha = $fecha;
        }

        /**
         * @return mixed
         */
        public function getECivil()
        {
            return $this->eCivil;
        }

        /**
         * @param mixed $eCivil
         */
        public function setECivil($eCivil): void
        {
            $this->eCivil = $eCivil;
        }

        /**
         * @return mixed
         */
        public function getAltura()
        {
            return $this->altura;
        }

        /**
         * @param mixed $altura
         */
        public function setAltura($altura): void
        {
            $this->altura = $altura;
        }

        public function caminar($distancia)
        {
            // TODO: Implement caminar() method.
        }

        public function dormir($numHoras)
        {
            return ($numHoras >= 8);
        }


    }