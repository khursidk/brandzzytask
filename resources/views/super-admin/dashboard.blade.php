@extends('layouts.superadminMaster')

@section('title', 'Dashboard')

@section('content')
    <h2>Welcome to the Dashboard</h2>
    <div class="container">
        <h1>Super Admin Dashboard</h1>

        {{-- Add Admin Form --}}
        <form action="{{ route('super.admin.addAdmin') }}" method="POST" style="margin-bottom: 20px;">
            @csrf
            <input type="text" name="name" placeholder="Admin Name" required>
            <input type="email" name="email" placeholder="Admin Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Add Admin</button>
        </form>

        {{-- Add Super Admin Form --}}
        <form action="{{ route('super.admin.addSuperAdmin') }}" method="POST" style="margin-bottom: 40px;">
            @csrf
            <input type="text" name="name" placeholder="Super Admin Name" required>
            <input type="email" name="email" placeholder="Super Admin Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Add Super Admin</button>
        </form>

        {{-- User List Table --}}
        <h2>All Users</h2>
        <table style="width:100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #343a40; color: white;">
                    <th style="padding: 10px; border: 1px solid #dee2e6;">#</th>
                    <th style="padding: 10px; border: 1px solid #dee2e6;">Name</th>
                    <th style="padding: 10px; border: 1px solid #dee2e6;">Email</th>
                    <th style="padding: 10px; border: 1px solid #dee2e6;">Role</th>
                    <th style="padding: 10px; border: 1px solid #dee2e6;">Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr style="text-align: center;">
                        <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $user->id }}</td>
                        <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $user->name }}</td>
                        <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $user->email }}</td>
                        <td style="padding: 10px; border: 1px solid #dee2e6;">
                            <span style="background-color: #17a2b8; color: white; padding: 5px 10px; border-radius: 5px;">
                                {{ ucfirst($user->role) }}
                            </span>
                        </td>
                        <td style="padding: 10px; border: 1px solid #dee2e6;">{{ $user->created_at->format('d M Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
