<x-app-layout>
    <h1>Create Post</h1>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label for="title">Title: </label>
        <input type="text" id="title" name="title">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Create" style="border: 3px solid ">
    </form>
</x-app-layout>