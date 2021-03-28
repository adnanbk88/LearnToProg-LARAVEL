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
            <h3 class="card-title">Add Product</h3>
        </div>
        <div class="card-body">
            <form action="{{ url("/admin/edite/$course->id") }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                    @csrf
                <div class="form-group">
                    <label>Title :</label>
                <input type="text" class="form-control" name="title" value="{{$course->title}}">
                </div>
                <div class="form-group">
                    <label>Description :</label>
                    <textarea name="description" class="form-control">{{$course->description}}</textarea>
                </div>
                <div class="form-group">
                    <label>Slug :</label>
                    <input type="text" class="form-control" name="slug" value="{{$course->slug}}">
                </div>
                <div class="form-group">
                    <label>PDF Link :</label>
                    <input type="text" class="form-control" name="pdf_link" value="{{$course->pdf_link}}">
                </div>
                <div class="form-group">
                    <input type="submit" value="Edite Course" class="btn btn-success form-control">
                </div>
            </form>
        </div>
    </div>
@endsection