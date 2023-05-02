# Apontamentos

[Cascade Style Sheet (CSS)](apontamentos/css.md)

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
# Instalação

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

# Seeder

É muito importante para testar um site que ele tenha informação 

DatabaseSeeder.php

\App\Models\User::factory(100)->create();

# Factories

Uma das 

# Criação de um modelo

```
php artisan make:model Story -mcfs
```

## Alterar a migração

No ficheiro :

```
Schema::create('stories', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('image')->nullable();
    $table->text('description');
    $table->timestamps();
});
```

Para executar o migração e alterar a BD, vou fazer:

```
php artisan migrate
```

É possível voltar atrás com:

```
php artisan migrate:rollback
```

# Estudantes

```
php artisan make:model Student -mcfs
```

2023_01_25_152849_create_students_table

# Erros

## Add [id] to fillable property to allow mass assignment on [App\Models\Student]