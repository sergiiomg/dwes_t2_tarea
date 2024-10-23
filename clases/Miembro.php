<?php
    abstract class Miembro{
        #Atributos de la clase padre Miembro
        private int $id;
        private $nombre;
        private $apellidos;
        private $email;
        private int $edad;

        #Métodos de la clase padre Miembro

        //CONSTRUCTOR
        public function __construct($id, $nombre, $apellidos, $email, $edad){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->email = $email;
            $this->edad = $edad;
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
        public function getEdad(){
            return $this->edad;
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
        public function setEdad($edad) {
            $this->edad = $edad;
        }

        //TOSTRING
        public function tostring(){
            return $this->id ." ". $this->nombre . " " . $this->apellidos . " " . $this->email . " " . $this->edad;
        }
    }
