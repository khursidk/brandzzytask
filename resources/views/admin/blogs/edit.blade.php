@extends('layouts.adminMaster')
 
@section('content')
<div class="container">
    <div class="card shadow-lg p-4">
        <h2 class="mb-4">Edit Blog</h2>

        <form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $blog->title }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="category" class="form-control" value="{{ $blog->category }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Current Image</label><br>
                <img src="{{ asset('uploads/'.$blog->image) }}" width="100"><br><br>
                <label class="form-label">New Image (Optional)</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Written By</label>
                <input type="text" name="written_by" class="form-control" value="{{ $blog->written_by }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control" value="{{ $blog->date }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Blog Details</label>
                <textarea name="details" class="summernote form-control">{{ $blog->details }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update Blog</button>
        </form>
    </div>
</div>

<!-- Include Bootstrap & Summernote -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>

<script>
    $(document).ready(function() {
        console.log("jQuery Loaded:", typeof jQuery);

        $.getScript("https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js", function() {
            console.log("Summernote JS Loaded");
            $('.summernote').summernote({
                height: 300,
                placeholder: "Write your blog details here...",
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    });
</script>



@endsection
