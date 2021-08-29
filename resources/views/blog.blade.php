@extends('layout.master')

@section('content')

<div>
    <form action="/blog-store" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">First Name</label>
          <input type="text" class="form-control" id="fname" aria-describedby="fname" placeholder="First Name">          
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Last Name</label>
          <input type="text" name="fname" class="form-control" id="lname" aria-describedby="lname" placeholder="Last Name">          
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Address</label>
          <input type="text" name="lname" class="form-control" id="address" aria-describedby="address" placeholder="Address">          
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">File</label>
          <input type="file" name="file" class="form-control" id="file" aria-describedby="file" placeholder="file">          
        </div>       
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>

@endsection




