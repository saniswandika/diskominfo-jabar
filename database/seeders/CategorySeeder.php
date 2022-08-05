<?php

    namespace Database\Seeders;

    use App\Models\Category;
    use Illuminate\Support\Str;
    use Illuminate\Database\Seeder;

    class CategorySeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $data = [
                [
                    'name' => 'program',
                    'slug' => Str::slug('program'),
                    'created_at' => now(),
                ],
                [
                    'name' => 'layanan',
                    'slug' => Str::slug('layanan'),
                    'created_at' => now(),
                ],
                [
                    'name' => 'berita',
                    'slug' => Str::slug('berita'),
                    'created_at' => now(),
                ],
                [
                    'name' => 'publikasi',
                    'slug' => Str::slug('publikasi'),
                    'created_at' => now(),
                ],
            ];
            Category::insert($data);
        }
    }