<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductService;
use App\Models\User;
use App\Models\BusinessBackground;

class ProductServiceSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();
        $business = BusinessBackground::first();

        if ($user && $business) {
            ProductService::create([
                'user_id' => $user->id,
                'business_background_id' => $business->id,
                'type' => 'product',
                'name' => 'Smart Business Planner Software',
                'description' => 'Software lengkap untuk perencanaan bisnis dengan fitur analisis pasar, forecasting, dan business model canvas integration.',
                'price' => 2990000,
                'advantages' => 'User-friendly interface, real-time analytics, comprehensive reporting, cloud-based solution',
                'development_strategy' => 'Continuous improvement based on user feedback, regular feature updates, integration with popular business tools',
                'status' => 'launched'
            ]);

            ProductService::create([
                'user_id' => $user->id,
                'business_background_id' => $business->id,
                'type' => 'service',
                'name' => 'Business Consultation Package',
                'description' => 'Layanan konsultasi bisnis profesional untuk startup dan UMKM dengan pendekatan personalized.',
                'price' => 1500000,
                'advantages' => 'Expert consultants, customized solutions, ongoing support, proven methodologies',
                'development_strategy' => 'Expand consultant network, develop specialized industry packages, create online learning resources',
                'status' => 'in_development'
            ]);
        }
    }
}
