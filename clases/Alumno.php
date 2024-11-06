<?php
    class Alumno extends Miembro{
        #Atributos de la clase hija Alumno
        private array $asignaturas;
        private bool $cursoAbonado;
        private int $edad;

        public function __construct($id, $nombre, $apellidos, $email, $edad){
            $this->edad = $edad;
        }

        #Métodos de la calse hija Alumno
        public function abonarCurso(): void {
            $this->cursoAbonado = true;
        }
        public function matricularseEnAsignatura($asignatura): void {
            foreach ($this->asignaturas as $asig) {
                if ($asig->getId() === $asignatura->getId()) {
                    echo "Ya estás matriculado en esta asignatura.\n";
                return;
                }
            }
            $this->asignaturas[] = $asignatura;
        }
        public function bajaEnAsignatura(){
            return "El alumno ha sido dado de baja en la asignatura.";
        }
        public function crearAlumnosDeMuestra(array $AlumnosDeMuestra){
            return $AlumnosDeMuestra = array(
                                new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 21),
                                new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25),
                                new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24),
                                new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23),
                                new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21),
                                new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26),
                                new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20),
                                new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22),
                                new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23),
                                new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24)
                            );
        }

        // Getter y Setter para edad
        public function getEdad(): int {
            return $this->edad;
        }

        public function setEdad(int $edad): void {
            $this->edad = $edad;
        }
    }