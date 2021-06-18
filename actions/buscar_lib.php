<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "library";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT id_libro, titulo, status, Nombre_au, apellido_au, Nombre_edi FROM libros, autor, editorial WHERE titulo NOT LIKE '' && id_autor=auto && id_edi=edi ORDER By id_libro LIMIT 25";
    
    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
        $query = "SELECT id_libro, titulo, status, Nombre_au, apellido_au, Nombre_edi FROM libros, autor, editorial WHERE titulo LIKE '%$q%' && id_autor=auto && id_edi=edi OR status LIKE '%$q%' && id_autor=auto && id_edi=edi";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>ID LIBRO</td>
    					<td>Titulo</td>
						<td colspan=2>AUTOR</td>
                        <td>EDITORIAL</td>
                        <td>Estado</td>
    				</tr>
    			</thead>   			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['id_libro']."</td>
                        <td>".$fila['titulo']."</td>                        
                        <td>".$fila['Nombre_au']."</td>				
                        <td>".$fila['apellido_au']."</td>
                        <td>".$fila['Nombre_edi']."</td>
                        <td>".$fila['status']."</td>	
    				</tr>";
    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }
    echo $salida;
    $conn->close();
?>