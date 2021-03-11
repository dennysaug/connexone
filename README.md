#ConnexOne Technical Test

to run:
    
    docker-compose up --build

Services:
- Nginx
- PostgreSQL
- PHP

Endpoint: 
    
    POST http://localhost/api/microservice-router

return
    
    "name": (String),
    "url": (String)

        
    
