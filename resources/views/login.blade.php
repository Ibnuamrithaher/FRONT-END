<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('authenticate') }}" method="POST">
        @csrf
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="password">Password</label>
        <input type="text" name="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>
