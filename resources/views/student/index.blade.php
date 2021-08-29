@extends('layout.master')

@section('contents')

    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

        <a href="{{route('student.create')}}"><button class="btn btn-primary">Add New Student</button></a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Gender</th>
                        <th scope="col" colspan="2" style="text-align:center;">Action</th>
                                        
                    </tr>
                </thead>

                    <tbody>
                        <?php $i=1;?>

                            @foreach ($students as $student)                            
                                <tr>
                                    
                                    
                                    <td><?php echo $i++; ?></td>
                                    {{-- <td scope="row">{{$student->id}}</td> --}}

                                    <td scope="row"><img src="{{$student->image ? asset('public/student/'.$student->image):asset('public/avatar.png')}}" 
                                        alt="image" width="50px" height="60px"></td>                                    

                                    <td scope="row">{{$student->firstname}}</td>
                                    <td scope="row">{{$student->lastname}}</td>
                                    <td scope="row">{{$student->email}}</td>
                                    <td scope="row">{{$student->phone}}</td>
                                    <td scope="row">{{$student->gender}}</td>
                                    <th scope="col">
                                        <a href="{{route('student.edit',$student->id)}}"><button class="btn btn-primary">Edit</button></a>
                                    </th>

                                    <th scope="col">

                                        <form action="{{route('student.destroy',$student->id)}}" method="POST">
                                            @csrf
                                                @method('DELETE')

                                                    <a href=""><button class="btn btn-danger">Delete</button></a>

                                        </form>

                                    </th>

                                </tr>
                                
                                {{-- <?php } ?> --}}

                            @endforeach             
                            

                    
                    </tbody>
            </table>

@endsection