<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tweets')->insert([
            'name' => 'Alex Rosso',
            'handle' => '@alexrosso',
            'image' => 'https://loremflickr.com/320/240',
            'tweet' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, nemo voluptate tenetur quod ea error. Sequi aliquid aliquam vitae adipisci, reprehenderit exercitationem delectus odit molestias possimus. Similique alias error voluptas.',
            'file' => '/videos/1.mp4',
            'is_video' => true,
            'comments' => '53',
            'retweets' => '54',
            'likes' => '88',
            'analytics' => '81',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('tweets')->insert([
            'name' => 'Josephine Perry',
            'handle' => '@josephineperry',
            'image' => 'https://loremflickr.com/320/240 ',
            'tweet' => "Just made a new SEO marketing video. Take a look!!! The good news is that there are several search engine optimization (SEO) tools out there — some free, some paid — that can help you view",
            'file' => '/videos/1.mp4',
            'is_video' => true,
            'comments' => '56',
            'retweets' => '54',
            'likes' => '78',
            'analytics' => '21',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tweets')->insert([
            'name' => 'Avis Glover',
            'image' => 'https://loremflickr.com/320/240',
            'handle' => '@avisglover',
            'tweet' => "I've never seen ANYONE play guitar as good as this!!! Many guitarists neglect the theory side of things because it's perceived as boring, pretentious, or even just a complete f*ing mystery. It's true that some musicians, especially those with natural abilities like perfect pitch or an especially good ear, can excel without much background theory. But do not underestimate the power of this knowledge in developing you as a musician",
            'file' => '/pics/1.png',
            'is_video' => false,
            'comments' => '94',
            'retweets' => '29',
            'likes' => '33',
            'analytics' => '89',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
