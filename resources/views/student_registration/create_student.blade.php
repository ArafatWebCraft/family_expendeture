@extends('layouts.student_menu')

@section('content_form')
    <div class="form_content">
        <div class="layout_form row">
            <div class="student-form col-4">
                <form class="p-lg-3" method="POST" action="{{route('registration.student')}}">
                    @csrf
                    <h3 class="text-center mt-1 mb-2">Registration Form</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Name</label>
                        <input type="text" class="form-control mt-1 mb-2 border-2" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your name">
                    </div>
                    <div class="form-group mt-1">
                        <label for="degree">Student Degree</label>
                        <select id="degree" class="form-control mt-1 mb-2 border-2" name="degree_name" required>
                            <option name="degree_name" value="">Select Your Degree</option>
                            <option name="degree_name"  value="ssc">SSC</option>
                            <option name="degree_name"  value="hsc">HSC</option>
                            <option name="degree_name"  value="bcs">Bachelor's degrees</option>
                            <option name="degree_name"  value="diploma">Diploma</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Institute </label>
                        <input type="text" class="form-control mt-1 border-2 mb-2" name="institute" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Institute">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Passing Year </label>
                        <input type="text" class="form-control mt-1 border-2 mb-2" name="passing_year" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Passing Year">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">CGPA </label>
                        <input type="text" class="form-control mt-1 border-2 mb-2" name="cgpa" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter cgpa">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


            <div class="student-list col-8 mt-5">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Degree</th>
                        <th scope="col">Institute</th>
                        <th scope="col">Passing Year</th>
                        <th scope="col">CGPA</th>
                        <th scope="col">Created_by</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->degree_name}}</td>
                                <td>{{$student->institute}}</td>
                                <td>{{$student->passing_year}}</td>
                                <td>{{$student->cgpa}}</td>
                                <td>{{$student->user->name}}</td>

                                <td>
                                    <button class="btn btn-outline-success"><a class="text-decoration-none" href="{{route('edit.student',$student->id)}}">Edit</a></button>
                                </td>
                                <td>
                                    <form action="{{route('delete.student',$student->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-success">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
