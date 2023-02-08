/* php artisan make:migration crear_tabla_pedidos --create=pedidos
            php artisan make:migration nuevo_campo_usuario --table=usuarios 

            Schema::table('usuarios', function(Blueprint $tabla) {
                $tabla->string('telefono')->after('email')->nullable();
                });
            
            php artisan migrate (up)
            php artisan migrate:rollback (down)
            php artisan migrate:fresh (relanzar las migraciones)
            //php artisan route:list
                */