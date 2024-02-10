@extends('layouts.student_menu')
@section('content_form')
    <div class="row d-flex w-100 justify-content-center align-items-center">

    <div class="student-form col-4">
        <form class="p-lg-3" method="POST" action="{{route('update.student',$student->id)}}">
            @csrf
            @method('PUT')
            <h3 class="text-center mt-1 mb-2">Update Form</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Student Name</label>
                <input type="text" class="form-control mt-1 mb-2 border-2" value="{{$student->name}}" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your name">
            </div>
            <div class="form-group mt-1">
                <label for="degree">Student Degree</label>
                <select id="degree" class="form-control mt-1 mb-2 border-2"  name="degree_name" required>
                    <option value="{{$student->degree_name}}">{{$student->degree_name}}</option>
                    <option value="{{$student->degree_name}}">SSC</option>
                    <option value="{{$student->degree_name}}">HSC</option>
                    <option value="{{$student->degree_name}}">Bachelor's degrees</option>
                    <option value="{{$student->degree_name}}">Diploma</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Institute </label>
                <input type="text" class="form-control mt-1 border-2 mb-2" value="{{$student->institute}}" name="institute" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Institute">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Passing Year </label>
                <input type="text" class="form-control mt-1 border-2 mb-2" value="{{$student->passing_year}}" name="passing_year" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Passing Year">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">CGPA </label>
                <input type="text" class="form-control mt-1 border-2 mb-2" value="{{$student->cgpa}}" name="cgpa" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter cgpa">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </div>
@endsection
