<?php
    abstract class Miembro{
        #Atributos de la clase padre Miembro
        private int $id;
        private $nombre;
        private $apellidos;
        private $email;

        #Métodos de la clase padre Miembro

        //CONSTRUCTOR
        public function __construct($id, $nombre, $apellidos, $email){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->email = $email;
        }

        //GETTERS
        public function getId(){
            return $this->id;
        }
        public function getNom(){
            return $this->nombre;
        }
        public function getApellidos(){
            return $this->apellidos;
        }
        public function getEmail(){
            return $this->email;
        }

        //SETTERS
        public function setId($id){
            $this->id = $id;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        public function setApellidos($apellidos) {
            $this->apellidos = $apellidos;
        }
        public function setEmail($email) {
            $this->email = $email;
        }

        //TOSTRING
        public function tostring(){
            return "Id: " . $this->id ." Nombre: ". $this->nombre . " Apellido: " . $this->apellidos . " email: " . $this->email;
        }
    }
