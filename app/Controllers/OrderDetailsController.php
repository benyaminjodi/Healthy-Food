<?php

namespace App\Controllers;

use App\Models\Order;
use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\OrderDetails;
use App\Models\Food;
use CodeIgniter\API\ResponseTrait;

class OrderDetailsController extends BaseController
{
    public function create()
    {
        $model = new OrderDetails();
        $input = (int)$this->request->getPost('totalItem');

        for ($i = 1; $i <= $input; $i++) :
            $food_name = $this->request->getPost("food_name$i");
            $qty = $this->request->getPost("qty$i");

            $model->createOrderDetails($food_name, $qty);
        endfor;

        $model2 = new Order();
        $total_harga = $model2->getTotalHarga($model2->getLastIdOrder());
        $point = $model2->hitungPoin($total_harga, $model2->getCreatedAt($model2->getLastIdOrder()));
        $model2->updateDataOrder($model2->getLastIdOrder(), $total_harga, $point);

        return redirect()->to('/order_view');
    }

    
}


