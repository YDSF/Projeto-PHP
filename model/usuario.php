<?php

class Usuario
{
    private $IdUsuario;
    private $NomeUsuario;
    private $Usuario;
    private $Senha;



    /**
     * Get the value of IdUsuario
     */
    public function getIdUsuario()
    {
        return $this->IdUsuario;
    }

    /**
     * Set the value of IdUsuario
     *
     * @return  self
     */
    public function setIdUsuario($IdUsuario)
    {
        $this->IdUsuario = $IdUsuario;

        return $this;
    }

    /**
     * Get the value of NomeUsuario
     */
    public function getNomeUsuario()
    {
        return $this->NomeUsuario;
    }

    /**
     * Set the value of NomeUsuario
     *
     * @return  self
     */
    public function setNomeUsuario($NomeUsuario)
    {
        $this->NomeUsuario = $NomeUsuario;

        return $this;
    }

    /**
     * Get the value of Usuario
     */
    public function getUsuario()
    {
        return $this->Usuario;
    }

    /**
     * Set the value of Usuario
     *
     * @return  self
     */
    public function setUsuario($Usuario)
    {
        $this->Usuario = $Usuario;

        return $this;
    }

    /**
     * Get the value of Senha
     */
    public function getSenha()
    {
        return $this->Senha;
    }

    /**
     * Set the value of Senha
     *
     * @return  self
     */
    public function setSenha($Senha)
    {
        $this->Senha = $Senha;

        return $this;
    }

    public function __toString()
    {
        $User = "Usuário:<br/>"
            . " - Nome Usuário: " . $this->getNomeUsuario() . "<br/>"
            . " - Usuário: " . $this->getUsuario() . "<br/>";

        return $User;
    }
}
