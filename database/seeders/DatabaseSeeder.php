<?php

namespace Database\Seeders;

use App\Models\Acara;
use App\Models\Comitte;
use App\Models\Doc;
use App\Models\News;
use App\Models\Participant;
use App\Models\Poster;
use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        Status::create([
            'name' => 'pending',
        ]);

        Status::create([
            'name' => 'aproved',
        ]);

        Status::create([
            'name' => 'started',
        ]);

        Status::create([
            'name' => 'finished',
        ]);

        Role::create([
            'name' => 'admin',
        ]);

        Role::create([
            'name' => 'user',
        ]);

        Role::create([
            'name' => 'supervisor',
        ]);

        User::factory(50)->create();
        Poster::factory(20)->create();
        Participant::factory(40)->create();
        News::factory(10)->create();
        Acara::factory(10)->create();
        Doc::factory(20)->create();
        Comitte::factory(10)->create();
    }
}
