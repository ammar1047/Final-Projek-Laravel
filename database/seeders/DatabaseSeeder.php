<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\LetterTemplate;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seeder untuk EmployeeUser
        User::create([
            'name' => 'Admin HRD',
            'email' => 'admin@company.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        // Seeder untuk LetterTemplate
        LetterTemplate::insert([
            [
                'title' => 'Surat Cuti',
                'file_path' => 'templates/surat_cuti.docx',
                'category' => 'Cuti',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Surat Keterangan',
                'file_path' => 'templates/surat_keterangan.docx',
                'category' => 'Keterangan',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
