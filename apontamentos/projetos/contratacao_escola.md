# Contratação de escola

## Representação da informação

### Implementação

Vamos criar um novo modelo, com migração, controlador e seeder.

```
php artisan make:model Job -mcs
```

Na tabela jobs vamos ter os seguintes campos:

```
Schema::create('jobs', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->integer('number')->nullable();
    $table->string('recruitment_group')->nullable();
    $table->year('school_year');
    $table->timestamps();
});
```

## Criação do componente

Para fazer a criação dinâmica dos horários, iremos usar um componente Livewire.

Nota: Deverá relembrar as vantagens e desvantagens de usar um componente Livewire.

```
php artisan livewire:make jobs.create
```

Irão ser criados os seguintes ficheiros:

```
CLASS: app/Http/Livewire/Jobs/Create.php
VIEW:  resources/views/livewire/jobs/create.blade.php
```

Iremos colocar os campos a atualizar na BD como variáveis públicas do Livewire.
