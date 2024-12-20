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
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->timestamp('submitted_at')->nullable();
            $table->string('full_name');
            $table->string('father_or_husband_name');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->string('contact_number_1');
            $table->string('contact_number_2')->nullable();
            $table->text('residential_address');
            $table->string('current_city'); // Assuming a relation with City table
            $table->string('email')->unique();
            $table->date('date_of_birth');
            $table->string('qualification');
            $table->string('teaching_experience');
            $table->string('tuition_duration');
            $table->string('minimum_monthly_fee_home');
            $table->string('currency');
            $table->string('minimum_monthly_fee_online');
            $table->text('specialties');
            $table->string('home_tuition_type');
            $table->string('referral_source');
            $table->boolean('can_teach_professionals')->default(false);
            $table->text('query')->nullable();
            $table->text('additional_comments')->nullable();
            $table->text('google_map_location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutors');
    }
};
