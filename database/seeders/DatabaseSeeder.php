<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Basicinfo;
use App\Models\Contact;
use App\Models\Socialmedia;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Contact::create([
            'contact_phone_one' => '+91 123 456 789 0 ',
            'contact_phone_two' => '+91 123 456 788 0 ',
            'contact_email_one' => 'prizzon@gmail.com',
            'contact_email_two' => 'pizza@gmail.com',
            'contact_address_one' => '20 Carrochan Rd, Balloch, Alexandria G83 8EG, UK 69QJ+2F Alexandria, United Kingdom',
            'contact_address_two' => '',
            'contact_status' => 1,
        ]);

        Socialmedia::create([
            'sm_facebook' => 'facebook',
            'sm_twitter' => 'twitter',
            'sm_linkedin' => 'linkdin',
            'sm_dribbble' => 'dribble',
            'sm_youtube' => 'youtube',
            'sm_slack' => '',
            'sm_instagram' => '',
            'sm_behance' => '',
            'sm_google' => '',
            'sm_reddit' => '',
            'sm_status' => 1,
        ]);
    }
}
