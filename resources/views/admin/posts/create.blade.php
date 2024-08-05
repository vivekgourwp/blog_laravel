@extends('admin.layouts.app')

@section('content')

    <div class="container">
    <div class="pgtitle">
        <h3 class="mb-4">Add a new post</h3> 
    </div>

        <!-- Regular HTML form -->
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf <!-- CSRF Token for Laravel -->

            <!-- Title Field -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <!-- Content Field -->
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>

            <!-- Excerpt Field -->
            <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <textarea class="form-control" id="excerpt" name="excerpt" rows="3"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
