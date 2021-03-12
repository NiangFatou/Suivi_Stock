
<?php
 class User{
    private  $id;
    private  $nom;
    private  $prenom;
    private  $email;
    private  $password;
    private  $etat;
    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEtat(){
        return $this->etat;
    }
    public function SetId($id){
        $this->id=id;
    }
    public function SetNom($nom){
        $this->nom=nom;
    }
    public function SetPrenom($prenom){
        $this->prenom=prenom;
    }
    public function SetEmail($email){
        $this->email=email;
    }
    public function SetEtat($etat){
        $this->etat=etat;
    }
    
    
    
    
    
   

    

}
?>