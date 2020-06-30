'y'|net stop http
docker-compose stop
docker-compose up --build --force-recreate --remove-orphans -d 
docker-compose up -d 
composer install
'yes' | php bin/console doctrine:migrations:migrate
php bin/console cache:clear