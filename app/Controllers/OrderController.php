<?php

namespace App\Controllers;

use App\Models\Order;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Controller;
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Food;
use App\Models\OrderDetails;

class OrderController extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        return view('v_order');
    }

    public function create()
    {
        $model = new Order();
        helper('form');


        $model->createDataOrder(($_COOKIE['TestCookie']));

        $total_item = $this->request->getPost('total_item');
        $data['total_item'] = $total_item;
        $model = model(Food::class);
        $data['food'] = $model->getFoodName();

        // return $this->respond([
        //     'status' => 201,
        //     'messages' => [
        //         'success' => 'Order created successfully'
        //     ]
        // ]);

        return view('v_order_details', $data);
    }

    public function viewOrder()
    {
        $model = new Order();
        $model2 = new OrderDetails();
        $data['order'] = $model->getOrder();
        $id_order = $model->getLastIdOrder();
        $data['order_details'] = $model2->getOrderDetails($id_order);

        return view('v_order_view', $data);
    }
}
