@extends('layouts.app')
@section('title','Edit Student')
@section('css')
<link href="../../../../../myTheam/css/styles.css" rel="stylesheet" />
@endsection
@section('content')

<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Student</h3></div>
                        
                        <div class="card-body">
                            <form method="get" action="/home">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="inputFirstName" id="inputFirstName" type="text" value="{{$arr[1]}}" require/>
                                            <label for="inputFirstName">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" name="inputLastName" id="inputLastName" type="text" value="{{$arr[2]}}" require/>
                                            <label for="inputLastName">Last name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="inputEmail" id="inputEmail" type="email" value="{{$arr[3]}}" require/>
                                    <label for="inputEmail">Email address</label>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="college_id" id="college_id" type="text" value="{{$arr[4]}}" require/>
                                            <label for="college_id">College</label>
                                        </div>
                                    </div>   
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block">Edit Student</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="../../../../../displayStudents">Back to Students Page</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection

@section('js')
<script src="myTheam/js/scripts.js"></script>
<script src="myTheam/js/datatables-simple-demo.js"></script>
@endsection