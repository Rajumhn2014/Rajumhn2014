@extends('layout.master')


@section('contents')


        <form action="{{route('student.update',$students->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                {{method_field('PATCH')}}
            

            @include('student.form')


        </form>

@endsection
