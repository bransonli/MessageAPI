<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Messages;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Messages::create(['id' => 1, 'message' => 'Hello',]);
    }
}


