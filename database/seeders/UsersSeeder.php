<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'muna muhammad',
                'email' => 'muna@gmail.com',
                'phone' => '0771234567',
                'password' => Hash::make('muna@123'),
                'role_id' => 2,
                'image' => 'img/users/user1.jpg',
            ],
            [
                'name' => 'Amjad muhammad',
                'email' => 'amjad@gmail.com',
                'phone' => '0771234567',
                'password' => Hash::make('amjad@123'),
                'role_id' => 2,
                'image' => 'img/users/user15.jpg',
            ],
            [
                'name' => 'abdallah amjad',
                'email' => 'abdallah@gmail.com',
                'phone' => '0791547531',
                'password' => Hash::make('abdallah@123'),
                'role_id' => 1,
                'image' => 'img/users/user25.jpg',
            ],
            [
                'name' => 'Hala Yousef',
                'email' => 'halamuhammad@gmail.com',
                'phone' => '0791447531',
                'password' => Hash::make('hala@123'),
                'role_id' => 3,
                'image' => 'img/doctors/doc2.jpg',
            ],
            [
                'name' => 'Ahmad Salman',
                'email' => 'ahmadsalman@gmail.com',
                'phone' => '0791549431',
                'password' => Hash::make('ahmad@123'),
                'role_id' => 3,
                'image' => 'img/doctors/doc5.jpg',
            ],
            [
                'name' => 'Rama Ahmad',
                'email' => 'ramaahmad@gmail.com',
                'phone' => '0782371678',
                'password' => Hash::make('rama@123'),
                'role_id' => 3,
                'image' => 'img/doctors/doc7.jpg',
            ],
            [
                'name' => 'doaa alzaabi',
                'email' => 'doaa@gmail.com',
                'phone' => '0793456789',
                'password' => Hash::make('doaa@123'),
                'role_id' => 2,
                'image' => 'img/users/user2.jpg',
            ],
            [
                'name' => 'deema alsaadi',
                'email' => 'deema@gmail.com',
                'phone' => '0774567890',
                'password' => Hash::make('deema@123'),
                'role_id' => 2,
                'image' => 'img/users/user3.jpg',
            ],
            [
                'name' => 'taghreed alahmad',
                'email' => 'taghreed@gmail.com',
                'phone' => '0785678901',
                'password' => Hash::make('taghreed@123'),
                'role_id' => 2,
                'image' => 'img/users/user4.jpg',
            ],
            [
                'name' => 'nuha alsharif',
                'email' => 'nuha@gmail.com',
                'phone' => '0796789012',
                'password' => Hash::make('nuha@123'),
                'role_id' => 2,
                'image' => 'img/users/user5.jpg',
            ],
            [
                'name' => 'ahmad abbas',
                'email' => 'ahmad@gmail.com',
                'phone' => '0777890123',
                'password' => Hash::make('ahmad@123'),
                'role_id' => 2,
                'image' => 'img/users/user16.jpg',
            ],
            [
                'name' => 'layla alhussein',
                'email' => 'layla@gmail.com',
                'phone' => '0788901234',
                'password' => Hash::make('layla@123'),
                'role_id' => 2,
                'image' => 'img/users/user6.jpg',
            ],
            [
                'name' => 'zeina alhaj',
                'email' => 'zeina@gmail.com',
                'phone' => '0799012345',
                'password' => Hash::make('zeina@123'),
                'role_id' => 2,
                'image' => 'img/users/user7.jpg',
            ],
            [
                'name' => 'raed aljuhani',
                'email' => 'raed@gmail.com',
                'phone' => '0770123456',
                'password' => Hash::make('raed@123'),
                'role_id' => 2,
                'image' => 'img/users/user17.jpg',
            ],
            [
                'name' => 'lina alqattan',
                'email' => 'lina@gmail.com',
                'phone' => '0781234567',
                'password' => Hash::make('lina@123'),
                'role_id' => 2,
                'image' => 'img/users/user8.jpg',
            ],
            [
                'name' => 'osama alsadi',
                'email' => 'osama@gmail.com',
                'phone' => '0792345678',
                'password' => Hash::make('osama@123'),
                'role_id' => 2,
                'image' => 'img/users/user18.jpg',
            ],
            [
                'name' => 'sara alsaeed',
                'email' => 'sara@gmail.com',
                'phone' => '0773456789',
                'password' => Hash::make('sara@123'),
                'role_id' => 2,
                'image' => 'img/users/user9.jpg',
            ],
            [
                'name' => 'ahmad alzahrani',
                'email' => 'ahmad.alzahrani@gmail.com',
                'phone' => '0784567890',
                'password' => Hash::make('ahmad@123'),
                'role_id' => 2,
                'image' => 'img/users/user19.jpg',
            ],
            [
                'name' => 'fatima alshehri',
                'email' => 'fatima.al@gmail.com',
                'phone' => '0795678901',
                'password' => Hash::make('fatima@123'),
                'role_id' => 2,
                'image' => 'img/users/user10.jpg',
            ],
            [
                'name' => 'ali alshehri',
                'email' => 'ali.alshehri@gmail.com',
                'phone' => '0776789012',
                'password' => Hash::make('ali@123'),
                'role_id' => 2,
                'image' => 'img/users/user20.jpg',
            ],
            [
                'name' => 'ahmed alhassan',
                'email' => 'ahmed.alhassan@gmail.com',
                'phone' => '0787890123',
                'password' => Hash::make('ahmed@123'),
                'role_id' => 2,
                'image' => 'img/users/user21.jpg',
            ],
            [
                'name' => 'nour alharthy',
                'email' => 'nour@gmail.com',
                'phone' => '0798901234',
                'password' => Hash::make('nour@123'),
                'role_id' => 2,
                'image' => 'img/users/user11.jpg',
            ],
            [
                'name' => 'hanan alshami',
                'email' => 'hanan@gmail.com',
                'phone' => '0779012345',
                'password' => Hash::make('hanan@123'),
                'role_id' => 2,
                'image' => 'img/users/user12.jpg',
            ],
            [
                'name' => 'osman alsharif',
                'email' => 'osman@gmail.com',
                'phone' => '0780123456',
                'password' => Hash::make('osman@123'),
                'role_id' => 2,
                'image' => 'img/users/user22.jpg',
            ],
            [
                'name' => 'sami alghamdi',
                'email' => 'sami@gmail.com',
                'phone' => '0791234567',
                'password' => Hash::make('sami@123'),
                'role_id' => 2,
                'image' => 'img/users/user23.jpg',
            ],
            [
                'name' => 'halima alsahafi',
                'email' => 'halima@gmail.com',
                'phone' => '0772345678',
                'password' => Hash::make('halima@123'),
                'role_id' => 2,
                'image' => 'img/users/user13.jpg',
            ],
            [
                'name' => 'khaled alali',
                'email' => 'khaled@gmail.com',
                'phone' => '0783456789',
                'password' => Hash::make('khaled@123'),
                'role_id' => 2,
                'image' => 'img/users/user24.jpg',
            ],
            [
                'name' => 'amal alshahrani',
                'email' => 'amal@gmail.com',
                'phone' => '0794567890',
                'password' => Hash::make('amal@123'),
                'role_id' => 2,
                'image' => 'img/users/user14.jpg',
            ],
            [
                'name' => 'lamia alghamdi',
                'email' => 'lamia@gmail.com',
                'phone' => '0775678901',
                'password' => Hash::make('lamia@123'),
                'role_id' => 2,
                'image' => 'img/users/user15.jpg',
            ],
        ]);
    }
}
