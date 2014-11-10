<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			/*color: #red;*/
			background-color: ;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h5 {
			font-size: 15px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
    <p>
        @if($errors->has())
        @foreach ($errors->all() as $error ) 
            {{ $error }}
        @endforeach
        @endif
    </p>
    
    {{ Form::open(array('url' => 'register','method'=>'post')) }}
    <h5> Username </h5>
    {{ Form::text('username')."<br>" }}
    
    <h5> Password </h5>
    {{ Form::password('passwd')."<br>" }}

    <h5> Confirm password </h5>
    {{ Form::password('confirmpasswd')."<br>" }}

    <h5> Email </h5>
    {{ Form::email('email') . "<br>" }}

    <p> {{ Form::submit('Register') }} <p>
    

    {{ Form::close() }}

    <!--<?php

    echo    Form::open(array('url' => 'login'));
    echo    Form::text('username')."<br>";
    echo    Form::email('Email', 'trungnn@gmail.com')."<br>";
    echo    Form::password('passwd')."<br>";
    echo    Form::checkbox('name', 'value')."<br>";
    echo    Form::submit('Login');
    echo    Form::close();
    ?>-->

</body>
</html>
