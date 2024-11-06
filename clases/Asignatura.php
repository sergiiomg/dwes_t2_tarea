<?php
    class Asignatura{
        #Atributos de la clase Asignaturas
        private $id;
        public $nombre;
        private $creditos;

        #Métodos de la clase Asignatura
        public function __construct(int $id, string $nombre, int $creditos) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->creditos = $creditos;
        }
        public static function crearAsignaturasDeMuestra(): array {
            return [
                new Asignatura(1, "DWES", 7),
                new Asignatura(2, "DWEC", 6),
                new Asignatura(3, "DIW", 4),
                new Asignatura(4, "DAW", 4)
            ];
        }

        # GETTERS
        public function getId(): int {
            return $this->id;
        }

        public function getNombre(): string {
            return $this->nombre;
        }

        public function getCreditos(): int {
            return $this->creditos;
        }
    }