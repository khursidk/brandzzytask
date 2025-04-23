@extends('layouts.superadminMaster')

@section('title', 'Give Permission')

@section('content')
    <div class="container">
        <h1>Give Permission to Admin</h1>

        <form action="{{ route('super.admin.givePermission') }}" method="POST">
            @csrf
            <label for="admin_id">Select Admin:</label>
            <select name="admin_id" id="admin_id" required>
                @foreach($admins as $admin)
                    <option value="{{ $admin->id }}">{{ $admin->name }} ({{ $admin->email }})</option>
                @endforeach
            </select>

            <label for="permission_name">Permission:</label>
            <select name="permission_name" id="permission_name" required>
                 <option value="create">Create</option>
                <option value="update">Update</option>
                <option value="delete">Delete</option>
            </select>

            <button type="submit">Assign Permission</button>
        </form>

        <hr>

        <h2>Admin Permissions</h2>
        @foreach($admins as $admin)
            <div style="margin-bottom: 20px;">
                <strong>{{ $admin->name }} ({{ $admin->email }})</strong>
                <ul>
                    @forelse($admin->permissions as $permission)
                        <li>{{ $permission->name }}</li>
                    @empty
                        <li>No permissions assigned</li>
                    @endforelse
                </ul>
            </div>
        @endforeach
    </div>
@endsection
