<?php
        $servername = "localhost";
        $username = "root";
        $passoword = "";
        $database = "fseletro";

        $conn = mysqli_connect($servername,$username,$passoword, $database);
        
         if (!$conn) {
             die("deu ruim". mysqli_connect_error());
         }

         setlocale(LC_MONETARY, 'pt_BR');

    $sql = "select * from $mensagemok";
    $result = $conn->query($sql);

   echo  json_encode( $result->fetch_all(MYSQLI_ASSOC), true);

   mysqli_close($conn);
          
?>