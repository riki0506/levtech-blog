<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
        <a href="/posts/create">create</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->title }}</h2></a>
                    <p class='body'>{{ $post->body }}</p>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})"> delete</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use sctrict'
                
                if(confirm('Are you sure you want to delete this entry?')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        <div class='footer'>
            <a href="/"> back </a>
        </div>
    </body>
</html>