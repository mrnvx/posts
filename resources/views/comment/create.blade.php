<x-app-layout>
    <h1>Create Comment</h1>

    <form action="{{route('comments.store')}}" method="POST">
        @csrf
        <label for="content">Comment: </label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Create" style="border: 3px solid ">
        <br>
        <a href="{{route('posts.index')}}" style="border: 1px solid">Back</a>
    </form>
</x-app-layout>