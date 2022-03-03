<?php

class li
{
    private $css;
    private $conteudo;

    public function __construct($class, $conteudo)
    {
        $this->css = $class;
        $this->conteudo = $conteudo;
    }

    public function __toString()
    {
        return "<li class=\"{$this->css}\">{$this->conteudo}</li>";
    }
}