<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanity</title>
</head>

<body>
    <h1>This is the sanity test page</h1>
    @unless (count($posts) == 0)
        @foreach ($posts as $post)
            <h1>{{ $post['title'] }}</h1>
        @endforeach
    @else
        <h1>No tokens available</h1>
    @endunless


</body>

</html>
