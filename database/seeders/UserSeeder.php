<?php

namespace Database\Seeders;

// use App\Models\User;
// use Carbon\Factory;

// use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\User::factory()->count(100)->create()
      ->each(function($user){
        \App\Models\Hobby::factory()->count(rand(1,9))->create(
            [
                "user_id"=>$user->id
            ]
        )
        ->each(function($hobby){
            $tag_ids=range(1,8);
            shuffle($tag_ids);
            $assignments=array_slice($tag_ids,0,rand(0,8));
            foreach ($assignments as $tag_id) {
                DB::table('hobby_tag')->insert(
                    [
                        "hobby_id"=>$hobby->id,
                        "tag_id"=>$tag_id,
                        "created_at"=>now(),
                        "updated_at"=>now(),
                    ]
                );
            }

        });
      });
    }
}
