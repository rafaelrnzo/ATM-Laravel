<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Transaction;
use App\Models\Transfer;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'name' => 'Rafael',
        'email' => 'rafael@gmail.com',
        'password' => 'rafael12',
        'rekening' => '12341'
      ]);

      User::create([
        'name' => 'Lorenzo',
        'email' => 'lorenzo@gmail.com',
        'password' => 'lorenzo12',
        'rekening' => '12342'

      ]);

      User::create([
        'name' => 'El',
        'email' => 'el@gmail.com',
        'password' => 'Rafael221',
        'rekening' => '12343'

      ]);

      Account::create([
        'saldo' => 'Rp999.999.99',
        'bank' => 'BCA',
        'rekening' => '12343'

      ]);

      Account::create([
        'saldo' => 'Rp9.999.999.99',
        'bank' => 'BRI',
        'rekening' => '12341'

      ]);

      Account::create([
        'saldo' => 'Rp607.000.99',
        'bank' => 'Mandiri',
        'rekening' => '12342'

      ]);

      Transaction::create([
        'rekening' => '12343',
        'transaksi' => 'Token Listrik',
        'no_bayar' => '112211',
        'nominal' => 'Rp100.000.00'

      ]);

      Transaction::create([
        'rekening' => '12341',
        'transaksi' => 'Pulsa',
        'no_bayar' => '085543156823',
        'nominal' => 'Rp100.000.00'

      ]);

      Transaction::create([
        'rekening' => '12342',
        'transaksi' => 'Token Listrik',
        'no_bayar' => '1444255',
        'nominal' => 'Rp50.000.00'

      ]);

      Transfer::create([
        'from' => '12341',
        'to' => '12342',
        'nominal' => 'Rp100.000.00'

      ]);

      Transfer::create([
        'from' => '12342',
        'to' => '12343',
        'nominal' => 'Rp1.100.000.00'

      ]);

      Transfer::create([
        'from' => '12343',
        'to' => '12341',
        'nominal' => 'Rp11.100.000.00'

      ]);

      Withdraw::create([
        'rekening' => '12342',
        'nominal' => 'Rp100.000.00'

      ]);

      Withdraw::create([
        'rekening' => '12341',
        'nominal' => 'Rp20.000.00'

      ]);

      Withdraw::create([
        'rekening' => '12343',
        'nominal' => 'Rp50.000.00'

      ]);


    } 

    

}
