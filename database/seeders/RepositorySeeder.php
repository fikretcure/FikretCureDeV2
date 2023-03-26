<?php

namespace Database\Seeders;

use App\Models\Repository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RepositorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Repository::create([
            'name' => 'DocumentService',
        ]);

        Repository::create([
            'name' => 'LogService',
        ]);

        Repository::create([
            'name' => 'EmailService',
        ]);

        Repository::create([
            'name' => 'BookCase',
        ]);

        Repository::create([
            'name' => 'AuthServiceJwt',
        ]);

        Repository::create([
            'name' => 'Gateway',
        ]);
    }
}
