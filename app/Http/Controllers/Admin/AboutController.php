<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Http\Response;
use DB;

class AboutController extends Controller
{
    public function show(){
        if(view()->exists('default.about')) {
            $page = DB::select("SELECT `name`,`text` FROM `Pages` WHERE `name` = ?",['About']);
            return view('default.about')->withTitle('About')->withName($page[0]->name)->withText($page[0]->text);
//            $articles = DB::select("SELECT * FROM `articles` where `id` = :id", ['id' => 3]);
//            dump($articles);
//            DB::insert("INSERT INTO `articles` (`name`, `text`,`img`) VALUES(?,?,?)",['test1','text','i.jpg']);
//            $result = DB::connection()->getPdo()->lastInsertId();
//            dump($result);

//            DB::statement()
//            $result = DB::update("UPDATE `articles` SET `name` = ? WHERE id = ?",['test3',5]);
//            dump($result);
//            $result = DB::delete('DELETE FROM `articles` WHERE `id` = ?', [5]);
//            dump($result);
//            $view = view('default.about')->withTitle('Hello world')->render();
//            return (new Response($view))->header('Content-type', 'newType');
            return response()->json(['name'=>'Hello', 'name1'=>'Hello']);
//            return view('default.about')->withTitle('Hello');
        }
        abort(404);
    }
}
