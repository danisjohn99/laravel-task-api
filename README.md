------------------------------------------------------------------------------------------------
Laravel Framework 12.70.1
MySQL : 5.7.40
laravel/breeze": "^2.4",

composer install
SET Env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_task_api
DB_USERNAME=root
DB_PASSWORD=
DB_ENGINE=InnoDB

php artisan key:generate

php artisan config:clear
php artisan migrate
php artisan optimize:clear
php artisan serve

--------------------------------------------------------------------------------------------------


Register User API Endpoint
<img width="1211" height="867" alt="image" src="https://github.com/user-attachments/assets/942a9589-506d-4841-b4ba-ba3d72bea267" />

Login User API Endpoint
<img width="1206" height="838" alt="image" src="https://github.com/user-attachments/assets/264781a0-c578-4bf8-a44d-d3b4ce8838bf" />

Task Create API Endpoint
<img width="1230" height="687" alt="image" src="https://github.com/user-attachments/assets/f8c0bd1e-72ce-4740-a090-b69ac1ae103c" />

Task List API  Endpoint
<img width="1212" height="890" alt="image" src="https://github.com/user-attachments/assets/bec8cd8f-a37f-4d89-8627-703d74a08651" />

Task List API with Status Filter Endpoint
<img width="1211" height="719" alt="image" src="https://github.com/user-attachments/assets/1cb1c15a-036e-4042-9f89-e6de7320d520" />

Task Show API Endpoint
<img width="1216" height="668" alt="image" src="https://github.com/user-attachments/assets/6e1b0bb6-391c-4894-9ed1-09d12f6a8fa9" />

Task Update Endpoint
<img width="1210" height="763" alt="image" src="https://github.com/user-attachments/assets/5e1972b6-7e5d-4ca3-b847-cca2d2471014" />

Task Delete Endpoint
<img width="1205" height="670" alt="image" src="https://github.com/user-attachments/assets/8e8a9197-2d28-487c-bd53-e7b881b6b8d9" />





