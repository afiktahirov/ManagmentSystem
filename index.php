<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.8/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<body>




    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center text-danger font-weight-normal my-3">Php Managment System</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h4 class="mt-2 text-primary">All users in database!</h4>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn btn-primary m-1 float-right" data-bs-toggle="modal"
                    data-bs-target="#addModal"><i class="fa-light fa-user-plus"></i>&nbsp;&nbsp; Add new user</button>
                <a href="" class="btn btn-success m-1 float-right"> Export to excel</a>
            </div>
        </div>
        <hr class="my-1">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive" id="showUser">
                    <table class="table table-stripe table-sm table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center text-secondary">
                                <td>1</td>
                                <td>User 1</td>
                                <td>Title</td>
                                <td>email</td>
                                <td>123211</td>
                                <td>
                                    <a href="" title="View Details" class="text-success">Show info</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Add new user modal -->
    <div class="modal" id="addModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="post" id="form-data">
                        <div class="form-group m-4">
                            <input type="text" name="fname" class="form-control" placeholder="First name" required>
                        </div>
                        <div class="form-group m-4">
                            <input type="text" name="lname" class="form-control" placeholder="Last name" required>
                        </div>
                        <div class="form-group m-4">
                            <input type="text" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group m-4">
                            <input type="text" name="phone" class="form-control" placeholder="Phone number" required>
                        </div>
                        <div class="form-group m-4">
                            <input type="text" type="submit" name="insert" id="insert" value="Add new user" class="btn btn-danger btn-block">
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer" >
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-2.0.8/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("table").DataTable();
        });
    </script>
</body>

</html>
