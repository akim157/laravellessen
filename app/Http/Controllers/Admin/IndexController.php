<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){
//        return view('welcome');
//        $data = array('title'=>'Hello Laravel');
//        return view('default.template', $data);

//        $view = view('default.template');
//        $view->with('title','Hello World 2');
//        $view->with('title2','Hello World 3');
//        $view->with('title3','Hello World 4');
//        if(view()->exists('default.template')) {
//
//            $view = view('default.template',['title' => 'Hello'])->render();
//            print view('default.template',['title' => 'Hello'])->getPath();
//            print $view;
//            return;
//
////                view()->name('default.template', 'myview');
////                return view()->of('myview')->withTitle('Hello World');
//
////            $path = config('view.paths');
////            return view()->file($path[0].'/default/layout.blade.php')->withTitle('Hello World');
////            return view('default.template')->withTitle('Hello World');
//        }
        $array = array(
            'title' => 'Laravel',
            'data'  => [
                'one' => 'List 1',
                'two' => 'List 2',
                'three' => 'List 3',
                'four' => 'List 4',
                'five' => 'List 5',
            ],
            'dataI' => ['List 1', 'List 2', 'List 3', 'List 4', 'List 5'],
            'bvar' => true,
            'script' => "<script>alert('hello')</script>"
        );
        if(view()->exists('default.index')) {
            return view('default.index', $array);
        }
        abort(404);
    }
}
