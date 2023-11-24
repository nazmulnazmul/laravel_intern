@extends('admin.master')

@section('main_content')
    <h1 class="mt-4">Admin Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <h3>All Post List</h3>
                </div>

                <div class="card-body">
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                    <table class="table table-hover">
                        <tr>
                            <th width="10px">Sl.</th>
                            <th width="40px">Tittle</th>
                            <th width="70px">Description</th>
                            <th width="30px">Action</th>
                        </tr>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($allposts as $allpost)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $allpost->tittle }}</td>
                                <td>{{ $allpost->des }}</td>
                                <td >
                                    <a href="{{ route('admin.edit_post', $allpost->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('delete_post', $allpost->id)}}" onclick="return confirm('Are you Sure !!');" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection