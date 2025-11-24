# Comandos

# Crear controlador

php artisan make:controller ControladorNombre

# Crear modelo (con migracion) debido al comando -m

php artisan make:model ModeloNombre -m

# Crear migracion

php artisan make:migration nombre_de_la_tabla --create=nombre_de_la_tabla

# Crear controlador y modelo

php artisan make:controller ControladorNombre --model=ModeloNombre
