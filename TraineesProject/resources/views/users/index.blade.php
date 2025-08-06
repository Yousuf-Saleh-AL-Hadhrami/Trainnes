@extends('layouts.master')

@section('title','Users')

@section('header-title','Users Page')

@section('content')

<h1 class="text-center">Users</h1>

@if($users->isEmpty())
 <div class="alert alert-danger">No Users Found!</div>
@else

<a class="btn btn-sm btn-info" href="{{ route('users.create') }}">Create User</a>

@if(Session::has('success'))
<p class="alert alert-success mt-2">{{ session('success') }}</p>
<!-- <p class="alert alert-succes">{{ session()->get('success') }}</p> -->

@endif 
<table class="table table-bordered table-hover my-2">
    <thead>
 <tr class="bg-primary">
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>Action</th>
    </tr>
    </thead>
   <tbody>


@foreach($users as $user)

<tr>
    <td>{{ $user->id }}</td>
    <td><img style="width:120px; border-radius: 50%; "src="{{ asset('storage/' . $user->image) }}" class=" card-img-top" alt="User Image"></td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{  $user->created_at->diffForHumans() }}</td>
    <td>{{  $user->updated_at->diffForHumans()}}</td>
    <td>
        <a class="btn btn-sm btn-primary" href= "{{ route('users.edit', $user->id) }}">Edit</a>

        <form class="d-inline-block"  action="{{ route('users.destroy',  $user->id) }}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
        </form>
    </td>

</tr>
@endforeach
   </tbody>
</table>

{{ $users->links() }}

@endif 

@endsection 