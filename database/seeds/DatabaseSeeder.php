<?php

use Illuminate\Database\Seeder;
use App\sysuser;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	sysuser::insert([
    		'uname' => 'zidan',
    		'namalengkap' => 'achmadazidan',
    		'email' => 'achmadazidan80@gmail.com',
    		'upass' => sha1('zidan')
    	]);
        
    }
}
