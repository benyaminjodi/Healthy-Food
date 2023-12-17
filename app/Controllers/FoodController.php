<?php

namespace App\Controllers;

use ActivitiesAPI;
use App\Models\Food;

require_once 'ActivitiesAPI.php';

class FoodController extends BaseController
{
    public function index()
    {
        if (session()->get('num_user') == '') {
            return redirect()->to('/login');
        }

        $model = model(Food::class);
        $data['food'] = $model->getDataFood();
        $data['activities'] = [];


        return view('food_by_calories_view', $data);
    }

    public function foodsByCalories($calories)
    {
        if (session()->get('num_user') == '') {
            return redirect()->to('/login');
        }

        $model = new Food();
        $data['food'] = $model->getFoodByCalories($calories);

        $model2 = new ActivitiesAPI();
        $intCal = $this->convertToInt($calories);
        $data['activities'] = $this->jsonToPhpArray($model2->sendGetRequest($intCal));


        return view('food_by_calories_view', $data);
    }

    public function convertToInt($calories)
    {
        $calories = substr($calories, 0, strlen($calories) - 4);
        $calories = (int)$calories;
        return $calories;
    }

    function jsonToPhpArray($jsonString)
    {
        // Mengecek apakah string JSON valid
        $decodedData = json_decode($jsonString, true);

        if ($decodedData === null && json_last_error() !== JSON_ERROR_NONE) {
            // Handle error jika string JSON tidak valid
            return false;
        }

        return $decodedData;
    }
}
