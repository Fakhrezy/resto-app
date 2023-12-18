<?php

namespace Database\Seeders;

use App\Models\pelanggan;
use Illuminate\Database\Seeder;

class pelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelanggan = new pelanggan();
        $pelanggan->fill([
            'nama' => 'Dadang',
            'no_telp' => '08178576741',
            'alamat' => 'Cihapit',
        ]);
        $pelanggan->save();
    }
}
