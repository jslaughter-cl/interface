<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class create_user_roles_table extends \Illuminate\Database\Migrations\Migration
{
    public function up(): void
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id("user_role_id")->primary();
            $table->integer("user_id");
            $table->string("role_id");
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->useCurrent();
            $table->string("deleted_at")->nullable();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id("role_id")->primary();
            $table->string("role_name", 255);
            $table->string("role_description", 255);
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->useCurrent();
            $table->string("deleted_at")->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_roles');
        Schema::dropIfExists('roles');
    }
}
