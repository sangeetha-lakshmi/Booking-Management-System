@extends('layouts.app')

@section('content')
<div class="glass-card p-5 mx-auto" style="max-width:600px;">
    <h4 class="fw-bold text-center mb-4"><i class="bi bi-person-circle"></i> Edit Profile</h4>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <button type="submit" class="btn btn-gradient px-4">Save Changes</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>

    <hr class="my-4">

    <form method="POST" action="{{ route('profile.destroy') }}" onsubmit="return confirm('Are you sure you want to delete your account?');">
        @csrf
        @method('DELETE')

        <div class="mb-3">
            <label class="form-label">Enter Password to Confirm</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-danger w-100">
            <i class="bi bi-trash"></i> Delete Account
        </button>
    </form>
</div>
@endsection
