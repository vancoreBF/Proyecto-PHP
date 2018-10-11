 <?php   
    class Agricultor
    {

        public $dni;
        public $nombre;
        public $ape1;
        public $ape2;
        public $email;


        public function __constructor($dni, $nomb, $ap1, $ap2, $email)
        {
            $this->dni=dni;
            $this->nombre=nomb;
            $this->ape1=ap1;
            $this->ape2=ap2;
            $this->email=email;

        }


    }
?>