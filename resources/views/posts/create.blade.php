<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <div>
        <textarea name="content"></textarea>
    </div>
    <div>
        <button type="submit">Post</button>
    </div>
</form>