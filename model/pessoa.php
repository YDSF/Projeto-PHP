<?php 
class Pessoa {
    private $IdPessoa;
    private $nome;
    private $telefone;
    private $email;
    private $endereco;
    
    public function Pessoa(){

    }
     
    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */ 
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }
    

    /**
     * Get the value of IdPessoa
     */ 
    public function getIdPessoa()
    {
        return $this->IdPessoa;
    }

    /**
     * Set the value of IdPessoa
     *
     * @return  self
     */ 
    public function setIdPessoa($IdPessoa)
    {
        $this->IdPessoa = $IdPessoa;

        return $this;
    }
}
