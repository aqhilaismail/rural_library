<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        User::factory(10)->create([
            //overwrite role and password provided by factory
            'role' => 'Supervisor',
            'password' => bcrypt('supervisor123')
        ]);

        User::factory(20)->create([
            'role' => 'Volunteer',
            'password' => bcrypt('volunteer123')
        ]);

        Book::factory(300)->create();

        Member::factory(50)->create();

        Loan::factory(100)->create();
    }
}
