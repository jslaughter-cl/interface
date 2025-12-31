<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class create_leads_table extends \Illuminate\Database\Migrations\Migration
{
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id("lead_id")->primary();
            $table->integer("user_id");
            $table->integer("client_id");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("email");
            $table->string("cell");
            $table->string("status");
            $table->string("address");
            $table->string("comments");
            $table->string("lead_type");
            $table->jsonb("outcome");
            $table->jsonb("details");
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->useCurrent();
            $table->string("deleted_at")->nullable();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
}
