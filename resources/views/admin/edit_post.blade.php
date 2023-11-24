@extends('admin.master')

@section('main_content')
    <h1 class="mt-4">Admin Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-header">
                    <h3></h3>
                </div>

                <div class="card-body">
                    <form action="{{route('updatePost', $allpost->id)}}" method="POST">
                       @csrf
                        <div class="form-group">
                            <label for="">Tittle</label>
                            <input type="text" name="tittle" class="form-control" value="{{ $allpost->tittle}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Description</label>
                            <textarea name="des" id="" cols="10" rows="4" class="form-control">{{ $allpost->des}}</textarea>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Update Pots">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection