<?php

class TriangleGenerator{
    public static function generateTriangle(int $altura): string {
        if ($altura < 0) {
            return "";
        }
        $triangulo = "";

        for ($i = 0; $i < $altura; $i++) {
            // Espacios en blanco para centrar los asteriscos
            $espacio = str_repeat("&nbsp;", $altura - $i - 1);
            // Cantidad de asteriscos
            $asterisco = str_repeat("*", 2 * $i + 1);
            
            // Agregar cada línea en un párrafo
            $triangulo .= "<p>" . $espacio . $asterisco. "</p>";
        }
    
        return $triangulo;
    }
}

