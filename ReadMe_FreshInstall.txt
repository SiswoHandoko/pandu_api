Requirements:
1. XAMPP 7.0.22 / PHP 7.0.22
2. Composer (pas install, jangan lupa PHP.exe nya diambil ke XAMPP yang 7)
3. Postman (sementara ya Wid, urang blm ngulik Swagger)

Install Dependecies:
Setelah di pull ke lokal masing-masing, mangga buka cmd, terus direct ke folder pandu_api masing-masing.
Lalu run "composer install" agar dependencies nya terdownload (karena di git tidak bisa upload folder vendor).

Update .env
- buka file .env.example, lalu SAVE AS menjadi .env. Kemudian ubah isinya menjadi seperti ini.

APP_ENV=local
APP_DEBUG=true
APP_KEY=base64:JHdpwwjAk2lQxJtLfvoLxy8D2vQZW8ats0GEYF9GuLaCY=
APP_TIMEZONE=UTC

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=pandu
DB_USERNAME=root
DB_PASSWORD=

CACHE_DRIVER=array
QUEUE_DRIVER=sync


Instal DB:
- bikin dulu database pandu
- lalu run "php artisan migrate:refresh --seed" untuk migrasi dan seed

Silahkan import postman dan cobain fungsi register, login, dan get user.
Terdapat juga contoh CRUD di folder contoh.

Regards,
Tommy


MAILGUN Account
EMAIL       :dipanduapp@gmail.com
USERNAME    :dipanduapp
PASSWORD     :panduapp1234,
