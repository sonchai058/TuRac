<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'pengjankul@gmail.com',
            'password' => bcrypt('12345678'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('std_year')->insert([
            'Name' => '2562',
            'DateTimeAdd' => date('Y-m-d H:i:s'),
            'UserAdd' => 1,
            'DateTimeUpdate' => date('Y-m-d H:i:s'),
            'UserUpdate' => 1,
            'Allow' => 'ปกติ',
        ]);

        //
        DB::table('account_group')->insert([
            [
                'name' => 'หมวดสินทรัพย์',
                'detail' => '-',
                'DateTimeAdd' => date('Y-m-d H:i:s'),
                'UserAdd' => 1,
                'DateTimeUpdate' => date('Y-m-d H:i:s'),
                'UserUpdate' => 1,
                'Allow' => 'ปกติ',
            ],
            [
                'name' => 'หมวดหนี้สิน',
                'detail' => '-',
                'DateTimeAdd' => date('Y-m-d H:i:s'),
                'UserAdd' => 1,
                'DateTimeUpdate' => date('Y-m-d H:i:s'),
                'UserUpdate' => 1,
                'Allow' => 'ปกติ',
            ],
            [
                'name' => 'หมวดส่วนของ ผู้ถือหุ้นและทุน',
                'detail' => '-',
                'DateTimeAdd' => date('Y-m-d H:i:s'),
                'UserAdd' => 1,
                'DateTimeUpdate' => date('Y-m-d H:i:s'),
                'UserUpdate' => 1,
                'Allow' => 'ปกติ',
            ],
            [
                'name' => 'หมวดบัญชีรายได้',
                'detail' => '-',
                'DateTimeAdd' => date('Y-m-d H:i:s'),
                'UserAdd' => 1,
                'DateTimeUpdate' => date('Y-m-d H:i:s'),
                'UserUpdate' => 1,
                'Allow' => 'ปกติ',
            ],
            [
                'name' => 'หมวดบัญชีค่าใช้จ่าย',
                'detail' => '-',
                'DateTimeAdd' => date('Y-m-d H:i:s'),
                'UserAdd' => 1,
                'DateTimeUpdate' => date('Y-m-d H:i:s'),
                'UserUpdate' => 1,
                'Allow' => 'ปกติ',
            ],
            [
                'name' => 'หมวดอื่น ๆ',
                'detail' => '-',
                'DateTimeAdd' => date('Y-m-d H:i:s'),
                'UserAdd' => 1,
                'DateTimeUpdate' => date('Y-m-d H:i:s'),
                'UserUpdate' => 1,
                'Allow' => 'ปกติ',
            ],
        ]);
    }
}
