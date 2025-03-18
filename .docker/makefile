docker up:
	docker compose -p endpoint up -d --build --force-recreate

docker down:
	docker compose -p endpoint down

phpstan:
	docker exec endpoint vendor/bin/phpstan analyse app

test:
	docker exec endpoint vendor/bin/codecept run --steps

composer-install:
	docker exec endpoint composer install

composer-update:
	docker exec endpoint composer update