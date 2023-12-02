<form action="{{ route('note.create') }}" method="post">
    @include('notes.form.fields')
    <div class="mb-3">
        <button type="submit" class="btn btn-primary mb-3">Create Note</button>
    </div>
</form>
