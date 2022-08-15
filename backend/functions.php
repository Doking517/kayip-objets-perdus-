<?php
require_once "dbconnect.php";

//all create's functions

//ok
function createPersonTnonAnonyme($nom_nano, $prenom_nano, $numero_nano)
{
    global $pdo;
    $req = $pdo->prepare("INSERT INTO personne_t_nano(nom_nano, prenom_nano, numero_nano) VALUES(?, ?, ?)");
    return $req->execute([$nom_nano, $prenom_nano, $numero_nano]);
}
//ok
function createObjet($nom_sur_objet, $date_trouv, $ville, $quartier, $photo, $id_person, $id_type_objet)
{
    global $pdo;
    $req = $pdo->prepare("INSERT INTO objets(nom_sur_objet,date_trouv,ville,quartier,photo,id_person,id_type_objet) VALUES(?, ?, ?, ?, ?, ?, ?)");
    return $req->execute([$nom_sur_objet, $date_trouv, $ville, $quartier, $photo, $id_person, $id_type_objet]);
}

//a function creating both object and person
// function createObjetAndPerson($nom_nano, $prenom_nano, $numero_nano,){
//     global $pdo;
// }

function getAllImages()
{
    global $pdo;
    $req = $pdo->prepare("SELECT photo FROM objets");
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);
}



//this part contains all the getAll functions



//ok
function getAllObjets()
{
    global $pdo;
    $req = $pdo->prepare("SELECT nom_sur_objet,date_trouv,ville,quartier,photo,id_person,id_type_objet FROM objets o 
    INNER JOIN type_objet tpo ON o.id_type_objet = tpo.id
    INNER JOIN personne_t_nano p ON p.id = o.id_person");
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);
}

//ok
function getAllPersonTnano()
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM personne_t_nano");
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);
}

//ok
function getAllTypeObjet()
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM type_objet");
    $req->execute();
    return $req->fetchAll(PDO::FETCH_OBJ);
}


// this part contains all the get item

//ok
function getOneObjet($id)
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM objets WHERE id=?");
    $req->execute([$id]);
    return $req->fetch(PDO::FETCH_OBJ);
}

//ok
function getOnePersonTnano($id)
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM personne_t_nano WHERE id=?");
    $req->execute([$id]);
    return $req->fetch(PDO::FETCH_OBJ);
}

//ok
function getOneTypeObjet($id)
{
    global $pdo;
    $req = $pdo->prepare("SELECT * FROM type_objet WHERE id=?");
    $req->execute([$id]);
    return $req->fetch(PDO::FETCH_OBJ);
}

// this part contains all the update functions


//ok
function updatePersonTnonAnonyme($id, $nom_nano, $prenom_nano, $numero_nano)
{
    global $pdo;
    $req = $pdo->prepare("UPDATE personne_t_nano SET nom_nano='$nom_nano',prenom_nano='$prenom_nano',numero_nano='$numero_nano' WHERE id='$id'");
    return $req->execute([$id, $nom_nano, $prenom_nano, $numero_nano]);
}

// function updateTypeObjet($id,$nom_type_objet, $date_trouv, $ville, $quartier, $photo){
//     global $pdo;
//     $req = $pdo->prepare("UPDATE  type_objet SET nom_type_objet='$nom_type_objet',date_trouv='$date_trouv',ville='$ville',quartier='$quartier',photo='$photo' WHERE id='$id'");
//     return $req->execute([ $id,$nom_type_objet, $date_trouv, $ville, $quartier, $photo]);
// }
