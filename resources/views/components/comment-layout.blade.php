<form class="com-sec" action="{{ route('comments.store') }}" method="POST">
    @csrf
    <input type="hidden" name="chapter_number" value="{{ $number }}">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment" rows="4" required></textarea>
    </div>
    <button type="submit">Submit Comment</button>
</form>
