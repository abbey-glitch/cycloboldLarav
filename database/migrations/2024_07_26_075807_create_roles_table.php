<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->uuid("role_unique_id");
            $table->string("role_name");
            $table->string("role_display_name");
            $table->text("role_description");
            $table->text("privileges_ids")->nullable(); //the ids of the privileges 
            $table->text("admins_ids")->nullable(); //the admin ids that are in this particular role
            $table->boolean("is_default_role")->default(true); //whether this role is default or not
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
