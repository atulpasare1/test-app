@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Question</h1>
    <form action="{{ route('questionbank.update', $question->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="question">Question</label>
            <input type="text" name="question" id="question" class="form-control" value="{{ old('question', $question->question) }}" required>
        </div>

        <div class="form-group">
            <label for="answer">Answer</label>
            <textarea name="answer" id="answer" class="form-control" required>{{ old('answer', $question->answer) }}</textarea>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == old('category', $question->category_id) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Question</button>
    </form>
</div>
@endsection

@section('js')

<script>
    // Initialize the Quill editor for the create form
    var quill = new Quill('#question-editor', {
        theme: 'snow',
        modules: {
            toolbar: fullToolbar
        }
    });

    // Handle form submission
    document.getElementById('submit-btn').addEventListener('click', function() {
        var questionContent = quill.root.innerHTML;
        document.getElementById('question').value = questionContent;
    });
</script>
