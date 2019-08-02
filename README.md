# laravel_blog

Laravel Project demonstrating knowledge of:
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
* Generate Key (php artisan key:generate)
* Create Database: Laravel_blog
* Create .env file from .example (mv .env.example .env), and update DB credentials
* Migrate Database Schema (php artisan:migrate)
* Seed Database (php artisan:seed)
* Serve Locally (php artisan:serve)
* visit localhost:8000 (or your url) to see my Blog!

## Design Process
Whiteboarding: ![Alt][1]

[1]: /resources/img/whiteboard.jpg "Whiteboard"


Entity Relationship Diagram: ![Alt][2]

[2]: /resources/img/er_diagram.PNG "Entity Relationship Diagram"