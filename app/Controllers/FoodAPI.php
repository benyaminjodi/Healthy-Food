<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\FoodAuth;
use App\Models\Food;

class FoodAPI extends ResourceController
{
    public function index()
    {
        $model1 = model(Food::class);
        $data = [
            'message' => 'success',
            'foodmart' => $model1->getDataFood()
        ];
        return $this->respond($data, 200);
    }

    public function foodsByCalories($calories)
    {
        $model1 = model(Food::class);
        $data = [
            'message' => 'success',
            'foodmart' => $model1->getFoodByCalories($calories)
        ];
        return $this->respond($data, 200);
    }
}
