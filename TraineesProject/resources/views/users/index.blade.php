@extends('layouts.master')

@section('title','Users')

@section('header-title','Users Page')

@section('content')

<h1 class="text-center">Users</h1>

@if($users->isEmpty())
 <div class="alert alert-danger">No Users Found!</div>
@else

<a class="btn btn-sm btn-info" href="{{ route('users.create') }}">Create User</a>
<table class="table table-bordered table-hover my-2">
    <thead>
 <tr class="my-bg-primary" style="background-color:red !important;">
        <th>ID</th>
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
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->created_at }}</td>
    <td>{{ $user->updated_at}}</td>
    <td>
        <a class="btn btn-sm btn-primary" href= "{{ route('users.edit', $user->id) }}">Edit</a>

        <form class="d-inline-block"  action="{{ route('users.destroy',  $user->id) }}" method="post">
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