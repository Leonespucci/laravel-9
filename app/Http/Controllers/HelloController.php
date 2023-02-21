<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class HelloController extends Controller //extend berarti turunanya atau anak dari controller
{
    function index(){
        Echo"saya rafli guys";
    }

    function hello(){
        Echo"hello guys";
    }


}
