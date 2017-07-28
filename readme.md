# Tennis Kata with UI in Laravel

## Prerequisites

1. Don't forget to uncomment pdo_sqlite from php.ini
2. Create SQLite database with the following commands from the project root folder: touch database/homestead.db
3. Run the following commands:

- composer update
- mv .env.example .env
- php artisan migrate
- php artisan db:seed
- sudo apt-get install php-curl