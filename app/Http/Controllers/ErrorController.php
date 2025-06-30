<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error404(){
        abort(404, 'страница не найдена');
    }
}
