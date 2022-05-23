@extends('layouts.app')
@section('title','Add College')
    
@section('content')
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Add College</h3></div>
                        
                        <div class="card-body">
                            <form method="post" >
                                <div class="row mb-3">
                                    <div class="col-md-9">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="inputCollegeName" id="inputCollegeName" type="text" placeholder="Enter College Name" require/>
                                            <label for="inputCollegeName">College Name</label>
                                        </div>
                                    </div>       
                                </div>
                                
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block">Add College</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="/displayColleges">Back to Colleges Page</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection