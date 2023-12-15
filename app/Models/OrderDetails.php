<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\Order;

class OrderDetails extends Model
{
    protected $table      = 'order_details';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id_order', 'food_name', 'qty', 'harga'];

    public function createOrderDetails($food_name, $qty)
    {
        $model = new Order();
        $id_order = $model->getLastIdOrder();

        $data = [
            'id_order' => $id_order,
            'food_name' => $food_name,
            'qty' => $qty,
            'harga' => $this->getHarga($food_name, $qty)
        ];

        return $this->insert($data);
    }

    public function getHarga($food_name, $qty)
    {
        $harga = $this->db->table('healthy_food')->select('price')->where('food', $food_name)->get()->getRowArray();
        return $harga['price'] * $qty;
    }
}
// class OrderDetails extends Model
// {
//     protected $table      = 'order_details';
//     protected $primaryKey = 'id';

//     protected $allowedFields = ['id_order', 'food_name', 'qty', 'harga'];

//     public function createOrderDetails($data)
//     {
//         return $this->insert($data);
//     }

//     public function getHarga($food_name, $qty)
//     {
//         $harga = $this->db->table('healthy_food')->select('price')->where('food', $food_name)->get()->getRowArray();
//         return $harga['price'] * $qty;
//     }
// }
