<?php
    require_once "db.php";

    function getEstabliments($filtre='') {
        global $conn;
        $data=[];
        $sql = "SELECT `id`, `nom`, `descripcio_cat`, `descripcio_esp`, `horari_cat`, `horari_esp`, 
            `poblacio`, `adreca`, `telefon`, `web`, `preu` FROM `establiment` WHERE UPPER(nom) like '%$filtre%'";
        $result = mysqli_query($conn, $sql);	// Podriem llegir tambe $result->num_rows
        while ($row = mysqli_fetch_array($result)) {
            $data[] = $row;  
        }
        mysqli_free_result($result);
        mysqli_close($conn);
        return $data;
    }

?>