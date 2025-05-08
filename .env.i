APP_NAME=MW
APP_ENV=production  # Mude para production no InfinityFree
APP_KEY=base64:W7XXopl5PyG52Fm72OuQhKtWxgZoTUDvl8kfpGsea+c=  # Mantenha a chave atual
APP_DEBUG=false  # Desative debug em produção para segurança
APP_TIMEZONE=America/Sao_Paulo  # Ajuste para o fuso horário do Brasil
APP_URL=https://moraw.ct.ws  # Use a URL do seu site

APP_LOCALE=pt_BR
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
APP_MAINTENANCE_STORE=database

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
FILESYSTEM_DRIVER=public
FILESYSTEM_DISK=public_uploads
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error  # Use error em produção

# Configurações do banco de dados fornecidas
DB_CONNECTION=mysql
DB_HOST=sql106.infinityfree.com
DB_PORT=3306
DB_DATABASE=if0_38241904_bahia
DB_USERNAME=if0_38241904
DB_PASSWORD=VIaYdBaOCrz

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
CACHE_PREFIX=

# Desative serviços não usados no InfinityFree
MEMCACHED_HOST=127.0.0.1
REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

# Configurações de e-mail (use log para evitar erros, já que InfinityFree não suporta SMTP diretamente)
MAIL_MAILER=log
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@moraw.ct.ws"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"