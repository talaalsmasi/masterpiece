<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'title' => 'The Joy of Pets',
                'image' => 'img/posts/post1.jpg',
                'content' => 'Pets bring joy and companionship to our lives.',
                'likes' => 12,
            ],
            [
                'user_id' => 1,
                'title' => 'Caring for Your Dog',
                'image' => 'img/posts/post2.png',
                'content' => 'Essential tips for dog care and training.',
                'likes' => 20,
            ],
            [
                'user_id' => 2,
                'title' => 'The Best Cat Breeds',
                'image' => 'img/posts/post3.png',
                'content' => 'Discover the most popular cat breeds around the world.',
                'likes' => 18,
            ],
            [
                'user_id' => 2,
                'title' => 'Birds as Pets',
                'image' => 'img/posts/post4.jpg',
                'content' => 'What you need to know before getting a pet bird.',
                'likes' => 5,
            ],
            [
                'user_id' => 3,
                'title' => 'Rabbit Care Basics',
                'image' => 'img/posts/post5.jpg',
                'content' => 'Learn how to take care of your rabbit properly.',
                'likes' => 9,
            ],
            [
                'user_id' => 3,
                'title' => 'Flea Prevention',
                'image' => 'img/posts/post6.jpg',
                'content' => 'Keep your pets flea-free with these simple steps.',
                'likes' => 7,
            ],
            [
                'user_id' => 4,
                'title' => 'Healthy Diet for Pets',
                'image' => 'img/posts/post7.jpg',
                'content' => 'What to feed your pets for a balanced diet.',
                'likes' => 15,
            ],
            [
                'user_id' => 4,
                'title' => 'Training Your Puppy',
                'image' => 'img/posts/post8.jpg',
                'content' => 'Basic training techniques for your new puppy.',
                'likes' => 14,
            ],
            [
                'user_id' => 5,
                'title' => 'Pet Vaccinations',
                'image' => 'img/posts/post9.jpg',
                'content' => 'Understanding the importance of vaccinations for pets.',
                'likes' => 10,
            ],
            [
                'user_id' => 5,
                'title' => 'The Benefits of Pet Insurance',
                'image' => 'img/posts/post10.png',
                'content' => 'Why you should consider getting pet insurance.',
                'likes' => 8,
            ],
            [
                'user_id' => 6,
                'title' => 'Traveling with Pets',
                'image' => 'img/posts/post11.png',
                'content' => 'Tips for a stress-free journey with your furry friends.',
                'likes' => 6,
            ],
            [
                'user_id' => 6,
                'title' => 'Understanding Pet Behavior',
                'image' => 'img/posts/post12.jpg',
                'content' => 'Learn about common pet behaviors and how to address them.',
                'likes' => 11,
            ],
            [
                'user_id' => 7,
                'title' => 'Adopting a Shelter Pet',
                'image' => 'imgs/posts/post13.jpg',
                'content' => 'How to prepare for bringing home a shelter pet.',
                'likes' => 4,
            ],
            [
                'user_id' => 7,
                'title' => 'Seasonal Pet Care Tips',
                'image' => 'img/posts/post14.jpg',
                'content' => 'Adjusting your pet care routine with the changing seasons.',
                'likes' => 5,
            ],
            [
                'user_id' => 8,
                'title' => 'Pet Grooming Essentials',
                'image' => 'img/posts/post15.jpg',
                'content' => 'What you need for effective pet grooming at home.',
                'likes' => 9,
            ],
        ]);
    }
}

