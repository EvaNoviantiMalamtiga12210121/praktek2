<?php

namespace App\Database\Seeds;

use App\Models\PenggunaModel;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
      $id = (new PenggunaModel())->insert([
       ['nama'=>'Administrator'],
        ['gender'=> 'P'],
        ['email'=>'12210121@bsi.ac.id'],
        ['sandi'=> password_hash('Pontianak80',PASSWORD_BCRYPT)],
        
      ]);
      echo"hasil id =$id";
}
}