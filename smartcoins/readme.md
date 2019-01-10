#EASTPAC

## 1. first :

1. ```composer install```
2. rename ```.env.example``` to ```.env```
3. ```php artisan key:generate```

## 2. configuration file .env
### database config :
```
DB_DATABASE=smart_coin
DB_USERNAME=root
DB_PASSWORD=root
```
### smtp config :
```
#gmail smtp
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=youemail@gmail.com
MAIL_PASSWORD=youremailpassword
MAIL_ENCRYPTION=tls
```

## 3. create database :
`database name = smart_coin`

## 4. migrate table to database :
run this command on ```terminal``` or ```cmd``` if you use windows OS.

```bash 
php artisan migrate
```
## 5. insert data to table :
```bash
php artisan db:seed
```

## 6. run 
```bash
composer dump-autoload -o
php artisan storage:link
php artisan serve
```
```http://localhost:8000```
