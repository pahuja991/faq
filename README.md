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
   
   this project can be seen by heroku
   heroku link :- 
   https://secret-depths-81126.herokuapp.com/
   
   my git hub repository link - https://github.com/pahuja991/faq
   
   Epic 1 - I have done end to end testing of all the features of this FAQ project through Laravel Dusk.Through Laravel Dusk we can do end to end testing of all the features and can check whether the feature is running according to requirements or not.
   
   Here are the installation steps of laravel dusk
   1. Install the package via composer:
      command - 
      "composer require --dev laravel/dusk" 
      
   2. Then run artisan command -
      "php artisan dusk:install"
      
   3. Register the Laravel\Dusk\DuskServiceProvider service provider.
      It is to be done within register method of AppServiceProvider.
      
      public function register()
          {
              if ($this->app->environment('local', 'testing')) {
                  $this->app->register(DuskServiceProvider::class);
              }
          }
          
   4. We generate dusk test by following command :-
       php artisan dusk:make EditAnswerText
       
   5. We run the tests by the following command :-
      php artisan dusk
      
   We need phpstorm to run this tests and project.I used Phpstorm 2018.2.3 version
   
   Also,Php Dusk uses phpunit in the backend,the main feature is that it tests the feature on browser level.
      
   --> I have uploaded the word file containing my test screenshots in Manage embedded files.The name of this word file is "dusk tests"
   
   --> I have written 12 tests with 43 insertions
   
    The 12 tests are :-
    a. EditAnswerTest
    b. EditQuestionTest
    c. ViewAnswerTest
    d. ViewQuestionTest
    e. CreateAnswerTest
    f. CreateQuestionTest
    g. DeleteAnswerTest
    h. DeleteQuestionTest
    i. LoginTest
    j. Register
    k. HomePageTest
    l. ProfileCheckTest
    
    ---> Laravel Dusk is open-sourced software under the MIT license
    
    These tests are working perfectly fine and i have committed them and uploaded in my git hub repository.
    I have also attached the 12 screenshots under a word doc file.
    The name of this word file is "dusk tests"