@extends('layouts.app')
@section('title','Display Students')
    
@section('content')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Students
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>num</th>
                    <th>first name</th>
                    <th>last name</th>
                    <th>email</th>
                    <th>college id</th>
                    <th>Operation</th>
                    
                </tr>
            </thead>
            <tbody>
                
                @foreach ($students as $s)
                <tr>  <td> {{ $s[0] }} </td> <td> {{ $s[1] }} </td> <td> {{ $s[2] }} </td> <td> {{ $s[3] }} </td> <td> {{ $s[4] }} </td> <td> <a href="{{$s[0]}}/{{$s[1]}}/{{$s[2]}}/{{$s[3]}}/{{$s[4]}}/editStudent"> edit </a> </td> </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection