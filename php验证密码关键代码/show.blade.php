<html>
<head>
    <title></title>
</head>
<style>
    .input_yhm{
        margin-left: 10px;
    }
    .input_pwd1{
        margin-left: 25px;
    }
    .input_pwd2{
        margin-left: -7px;
    }
    form{
        width: 500px;
        /*border: 1px solid black;*/
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        top: 100px;
    }
    .btn{
        margin-left: 100px;
        width:100px;
        background: #3f89ec;
    }

</style>
<body>
    {{--@foreach($errors->all() as $errors)--}}
        {{--<li>{{$errors}}</li>--}}
        {{--@endforeach--}}
<form action="/" method="post">
    {{csrf_field()}}
    用户名：<input type="text" name="yhm" placeholder="请输入您的用户名" class="input_yhm">{{$errors->first('yhm')}}<br>
    密码：<input type="password" name="password" placeholder="请输入您的密码" class="input_pwd1">{{$errors->first('password')}}<br>
    确认密码：<input type="password" name="password_confirmation" placeholder="请再次输入您的密码" class="input_pwd2">{{$errors->first('password_confirmation')}}<br>
    <input type="submit" value="提交" class="btn">
</form>
    <script>
        window.onload = function(){
            document.getElementsByName('yhm')[0].value="{{old('yhm')}}";
            {{--document.getElementsByName('password')[0].value="{{old('password')}}";--}}
            {{--document.getElementsByName('password_confirmation')[0].value="{{old('password_confirmation')}}";--}}
        }
    </script>
</body>
</html>