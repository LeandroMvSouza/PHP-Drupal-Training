<?php

class pessoa
{
    private $nome;

    private $sexo;

    private $idade;

    public function __construct (string $nome, string $sexo, int $idade)
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
    }

    public function fazerAniversario () 
    {
        $this->idade += 1;
    }

    // SETTER'S :

    /**
     * @param string
     */
    public function setNome ($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param string
     */
    public function setSexo ($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @param int
     */
    public function setIdade ($idade)
    {
        $this->idade = $idade;
    }

    // GETTER'S :

    /**
     * @return string
     */
    public function getNome ()
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getSexo ()
    {
        return $this->sexo;
    }

    /**
     * @return int
     */
    public function getIdade ()
    {
        return $this->idade;
    }
}