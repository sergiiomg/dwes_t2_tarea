<?php
    class Profesor extends Miembro {
        #Atributos de la clase Profesor
        private bool $titular = false;
        private string $asignatura;

        public function __construct(int $id, string $nombre, string $apellidos, string $email, string $asignatura) {
            $this->asignatura = $asignatura;
        }

        #Métodos de la clase profesor
        public static function crearProfesoresDeMuestra(): array {
            return [
                new Profesor(1, "Steve", "Wozniak", "steve@apple.com", "DWES"),
                new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", "DIW"),
                new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", "DWEC"),
                new Profesor(4, "Rasmus", "Lerdoff", "rasmus@php.com", "DAW")
            ];
        }

        # Getter y Setter para titular
        public function isTitular(): bool {
            return $this->titular;
        }

        public function setTitular(bool $titular): void {
            $this->titular = $titular;
        }

        # Getter para asignatura
        public function getAsignatura(): string {
            return $this->asignatura;
        }
    }