# Tutac Template

install packeage
---------------------------

composer install

cp .env.example .env


-------------
database sqlite
create file database.sqlite in /database path

change .env 

DB_CONNECTION=sqlite <br />
DB_HOST=127.0.0.1<br />
DB_PORT=3306<br />
DB_DATABASE= (path to database) // exmple  "C:/xampp7/htdocs/test_coreui/database/database.sqlite"<br />
DB_USERNAME=homestead<br />
DB_PASSWORD=secret<br />

Run php artisan key:generate<br />
Run php artisan migrate<br />
Run php artisan serve<br />

Go to localhost:8000

