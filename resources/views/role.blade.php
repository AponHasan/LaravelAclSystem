@extends('layouts.app')
 @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                 <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Permission</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                  <td>{{$loop->iteration}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->slug}}</td>
                                    <td>{{$role->description}}</td>
                                    <td>{{$role->role_permissions->implode('name', ', ')}}</td>
                                    <td>
                                        <a href="{{route('role.edit',$role->id)}}"><span class="btn btn-warning btn-sm">Edit</span></a> ||
                                        <a href="#"><span class="btn btn-danger btn-sm">Delete</span></a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
