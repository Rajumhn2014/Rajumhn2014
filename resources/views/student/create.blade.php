@extends('layout.master')

@section('contents')

          <div>
            @if($message=Session::get('success'))
                <div class="alert alert-success">
                      {{$message}}
                </div>
            @endif
          <!--  data entry गरिसकेपछि message आउने बनाउनलाई -->
          </div>


  <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        @include('student.form')
    
    </form> 


@endsection