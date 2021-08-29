
@extends('layout.master')

@section('content')

<form action="#" method="POST" enctype="multipart/form-data">
    
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="fname"  class="form-control" id="fname" aria-describedby="fname" placeholder="Enter name">
        
      </div>

      <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <input type="text" name="description" class="form-control" id="description" aria-describedby="emailHelp" placeholder="description">
      </div>

      <div class="form-group">
          <label for="exampleInputEmail1">File</label>
          <input type="file" name="file" class="form-control" id="file">
      </div>         


      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection