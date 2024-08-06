<?php

namespace Database\Seeders;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $sam = [
            [
                'name' => 'sam',
                'username' => 'sam',
                'address' => 'Demak Street',
                'npwp'=> '0315686850',
                'employee_status_1'=> 'emp stat 1',
                'employee_status_2'=> 'emp stat 2',
                'bpjstk'=> '0315686851',
                'bpjsk'=> '0315686852',
                'placement'=> 'Wonosari',
                'division'=> 'IT',
                'group'=> 'Group FAT',
                'level'=> '1',
                'born_date'=> Carbon::parse('2000-02-06'),
                'entry_date'=> now(),
                'resign_date'=> NULL,
                'num_ktp'=> '085155058869',
                'name_ktp'=> 'Sam Martin',
                'address_ktp'=> 'Jl. Demak Jaya 2',
                'tax_status'=> 'Tax Stat',
                'uniform'=> TRUE,
                'bni_acc_num'=> '0315676740',
                'company'=> 'CPS',
                'email' => 'sam@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('SammartinCPS123#'), // password
            ],
        ];
        \DB::table('users')->insert($sam);
    }
}
