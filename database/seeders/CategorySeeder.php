<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'slug' => 'code-review'
                'name' => 'Code-Review'
            ],
            [
                'slug' => 'eloquent'
                'name' => 'Eloquent'
            ],
            [
                'slug' => 'facade'
                'name' => 'Facade'
            ],
            [
                'slug' => 'general'
                'name' => 'General'
            ],
            [
                'slug' => 'javascript'
                'name' => 'Javascript'
            ],
            [
                'slug' => 'mix'
                'name' => 'Mix'
            ],
            [
                'slug' => 'query-builder'
                'name' => 'Query-Builder'
            ],
            [
                'slug' => 'request'
                'name' => 'Request'
            ],
            [
                'slug' => 'server'
                'name' => 'Server'
            ],
            [
                'slug' => 'testing'
                'name' => 'Testing'
            ],
            [
                'slug' => 'vite'
                'name' => 'Vite'
            ],
        ]);
    }
}
