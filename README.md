# apiRest

## get the project in local :
```
git clone https://github.com/spidrotech/apiRest.git 
```
## Docker experience : install the app in local :
```
docker-compose up -d
```

## create database
```
php bin/console doctrine:database:create
```

## create entities 
```
php bin/console doctrine:schema:create
```

## Or only update db 
```
php bin/console doctrine:schema:update --force
```

## vHost url : 
127.0.0.1   apiRest.localhost

## access the local 
apiRest.localhost

## API Documentation :
apiRest.localhost/api/doc

## API index : 
apiRest.localhost/api/

## Admin access : 
apiRest.localhost/admin

## kibana path : 
http://localhost:5601 

## Or run the app directly : 
```
php bin/console server:run
```
__
##utils commands : __
###for composer :__
COMPOSER_MEMORY_LIMIT=-1 composer.phar <...>__
###for php : __
php -d memory_limit=-1__
__
## docker mount pb__
export COMPOSE_CONVERT_WINDOWS_PATHS=1__
__
## we want volunteers to build this website, contact me at: __
amrihafedh [at] yahoo [dot] fr__

