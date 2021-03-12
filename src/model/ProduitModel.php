<?php
require_once 'db.php';
function addProduit($nom,$ref,$QtStock,$idu){
    $sql="INSERT INTO produit values(NULL,'$nom','$ref',$QtStock,$idu)";
    $conn=getConnection();
    return $conn->exec($sql);
}



function allProduit(){
    $sql="SELECT *FROM Produit";
    $conn=getConnection();
    return $conn->query($sql);
}

function getProduitById($id){
    $sql="SELECT *FROM Produit WHERE IdP=$id";
    $conn=getConnection();
    return $conn->query($sql);
}


function updateProduit($nom,$ref,$Qstock,$id){
$sql="UPDATE Produit SET nom='$nom',ref='$ref',qtStock=$Qstock WHERE IdP=$id";
    $conn=getConnection();
    return $conn->exec($sql);
}



function supProduit($id){
    $sql="DELETE  FROM Produit WHERE IdP=$id";
    $conn=getConnection();
    return $conn->query($sql);

}


?>