<?php

namespace App;

class People
{
    protected $name;
    protected $second_name;
    protected $type_people; /**TRUE é fisica e False é juridica */
    protected $email;
    protected $cpf;
    protected $cnpj;
    protected $active;

    public function __construct(
        string $name,
        string $second_name,
        bool $type_people,
        string $email,
        string $cpf = "",
        string $cnpj = "",
        bool $active = true
    ) {
        $this->name = $name;
        $this->second_name = $second_name;
        $this->type_people = $type_people;
        $this->email = $email;
        
        if ($type_people) {
            $this->cpf = $cpf;
        } else {
            $this->cnpj = $cnpj;
        }
        
        $this->active = $active;
    }

    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    private function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of second_name
     */ 
    public function getSecond_name()
    {
        return $this->second_name;
    }

    /**
     * Set the value of second_name
     *
     * @return  self
     */ 
    private function setSecond_name($second_name)
    {
        $this->second_name = $second_name;

        return $this;
    }

    /**
     * Get the value of type_people
     */ 
    public function getType_people()
    {
        return $this->type_people;
    }

    /**
     * Set the value of type_people
     *
     * @return  self
     */ 
    private function setType_people($type_people)
    {
        $this->type_people = $type_people;

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
    private function setEmail($email)
    {
        $this->email = $email;

        return $this;
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
    private function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
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
    private function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get the value of active
     */ 
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set the value of active
     *
     * @return  self
     */ 
    private function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
}