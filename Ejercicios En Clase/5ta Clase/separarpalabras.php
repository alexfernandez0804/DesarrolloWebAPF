<?php
$oracion="esta es una oracion";
?>

<ul>
    <?php
        $separado=explode(" ", $invertido);
        foreach($separado as $palabra){
            ?>
            <li><?php echo $palabra ?><li>
        <?php
        }
    ?>
</ul>

<?php
    $invertido="";
    for($i=1; $i<strlen($oracion); $i++){
        $invertido=substr($oracion,$i,1).$invertido;
    }
    echo $invertido;
    $separado=explode(" ", $invertido);
    echo implode("-",$separado );
?>