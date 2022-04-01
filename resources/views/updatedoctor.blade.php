<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>cms dashboard
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cssadmin/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="cssadmin/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styleadmin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
        type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.js"
        integrity="sha256-2JRzNxMJiS0aHOJjG+liqsEOuBb6++9cY4dSOyiijX4=" crossorigin="anonymous"></script>
    <!-- FONT -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans:ital,wght@0,400;1,600&family=Roboto:wght@300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="styleadmin.css">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>




    <div class="wrapper">



        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/logo.png" class="img-fluid" /><span>Vishweb design</span></h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="index.html" class="dashboard"><i
                            class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
            </ul>


        </nav>

        <div id="content">




            <div class="main-content">


                <div class="row ">

                    <div class="col-lg-7 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Employees Stats</h4>
                                <p class="category">New employees on 15th December, 2016</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        @php
                                            $total = 1;
                                        @endphp
                                        <tr>

                                            <th>ID</th>
                                            <th>FullName</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Type</th>
                                            <th>image</th>
                                            <th>Descripton</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($doctor as $item)
                                            <tr>
                                                <td>{{ $total++ }}</td>
                                                <td>{{ $item->name }} </td>
                                                <td>{{ $item->email }} </td>
                                                <td>{{ $item->password }}</td>
                                                <td>{{ $item->type }}</td>
                                                <td><img src="{{ asset('assets/uploads/products/' . $item->image) }}" width="70px" height="70px" alt=""></td>
                                                <td>{{$item->description}}</td>
                                                <td>
                                                    <a href="{{ url('updatedoctor/' . $item->id) }}" class="btn btn-info" style="color: aliceblue;"><i
                                                            class="fad fa-pen-alt"></i></a>
                                                    <a href="{{ url('deletedoctor/' . $item->id) }}" class="btn btn-danger" style="color: aliceblue;"><i
                                                            class="fas fa-trash"></i></a>

                                                </td>
                                            </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text m-auto">
                                <h4 class="card-title text-center">Add Doctor Information</h4>
                            </div>

                            <div class="mt-5">
                                <form method="POST" action="{{ url('insert-doctor') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-10 m-auto ">
                                            <input type="text" class="form-control borderStyle" id="inputPassword"
                                                name="name" placeholder="FullName">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-10 m-auto">
                                            <input type="email" class="form-control borderStyle" id="inputPassword"
                                                name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-10 m-auto">
                                            <input type="text" class="form-control borderStyle" id="inputPassword"
                                                name="password" placeholder="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-10 m-auto ">
                                            <input type="text" class="form-control borderStyle" id="inputPassword"
                                                name="type" placeholder="Type">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-10 m-auto">
                                            <input type="file" class="form-control borderStyle" id="inputPassword"
                                                name="image" placeholder="Image">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5">
                                        <div class="col-10 m-auto">
                                            <textarea name="description" id="" cols="44" class="form-control borderStyle" placeholder="Description"
                                                rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-5">
                                        <div class="col-10 m-auto">
                                            <input type="submit" style="background-color: orangered;color:white"
                                                class="form-control borderStyle">
                                        </div>
                                    </div>


                                </form>
                            </div>


                        </div>
                    </div>
                </div>



                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <nav class="d-flex">
                                    <ul class="m-0 p-0">
                                        <li>
                                            <a href="#">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Company
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Portfolio
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Blog
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                            <div class="col-md-6">
                                <p class="copyright d-flex justify-content-end"> &copy 2021 Design by
                                    <a href="#">Vishweb Design</a> BootStrap Admin Dashboard
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>



        </div>


    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jsadmin/jquery-3.3.1.slim.min.js"></script>
    <script src="jsadmin/popper.min.js"></script>
    <script src="jsadmin/bootstrap.min.js"></script>
    <script src="jsadmin/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
    </script>





</body>

</html>
