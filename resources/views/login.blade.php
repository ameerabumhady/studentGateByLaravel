<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="myTheam/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="row justify-content-center">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h1 class="text-center font-weight-light my-4">Welcome in Students Gate</h1></div>
            <div class="card-body">
                <form method="get" action="/checkLogin">
                    
                    <div class="row mb-3">
                        <div class="form-group col-lg-6 col-md-6">
                            <label for="username">User Name:</label>
                            <input type="text" class="form-control" name="username" id="username" require>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-lg-6 col-md-6">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control"  name="password" id="password" require>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary col-lg-6 col-md-6">Login</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="myTheam/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="myTheam/js/datatables-simple-demo.js"></script>
</body>
</html>