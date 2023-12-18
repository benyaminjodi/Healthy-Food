# Healthy Food

Website Healthy Food, dirancang untuk memberikan informasi seputar makanan sehat dan menyediakan fitur order yang dapat digunakan oleh user. Hal ini diharapkan bisa meningkatan kesadaran akan pentingnya pola makan sehat dalam menjaga kesehatan tubuh. Dengan gaya hidup yang serba cepat, banyak orang cenderung mengabaikan aspek nutrisi. Melalui website ini, kita dapat memberikan kesadaran untuk membantu mereka membuat pilihan makanan yang lebih baik.

## How to Run?

1. Clone repository github ini
2. Download file .env di [sini](https://drive.google.com/file/d/1-8yzmIJDj8aar8uoVD1OpH8-sTj5xRb8/view?usp=drive_link)
3. Buatlah database di phpmyadmin dengan command

```
CREATE DATABASE `healthy_food`;
```

4. run "composer install"

```
composer install
npm i
php spark migrate:refresh
php spark db:seed UserSeeder
```

4. Buka 2 terminal yang berbeda, run ini di terminal 1

```
npm mix watch
```

and run ini di terminal 2

```
php spark serve --port 8081
```

5. Jangan lupa untuk start Apache dan Mysqli server di XAMP

## Api Endpoints for

| No  | HTTP Method | URL                            | Description                                                                     |
| --- | ----------- | ------------------------------ | ------------------------------------------------------------------------------- |
| 1   | GET         | /foodAPI| Menampilkan data seluruh makanan include dengan serving, harga, dan calories |
| 2   | GET         | /foodAPI/(:any)| Menampilkan data seluruh makanan include dengan serving, harga, dan calori dengan input calori tertentu |
