<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Цикл для добавления 10 записей
        for ($i = 0; $i < 10; $i++) {
            DB::table('clients')->insert([
                'name' => Str::random(10),    // Генерирует случайное имя
                'inn' => Str::random(10),     // Генерирует случайный ИНН
            ]);
        }
    }
}
