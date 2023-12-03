<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1> Blog Name </h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name=post[title] placeholder="Title">
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="This is body"></textarea>
            </div>
            <input type="submit" value="store">
        </form>
        <div class='footer'>
            <a href="/"> back </a>
        </div>
    </body>
</html>