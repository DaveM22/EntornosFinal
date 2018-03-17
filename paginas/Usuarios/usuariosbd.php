<?php

$con = mysqli_connect("localhost","root","123","EntornosFinal");


$query = "SELECT * FROM USUARIOS";
$resultado = mysqli_query($con,$query);
    
if (mysqli_num_rows($resultado) > 0) {
    // output data of each row
    echo '
    <table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Clave</th>
            <th>Mail</th>
        </tr>
    </thead>';
     while($row = mysqli_fetch_assoc($resultado)) {
        echo ' <tbody>
        <tr>
            <td>'.$row["id"].'</td>
            <td>'.$row["nombre"].'</td>
            <td></td>
            <td>'.$row["mail"].'</td>
        </tr>
        </tbody>
        ';
    }
    echo '</table>';
    
    

 
} else {
    echo "0 results";
}


?>