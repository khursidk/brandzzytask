<!-- resources/views/dashboard.blade.php -->
@extends('layouts.adminMaster')

 
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Blog List</h2>
        <a href="{{ route('blogs.create') }}" class="btn btn-success">+ Create Blog</a>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Category</th>
                <th>Image</th>
                <th>Written By</th>
                <th>Date</th>
                <th>Details</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $key => $blog)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->slug }}</td>
                <td>{{ $blog->category }}</td>
                <td>
                <img src="{{ asset('uploads/' . $blog->image) }}" alt="Blog Image" width="80">

                </td>
                <td>{{ $blog->written_by }}</td>
                <td>{{ date('d M Y', strtotime($blog->date)) }}</td>
                <td>{!! Str::limit(strip_tags($blog->details), 50, '...') !!}</td>
                <td>
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
