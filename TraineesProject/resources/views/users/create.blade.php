
@extends('layouts.master')

@section('title','Users')

@section('header-title','Users Page')

@section('content')

<div class="container mt-5">
    <h2>Create User</h2>
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Name Field -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="form-control"
                value="{{ old('name') }}"
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
                value="{{ old('email') }}"
            >
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password Field -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input 
                type="password" 
                name="password" 
                id="password" 
                class="form-control"
            >
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
    <label for="image" class="form-label">Upload Image</label>
    <input 
        type="file" 
        class="form-control" 
        name="image" 
        id="image"
    >
</div>


        <!-- Save Button -->
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

@endsection 


