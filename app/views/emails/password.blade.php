<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			
			text-align:center;
			/*color: #999;*/
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

		

		h5 {
			font-size: 15px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<!--@if(Session::has('message'))

    	{{ Session::get('message') }}
    @endif-->
    {{ Form::open(array('url' => 'login','method'=>'post')) }}
    
    <h5> Current password </h5>
    {{ Form::password('currentPassword')."<br>" }}

    <h5> New password </h5>
    {{ Form::password('newPassword')."<br>" }}
	
	<h5> Confirm password </h5>
	{{ Form::password('confirmPassword') . "<br>" }} 
	{{ Form::submit('Change')}}

    {{ Form::close() }}

 

</body>
</html>