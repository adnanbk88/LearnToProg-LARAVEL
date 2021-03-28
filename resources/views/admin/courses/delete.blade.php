@extends('admin.app')

@section('content')
    
<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Products</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered" id="table">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Slug</th>
                <th scope="col">PDF</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                    <th scope="row">{{$course->title}}</th>
                    <td>{{$course->description}}</td>
                    <td>{{$course->slug}}</td>
                    <td>{{$course->pdf_link}}</td>
                    <td>
                        <form action="{{ url("/admin/course/$course->id") }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="Delete">    
                        </form>    
                    </td>
                    </tr>      
                @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection