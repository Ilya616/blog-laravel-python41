<?php 
    namespace App\Validators;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

    class CommentValidator{

        public static function validator(Request $request){
            return Validator::make($request->all(),[
                'name' => 'required|min:2',
                'comment' => 'required|min:2',
                'email' => 'required|min:2',
                'website' => 'required|min:2',
            ],[
                "name.required" => "не заполнено обязательное поле",
                "name.min" => "Минимальная длина 2 символа"
            ]);
        }
    }