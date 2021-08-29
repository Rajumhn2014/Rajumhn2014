@extends('layout.master')

@section('content')
    
    <form action="/post-store" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name"  class="form-control" id="name" aria-describedby="name" placeholder="Enter name">
          
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" name="description" class="form-control" id="description" aria-describedby="emailHelp" placeholder="description">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>         


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>





@endsection