<?php
require_once "Product.php";
class Bike extends Product
{
    private $color;
    public int $type = 1001;

    public function __construct($name, $price)
    {
        parent::__construct($name, $price);
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

}