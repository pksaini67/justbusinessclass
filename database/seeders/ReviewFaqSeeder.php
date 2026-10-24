<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Review;
use App\Support\HomeContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewFaqSeeder extends Seeder
{
    public function run(): void
    {
        $content = HomeContent::get();

        // Seed Reviews
        foreach ($content['testimonials'] as $index => $t) {
            Review::updateOrCreate(
                ['author' => $t['author']],
                [
                    'quote' => $t['quote'],
                    'role' => $t['role'],
                    'city' => $t['city'],
                    'route' => $t['route'],
                    'rating' => $t['rating'] ?? 5,
                    'is_active' => true,
                    'is_featured' => true,
                    'sort_order' => $index + 1,
                ]
            );
        }

        // Seed FAQs
        foreach ($content['faqs'] as $index => $faq) {
            Faq::updateOrCreate(
                ['question' => $faq['question']],
                [
                    'answer' => $faq['answer'],
                    'category' => 'General',
                    'is_active' => true,
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}
