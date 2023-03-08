
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.0.0/parsley.min.js"></script>
    <style>
        .parsley-errors-list li {
            list-style: none;
            color: red;
        }
        body{

            background-color: #f3f4f6;



            position: relative;
        /* color:#38a3eb; */
        }
        .container{
            /* margin-top:100px; */
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);


        }

    </style>
</head>

<body>
    <a  style="position:fixed; top:15px; left:15px; " href="/"><img  src="/images/logo.jpg" style="width:60px;height:60px;  left:60px; border-radius:50px;"  ></a>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Log In
                    </div>
                    <div class="card-body">
                        <form action="/checkadmainlogin" method="POST" id="register">
                            @csrf


                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    data-parsley-pattern="[a-zA-Z]" required data-parsley-trigger="keyup">
                            </div>

                            <div class="form-group">
                                <label for="body">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    data-parsley-length="[6,12]" required data-parsley-trigger="keyup">
                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                        @if(Session::has('invalid'))
                        <div class="alert alert-success">
                            {{ Session::get('invalid') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $("#register").parsley();
        })
    </script>
</body>

</html>
