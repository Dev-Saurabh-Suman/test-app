<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title></title>
</head>
<body>

	<h1 class="h3-1">Welcome To The Users Home Page</h1><br><br>
	<h3 class="h3-1" id="h3-1">For Admin Login Click here<a href="{{url('/admin/login')}}">Login</a></h3><br>
	<h3>For Employee Login Click here<a href="{{url('/employee/login')}}">Login</a></h3><br>
	<h3>New Admin Register Here<a href="{{url('/admin/register')}}">Register</a></h3><br>
<script>
	$(document).ready(function(){
		$('h3.h3-1').click(function(){
			changeText($(this));
		});

		function changeText(ele){
			ele.html('This was changed');
		}
	});
	</script>
</body>
</html>