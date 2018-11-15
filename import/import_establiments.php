<?php
  require_once "../db/db.php";

  $xml = simplexml_load_file("../fitxers_dades/establiments.xml");

  foreach ($xml as $value) {
      //print_r($value->nom);
      echo "Important establiment '$value->nom'...<br>";
      $sql = "INSERT INTO establiment(nom, descripcio_cat, descripcio_esp, 
                horari_cat, horari_esp, poblacio, adreca, telefon, web, preu)
              VALUES('".mysqli_real_escape_string($conn,$value->nom)."',
                     '".mysqli_real_escape_string($conn,$value->descripcio->cat)."',
                     '".mysqli_real_escape_string($conn,$value->descripcio->esp)."',
                     '".mysqli_real_escape_string($conn,$value->horari->cat)."',
                     '".mysqli_real_escape_string($conn,$value->horari->esp)."',
                     '".mysqli_real_escape_string($conn,$value->contacte->poblacio)."',
                     '".mysqli_real_escape_string($conn,$value->contacte->adreca)."',
                     '".mysqli_real_escape_string($conn,$value->contacte->telefon)."',
                     '".mysqli_real_escape_string($conn,$value->contacte->web)."',
                     '".mysqli_real_escape_string($conn,$value->preu)."'
                     )";
      echo $sql;

      mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
    
      echo "<hr>";
  }
  echo "FI DE LA IMPORTACIÓ";

  mysqli_close($conn);
?>