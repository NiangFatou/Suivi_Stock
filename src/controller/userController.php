<?php
require_once "../model/UserModel.php";
if(isset($_POST['enregistrer'])){
    $prenom=$_POST['prenom']; 
    $nom=$_POST['nom'];
     $email=$_POST['email'];
     $password=$_POST['password'];
   

 $user = getuser($nom, $prenom,$email,$password);
     if($user->rowCount()!=0){
         header('location:accueil');

     }else{
        header('location:login'); 
     }

    }

    if(isset($_POST['save'])){
        $prenom=$_POST['prenom'];
        $nom=$_POST['nom'];
        $email=$_POST['email'];
        $password=$_POST['password'];
   
    $user = addUser($nom,$prenom,$email,$password);
        if($user){
            header('location:addUser');
   echo "User ajouter avec succes";
        }else{
           header('location:login'); 
        }
   
       }
       if(isset($_POST['editliste'])){
        
   
    
        
            header('location:editUser');
   
       
         
        
   
       }
    

    if(isset($_POST['allUser'])){
      header('location:allUser');
    
    }

    if(isset($_POST['supprimer'])){

        $id = $_POST['id'];
      
        supUser($id);
        header('location:allUser');
      
      }
      
      if(isset($_POST['editer'])){
      
        $id = $_POST['id'];
      
        header('location:edituser?id='.$id);
      
      }
      
      
      if(isset($_POST['edition'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $email=$_POST['password'];
        $id = $_POST['id'];
      
        updateUser($nom,$prenom,$email,$password,$id);
        header('location:allUser');
      
      }
?>