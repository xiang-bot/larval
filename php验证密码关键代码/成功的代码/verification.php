<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class verification extends Controller
{
    function login(Request $request){
        if(Input::method()=='GET'){
            return view('show');
        }elseif(Input::method()=="POST"){
            $username = $request->post('yhm');
            $password = $request->post('password');
            $user = DB::table('tb_user')
                ->where('user',$username)
                ->where('password',$password)
                ->get()->toArray();
            if($user){
                Session::put('user',$user);
               echo '111';
            }else{
                $error = '用户名或密码错误';
            };
            $this->validate($request,[
                'yhm' => 'required | min : 3 | max : 6',
                'password' => 'required | required_with:password_confirmation | confirmed',
                'captcha' => 'required | captcha'
            ],[
                'required' => ':attribute必须填写',
                'yhm.min'     =>  ':attribute至少3个字符',
                'yhm.max'     =>  ':attribute至duo6个字符',
                'confirmed'  =>   ':attribute至少两次密码相同',
                'captcha'    =>   ':attribute出错',
                'captcha.required'    =>  ':attribute必须要填写',
            ],[
                    'yhm' => '用户名',
                    'password' => '密码',
                    'password_confirmation' => '确认密码',
                    'captcha' => '验证码'
                ]
            );
            echo '验证通过';
        }
    }
}
