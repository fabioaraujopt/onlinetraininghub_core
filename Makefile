start-docker:
	docker-compose up --remove-orphans --force-recreate --build -d && cd .. && docker-compose up --remove-orphans --force-recreate --build -d && ./bin/composer install && ./bin/console cache:clear && ./bin/console cache:clear --env=test &&  doct~

stop-docker:
	docker-compose down --remove-orphans && cd .reserve-proxy && docker-compose down --remove-orphans

show-logs:
	docker-compose logs -f

	