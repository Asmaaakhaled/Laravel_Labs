<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>

    <h1>Edit Post #{{ $post['id'] }}</h1>

    <form action="/posts/{{ $post['id'] }}" method="POST">
        @csrf
        @method('PUT')

        Title<input type="text" id="title" name="title" value="{{ $post['title'] }}"><br><br>

        body<input type="text" name="body" value="{{ $post['body'] }}"></input><br><br>

        <button type="submit">Update</button>
    </form>

</body>
</html>
