<?php
    require_once "db/establiments.php";

    $data = getEstabliments();
?>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Poblacio</th>
                <th>Telefon</th>
                <th>Acció</th>
            </tr>
        </thead>
        <tbody>
<?php
            foreach ($data as $restaurant) {
?>
            <tr>
                <td><?= $restaurant['nom'] ?></td>
                <td><?= $restaurant['poblacio'] ?></td>
                <td><?= $restaurant['telefon'] ?></td>
                <td> 
                <button type="button" class="btn btn-info">Veure</button>
                 </td>
            </tr>
<?php
            }
?>
        </tbody>
    </table>
