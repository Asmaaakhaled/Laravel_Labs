<html>
<head>
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
@vite('resources/css/app.css')
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous"> -->
</head>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script> -->
<body> 
<a href="/posts/create"   class="inline-block rounded-sm border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:ring-3 focus:outline-hidden"
>Add New Post</a>
<table class="min-w-full divide-y-2 divide-gray-200">
  <thead class="ltr:text-left rtl:text-right">
    <tr>
      <th class="px-3 py-2 whitespace-nowrap">id</th>
      <th class="px-3 py-2 whitespace-nowrap">title</th>
      <th class="px-3 py-2 whitespace-nowrap">body</th>
      <th class="px-3 py-2 whitespace-nowrap">created by</th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-200">
  @foreach ( $posts as $post)
  <tr class="*:text-gray-900 *:first:font-medium">
    <td class="px-3 py-2 whitespace-nowrap">{{$post['id']}}</td>
    <td class="px-3 py-2 whitespace-nowrap">{{$post['title']}}</td>
    <td class="px-3 py-2 whitespace-nowrap">{{$post['body']}}</td>
    <td class="px-3 py-2 whitespace-nowrap">{{$post['created_by']}}</td>
    <td class="px-3 py-2 whitespace-nowrap" ><a href="/posts/{{$post['id']}}"   class="inline-block rounded-sm border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:ring-3 focus:outline-hidden"
    >view</a></td>
    <td class="px-3 py-2 whitespace-nowrap" ><a href="/posts/{{$post['id']}}/edit"   class="inline-block rounded-sm border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:ring-3 focus:outline-hidden"
    >edit</a></td>
    <td class="px-3 py-2 whitespace-nowrap">
    <form action="/posts/{{ $post['id'] }}/delete" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"
            class="inline-block rounded-sm border border-indigo-600 bg-red-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:ring-3 focus:outline-hidden">
            delete
        </button>
    </form>
</td>


  </tr>
  @endforeach
</tbody>
</table>

</body>
</html>