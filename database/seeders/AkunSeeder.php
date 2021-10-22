<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=[[
            'username'=>'admin_kr_slumbung',
            'name'=>'adminteguh',
            'email'=>'admin@example.com',
            'password'=>bcrypt('admin123')

        ],
       [
            'username'=>'admin_kr_swela',
            'name'=>'adminteguh',
            'email'=>'kr_swelaadmin@example.com',
            'password'=>bcrypt('admin456')

        ]
      
        ];
        foreach($user as $key=>$value){
            User::create($value);
        }
    }
}
