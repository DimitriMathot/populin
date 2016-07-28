BACKEND_API     = Components/BackendAPI
FRONTEND_API    = Components/FrontendAPI
APP_WEB         = Apps/Web
APP_MOBILE      = Apps/Mobile
APP_DESKTOP     = Apps/Desktop


.PHONY: backend-api-cache backend-api-cache

backend-api-cache:
	rm -Rf $(BACKEND_API)/var/cache/
	$(BACKEND_API)/bin/console cache:warmup -e prod
	$(BACKEND_API)/bin/console cache:warmup

backend-server: backend-api-cache
	screen -S politics-backend-server -d -m $(BACKEND_API)/bin/console server:run
