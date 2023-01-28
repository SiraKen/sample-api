<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class ExampleController extends Controller
{
    public function resetDatabase()
    {
        DB::table('users')->truncate();
        DB::table('posts')->truncate();
        DB::table('comments')->truncate();
        DB::table('todos')->truncate();
        return response()->json(['success' => true]);
    }

    public function seedDatabase()
    {
        $faker = Faker::create();

        // Users
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'username' => $faker->unique()->userName,
                'email' => $faker->unique()->email,
                'password' => Hash::make('password'),
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'website' => $faker->url,
            ]);
        }

        // Posts
        for ($i = 0; $i < 10; $i++) {
            DB::table('posts')->insert([
                'user_id' => $faker->numberBetween(1, 10),
                'title' => $faker->sentence,
                'body' => $faker->text,
            ]);
        }

        // Comments
        for ($i = 0; $i < 10; $i++) {
            DB::table('comments')->insert([
                'post_id' => $faker->numberBetween(1, 10),
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'body' => $faker->text,
            ]);
        }

        // Todos
        for ($i = 0; $i < 10; $i++) {
            DB::table('todos')->insert([
                'user_id' => $faker->numberBetween(1, 10),
                'title' => $faker->sentence,
                'completed' => $faker->boolean,
            ]);
        }

        return response()->json(['success' => true]);
    }

    public function importJson()
    {
        if (request()->isMethod('post')) {
            $json = file_get_contents(request()->file('json')->path());
            $data = json_decode($json, true);
            $table = request()->input('table');

            // DBリセット
            DB::table($table)->truncate();

            // データインポート
            foreach ($data as $row) {
                $row['created_at'] = date('Y-m-d H:i:s');
                $row['updated_at'] = date('Y-m-d H:i:s');
                DB::table($table)->insert($row);
            }
            return response()->json(['success' => true]);
        }

        return view('import');
    }
}
