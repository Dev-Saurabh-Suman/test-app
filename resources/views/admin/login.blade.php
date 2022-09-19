<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>Fill your credntials to login</h1><br>
	<form method="post" action="{{url('/admin/login')}}">
		@csrf
		Email: <input type="text" name="email">
		Password: <input type="password" name="password">
		<input type="submit" name="">
	</form>

</body>
</html>