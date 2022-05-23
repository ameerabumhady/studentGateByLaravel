@extends('layouts.app')
@section('title','Add Student')
    
@section('content')

<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Student</h3></div>
                        
                        <div class="card-body">
                            <form method="post" >
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="inputFirstName" id="inputFirstName" type="text" placeholder="Enter your first name" require/>
                                            <label for="inputFirstName">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" name="inputLastName" id="inputLastName" type="text" placeholder="Enter your last name" require/>
                                            <label for="inputLastName">Last name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="inputEmail" id="inputEmail" type="email" placeholder="name@example.com" require/>
                                    <label for="inputEmail">Email address</label>
                                </div>
                                <div class="row mb-3">
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="collegeName" type="text" placeholder="College Name" />
                                            
                                            <label for="collegeName">College Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block">Add Student</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="/displayStudents">Back to Students Page</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection