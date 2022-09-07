<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset ('assets/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}">
        <title>Laravel Crud</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm offset-3 mt-5">
                    <div class="heading">
                        <h4>Edit Page</h4>
                    </div>
                    @if(Session::get('sucess'))
                    <div class="alert alert-success">
                        {{Session::get('sucess')}}
                    </div>
                    @endif

                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                    @endif
                    <form action="{{route ('update')}}" method="post">
                        @csrf
                        <input type="hidden" name="cid" value="{{$Info->id}}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                value="{{ $Info->name }}">
                            <span style="color:red">@error ('name'){{$message}} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email"
                                value="{{$Info->email}}">
                            <span style="color:red">@error ('email'){{$message}} @enderror</span>
                        </div>


                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" name="phone" placeholder="Enter Phone"
                                value="{{$Info->phone}}">
                            <span style="color:red">@error ('phone'){{$message}} @enderror</span>
                        </div>


                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea name="message" class="form-control" id="" cols="3" rows="3"
                                value="{{$Info->message}}"></textarea>
                            <span style="color:red">@error ('message'){{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="assets/bootstrap-4.0.0/dist/js/bootstrap.min.js"> </script>
    </body>

</html>
