# faq

to run the faq project

1. git clone https://github.com/pahuja991/faq.git
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. setup database with sqlite or other (https://laravel.com/docs/5.7/database)
5. Run: php artisan migrate
6. Run php uni tests :-
   command - 
   Run: unit tests: phpunit
7. generate database seeds :-
   command
   Run: seeds php artisan migrate:refresh --seed