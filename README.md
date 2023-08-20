# Implementing Fluent Interfaces in Laravel Components

```php
Route::get('/', function () {
    $card = Card::build()
        ->sections([
            TextField::build()
                ->label('Nombre')
                ->value('Miguel'),
            TextField::build()
                ->label('Apellidos')
                ->value('Lopez Ariza'),
        ])->sections([
            TextField::build()
                ->label('Correo')
                ->value('lopezarizamiguel@gmai.com'),
            TextField::build()
                ->label('Telefono')
                ->value('3015575900')
        ])->render();

    return view('welcome', [
        'card' => $card,
    ]);
});
```
