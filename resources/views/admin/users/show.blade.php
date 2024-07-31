@extends('admin.layouts.app')

@section('content')
<div class="container mt-5">
        <h1 class="mb-4">User Details</h1>
        <div class="mb-3">
            <strong>Name:</strong> {{ $user->name }}
        </div>
        <div class="mb-3">
            <strong>Email:</strong> {{ $user->email }}
        </div>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
