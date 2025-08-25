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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('student_id');
            $table->string('institution');
            $table->string('level');
            $table->string('major');
            $table->string('grade');
            $table->string('category');
            $table->string('participation_type');
            $table->string('team_name')->nullable();
            $table->text('team_members')->nullable();
            $table->string('project_title');
            $table->text('project_description');
            $table->string('student_card_path')->nullable();
            $table->string('active_student_path')->nullable();
            $table->string('payment_proof_path')->nullable();
            $table->boolean('terms_accepted')->default(false);
            $table->boolean('newsletter_subscribed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
