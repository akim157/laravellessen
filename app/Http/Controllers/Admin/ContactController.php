<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Http\Requests;

class ContactController extends Controller
{
//    protected $request;
//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }

    public function store(Request $request) {
//        print $this->request->input('name');
//        print $this->request->has('name');
//        print_r($this->request->all());
        if($request->isMethod('post')) {
            $messages = [
                'name.required' => 'Поле :attribure обязательно к заполнению!',
                'email.max'     => 'Максимально допустимое количество символов - :max'
            ];
            $validator = Validator::make($request->all(), [
                'name' => 'required',
//                'email' => 'sometimes|required'
            ], $messages);

            $validator->sometimes('email','required',function($input){
                return strlen($input->name) >= 10;
            });

//            $validator->after(function($validator){
//                $validator->errors()->add('name','Дополнительное сообщение');
//            });
            if($validator->fails()) {
//                dump($validator->errors()->all());
                $validator->failed();
                return redirect()->route('contact')->withErrors($validator)->withInput();
            }
        }
        return view('default.contact',['title' => 'Contact']);
    }

    public function show() {
        return view('default.contact',['title' => 'Contact']);
    }
}
