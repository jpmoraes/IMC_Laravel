<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FaixaModel;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{


    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categorias = [
            'abaixo',
            'normal',
            'obsidade grau I',
            'obsidade grau II',
            'obsidade grau III'
        ];
        // User::factory(10)->create();

        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('Teste'),
        ]);
        
        foreach ($categorias as $categoria) {
            FaixaModel::create([
                'categoria' => $categoria
            ]);
        }
    }
}
