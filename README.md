# yii2-laravel-migration

## Setup

 ### Step 1  
   `sh base-image.sh`
   - build php base docker image
### Step 2  
  `docker-compose up --build -d`
  - build the docker service

### Step 3
  - Laravel Setup
  
     `docker exec -it yii2-laravel-laravel composer install`
     
     `docker exec -it yii2-laravel-laravel php artisan migrate`
  - Yii Setup
  
     `docker exec -it yii2-laravel-yii2 composer install`
     
     `docker exec -it yii2-laravel-yii2 php console/yii migrate`
  
#### link:

  - Adminer - http://localhost:9013
  - Laravel - http://localhost:2400
  - Yii - http://localhost:2401
