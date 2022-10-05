<?php

namespace App\Database\Seeds;

use App\Models\KategoriModel;
use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
     (new KategoriModel())->insert([
        ['kategori'=>'Surat Masuk'],
        ['kategori'=> 'Surat Keluar'],
        ['kategori'=>'Dokumen Rahasia'],
        
      ]);
      
}
}