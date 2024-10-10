@extends('admin.app')

@section('content')
<div class="container">
    <h3>Roles</h3>

    <a href="{{ route('roles.create') }}" class="btn btn-primary mb-3">Tambah Role</a>

    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Role</th>
                <th>Actions</th> <!-- Kolom aksi untuk edit dan delete -->
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $loop->iteration }}</td> <!-- Iteration for numbering -->
                    <td>{{ $role->name }}</td> <!-- Menampilkan nama role -->
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning">Edit</a>

                        <!-- Delete Button -->
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this role?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
