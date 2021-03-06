<?php

require_once __DIR__ . "/Company.php";

class Product
{
    protected $name;
    protected $price;
    protected $category;
    protected $quantity;
    protected $company;

    public function __construct($name, $price, $quantity, $company)
    {
        try {
            $this->name = $name;
            $this->price = $price;
            $this->setQuantity($quantity);
            $this->setCompany($company);
        } catch (TypeError $error) {
            throw new Exception($error->getMessage());
        }
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
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */
    public function setQuantity($quantity)
    {
        if ($quantity < 1) {
            throw new Exception("Prodotto non disponibile");
        }

        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set the value of company
     *
     * @return  self
     */
    public function setCompany(Company $company)
    {
        $this->company = $company;

        return $this;
    }
}
