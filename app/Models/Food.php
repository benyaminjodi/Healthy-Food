<?php

namespace App\Models;

use CodeIgniter\Model;

class Food extends Model
{
    protected $table = 'healthy_food';

    public function getDataFood()
    {
        return $this->findAll();
    }

    public function getFoodByCalories($calories)
    {
        return $this->where('Calories', $calories)->findAll();
    }
}
