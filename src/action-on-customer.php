<?php
// http://localhost/workspace/indirizzi/src/action-on-customer.php // DEBUG
header('Content-Type: application/json; charset=utf-8');
// header("Content-type: application/json");
// echo '<pre>';print_r($_POST);echo '</pre>'; die;// DEBUG

$file = basename(__FILE__);

if (!isset($_POST)) { die('{ "status": "error", "error": "http", "file": "' . $file . '", "line": "'.__LINE__.'", "mess": "metodo request errato o assente"}'); }
if (empty($_POST)) { die('{ "status": "error", "error": "http", "file": "' . $file . '", "line": "'.__LINE__.'", "mess": "metodo POST vuoto"}'); }
if (!filter_has_var(INPUT_POST, 'data')) { die('{ "status": "error", "error": "http", "file": "' . $file . '", "line": "'.__LINE__.'", "mess": "metodo POST con indice data non trovata"}'); }


require 'conn.php';

$str = $_POST['data'];
$obj = json_decode($str);
$action = $obj->action;

// id, principale, cliente_id, indirizzo, via, civico, cap, comune, provincia

// $action = 'clienti'; $id = 1; // DEBUG
switch ($action) {
case 'update':
$idCliente = $obj->idCliente;
$genere = $obj->genere;
$nome = $obj->nome;
$cognome = $obj->cognome;
$c_fiscale = $obj->c_fiscale;
$p_iva = $obj->p_iva;
$tel = $obj->tel;
$email = $obj->email;

$sql = "UPDATE `clienti` SET `genere` = '$genere', `nome`= '$nome', `cognome` = '$cognome', `c_fiscale` = '$c_fiscale', `p_iva` = '$p_iva', `tel` = '$tel', `email` = '$email' WHERE `id` = '$idCliente'";
if (!$result = $conn->query($sql)) { die('{"status":"KO","case":"update", "mysql":"UPDATE"}'); }
die('{"idCliente":"' . $idCliente . '", "genere":"' . $genere . '", "nome":"' . $nome . '", "cognome":"' . $cognome . '", "c_fiscale":"' . $c_fiscale . '", "p_iva":"' . $p_iva . '", "tel":"' . $tel . '", "email":"' . $email . '"}');
break;

case 'select-single': // NON UTILIZZATO
// $idCliente = $obj->idCliente;
// $sql = "SELECT `id`, `nome`, `cognome` FROM `clienti` WHERE `id` = '$idCliente'";
// $res = $conn->query($sql);
// $row = $res->fetch_assoc();
// $data[] = array('value' => $row['id'], 'text' => $row['nome'] . ' - ' . $row['cognome']);
// die(JSON_encode($data));
break;

case 'select-all': // NON UTILIZZATO 
// $data[] = array('value' => 0, 'text' => 'Seleziona un Cliente');
// $sql = "SELECT `id`, `nome`, `cognome` FROM `clienti`";
// $res = $conn->query($sql);
// while ($row = $res->fetch_assoc()) {
//     $data[] = array('value' => $row['id'], 'text' => $row['nome'] . ' - ' . $row['cognome']);
// }
// die(JSON_encode($data));
break;

case 'delete':
$idAddress = $obj->idAddress;
$sql = "DELETE FROM `indirizzi` WHERE `id` = '$idAddress'";
if (!$result = $conn->query($sql)) { die('{"status":"KO","case":"delete", "mysql":"DELETE"}'); }
die('{"status":"OK","case":"delete"}');
break;

default:
die('{"status":"ERROR","case":"caso non previsto"}');
    break;
}

