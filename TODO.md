TODO/
create entity customer ☑
create entity invoice ☑
make relation customer > invoice ☑
migrations ☑
dataFixtures ☑
Test with postman ou insomnia
BONUS
make react app
show customer and invoice in component

STEPS/
composer create-project symfony/skeleton crm-freelance-api
composer require symfony/maker-bundle --dev
composer require orm
symfony console make:entity
symfony console doctrine:database:create
symfony console make:migration
symfony console doctrine:migrations:migrate
composer require --dev orm-fixtures
symfony console make:fixtures
composer require api
