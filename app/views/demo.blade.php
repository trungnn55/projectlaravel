
<html>

<head>
<style>
	table {
    	width:25%;
	}
	table, th, td {
    	border: 1px solid black;
    	border-collapse: collapse;
	}
	th, td {
	    padding: 5px;
	    text-align: left;
	}
	table#t01 tr:nth-child(even) {
	    background-color: #eee;
	}
	table#t01 tr:nth-child(odd) {
	   background-color:#fff;
	}
	table#t01 th	{
	    background-color: black;
	    color: white;
	}
	</style>
	</head>

<body>

<a href="changepassword"> Change password<br></a>
<a href="logout"> Logout <br></a>
<br>

<table id="t01">

  <tr>
    <th>Username</th>
    <th>Email</th>		
  </tr>
  @if(isset($user))
  	@foreach ($user as $key ) 
  <tr>
  	<td>{{ $key->username }}</td>
  	<td>{{ $key->email }}</td>
  </tr>
  @endforeach
  @endif
</table>

</body>
</html>


 	  
