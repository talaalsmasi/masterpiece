<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event; // تأكد من وجود الموديل
use Carbon\Carbon;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // إضافة بيانات تجريبية للأحداث
        Event::insert([
            [
                'title' => 'Pet Care Workshop',
                'description' => 'Learn about pet care and grooming.',
                'event_date' => '2024-11-10',
                'event_time' => '10:00:00',
                'capacity' => 50,
                'registered_count' => 20,
                'image' => 'img/events/event1.jpg', // مسار الصورة
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Pet Care Workshop',
                'image' => 'img/events/event1.jpg',
                'description' => 'Learn about pet care and grooming.',
                'capacity' => 50,
                'registered_count' => 50, // السعة مكتملة
                'event_date' => Carbon::create('2024', '11', '10'),
                'event_time' => '10:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Animal Rescue Fundraiser',
                'image' => 'img/events/event2.jpg',
                'description' => 'Join us to support animal rescue initiatives.',
                'capacity' => 100,
                'registered_count' => 100, // السعة مكتملة
                'event_date' => Carbon::create('2024', '12', '01'),
                'event_time' => '18:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Animal Rescue Fundraiser',
                'description' => 'Join us to support animal rescue initiatives.',
                'event_date' => '2024-12-01',
                'event_time' => '18:00:00',
                'capacity' => 100,
                'registered_count' => 60,
                'image' => 'img/events/event2.jpg', // مسار الصورة
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // يمكنك إضافة المزيد من الأحداث بهذه الطريقة
        ]);
    }
}
