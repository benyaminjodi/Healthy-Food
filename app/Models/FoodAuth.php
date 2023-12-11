<?php

namespace App\Models;

use CodeIgniter\Model;

class FoodAuth extends Model
{
    public function getDataAuthentication($email, $pass)
    {
        $db = \Config\Database::connect();
        $queryString = 'SELECT name FROM users 
                        WHERE email = "' . $email . '" 
                        AND password = "' . $pass . '"';
        $query = $db->query($queryString);
        $results = $query->getResult();
        return count($results);
    }
}
