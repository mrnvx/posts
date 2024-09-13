<x-app-layout>
    <h1>Edit Post</h1>

    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="{{$post->title}}">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
        <br>
        <input type="submit" value="Create" style="border: 3px solid ">
        <br>
        <a href="{{route('posts.index')}}">Back</a>
    </form>
</x-app-layout>