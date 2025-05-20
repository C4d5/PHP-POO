<?php 
namespace App\Dal;

use App\Dal\Conn;
use App\Model\Cliente;

abstract class ClienteDao{
    public static function cadastrar(Cliente $cliente): int{
        try {
            $pdo = Conn::getConn();
            $stmt = $pdo->prepare("INSERT INTO clientes (nome, sobrenome, ddd, telefone) 
            VALUES (?, ?, ?, ?)");
            $stmt->execute(array(
                $cliente->getNome(),
                $cliente->getSobrenome(),
                $cliente->getDdd(),
                $cliente->getTelefone()
            ));
            return (int) $pdo->lastInsertId();
        } catch (\PDOException $e) {
            throw new \PDOException("Erro ao salvar Banco de Dados");
        }
    }
}