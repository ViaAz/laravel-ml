<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts' page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<h1>List of posts</h1>
<ul>
    <li>
        <a href="{{route('posts.show', ['id' => 1])}}">post 1</a> |
        <a href="{{route('posts.edit', ['id' => 1])}}">edit</a> |
        <form action="{{route('posts.destroy', ['id' => 1])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn">Delete</button>
        </form>
    </li>
    <li>
        <a href="{{route('posts.show', ['id' => 2])}}">post 2</a> |
        <a href="{{route('posts.edit', ['id' => 2])}}">edit</a> |
        <form action="{{route('posts.destroy', ['id' => 2])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn">Delete</button>
        </form>
    </li>
    <li>
        <a href="{{route('posts.show', ['id' => 3])}}">post 3</a> |
        <a href="{{route('posts.edit', ['id' => 3])}}">edit</a> |
        <form action="{{route('posts.destroy', ['id' => 3])}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn">Delete</button>
        </form>
    </li>
</ul>
</body>
</html>
