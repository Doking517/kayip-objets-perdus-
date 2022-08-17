<?php
require_once "./backend/functions.php";
require_once "./backend/dbconnect.php";

// require_once "./functions.php";
// require_once "./dbconnect.php";
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
$nom_nano = isset($_REQUEST['nom_nano']) ? $_REQUEST['nom_nano'] : '';
$prenom_nano = isset($_REQUEST['prenom_nano']) ? $_REQUEST['prenom_nano'] : '';
$numero_nano = isset($_REQUEST['numero_nano']) ? $_REQUEST['numero_nano'] : '';
$ville = isset($_REQUEST['ville']) ? $_REQUEST['ville'] : '';
$nom_sur_objet = isset($_REQUEST['nom_sur_objet']) ? $_REQUEST['nom_sur_objet'] : '';
// $id_person = isset($_REQUEST['id_person']) ? $_REQUEST['id_person'] : '';
$quartier = isset($_REQUEST['quartier']) ? $_REQUEST['quartier'] : '';
$date_trouv = isset($_REQUEST['date_trouv']) ? $_REQUEST['date_trouv'] : '';
$id_type_objet = isset($_REQUEST['id_type_objet']) ? $_REQUEST['id_type_objet'] : '';
// $nom_type_objet = isset($_REQUEST['nom_type_objet']) ? $_REQUEST['nom_type_objet'] : '';

$photo = isset($_FILES["file"]["name"]) ? $_FILES["file"]["name"] : '';

$form_action = "add";
$targetDir = "uploads/";
$fileName = isset($_FILES["file"]["name"]) ? basename($_FILES["file"]["name"]) : '';
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


$obj_t_nano = (object)['id' => -1, 'nom_nano' => '', 'prenom_nano' => '', 'numero_nano' => '', 'date_trouv' => '', 'ville' => '', 'quartier' => '', 'photo' => '', 'nom_sur_objet' => '', 'id_type_objet' => '', 'id_person' => ''];


switch ($action) {
    case "add":
        if (!empty($nom_nano) && !empty($prenom_nano) && !empty($nom_sur_objet) && !empty($numero_nano) && !empty($ville) && !empty($quartier) && !empty($date_trouv)  && !empty($photo) && !empty($id_type_objet)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                try {
                    $pdo->beginTransaction();
                    createPersonTnonAnonyme($nom_nano, $prenom_nano, $numero_nano);
                    $id_person = $pdo->lastInsertId();
                    createObjet($nom_sur_objet, $date_trouv, $ville, $quartier, $fileName, $id_person, $id_type_objet);
                    $pdo->commit();
                } catch (Exception $e) {
                    echo $e;
                }
            }
        }
        break;
}


$TypeObjects = getAllTypeObjet();
$allObjects = getAllObjets();
