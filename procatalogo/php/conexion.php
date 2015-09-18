<?php
$link = @mysqli_connect("localhost", "root", "1234", "dbcatalogo");
if($link){echo 'conectado';}else{echo 'error de conexion, verifique las credenciales de conexion.';die;};



//Consulta que devuelve los datos de las categorias
$sql = "SELECT * FROM `categorias`";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["idCategorias"]. " - Nombre Categoria: " . $row["Nombre"].
         "<br>";
    }
} else {
    echo "0 results";
}


$sql = "SELECT * FROM `productos`";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["idProductos"]. " - Nombre : " . $row["nombre"].  " - Precio : " . $row["precio"].  " - Descripcion : " . $row["descripcion"].
         "<br>";
    }
} else {
    echo "0 results";
}

$sql = "INSERT INTO categorias ( Nombre ) VALUES ( '{$link->real_escape_string($_POST['nombre'])}' )";
$insert = $link->query($sql);

?>
<form method="post" action ="">
	<input name="nombre" type ="text">
	<input type="submit" value = "Agregar Categoria">
</form>


