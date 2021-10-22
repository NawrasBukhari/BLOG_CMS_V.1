<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Models\Meta;

use Carbon\Carbon;


class MetaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metas')->insert([
            'title' => 'best website around',
            'description' => 'This is the best website all over the world',
            'author' => 'Mr Nawras Bukhari',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
