# Tutac Template

install packeage
---------------------------

composer install

cp .env.example .env


-------------
database sqlite
create file database.sqlite in /database path

change .env 

DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= (path to database) // exmple  "C:/xampp7/htdocs/test_coreui/database/database.sqlite"
DB_USERNAME=homestead
DB_PASSWORD=secret

Run php artisan key:generate
Run php artisan migrate
Run php artisan serve

Go to localhost:8000


