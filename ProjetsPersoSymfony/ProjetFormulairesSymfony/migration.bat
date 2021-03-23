php bin/console make:migration 
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load 
del migrations\Versi*


