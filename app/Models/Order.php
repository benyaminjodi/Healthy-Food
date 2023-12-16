<?php

namespace App\Models;

use CodeIgniter\Model;

class Order extends Model
{
    protected $table      = 'orders';
    protected $primaryKey = 'id_order';

    protected $allowedFields = ['email_user', 'total_harga', 'point', 'created_at'];
    protected $useTimestamps = false;

    public function createDataOrder($email_user)
    {
        $data = [
            'email_user' => $email_user,
            'total_harga' => null,
            'point' => null
        ];

        return $this->insert($data);
    }

    public function getLastIdOrder()
    {
        $id_order = $this->db->table('orders')->selectMax('id_order')->get()->getRowArray();
        return $id_order['id_order'];
    }

    public function getOrder()
    {
        $email = $_COOKIE['TestCookie'];
        $order = $this->db->table('orders')->select('id_order, total_harga, point, created_at')->where('email_user', $email)->get()->getResultArray();
        return $order;
    }

    public function updateDataOrder($id_order, $total_harga, $point)
    {
        $data = [
            'total_harga' => $total_harga,
            'point' => $point
        ];

        $model = new User();
        $email = $this->getEmail($id_order);
        $model->addPoin($email, $point);
        return $this->db->table('orders')->where('id_order', $id_order)->update($data);
    }

    public function getEmail($id_order)
    {
        $email = $this->db->table('orders')->select('email_user')->where('id_order', $id_order)->get()->getRowArray();
        return $email['email_user'];
    }

    public function getTotalHarga($id_order)
    {
        $total_harga = $this->db->table('order_details')->selectSum('harga')->where('id_order', $id_order)->get()->getRowArray();
        return $total_harga['harga'] + 10000 + 5000;
    }

    public function getCreatedAt($id_order)
    {
        $created_at = $this->db->table('orders')->select('created_at')->where('id_order', $id_order)->get()->getRowArray();
        return $created_at['created_at'];
    }

    public function hitungPoin($total_harga, $created_at_timestamp)
    {
        $tanggal = date('d', strtotime($created_at_timestamp)); // Mendapatkan tanggal (hanya dua digit)
        $bulan = date('m', strtotime($created_at_timestamp)); // Mendapatkan bulan (hanya dua digit)

        // Inisialisasi
        $poin_awal = 0;
        $poin_mendapatkan = $total_harga * 0.001;
        $bonus_poin_1 = 0;

        // Periksa kondisi Bonus 1
        if ($total_harga > 100000) {
            $bonus_poin_1 = 10 * (int)($total_harga / 1000);
        }

        // Periksa kondisi Bonus 2
        if ($tanggal == $bulan) {
            $bonus_poin_1 *= 2; // Kalikan bonus_poin_1 dengan 2 jika tanggal sama dengan bulan.
        }

        // Hitung total poin
        $poin_total = $poin_awal + $poin_mendapatkan + $bonus_poin_1;

        return $poin_total;
    }
}
