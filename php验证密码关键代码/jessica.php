<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class jessica extends Controller
{
    function login(Request $request){
        if(Input::method()=='GET'){
            return view('show');
        }elseif(Input::method()=="POST"){
            $this->validate($request,[
                'yhm' => 'required | min : 3 | max : 6',
                'password' => 'required | required_with:password_confirmation | confirmed',
            ],[
                    'request' => ':attribute必须填写',
                    'yhm.min'     =>  ':attribute至少3个字符',
                    'yhm.max'     =>  ':attribute至duo6个字符',
                    'confirmed'  =>   ':attribute至少两次密码相同'
                ],[
                    'yhm' => '用户名',
                    'password' => '密码',
                    'password_confirmation' => '确认密码'
                ]


            );
            echo '验证通过';
        }
    }
}
