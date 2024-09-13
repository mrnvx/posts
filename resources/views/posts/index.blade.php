<x-app-layout>
    <h1>All posts</h1>
    <br>
    <a href="{{route('posts.create')}}">Create Post</a>
    <br>
    <br>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>Title: {{$post->title}}</h2>
                <p>Content: {{$post->content}}</p>
                <br>
                <div>
                    <a href="{{route('posts.show', $post)}}" style="border: 1px solid">Show</a>
                    <a href="{{route('posts.edit', $post)}}" style="border: 1px solid">Edit</a>
                    <form action="{{route('posts.destroy', $post)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" style="border: 1px solid">
                    </form>
                    <br>
                    <a href="{{route('comments.create')}}">Crete comment</a>
                    <a href="{{route('posts.show', $post)}}">View comments</a>
</div>
            </li>
        @endforeach
    </ul>
</x-app-layout>