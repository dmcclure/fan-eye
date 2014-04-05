<?php

namespace Demo\FanEyeBundle\Entity;


class Complaint {
    protected $name;
    protected $email;
    protected $rationalArgument;

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $rationalArgument
     */
    public function setRationalArgument($rationalArgument)
    {
        $this->rationalArgument = $rationalArgument;
    }

    /**
     * @return mixed
     */
    public function getRationalArgument()
    {
        return $this->rationalArgument;
    }
}