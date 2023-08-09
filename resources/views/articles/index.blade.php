<h1>Articles Index</h1>

<table border="1">
    <tr>
        <th>#</th>
        <th>Title</th>
        <!-- <th>Content</th> -->
        <th>Status</th>
        <th>User</th>
        <th>Date</th>
    </tr>
    @forelse ($articles as $article)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></td>
            <!-- <td>{{ $article->content }}</td> -->
            <td>{{ $article->status ? 'Active' : 'Inactive'}}</td>
            <td>{{ $article->user_id }}</td>
            <td>{{ $article->created_at }}</td>
        </tr>
    @empty
        <tr><td>No Articles Found</td></tr>
    @endforelse
</table>