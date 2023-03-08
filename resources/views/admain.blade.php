<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admain</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


    <style>

        body{
            background: #f3f4f6;

        }
        .container{
            margin-top:50px;
            display:flex;
            justify-content:space-between;



        }
        img{
            width:250px;
            height:250px;
            border-radius:40%;


        }
        a{
            /* display:inline-block; */
             margin-left:50px;
            text-decoration: none;





        }
        h3{

            /* padding :15px; */

            margin-top :20px;


            /* border: 1px solid red; */

        }


    </style>
</head>
<body>
    <a  style="position:fixed; top:15px; left:15px; " href="/"><img  src="/images/logo.jpg" style="width:60px;height:60px;  left:60px; border-radius:50px;"  ></a>

  <div class="container">

    <div>
        <img src="images/allp.png">
       <h3> <a  style="text-decoration: none;"  href="/allpatient">All Patients</a></p>
    </div>
    <div>
        <img src="images/history.jpg">
       <h3> <a style="text-decoration: none;"  href="/allhistory">All History</a></p>
    </div>
    <div>
        <img src="images/alladvidesocon.png">
       <h3> <a style="text-decoration: none;" href="/alladvices">All Advices</a></p>
    </div>



</body>
</html>
