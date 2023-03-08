<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Patient</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        body{
            background-color: #f3f4f6;
            position: relative;
        }

        .container{
            /* position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%); */
            margin-top:70px;


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
          Edit Patient
        </div>
        <div class="card-body">

            <form action="/savachange" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <input type="hidden" name="id" value="{{  $data->id  }}">
                  <label for="title">Name </label>
                  <input type="text"  name="name" value="{{  $data->name  }}" class="form-control">
                </div>
                <div class="form-group">
                   <label for="title">Password </label>
                  <input type="text"  name="password" class="form-control">
                </div>
                <div class="form-group">
                  <label for="title">Choose profil Image</label>
                  <input type="file"  name="file" class="form-control"  onchange="previewFile(this)">
                  <img id="previewImg" src="{{asset('images')}}/{{$data->image   }}" style="max-width: 130px;margin-top: 20px" alt="profil Image">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
              </form>
        </div>
    </div>
</div>
</div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<script>
  function previewFile(input){
    var file=$('input[type=file]').get(0).files[0];
    if(file){
      var reader = new FileReader();
      reader.onload =function(){
        $('#previewImg').attr('src', reader.result);
      }
      reader.readAsDataURL(file);
    }
  }
</script>
@if(Session::has('success_update'))
<script>
swal("Geart Job!","{!! Session::get('success_update') !!}",{
  button:"OK",
})
</script>

@endif
</html>
