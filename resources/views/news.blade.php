@extends('layout.master')

@section('content')

<!--  data entry गरिसकेपछि message आउने बनाउनलाई 
यस्को लिंक NewsController.php मा define गरेको हुन्छ ।
-->
<div>
      @if($message=Session::get('success'))
          <div class="alert alert-success">
                {{$message}}
          </div>
      @endif
    <!--  data entry गरिसकेपछि message आउने बनाउनलाई -->
</div>

<div>
      @if($errors->any())
          <div class="alert alert-danger">
              <ul>
                    @foreach($errors->all() as $errors)
                        <li>{{$errors}}</li>
                    @endforeach
              </ul>
          </div>
      @endif  
</div> 





<form action="/news-store" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="fname"  class="form-control" id="fname" aria-describedby="fname" placeholder="Enter name">
        
      </div>

      <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <input type="text" name="description" class="form-control" id="description" aria-describedby="emailHelp" placeholder="description">
      </div>

      <div class="form-group">
          <label for="exampleInputEmail1">Image</label>
          <input type="file" name="file" class="form-control" id="file">
      </div>         


      <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection