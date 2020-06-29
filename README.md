# onlinetraininghub_api

#dev database
localhost:3306
user: root
pw: root


#windows 
docker-compose up -d --build
docker exec -it symfony-docker_php_1 bash
composer install && doctrine:migrations:migrate && cache:clear






