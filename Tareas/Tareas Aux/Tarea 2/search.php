<?php
include 'conexion.php';
$prompt = $_GET['prompt'];

//$books = [
  //  'El señor de los anillos',
  //  'Harry Potter',
  //  'Cien años de soledad',
  //  'El principito',
//];


    $sql = "SELECT id, titulo, autor, anio FROM libros";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $books = [];


    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }


    foreach ($books as $key => $book) {
        if (strpos(strtolower($book['titulo']), strtolower($prompt)) === false) {
            unset($books[$key]);
        }    
    }

    $books = array_values($books);
    
echo json_encode($books);

$stmt->close();
$con->close();

?>