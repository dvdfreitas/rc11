# Instalação

## Laravel

```
composer create-project laravel/laravel example-app
```

## Jetstream

Para fazer o login.

```
composer require laravel/jetstream
```

Com livewire:

```
php artisan jetstream:install livewire
```

# Configuração

Editar o ```.env```. No mínimo trocar o nome da base de dados:

DB_DATABASE=rc11
DB_USERNAME=root
DB_PASSWORD=

## Executar

Correr o servidor:

php artisan serve

## Erros

# SQLSTATE[HY000] [2002] Connection refused

# SQLSTATE[HY000] [1049] Unknown database 'rc11'

# SQLSTATE[42S02]: Base table or view not found: 1146 Table 'rc11.sessions' doesn't exist


# Routing

Ver ficheiro ```web.php```

```
Route::get('/', function () {
    return view('welcome');
});
```
# Tailwind

```
<script src="https://cdn.tailwindcss.com"></script>
```