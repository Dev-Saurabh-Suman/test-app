<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>Fill your details to register as Admin</h1><br>
	<form method="post" action="{{url('/admin/register')}}">
		@csrf
		Name:<input type="text" name="name">
		Email:<input type="text" name="email">
		Password:<input type="password" name="password">
		Role Id:<input type="text" name="role_id">
		<input type="submit" name="">
	</form>

</body>
</html>