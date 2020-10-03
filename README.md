## UserControl
 
This is an Back-end API for User Registration.

You can create, list, update and show users, with a JSON response.

An PHP Laravel 8 API, with JWT tokenizer to keep data safe from invasors and with MVC structure.

The AdminController is responsable for any function protected from another logged users, for example, delete and create users, as same a list of all users registered and logs.

UserController contains another functions less sensitive, like your own data and update your register.

For example, has a admin user on database with email "professorx@seventh.com" with pass "senha123" and a common user register with email "harry@seventh.com" with same pass "senha123".

So, this is it... 

Thanks people!!!
 
## Technology 
 
Here are the technologies used in this project.

* Composer (For dependencies)
* Laravel 8
* SQLite3 
* JWT Authentication


## Getting started

* First you need clone this repository!

* To install dependencies:
>   $ composer install

* .Env configuration:
>   Rename .env.example to .env and change the DB_DATABASE to your own absolute path to userscontrol.sqlite.
>   Somenthing like this: "C:/Projeto/UserControl/database/userscontrol.sqlite"

* Database Configuration
>   The .sqlite file is included with repository, on "/database" direcotry

* To run the project:
>   $ php artisan serve
 
## How to use
 
    The DB was previously created and with some data, but you can run [$ php artisan migrate:fresh] on you terminal to recreate the tables and
    [$ php artisan db:seed] to populate with some data.
    
   **The routes defined are:**
    
    - api/auth/login         -> POST - This route receive an email and a password to login.
    
   **Routes for any logged user:**
   
    - api/user/me            -> GET - This route get all logged user data.
    - api/auth/logout        -> POST - Logout user.
    
   **Routes for admin (Admin is defined by "permission = 1" on table users):**
    
    - api/user/{id}          -> GET - This route is used to get all data from any user by id.
    - api/user/update/{id}   -> PUT - Update a user by your id.
    - api/user/delete/{id}   -> DELETE - Destroy users by id parameter.
    - api/user/store         -> POST - Create new user.
    - api/user               -> GET - List all users in database.
    - api/logs               -> GET - List all logs registered on database.
 
   **The parameters for new users are:**
      
        'name'           -> string
        'email'          -> unique, string
        'phone'          -> string
        'address'        -> string
        'cpf'            -> unique, string
        'permission'     -> int
        'password'       -> bcrypt('string')
    
   _Phone and CPF are just a string, without any verification in this first version._
 
## Links
 
  - Link of deployed application: _Maybe soon_
  - Repository: https://github.com/gabebruno/UserControl 
 
## Versioning
 
1.0.0.0
 
 
## Authors
 
* **Gabriel Bruno Almeida**: @gabebruno (https://github.com/gabebruno)

