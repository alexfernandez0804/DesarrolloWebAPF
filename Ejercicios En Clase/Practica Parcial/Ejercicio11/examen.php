<?php

class Examen {
    private $cadena1;
    private $cadena2;

    public function __construct($cadena1, $cadena2){
        $this->cadena1= $cadena1;
        $this->cadena2= $cadena2;
        
    }

    public function cruzar(){
        $encontro = false;
        for($i=0; $i<strlen($this->cadena1); $i++){
            for($j=0; $j<strlen($this->cadena2); $i++){
                if ($this-> cadena1[$i]==$this->cadena2[$j]){
                    $encontro = true;
                    $auxii=$i;
                    $auxij=$j;
                }
            }
        }

        echo $this->cadena1."<br>";
        echo $this->cadena2."<br>";
        echo "cadena en su posicion $i coincide con cadena 2 en su posicion $j";

        if($encontro){
            echo "no existen letras comunes";
            return;
        }
        ?>


        <table>
            <?php for($i=0; $i<strlen($this->cadena1); $i++){
                echo "<tr>";
                for($j=0; $i<strlen($this->cadena2); $j++){
                    echo "<td class="celda"> &nbsp; </td>"
                }
                echo "</tr>";
            }?>
        </table>
        <?php
    }

}
?>