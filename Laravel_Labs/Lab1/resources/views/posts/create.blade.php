
<form action="/posts" method="POST">
  @csrf
 Title <input type="text" name="title"></br>
 Body <input type="text" name="body"></br>
    <input type="submit" value="Add Post">
</form>
<!-- not authorized -->