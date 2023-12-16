# Healthy Food

Website Healthy Food, dirancang untuk memberikan informasi seputar makanan sehat dan menyediakan fitur order yang dapat digunakan oleh user. Hal ini diharapkan bisa meningkatan kesadaran akan pentingnya pola makan sehat dalam menjaga kesehatan tubuh. Dengan gaya hidup yang serba cepat, banyak orang cenderung mengabaikan aspek nutrisi. Melalui website ini, kita dapat memberikan kesadaran untuk membantu mereka membuat pilihan makanan yang lebih baik.

## How To Run

- Clone repository github ini ke local
- Buka XAMPP, Start Apache dan MySQL
- Buka Localhost/phpmyadmin
- Buat sebuah database bernama 'healthy_food'
- Buat 4 buah table, yaitu:

  a. healthy_food = ['food', 'serving','calories', price]
  b. orders = ['id_order','email_user','total_harga','point', 'created_at']
  c.order_details = ['id','id_order','food_name','qty','harga']
  d. users =['name', 'email', 'password', 'point']

- Jalankan composer install di terminal
- Jalankan php spark serve

## Endpoint

Berikut adalah API Endpoint pada Healthy Food :
Method GET :

- /foodAPI : Menampilkan data makanan
- /foodAPI/(:any) : Menampilkan data makanan berdasarkan kalori dengan input type string
