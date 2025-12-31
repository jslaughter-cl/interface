<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class create_clients_table extends \Illuminate\Database\Migrations\Migration
{
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id("client_id")->primary();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('cell');
            $table->string('id_number')->unique();
            $table->jsonb('details');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->string('deleted_at')->nullable();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
}
