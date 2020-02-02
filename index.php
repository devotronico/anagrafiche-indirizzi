<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/gh/mobius1/selectr@latest/dist/selectr.min.css" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/gh/mobius1/selectr@latest/dist/selectr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Anagrafiche Indirizzi</title>
</head>
<div class="container">
<?php
require 'src/conn.php';
$soggetto = 'clienti';
// if (isset($_GET['soggetto'])) { $soggetto = $_GET['soggetto'] === 'fornitori' ? $_GET['soggetto'] : 'clienti'; }
// $idSoggetto = 12;
// if (isset($_GET['id'])) { $idSoggetto = $_GET['id'] ? $_GET['soggetto'] : 12; }
// $sql = "SELECT * FROM $soggetto WHERE id = $idSoggetto";
// if (!$result = $conn->query($sql)) { die('KO-1'); }
// $row = $result->fetch_assoc();
// echo '<pre>';print_r($row);echo '</pre>';
// $row_count = $result->num_rows;
// if ($result->num_rows == 0) { die('Il cliente con id ' . $idSoggetto . ' non esiste'); }
?>
<!-- <CLIENTI> -->
<div id="clienti" class="wrapper wrapper-1">
<!-- <CLIENTI-EDIT> -->
<table id="clienti-table">
<tbody>
<tr>
    <th class="bg-color-1"><p class="txt-color-1">Cliente</p></th>
    <td colspan="5" class="bg-color-2">
    <select id="select-clienti">
        <option value="0">Seleziona un Cliente</option>
        <?php
        $sql = "SELECT `id`, `nome`, `cognome` FROM `clienti`";
        $res = $conn->query($sql);
        while ($row = $res->fetch_assoc()) {
            $id = $row['id'];
            $nome = $row['nome'];
            $cognome = $row['cognome'];
            $anagrafica = $nome . ' - ' . $cognome;
            print '<option value="' . $id . '">' . $anagrafica . '</option>';
        }
        ?>
    </select>
    </td>
</tr>
<tr>
    <th class="bg-color-1"><p class="txt-color-1">Id</p></th>
    <td class="bg-color-2"><input type="text" class="cliente-form-element cliente-input" name="id" id="id" readonly disabled></td>
    <th class="bg-color-1"><p class="txt-color-1">Nome</p></th>
    <td class="bg-color-2"><input type="text" class="cliente-form-element cliente-input" name="nome" id="nome" pattern="[\x00-\xFF]{2,50}" required readonly disabled></td>
    <th class="bg-color-1"><p class="txt-color-1">Cognome</p></th>
    <td class="bg-color-2"><input type="text" class="cliente-form-element cliente-input" name="cognome" id="cognome" pattern="[\x00-\xFF]{2,50}" required readonly disabled></td>
</tr>
<tr>
    <th class="bg-color-1"><p class="txt-color-1">Genere</p></th>
    <td class="bg-color-2">
        <select type="text" class="cliente-form-element" name="genere" id="genere" required disabled>
            <option value="-1"></option>
            <option value="m">maschio</option>
            <option value="f">femmina</option>
        </td>
    <th class="bg-color-1"><p class="txt-color-1">C. Fiscale</p></th>
    <td class="bg-color-2"><input type="text" class="cliente-form-element cliente-input" name="c_fiscale" id="c_fiscale" pattern="[a-zA-Z0-9]{11,16}" readonly disabled></td>
    <th class="bg-color-1"><p class="txt-color-1">P. Iva</p></th>
    <td class="bg-color-2"><input type="text" class="cliente-form-element cliente-input" name="p_iva" id="p_iva" pattern="[0-9]{11}" readonly disabled></td>
</tr>
<tr>
    <th class="bg-color-1"><p class="txt-color-1">Telefono</p></th>
    <td class="bg-color-2"><input type="text" class="cliente-form-element cliente-input" name="tel" id="tel" pattern="[\x00-\x7F]{2,50}" required readonly disabled></td>
    <th class="bg-color-1"><p class="txt-color-1">Email</p></th>
    <td class="bg-color-2"><input type="text" class="cliente-form-element cliente-input" name="email" id="email" pattern=".+@.+[.]+.+" readonly disabled></td>
    <th class="bg-color-1"><p class="txt-color-1">Facebook</p></th>
    <td class="bg-color-2"><input type="text" class="cliente-form-element cliente-input" name="facebook" id="facebook" pattern="[\x00-\xFF]{2,50}" readonly disabled></td>
</tr>
</tbody>
</table>
<!-- </CLIENTI-EDIT> -->
</div>
<!-- </CLIENTI> -->
<?php
    require 'address-list.php';
    require 'cards.php';
?>
</div>
<script type="module" src="js/index.js"></script>
</body>
</html>