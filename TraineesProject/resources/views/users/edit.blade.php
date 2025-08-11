
@extends('layouts.master')

@section('title','Users')

@section('header-title','Users Page')

@section('content')

<div class="container mt-5">
    <h2>Edit User <strong class="text-danger">{{ $user->id . '||' . $user->name }}</strong></h2>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @csrf
        <!-- Name Field -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="form-control"
                value="{{ old('name', $user->name) }}"
            >
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email Field -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                class="form-control"
                value="{{ old('email', $user->email) }}"
            >
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Save Button -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection 


