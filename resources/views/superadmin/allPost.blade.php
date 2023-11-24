@extends('admin.master')

@section('main_content')
    <h1 class="mt-4">Super Admin Dashboard</h1>
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
                                <td>
                                @if ($allpost->status == 1)
                                        <a href="{{ route('aprove', $allpost->id) }}" class="btn btn-success ">Approve</a>
                                    @else
                                        <a href="{{ route('reject', $allpost->id) }}" class="btn btn-danger">Reject</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection