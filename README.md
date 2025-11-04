## HRIS APP

dibuat menggunkana laravel 12 dan database postgreSQL

karena menggunakan psgsql maka jalankan perintah ini dulu:
`psql -U postgres`

selanjutnya buat database nya : `CREATE DATABASE hris_app;`

cek: `\l`

di `env` atur conect database sesuai dengan user dan pwd yg ada di psgsql

jika pertama kali pake postgre di php.ini, aktifkan ini:

```
;extension=pdo_pgsql //buang tanda titik koma didepan
;extension=pgsql //buang tanda titik koma didepan

```

kemudain jalankan: `php artisan migrate`

lalu: `php artisan serve`
