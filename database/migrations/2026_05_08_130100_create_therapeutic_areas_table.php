<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('therapeutic_areas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('sub_title')->nullable();
            $table->text('sort_description')->nullable();
            $table->text('approach_description')->nullable();
            $table->string('button_text')->nullable();
            $table->string('status')->default('Active');
            $table->string('image')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('therapeutic_areas')->insert([
            [
                'category_id' => 1,
                'sub_title' => 'Restoring Vitality through Precision',
                'sort_description' => "Managing cardiovascular and chronic conditions requires therapeutic consistency, patient safety, and dependable treatment support. Alvio's focused formulations are designed to support long-term care management with confidence.",
                'approach_description' => "Advanced formulations designed for chronic care support.\nFocused therapeutic strategies for long-term management.\nPatient-centric solutions aligned with treatment continuity.\nReliable quality standards across every formulation.",
                'button_text' => 'Explore Cardiology & Chronic Care',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'sub_title' => 'Dermatology & Cosmetology',
                'sub_title' => 'The Science of Skin Integrity',
                'sort_description' => 'Healthy skin requires targeted care backed by science and formulation expertise. Our dermatology portfolio is designed to support skin balance, barrier protection, and visible skin wellness through clinically focused solutions.',
                'approach_description' => "Targeted formulations for acne-prone and sensitive skin.\nBarrier-supportive ingredients for skin wellness.\nNon-comedogenic and skin-friendly compositions.\nDesigned for visible skin comfort and care.",
                'button_text' => 'Explore Dermatology & Cosmetology',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'sub_title' => 'Diabetology & Metabolic Care',
                'sub_title' => 'Mastering Metabolic Equilibrium',
                'sort_description' => "Effective metabolic care depends on consistency, therapeutic balance, and patient-focused innovation. Alvio's diabetology range supports modern treatment pathways through quality-driven formulations.",
                'approach_description' => "Formulations designed to support metabolic balance.\nPatient-focused therapeutic care strategies.\nReliable quality for long-term treatment support.\nScience-backed approach across diabetic care solutions.",
                'button_text' => 'Explore Diabetology & Metabolic Care',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'sub_title' => 'Nutraceuticals',
                'sub_title' => 'Preventive Wellness, Redefined',
                'sort_description' => "Wellness today requires proactive nutritional support backed by science and quality assurance. Alvio's nutraceutical portfolio is developed to support daily wellness, immunity, and lifestyle-focused health needs.",
                'approach_description' => "Carefully selected wellness-focused ingredients.\nQuality-driven formulations for daily health support.\nScience-backed nutritional supplementation.\nDesigned to support modern preventive wellness.",
                'button_text' => 'Explore Nutraceuticals',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('therapeutic_areas');
    }
};
