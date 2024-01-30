<?php

    namespace app\image;
    class Resize{
        //Guardar a imagem gerada pela biblioteca
        private $image;
        

        //Salvar o tipo do aqrquivo
        private $type;

        // Carregando os dados da classe
        public function __construct($file){
            //imagem
            $this->image = \imagecreatefromstring(file_get_contents($file));
        
            //Recebendo as informações da imagem com a função pathinfo
            $info = pathinfo($file);
            
            $this->type = $info['extension'] == 'jpg' ? 'jpeg' : $info['extension'];
        
        }

        //Imprimindo a imagem na tela
        public function print($quality = 100){
            header('Content-Type: image/' .$this->type);
            imagejpeg($this->image, null, $quality);
            exit;
        }

    }


?>