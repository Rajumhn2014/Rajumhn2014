
<div>
           {{-- for error message --}}
        <div>
                @if($errors->any())
                    <div class="alert alert-danger"></div>
                        <ul>
                            @foreach($errors->all() as $errors)
                                <li>{{$errors}}</li>
                            @endforeach
                        </ul>
                @endif     
        </div>


    <div>
        <h5>{{isset($students) ? 'Update Student info' : 'Add Student info'}}</h5>
    </div>
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" name="firstname" value="{{old('firstname',isset($students)?$students->firstname:'')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name">      
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" name="lastname" value="{{old('lastname',isset($students)?$students->lastname:'')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name">      
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" value="{{old('email',isset($students)?$students->email:'')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">      
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="number" name="phone" value="{{old('phone',isset($students)?$students->phone:'')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number">      
            </div>


            <div class="form-group">

                <div><label for="gender">Interest:</label></div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="choice[]" type="checkbox" id="inlineCheckbox1" value="Computer" 
                            {{isset($students)?in_array('Computer',$students->studentchoices()->pluck('student_choice')->toArray())?'checked':'':null}}>
                            <label class="form-check-label" for="inlineCheckbox1">Computer</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="choice[]" type="checkbox" id="inlineCheckbox2" value="Mathematics"
                            {{isset($students)?in_array('Mathematics',$students->studentchoices()->pluck('student_choice')->toArray())?'checked':'':null}}>
                            <label class="form-check-label" for="inlineCheckbox2">Mathematics</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="choice[]" type="checkbox" id="inlineCheckbox2" value="Science"
                            {{isset($students)?in_array('Science',$students->studentchoices()->pluck('student_choice')->toArray())?'checked':'':null}}>
                            <label class="form-check-label" for="inlineCheckbox2">Science</label>
                        </div>
                        
                        <div class="form-check form-check-inline"> 
                            <input class="form-check-input" name="choice[]" type="checkbox" id="inlineCheckbox2" value="English"
                            {{isset($students)?in_array('English',$students->studentchoices()->pluck('student_choice')->toArray())?'checked':'':null}}>
                            <label class="form-check-label" for="inlineCheckbox2">English</label>
                        </div>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Gender</label>
                    <select name="gender">
                            <option value="male" {{(isset($students) && 'male' == $students->gender)?'selected':''}}>Male</option>
                            <option value="female" {{(isset($students) && 'female' == $students->gender)?'selected':''}}>Female</option>
                            <option value="gender" {{(isset($students) && 'gender' == $students->gender)?'selected':''}}>Gender</option>
                    </select>       
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number">      
            </div>

            {{-- @if(isset($students))


            @endif --}}
  
            <button type="submit" class="btn btn-primary">Submit</button>

</div>