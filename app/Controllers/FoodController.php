<?php

namespace App\Controllers;

use App\Models\Food;

class FoodController extends BaseController
{
    public function index()
    {
        $model = model(Food::class);
        $data['food'] = $model->getDataFood();
        return view('food', $data);
    }

    public function foodsByCalories($calories)
    {
        $model = new Food();
        $data['food'] = $model->getFoodByCalories($calories);
        return view('food_by_calories_view', $data);
    }
}
