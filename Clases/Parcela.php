<?php

    class Parcela
    {
        public $idParcela;
        public $nombre;
        public $numParcela;
        public $numPoligono;
        public $numOlivos;


        public function __constructor($id, $nomb, $numParce, $numPoli, $numOli)
        {
            $this->idParcela=$id;
            $this->nombre=$nomb;
            $this->numParcela=$numParce;
            $this->numPoligono=$numPoli;
            $this->numOlivos=$numOli;
        }
    }


?>




