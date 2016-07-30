APPS_FOLDER = Apps
COMPONENTS_FOLDER = Components

BACKEND_API     = $(COMPONENTS_FOLDER)/BackendAPI
FRONTEND_API    = $(COMPONENTS_FOLDER)/FrontendAPI
APP_WEB         = $(APPS_FOLDER)/Web
APP_MOBILE      = $(APPS_FOLDER)/Mobile
APP_DESKTOP     = $(APPS_FOLDER)/Desktop

.PHONY: init init-backend-api init-desktop-app init-mobile-app b-api-cache b-api-cs b-api bash-docker

init: init-backend-api init-desktop-app init-mobile-app

init-desktop-app:
	@echo "Installing assets for $(APP_DESKTOP)"
	@cd ./$(APP_DESKTOP) && \
	@npm install --quiet

init-mobile-app:
	@echo "Installing assets for $(APP_MOBILE)"
	@cd ./$(APP_MOBILE) && \
	npm install --quiet

init-backend-api:
	@echo "$(BACKEND_API) : Copying parameters file (if not exists)"
	@cp -n "$(BACKEND_API)"/app/config/parameters.yml.dist "$(BACKEND_API)"/app/config/parameters.yml | true
	@echo "$(BACKEND_API) : Installing assets"
	@composer install --quiet --working-dir=./$(BACKEND_API)

b-api-cache:
	@rm -Rf $(BACKEND_API)/var/cache/
	@./$(BACKEND_API)/bin/console cache:warmup -e prod --quiet
	@./$(BACKEND_API)/bin/console cache:warmup --quiet
	@echo "Cache is cleaned and warmed up"

b-api-cs:
	php-cs-fixer fix $(BACKEND_API)/src/ --level=symfony

b-api: init-backend-api b-api-cache
	@screen -S politics-backend-server -d -m ./$(BACKEND_API)/bin/console server:run
	@echo "Server is running in screen backend.api.popul.in on http://localhost:8000"

bash-docker:
	docker exec -ti backend-api bash