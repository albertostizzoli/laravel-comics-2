## esercizio di oggi: LARAVEL-COMICS-2

## nome repo: laravel-comics-2

## 1'Parte: 08/01/2024
Oggi create un nuovo progetto Laravel 9 per gestire un archivio di fumetti.

## Milestone 1

Tramite gli appositi comandi artisan create un model con relativa migration e seeder e resource controller.
Editate la resource route

## Milestone 2

Iniziate a definire le prime operazioni CRUD con le relative view dove necessarie:
- index()
- show()
- create()
- store() (solo dump dei dati)

## Bonus:

Procedere con il salvataggio dei dati sul db

## 2'Parte: 09/01/2024

## nome repo: laravel-comics-2 (la stessa di ieri)

Ciao ragazzi,
oggi lavorate sulla stessa repo di ieri e completate le operazioni CRUD.

## Bonus:
Aggiungere validazioni e messaggi di errore e alla cancellazione messaggio di conferma all'utente


# copio file .env.example e lo rinomino in .env

composer install

php artisan key:generate

npm install

# creo il database da phpmyadmin

# inserisco i dati per il collegamento al db in env



#creo migration
php artisan make:migration create_nome_tabella_table
php artisan make:migration update_users_table --table=users
php artisan make:migration add_phone_number_to_users_table

#lanciare migration
php artisan migrate

#revert migration
php artisan migrate:rollback

#popolare il db
php artisan make:seeder UsersTableSeeder

php artisan db:seed --class=usersSeeder


# per creare le nuove rotte
php artisan route:list --except-vendor

# per creare i nuovi controller
php artisan make:controller NomeController --resource

# preparo le rotte file web.php es. 
Route::get('/books', [BookController::class, 'index'])->name('books.index');

# creo controller
php artisan make:controller NomeController

#creo model
php artisan make:model Nome

# creo le views relative


# per creare tutto model controller migration seeder
php artisan make:model Comic -rcms


composer dump-autoload
