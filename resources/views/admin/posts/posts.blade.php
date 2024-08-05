@extends('admin.layouts.app')

@section('content')

<div class="container mt-5">
    <div class="pgtitle">
        <h3 class="mb-4">Posts</h3> 
        <a href="{{ route('posts.create') }}" class="addnp_btn">Add a New Post</a>
    </div>
        
        <!-- <a href="{{ route('posts') }}" class="btn btn-primary mb-3">Add User</a> -->
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Tegs</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td class="post_title">{{ $post->title }}
                            <div class="action_btn">
                                <span class="view">View</span>
                                <span class="edit">Edit</span>
                                <span class="delete">Delete</span>
                            </div>
                        </td>
                        <td class="post_author">Admin</td>
                        <td class="post_category"><p>Electric</p></td>                        
                        <td class="post_teg">Teg</td>
                        <td class="post_date">Date</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection