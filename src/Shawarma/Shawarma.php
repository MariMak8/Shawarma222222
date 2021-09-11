<?php

namespace www\mariya\Shawarma;

abstract class Shawarma implements ShawarmaMeny
{
    protected $price;
    protected $ingredients;
    protected $title;

    public function getCost(): float
    {
        return $this->price;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    protected function setTitle($title)
    {
        $this->title = $title;
    }

    protected function setCost($price)
    {
        $this->price = $price;
    }

    protected function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }
}