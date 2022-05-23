@extends('layouts.app')
@section('title','Display Student Grade')
    
@section('content')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Grades
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>num</th>
                    <th>first name</th>
                    <th>last name</th>
                    <th>course name</th>
                    <th>Grade</th>
                    
                </tr>
            </thead>
            <tbody>
                
                @foreach ($studentGrades as $sg)
                <tr>  <td> {{ $sg[0] }} </td> <td> {{ $sg[1] }} </td> <td> {{ $sg[2] }} </td> <td> {{ $sg[3] }} </td> <td> {{ $sg[4] }} </td> </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection