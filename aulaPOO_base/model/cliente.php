<?php 
namespace App\Model;

class Cliente{
    private readonly ?int $id;
    private int $ddd, $telefone;
    private string $nome, $sobrenome;

    private function __construct(?int $id, string $nome, string $sobrenome, int $ddd,
     int $telefone){
        $this->id = $id;
        $this->nome= $nome;
        $this->sobrenome = $sobrenome;
        $this->ddd = $ddd;
        $this->telefone = $telefone;
    }

    public static function criarCliente(?int $id, ?string $nome, string $sobrenome = "",
     int $ddd = 0, int $telefone = 0): static{
        if($nome === null){
            throw new \Exception("nome do cliente é Obrigatorio", 1);
        }

        return new static($id, $nome, $sobrenome, $ddd, $telefone);
     }
    
     public function getId(): ?int{return $this->id;}
     public function getNome(): ?string{return $this->nome;}
     public function getSobrenome(): ?string{return $this->sobrenome;}
     public function getDdd(): ?int{return $this->ddd;}
     public function getTelefone(): ?int{return $this->telefone;}

     public function setNome(String $nome): void {$this->nome = $nome;}
     public function setSobrenome(String $sobrenome): void {$this->sobrenome = $sobrenome;}
     public function setDdd(int $ddd): void {$this->ddd = $ddd;}
     public function setTelefone(int $telefone): void {$this->telefone = $telefone;}


}

?>