# to-do-app

### stack
    - php 8.1.x
    - laravel 9.x
    - mySql 8.x
    
### Clone repo

    git clone https://github.com/Charlilyyyy/to-do-app.git
    
### install package dependencies 

    composer install
    
### install & compile js scafffolindg

    npm install && npm run dev
    
### setup environment

    cp .env.example .env 
    
    // or you can create .env file by copy the .env.example file
    
### setup database in env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=yourdbname
    DB_USERNAME=yourusername
    DB_PASSWORD=yourpassword
    
### to test

    php artisan migrate:fresh
    php artisan serve
