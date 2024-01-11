setup:
	@make build
	@make up 
	@make composer-update
build:
	docker compose build 
stop:
	docker compose stop
up:
	docker compose up -d
composer-update:
	docker exec ictc-backend bash -c "composer update"
data:
	docker exec ictc-backend bash -c "php artisan migrate:fresh --seed"
bash:
	docker exec -it ictc-backend bash
start:
	docker compose restart
