Requirements:
1. XAMPP 7.0.22 / PHP 7.0.22
2. Composer (pas install, jangan lupa PHP.exe nya diambil ke XAMPP yang 7)
3. Postman (sementara ya Wid, urang blm ngulik Swagger)

Install Dependecies:
Setelah di pull ke lokal masing-masing, mangga buka cmd, terus direct ke folder pandu_api masing-masing.
Lalu run "composer install" agar dependencies nya terdownload (karena di git tidak bisa upload folder vendor).

Instal DB:
- bikin dulu database pandu
- lalu run "php artisan migrate:refresh --seed" untuk migrasi dan seed

Silahkan import postman dan cobain fungsi register, login, dan get user.
Terdapat juga contoh CRUD di folder contoh.

Regards,
Tommy