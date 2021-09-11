<?php

namespace www\mariya\Meny;

use www\mariya\Shawarma\Shawarma;

class ShawarmaOdessa extends Shawarma
{
    public function __construct()
    {
        $this->setCost(69);
        $this->setIngredients(['огурцы маринованные', 'картофель жареный', 'чесночный соус', 'тандырный лаваш', 'маринованный лук с барбарисом и зеленью', 'мясо куриное', 'салат коул слоу', 'корейская морковь']);
        $this->setTitle('Шаурма Одесская');
    }
}