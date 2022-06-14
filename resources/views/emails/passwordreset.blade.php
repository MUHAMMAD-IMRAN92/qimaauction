<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
{{-- <h2>Welcome to the site {{$customer['name']}}</h2>
<br/>
Your registered email-id is {{$customer['email']}} --}}

You can reset password from bellow link:
<a href="{{ route('reset.password.get', $token) }}">Reset Password</a>
</body>

</html>
