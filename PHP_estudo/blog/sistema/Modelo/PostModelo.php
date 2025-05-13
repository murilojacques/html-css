<?php

namespace sistema\Modelo;

use sistema\Nucleo\Conexao;

class PostModelo
{

    public function busca(): array
    {
        $query = "SELECT * FROM posts WHERE status = 1";
        $stmt = Conexao::getInstancia()->query($query);
        $resultado = $stmt->fetchAll();
        // var_dump($resultado);
        // echo "<hr>";
        return $resultado;
    }

    public function pesquisa(string $texto): array
    {
        $query = "SELECT * FROM posts WHERE status = 1 AND titulo LIKE '%{$texto}%' ";
        $stmt = Conexao::getInstancia()->query($query);
        $resultado = $stmt->fetchAll();
        // var_dump($resultado);
        // echo "<hr>";
        return $resultado;
    }


    public function buscaPorId(int $id): bool | object{
        $query = "SELECT * FROM posts WHERE id = {$id}";
        $stmt = Conexao::getInstancia()->query($query);
        $resultado = $stmt->fetch();
        return $resultado;
    }
}
