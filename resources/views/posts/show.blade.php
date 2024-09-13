<x-app-layout>

    <h1>Title: {{$post->title}}</h1>
    <p>Content: {{$post->content}}</p>

    <br>
    <ul>
        $foreach([] as $comment)
            <li>
            <p>Comment: {{$comment->id}}: {{$comment->content}}</p>
            </li>
            @endforeach
    </ul>
    <br>
</x-app-layout>