<?php 

    namespace sistema\Nucleo;

    class Controlador{

        public function __construct(?string $tema = null)
        {
            echo "Foi iniciado: ".$tema;
        }

    }
?>