<?php
require_once 'pessoa.php';
class PessoaF extends Pessoa{
    private $cpf;
    private $rg;
    private $sexo;
    
    public function PessoaF(){

    }
    

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of rg
     */ 
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set the value of rg
     *
     * @return  self
     */ 
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */ 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function __toString()
    {
        $pes = "Pessoa Física: <br/>"
        . " - Nome: " . $this->getNome() . "<br/>"
        . " - Telefone: " . $this->getTelefone() . "<br/>"
        . " - E-mail: " . $this->getEmail() . "<br/>"
        . " - Endereço: " . $this->getEndereco() . "<br/>"
        . " - CPF: " . $this->getCpf() . "<br/>"
        . " - RG: " . $this->getRg() . "<br/>"
        . " - Sexo: " . $this->getSexo() . "<br/>";
        return $pes;
    }


    
}

?>