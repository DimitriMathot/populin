BACKEND_API     = Components/BackendAPI
FRONTEND_API    = Components/FrontendAPI
APP_WEB         = Apps/Web
APP_MOBILE      = Apps/Mobile
APP_DESKTOP     = Apps/Desktop


.PHONY: b-api-cache b-api-cs b-api

b-api-cache:
	@rm -Rf $(BACKEND_API)/var/cache/
	@$(BACKEND_API)/bin/console cache:warmup -e prod --quiet
	@$(BACKEND_API)/bin/console cache:warmup --quiet
	@echo "Cache is cleaned and warmed up"

b-api-cs:
	php-cs-fixer fix $(BACKEND_API)/src/ --level=symfony

b-api: b-api-cache
	@screen -S politics-backend-server -d -m $(BACKEND_API)/bin/console server:run
	@echo "Server is running in screen backend.api.popul.in on http://localhost:8000"

bash-docker:
    docker exec -ti backend-api bash