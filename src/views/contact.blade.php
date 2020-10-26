<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>this is contact page for me</h1>
    <form action="{{ route('contact') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="enter your name">
        <input type="email" name="email" placeholder="please enter your email">
        <textarea type="text" cols="15" rows="5" name="message"></textarea>
        <input type="submit" value="submit">
    </form>
</body>
</html>
