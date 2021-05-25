# yii2-laravel-migration

## Setup

 ### Step 1  
   `sh base-image.sh`
   - build php base docker image
### Step 2  
  `docker-compose up --build -d`
  - build the docker service

### Step 3
  - <a href="https://github.com/rappasoft/laravel-boilerplate">Laravel Setup</a>
  
     `docker exec -it yii2-laravel-laravel composer install`
     
     `docker exec -it yii2-laravel-laravel php artisan migrate`
     
     `docker exec -it yii2-laravel-laravel php artisan db:seed`
     
  - <a href="https://github.com/yii-starter-kit/yii2-starter-kit">Yii Setup</a>
  
     `docker exec -it yii2-laravel-yii2 composer install`
     
     `docker exec -it yii2-laravel-yii2 php console/yii migrate`
     
     `docker exec -it yii2-laravel-yii2 php console/yii rbac-migrate`
  
#### link:

  - Adminer - http://localhost:9013
     - username: root
     - password: test123
     - host: db
  - Laravel - http://localhost:2400
  - Yii - http://localhost:2401
