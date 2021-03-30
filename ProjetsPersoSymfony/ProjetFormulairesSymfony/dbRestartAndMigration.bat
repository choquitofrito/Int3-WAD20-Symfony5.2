del migrations\V*
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load


