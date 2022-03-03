# pokemon-challenge

The project is based on Laravel 8.

A database can be created by running a migration.
The database can be filled by running DatabaseCreator::fill_database() in the artisan tinker.
Also an user can be created with UserCreator::create_user(['username' => 'name', 'password' => 'password']).

The project has basic functionalities like listing all Pokemons, viewing details of selected one and editing the data.
The data can be accessed by api. It's necessary to get an api key first. That's done by calling /api/token, and providing username and password in the header. The received token then needs to be provided in the header for other requests, with 'token' key.

The next steps for the develompent of the app would be to make a proper login page and use one of the starter kits for authentification.
Also, the database needs further development, creating a table for descriptions and for image paths, for a start.
And of course, the app needs further frontend development.
