<?php
require_once 'db.php';
function getuser($nom,$email){
    $sql="SELECT * FROM User WHERE nom='$nom' AND email='$email' ";
    $conn=getConnection();
    return $conn->query($sql);
}

    function addUser($nom,$prenom,$email,$password){
        $sql="INSERT INTO user values (NULL, '$nom','$prenom','$email','$password',0)";
        $conn=getConnection();
        return $conn->exec($sql);
    
    }
    
    function allUser(){
        $sql="SELECT *FROM user";
        $conn=getConnection();
        return $conn->query($sql)->fetchAll();
    }
    
    
    function getUsertById($id){
        $sql="SELECT *FROM user WHERE IdU=$id";
        $conn=getConnection();
        return $conn->query($sql);
    }
    
    
    function updateUser($nom,$prenom,$email,$password,$id){
    $sql="UPDATE user SET nom='$nom',prenom='$prenom',email='$email',password='$password' WHERE IdU=$id";
        $conn=getConnection();
        return $conn->exec($sql);
    }
    
    
    
    function supUser($id){
        $sql="DELETE  FROM user WHERE IdU=$id";
        $conn=getConnection();
        return $conn->query($sql);
    
    }
    

?>