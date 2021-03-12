<?php
require_once 'db.php';
function addProduit($nom,$ref,$stock){
    $sql ="INSERT INTO produit values (NULL,'$nom','$ref','$stock') ";
    $con = getConnection();
    return $con->exec($sql);

}
function allProduit(){
    $sql ="SELECT * FROM produit";
    $con = getConnection();
    return $con->exec($sql);

}
function updateProduit($id,$nom,$ref,$stock){
$sql ="UPDATE Produit SET nom='$nom', ref='$ref', qtStock=$stock WHERE idp=$id";
    $con = getConnection();
    return $con->exec($sql);

}

function supProduit($id){
    $sql ="DELETE FROM Produit WHERE idp=$id";
        $con = getConnection();
        return $con->exec($sql);
    
    }
var_dump($con);
?>