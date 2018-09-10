<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Article;
use App\User;
use App\Country;
use App\Role;

class Core extends Controller
{

    protected static $articles;

    public function __construct()
    {
//        $this->middleware('mymiddle');
    }

    public static function addArticles($array){
        return self::$articles[] = $array;
    }

    //list materials
    public function getArticles() {
//        $articles = DB::table('articles')->get();
//        $articles = DB::table('articles')->first();
//        $articles = DB::table('articles')->value('name');
//        DB::table('articles')->chunk(2,function($articles) {
//            foreach($articles as $article) {
//                Core::addArticles($article);
//            }
//        });
//        dump(self::$articles);
//        $articles = DB::table('articles')->pluck('name');
//        $articles = DB::table('articles')->count();
//        $articles = DB::table('articles')->max('id');
//        $articles = DB::table('articles')->select('id','name','text')->get();
//        $articles = DB::table('articles')->distinct()->select('id','name','text')->get();
//        $query = DB::table('articles')->select('name');
//        $articles = $query->addSelect('text as fulltext')->get();
        //where
//        $articles = DB::table('articles')->select('text as fulltext')->where('id','=','5')
//                                                                     ->where('name','like','test%')
//                                                                     ->get();
//        $articles = DB::table('articles')->select('text as fulltext')->where([
//            ['id','=','5'],
//            ['name','like','test%']
//        ])
//            ->get();
//        $articles = DB::table('articles')->whereBetween('id',[1,5])->get();
//        $articles = DB::table('articles')->whereIn('id',[1,2,3,5])->get();
//        $articles = DB::table('articles')->groupBy('name')->get();
        //limit
//        $articles = DB::table('articles')->take(4)->skip(2)->get();
//        DB::table('articles')->insert(
//            [
//                ['name' => 'Test2', 'text' => 'hello'],
//                ['name' => 'Test3', 'text' => 'hello'],
//            ]
//        );
//        $result = DB::table('articles')->insertGetId(['name' => 'Test2', 'text' => 'hello']);
//
//        dump($articles);
//update
//        DB::table('articles')->where('id',22)->update(['name'=>'hello']);
//delete
//        DB::table('articles')->where('id',22)->delete();

        //model
//        $articles = Article::all();
//        foreach($articles as $article){
//            print $article->text.'<br />';
//        }
//        $articles = Article::where('id', '>', 3)->orderBy('name')->take(2)->get();
//        Article::chunk(2, function($articles){
//
//        });
//        Article::find(1);
//        $articles = Article::find([2,3]);

//        Article::findOrFail();
//        $article = Article::where('id',1)->firstOrFail();
//        $article = Article::where('id', 1)->first();

//        $article = new Article;
//
//        $article->name = 'New Article';
//        $article->text = 'New Text';
//        $article->img = 'newImg.jpg';
//
//        $article->save();

//        $article = Article::find(9);
//
//        $article->name = 'New Name 2';
//        $article->text = 'New Text 2';
//        $article->img = 'newImg2.jpg';

//            $article->save();
//        Article::create([
//            'name' => 'hello world',
//            'text' => 'Some Text',
//            'img'  => 'img.jpg'
//        ]);
//
//        Article::firstOrCreate([
//            'name' => 'hello world',
//            'text' => 'Some Text',
//            'img'  => 'img.jpg'
//        ]);
//        $article = Article::firstOrNew([
//            'name' => 'hello world',
//            'text' => 'Some Text',
//            'img'  => 'img.jpg'
//        ]);

//        Article::find(9)->delete();
//        $articles = Article::all();

//        Article::destroy([9,10]);

//        $artcile = Article::find(3);
//        $article->delete();

//        $articles = Article::withTrashed()->restore();
//        $articles = Article::onlyTrashed()->restore();
//        foreach($articles as $article) {
//            if($article->trashed()) {
//                echo $article->id.' Удалена<br />';
//                $article->restore();
//            }
//            else {
//                echo $article->id.' Не удалена<br />';
//            }
//        }
//        $article = Article::find(3);
//        $article->forceDelete();
//        dump($articles);

//        $articles = Article::all();

//        dump($articles);
        
        //связи
//        $user = User::find(1);
//        $country = $user->country();
//        $country = Country::find(1);
//        dump($country->user());

//        $user = User::find(1);
//        $articles = $user->articles()->where('id','>',4)->get();
//        foreach($articles as $article) {
//            print $article->name.'<br/>';
//        }
//        $article = Article::find(1);
//        dump($article->user->name);

//        $user = User::find(1);

//        $role = $user->roles()->where('roles.id',2)->first();

//        $role = Role::find(1);

//        dump($role->users);

//        foreach($user->roles as $role) {
//            print $role->name.'<br/>';
//        }

//        dump($user->articles);

        //Жадная загрузка
//        $articles = Article::all();
//        $articles = Article::with('user')->get();

//        $articles = Article::all();
//        $articles->load('user');
//        foreach($articles as $article){
//            print $article->user->name;
//        }
//        $users = User::with('articles','roles')->get();
//        foreach($users as $user) {
//            dump($user->roles);
//        }
//        $users = User::has('articles','>=',3)->get();
//        foreach($users as $user) {
//            dump($user);
//        }

        //манипуляция с данными
//        $user = User::find(1);
//        $article = new Article([
//            'name' => 'New Article',
//            'text' => 'Some text'
//        ]);
//        $user->articles()->save($article);
//        $user->articles()->create([
//            'name' => 'New Article',
//            'text' => 'Some text'
//        ]);
//        $user->articles()->saveMany([
//            new Article([
//                'name' => 'New Article',
//                'text' => 'Some text'
//            ]),
//            new Article([
//                'name' => 'New Article2',
//                'text' => 'Some text2'
//            ]),
//            new Article([
//                'name' => 'New Article3',
//                'text' => 'Some text3'
//            ]),
//        ]);
//        $user = User::find(1);
//        $article = new Article([
//            'name' => 'New Article',
//            'text' => 'Some text'
//        ]);
//        $role = new Role(['name' => 'quest']);
//        $user->roles()->save($role);
//        $articles = Article::all();
//        dump($articles);
//        $user = User::find(1);
//        $user->articles()->where('id',24)->update(['name' => 'New Text']);
//        return;

//        $country = Country::find(1);
//        $user = User::find(2);
//
//        $country->user()->associate($user);
//        $country->save();
//        return;
//        $articles = Article::all();
//        $user = User::find(2);
//
//        foreach($articles as $article) {
//            $article->user()->associate($user);
//            $article->save();
//        }
//        $user = User::find(2);
//        $role_id = Role::find(2)->id;
//
////        $user->roles()->attach($role_id);
//        $user->roles()->detach($role_id);
        $article = Article::find(10);
        $array = ['key' => 'Hello world'];
        $article->text = $array;
        $article->save();
        return;
    }
    
    //material
    public function getArticle($id){}
}
