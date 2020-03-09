

## How to install

- Clone repository
- Composer install --no-dev
- Configure .env file
- php artisan key:generate
- php artisan migrate
- php artisan voyager:install --with-dummy
	- email: admin@admin.com
	- password: password
- php artisan db:seed --class=ApplicationMenuTableSeeder
- php artisan db:seed --class=ApplicationBreadTableSeeder
- php artisan db:seed --class=ApplicationPermissionRolesTableSeeder
- php artisan db:seed --class=ApplicationSettingsTableSeeder(fresh install only)


## Make seeders

- php artisan iseed menus,menu_items --classnameprefix=AppMenu --force
- php artisan iseed data_types,data_rows --classnameprefix=AppBread --force
- php artisan iseed permissions,roles,permission_role --classnameprefix=AppPermissionRoles --force

## Make seeders 1 line
- php artisan iseed menus,menu_items --classnameprefix=AppMenu --force && php artisan iseed data_types,data_rows --classnameprefix=AppBread --force && php artisan iseed permissions,roles,permission_role --classnameprefix=AppPermissionRoles --force

## Dummy Seeders
- php artisan db:seed --class=ProjectFactoryTableSeeder

## One line install reinstall for dev
- php artisan migrate:fresh && php artisan voyager:install --with-dummy && php artisan db:seed --class=ApplicationMenuTableSeeder && php artisan db:seed --class=ApplicationBreadTableSeeder && php artisan db:seed --class=ApplicationPermissionRolesTableSeeder && php artisan db:seed --class=ApplicationSettingsTableSeeder

## Clean cache and cache
- php artisan view:clear && php artisan route:clear && php artisan cache:clear && php artisan config:clear
- php artisan config:cache

## Production Reminders:
- APP_ENV=production
- APP_DEBUG=false

- DB_DATABASE=hris
- DB_USERNAME=root
- DB_PASSWORD=

- VOYAGER_COMPASS=false

- CLOCKWORK_ENABLE=true #enable or disable
- CLOCKWORK_WEB=false #http://your.app/__clockwork
- CLOCKWORK_WEB_DARK_THEME=false #dark theme

- php artisan config:cache
- php artisan view:cache
- php artisan route:cache
- or php artisan optimize