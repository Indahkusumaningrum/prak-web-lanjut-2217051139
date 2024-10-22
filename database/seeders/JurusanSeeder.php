<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserModel;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Ilmu Komputer',
            'Kimia',
            'Biologi',
            'Matematika',
            'Fisika',
        ];

        // foreach ($data as $user) {
        //     UserModel::create([
        //         'jurusan' => $user,
        //     ]);
        // }
    }
}
