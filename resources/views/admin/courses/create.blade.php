@extends('admin.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add Course</h3>
        </div>
        <div class="card-body">
            <form action="/create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title :</label>
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label>Description :</label>
                    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label>Slug :</label>
                    <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                </div>
                <div class="form-group">
                    <label>PDF Link :</label>
                    <input type="text" class="form-control" name="pdf_link" value="{{ old('pdf_link') }}">
                </div>
                <div class="form-group">
                    <label>Image :</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Add Course" class="btn btn-primary form-control">
                </div>
            </form>
        </div>
    </div>
@endsection