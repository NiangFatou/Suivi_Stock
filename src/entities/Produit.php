
<?php
class Produit{
    private  $id;
    private $ref;
    private  $nom;
    private  $qtStock;
    public function getId(){
        return $this->id;
    }
    public function getRef(){
        return $this->ref;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getqtStock(){
        return $this->qtStock;
    }
    public function SetId($id){
        $this->id=id;
    }
    public function SetNom($nom){
        $this->nom=nom;
    }
    public function SetRef($ref){
        $this->ref=ref;
    }
    public function SetQtstock($qtStock){
        $this->qtStock=qtstock;
    }

}
?>