<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
@foreach($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
    </div>
@endforeach
{{ $posts->links() }}
</body>
</html>
