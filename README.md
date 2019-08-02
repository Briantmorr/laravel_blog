![laravel](/resources/img/laravel_header.png)
# laravel_blog
![demo_blog](/resources/img/blog_demo.PNG)



## Laravel Project demonstrating knowledge of:
* Database Design
* Model Relationships
* Migrations
* Seeding
* Interface/Repository Patterns
* Simple Api design
* Redis Session
* Dusk
* Telescope

## Steps to Install Locally 
* Clone Repo
* Install Composer dependencies [composer update]
* Wait a minute, its not easy to compose
* Create .env file from .example [cp .env.example .env]
* Generate Key [php artisan key:generate]
* Create Database: Laravel_blog [update env]
* Migrate Database Schema [php artisan migrate]
* Seed Database [php artisan db:seed]
* Serve Locally. Make sure to update APP_URL in .env with local port. (e.g. localhost:8000) [php artisan:serve]
* Start Redis
* Optionally Update Dusk Chrome Driver. (Suggested on Windows) [php artisan dusk:chrome-driver 74]
* Run Tests [php artisan dusk]
* visit localhost:8000 (or your url) to see my Blog!

## Design Process
Whiteboarding: ![Alt][1]

[1]: /resources/img/whiteboard.jpg "Whiteboard"


Entity Relationship Diagram: ![Alt][2]

[2]: /resources/img/er_diagram.PNG "Entity Relationship Diagram"