<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Ejecuta las migraciones.
     * Este método se llama cuando ejecutas 'php artisan migrate'.
     * Aquí definimos qué tablas y columnas queremos crear en la base de datos.
     */
    public function up(): void
    {
        // Crea la tabla 'users' (usuarios)
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Crea una columna 'id' autoincremental (llave primaria)
            $table->string('name'); // Crea una columna 'name' (nombre) de tipo texto
            $table->string('email')->unique(); // Crea una columna 'email' que debe ser única (no repetida)
            $table->timestamp('email_verified_at')->nullable(); // Fecha de verificación de email, puede ser nula (vacía)
            $table->string('password'); // Columna para la contraseña
            $table->rememberToken(); // Crea columna 'remember_token' para la funcionalidad de "recordarme"
            $table->timestamps(); // Crea columnas 'created_at' y 'updated_at' automáticamente
        });

        // Crea la tabla 'password_reset_tokens' para restablecer contraseñas
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // El email es la llave primaria aquí
            $table->string('token'); // El token de seguridad para el reset
            $table->timestamp('created_at')->nullable(); // Fecha de creación
        });

        // Crea la tabla 'sessions' para manejar sesiones de usuario en base de datos
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // ID de la sesión
            $table->foreignId('user_id')->nullable()->index(); // ID del usuario asociado (puede ser nulo si es invitado)
            $table->string('ip_address', 45)->nullable(); // Dirección IP del usuario
            $table->text('user_agent')->nullable(); // Información del navegador
            $table->longText('payload'); // Datos de la sesión
            $table->integer('last_activity')->index(); // Última actividad (timestamp)
        });
    }

    /**
     * Reverse the migrations.
     * Revierte las migraciones.
     * Este método se llama cuando ejecutas 'php artisan migrate:rollback'.
     * Aquí definimos cómo deshacer lo que hicimos en el método up() (borrar las tablas).
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Elimina la tabla 'users' si existe
        Schema::dropIfExists('password_reset_tokens'); // Elimina la tabla 'password_reset_tokens'
        Schema::dropIfExists('sessions'); // Elimina la tabla 'sessions'
    }
};
