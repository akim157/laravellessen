<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('INSERT INTO `articles` (`name`,`text`,`img`) VALUES(?,?,?)',[
            'Blog post',
            '<p>asdf asd fasd asdf asdfa sdfasd asdfa sdfas dfasd fasd fa sdf asdf asdf asf asdf asdf asdf asd</p>',
            'pic1.jpg'
        ]);

        DB::table('articles')->insert(
            [
                [
                    'name'=>'Sample blog post',
                    'text'=>'<p>fffffffffffffffffffffffffffffffffffffffffffffff</p>',
                    'img'=>'pic2.jpg'
                ]
            ]
        );
        
        Article::create([
            'name' => 'Sample blog post 3',
            'text' => 'Hello 3',
            'img' => 'pic4.jpg'
        ]);
    }
}
