<?php
    class Actividad
    {
        public $idActividad;
        public $titulo;
        public $tipo=['labor'=>'' ,'tratamiento'=>''];
        public $descripcion;

        public function __constructor($id,$titu,$tip,$descrip)
        {
            $this->idActividad=$id;
            $this->titulo=$titu;
            $this->tipo=$tip;
            $this->descripcion=$descrip;
        }

    }
    

?>