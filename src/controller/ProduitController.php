
<?php
require_once "../model/ProduitModel.php";
if(isset($_POST['save'])){
     $nom=$_POST['nom'];
     $ref=$_POST['ref'];
     $QtStock=$_POST['QtStock'];
     
 $id = addProduit($nom, $ref,$QtStock,1);
    if($id)
   {
     header('location:addProduit');
    }else{
      header('location:login');

   }
}

if(isset($_POST['allProduit'])){
  header('location:allProduit');

}

if(isset($_POST['supprimer'])){

  $id = $_POST['id'];

  supProduit($id);
  header('location:allProduit');

}

if(isset($_POST['editer'])){

  $id = $_POST['id'];

  header('location:editproduit?id='.$id);

}


if(isset($_POST['edition'])){
  $nom=$_POST['nom'];
  $ref=$_POST['ref'];
  $QtStock=$_POST['QtStock'];
  $id = $_POST['id'];

  updateProduit($nom,$ref,$QtStock,$id);
  header('location:allProduit');

}


    
?>