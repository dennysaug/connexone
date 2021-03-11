ConnexOne Technical Test

Tested on Linux

to run:
    
    docker-compose up --build

new step:
    
    docker exec -it laravel7x_php bash
    su <YOUR-USER>
    php artisan migrate --seed



Services:
- Nginx
- PostgreSQL
- PHP

Endpoint: 
    
    POST http://localhost/api/microservice-router

return
    
    "name": (String),
    "url": (String)

        
    
