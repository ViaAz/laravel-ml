<?php
namespace App\Http\Controllers;

class HomeController extends Controller {

    public function index(){
//        dump($_ENV);
        dump(config('database'));
        return "Hello world";
    }

}
