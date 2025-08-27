###  🚀 AMBIENTE DE PRODUÇÃO
Então seguir os seguintes comandos:

 1. mkdir -p storage/framework/views
 2. mkdir -p storage/framework/cache
 3. mkdir -p storage/framework/sessions
 4. sudo chgrp -R www-data storage bootstrap/cache
 5. sudo chmod -R ug+rwx storage bootstrap/cache
 6. docker compose exec php php artisan key:generate --show