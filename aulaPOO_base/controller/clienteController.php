<?php 
namespace App\Controller;

use App\Util\Functions as Util;
use App\Model\Cliente;
use App\Dal\ClienteDao;

abstract class ClienteController{
    public static ?string $msg = null;

    public static function cadastrar(): void{
        if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["nome"])){
            [$nome, $sobrenome, $ddd, $telefone] = array_map(
                [Util::class, "preparaTexto"], array_values($_POST)

            );
        }
        try {
            $cliente = Cliente::criarCliente(null, $nome, $sobrenome, (int) $ddd, (int) $telefone);

            $id = ClienteDao::cadastrar($cliente);
            header("Location: ?p=cad");
        } catch (\Exception $e) {
            self::$msg = $e->getMessage();
        }
    }
}