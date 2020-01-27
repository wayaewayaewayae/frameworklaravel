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
        // $this->call(PostsTableSeeder::class);
        // $this->call(tablesiswaSeeder::class);
        // $this->call(produkTableSeeder::class);

        // $this->call([
        //     Post::class,
        //     SiswaSeeder::class]
        // );
        // $this->call(UsersTableSeeder::class);
        factory(App\Tabungan::class,100)->create();
        factory(App\Costumer::class,1000)->create();
    }
}
