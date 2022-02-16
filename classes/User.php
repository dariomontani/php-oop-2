<?php

class User
{
    protected $name;
    protected $lastname;
    protected $age;
    protected $registrationDate;
    protected $type;

    public function __construct($name, $lastname, $type)
    {
        $this->setName($name);
        $this->lastname = $lastname;
        $this->type = $type;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        if (strlen($name) < 3) {
            throw new Exception("nome non valido");
        }

        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of registrationDate
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Set the value of registrationDate
     *
     * @return  self
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
