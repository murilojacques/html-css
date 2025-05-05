<?php

namespace sistema\Modelo;

use sistema\Nucleo\Conexao;

class CategoriaModelo
{

    public function busca(): array
    {
        $query = "SELECT * FROM categorias WHERE status = 1";
        $stmt = Conexao::getInstancia()->query($query);
        $resultado = $stmt->fetchAll();
        // var_dump($resultado);
        // echo "<hr>";
        return $resultado;
    }



    public function buscaPorId(int $id): bool | object{
        $query = "SELECT * FROM categorias WHERE id = {$id}";
        $stmt = Conexao::getInstancia()->query($query);
        $resultado = $stmt->fetch();
        return $resultado;
    }



    public function posts(int $id): array
    {
        $query = "SELECT * FROM posts WHERE status = 1 AND categoria_id={$id}";
        $stmt = Conexao::getInstancia()->query($query);
        $resultado = $stmt->fetchAll();
        //var_dump($resultado);
        // echo "<hr>";
        return $resultado;
    }
}
