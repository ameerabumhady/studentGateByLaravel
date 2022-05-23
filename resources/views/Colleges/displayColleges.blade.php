@extends('layouts.app')
@section('title','Display Colleges')
    
@section('content')


<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Colleges
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>num</th>
                    <th>College name</th>
                    
                </tr>
            </thead>
            <tbody>
                
                @foreach ($colleges as $c)
                <tr>  <td> {{ $c[0] }} </td> <td> {{ $c[1] }} </td> </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection