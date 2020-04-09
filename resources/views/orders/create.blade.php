

@extends('dashboard-main')

@section('addional_css_includes')

@endsection

@section('content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Test Page</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Title of panel goes here</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <section>
                        <form method="POST" action="{{route('orders.store')}}">
{{ csrf_field() }}
<div class="form-group">
    <label for="exampleFormControlSelect1">Users</label>
    <select name="user_id" class="form-control ">
        @foreach($users as $user)  
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">MEDICINE</label>
  <select name="medicine_id" class="form-control ">
        @foreach($medicines as $medicine)  
          <option value="{{$medicine->id}}">{{$medicine->name}}</option>
        @endforeach
        </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">doctor</label>
    <textarea class="form-control" name="doctor_id" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">assigned_pharmacy</label>
    <input type="text" class="form-control" name="pharmacy_id">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">status</label>
    <textarea class="form-control" name="status" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">is_isured</label>
    <textarea class="form-control" name="is_isured" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">creator_type</label>
    <textarea class="form-control" name="creator_type" rows="3"></textarea>
  </div>




  <div class="form-group">
    <label for="exampleFormControlSelect1">Users</label>
   
  </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
  
  </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('addional_js_includes')

@endsection


<!--  ////////////////////////////////////////////////////////-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="{{route('orders.index')}}">
    <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    ALL OREDERS
  </a>
</nav>
@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
<form method="POST" action="{{route('orders.store')}}">
{{ csrf_field() }}
<div class="form-group">
    <label for="exampleFormControlSelect1">Users</label>
    <select name="user_id" class="form-control ">
        @foreach($users as $user)  
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">MEDICINE</label>
  <select name="medicine_id" class="form-control ">
        @foreach($medicines as $medicine)  
          <option value="{{$medicine->id}}">{{$medicine->name}}</option>
        @endforeach
        </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">doctor</label>
    <textarea class="form-control" name="doctor_id" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">assigned_pharmacy</label>
    <input type="text" class="form-control" name="pharmacy_id">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">status</label>
    <textarea class="form-control" name="status" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">is_isured</label>
    <textarea class="form-control" name="is_isured" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">creator_type</label>
    <textarea class="form-control" name="creator_type" rows="3"></textarea>
  </div>




  <div class="form-group">
    <label for="exampleFormControlSelect1">Users</label>
   
  </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
  
  </form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>
</html> -->
