<?php

use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('photos')->delete();

        for($i=0;$i<10;$i++){
            \App\Photo::create([
                'title'         => 'title'.$i,
                'image'         => 'img'.$i,
                'owner_type'    => 1,
                'owner_id'      => $i+11,
            ]);
        }
    }
}
