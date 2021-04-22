<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class SecondController extends \App\Http\Controllers\Controller
{
    public function __construct(){
        $this->middleware('auth')->except('showString2');
    }
    public function showString(){
        return 'static string';
    }
    public function showString2(){
        return 'static string2';
    }

}
