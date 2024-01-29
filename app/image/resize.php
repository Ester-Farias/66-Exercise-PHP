<?php

    namespace App\Image;
    class Resize{
        //Guardar a imagem gerada pela biblioteca
        private $image;
        

        //Salvar o tipo do aqrquivo
        private $type;

        // Carregando os dados da classe
        public function __construct($file){
            //imagem
            $this->image = imagecreatefromstring(file_get_contents($file));
        }

    }


?>