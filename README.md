## esercizio di oggi:

## nome repo: laravel-comics

Create un nuovo progetto Laravel. Concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.

## Bonus:
Create più pagine istituzionali che condividono lo stesso layout (utilizzando il routing)


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
