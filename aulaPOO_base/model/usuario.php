<?php 

class Usuario{
    private $id, $email, $senha;

    public function __construct($id="", $email="", $senha="")
    {
        $this->id = $id;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function __get ($nomeAtributo){
        return $this->$nomeAtributo;
    }

    public function __set($nomeAtributo, $valor){
        $this->$nomeAtributo = $valor;
        
    }
}
?>