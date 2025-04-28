<?php

namespace sistema\Nucleo;

class Mensagem
{
    private $texto;
    private $css;


    public function getTexto()
    {
        return $this->texto;
    }
    public function setTexto(string $texto)
    {
        $this->texto = $texto;
    }

    public function getCss()
    {
        return $this->css;
    }
    public function setCss(string $css)
    {
        $this->css = $css;
    }



    public function renderizar()
    {
        return "<div class='{$this->getCss()}'>{$this->getTexto()}</div>";
    }

    private function filtrar(string $mensagem): string
    {
        return filter_var(strip_tags($mensagem), FILTER_SANITIZE_SPECIAL_CHARS);
    }


    public function sucesso(string $mensagem): Mensagem
    {
        $this->setCss("alert alert-success");
        $this->setTexto($this->filtrar($mensagem));
        return $this;
    }

    public function erro(string $mensagem): Mensagem
    {
        $this->setCss("alert alert-danger");
        $this->setTexto($this->filtrar($mensagem));
        return $this;
    }

    public function alerta(string $mensagem): Mensagem
    {
        $this->setCss("alert alert-warning");
        $this->setTexto($this->filtrar($mensagem));
        return $this;
    }

    public function informa(string $mensagem): Mensagem
    {
        $this->setCss("alert alert-primary");
        $this->setTexto($this->filtrar($mensagem));
        return $this;
    }


    public function __toString()
    {
        return $this->renderizar();
    }
}
