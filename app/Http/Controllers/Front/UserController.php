<?php


namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class UserController extends \App\Http\Controllers\Controller
{
    public function showAdminName(){
        return 'Rajae Elidrissi';
    }
    public function getIndex(){
       /* $data=[];
        $data['id']=5;
        $data['name']='rajae';
        return view('welcome',$data);
        $obj=new \stdClass();
        $obj->name='rajae';
        $obj->age=20;*/
        return view('welcome');
    }


}
