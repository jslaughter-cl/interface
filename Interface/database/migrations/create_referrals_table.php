<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class create_referrals_table extends \Illuminate\Database\Migrations\Migration
{
    public function up(): void
    {
        Schema::create('referrals', function (Blueprint $table) {
            $table->id("referral_id")->primary();
            $table->string("referral");
            $table->integer("client_id");
            $table->integer("user_id");
            $table->integer("lead_id");
            $table->jsonb("request");
            $table->jsonb("response");
            $table->string("external_id");
            $table->string("external_reference");
            $table->string("status");
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->useCurrent();
            $table->string("deleted_at")->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('referrals');
    }
}
