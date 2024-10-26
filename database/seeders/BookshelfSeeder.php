<?php

namespace Database\Seeders;

use App\Models\Bookshelf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //query builder
        DB::table('bookshelves')->insert([
            [
                'code' => 'RAK01',
                'name' => 'Informatika',
            ],
            [
                'code' => 'RAK02',
                'name' => 'Industri',
            ],
            [
                'code' => 'HEWAN01',
                'name' => 'Kuda',
            ]
        ]);

        //ORM
        Bookshelf::create([
                'code' => 'RAK03',
                'name' => 'Sivil',
        ]);
    }
}
