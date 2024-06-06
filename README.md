## Requirements

- PHP >= 8.2
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- Filter PHP Extension
- Hash PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Session PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Installation

- Clone repositori
- Jalankan composer install
- Ganti nama .env.example menjadi .env
- Jalankan "php artisan key:generate"
- Atur kredensial database pada berkas .env
- Jalankan migrasi database "php artisan migrate"
- Jalankan seeder "php artisan db:seed"
- Jalankan aplikasi "php artisan serve"

## Login
bisa login pake 2 akun
email : admin@admin
password : admin

email : user@user
password : user

kalo mo bikin akun bisa register
## Note

Halaman login dan registrasi belum responsif sepenuhnya, khususnya pada penataan gambar.
## Credits

Laravel SB Admin 2 uses some open-source third-party libraries/packages, many thanks to the web community.

- Laravel - Open source framework.
- LaravelEasyNav - Making managing navigation in Laravel easy.
- SB Admin 2 - Thanks to Start Bootstrap.
