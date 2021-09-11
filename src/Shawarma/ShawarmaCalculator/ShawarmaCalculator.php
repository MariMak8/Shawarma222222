<?php

namespace www\mariya\Shawarma\ShawarmaCalculator;

use www\mariya\Shawarma\Shawarma;

class ShawarmaCalculator
{
    protected $bag;
    protected $price;
    protected $ingredients;

    public function __construct()
    {
        $this->setBag([]);
        $this->setCost(0);
        $this->setIngredients([]);
    }

    public function getBag()
    {
        return $this->bag;
    }

    protected function setBag($bag)
    {
        $this->bag = $bag;
    }

    public function getCost()
    {
        return $this->price;
    }

    protected function setCost($price)
    {
        $this->price = $price;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    protected function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function add(Shawarma $shawarma)
    {
        $this->bag[] = $shawarma->getTitle();
        $this->price = $this->price + $shawarma->getCost();
        $this->ingredients = array_unique(array_merge($this->ingredients, $shawarma->getIngredients()));
    }
}