<?php 
require_once 'pessoa.php';
class PessoaJ extends Pessoa{
    private $cnpj;
    private $nomeFantasia;
    private $inscEstadual;

    public function PessoaJ(){

    }

    

    /**
     * Get the value of cnpj
     */ 
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     *
     * @return  self
     */ 
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get the value of nomeFantasia
     */ 
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * Set the value of nomeFantasia
     *
     * @return  self
     */ 
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Get the value of inscEstadual
     */ 
    public function getInscEstadual()
    {
        return $this->inscEstadual;
    }

    /**
     * Set the value of inscEstadual
     *
     * @return  self
     */ 
    public function setInscEstadual($inscEstadual)
    {
        $this->inscEstadual = $inscEstadual;

        return $this;
    }

    public function __toString()
    {
        $pes = "Pessoa Juridica: <br/>"
        . " - Nome: " . $this->getNome() . "<br/>"
        . " - Telefone: " . $this->getTelefone() . "<br/>"
        . " - E-mail: " . $this->getEmail() . "<br/>"
        . " - Endereço: " . $this->getEndereco() . "<br/>"
        . " - CNPJ: " . $this->getCnpj() . "<br/>"
        . " - Insc. Estadual: " . $this->getInscEstadual() . "<br/>"
        . " - Nome Fantasia: " . $this->getNomeFantasia() . "<br/>";
        return $pes;
    }
    
}
