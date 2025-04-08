<?php

namespace Database\Seeders;

use App\Http\Controllers\anggota;
use App\Http\Controllers\Member;
use App\Models\anggota as ModelsAnggota;
use App\Models\Member as ModelsMember;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        ModelsMember::factory(5)->create([
            'nama' => '-',
            'kampus' => '-',
            'moto' => '-',
            'foto' => 'noimage.png'
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
