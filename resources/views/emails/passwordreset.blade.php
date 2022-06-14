<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
Welcome to Best of Yemen Coffee 2022: <h2>{{$customer['name']}}</h2>
<br/>
Your registered email-id is {{$customer['email']}}
<br>
Your Password is {{$password}}
<br>
You can reset password from bellow link:
<a href="{{ route('reset.password.get', $token) }}">Reset Password</a>
<br>
Please Click on Login:
<a href="{{ route('customer.login') }}">Login</a>
</body>

</html>
