@extends('base')

@section('content')
<body id="page-top">
        <!-- Navigation-->
        
        </nav>
<body background="image.jpg">
        <style>
        body{
            background-repeat: no-repeat, repeat;
        }
        </style>
        <br><br><br><br><br><br><br><br><br>
<div class="container" style="margin-top:-6rem;">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card" style="background-color: #FFB533;">
                <div class="card-header text-white" style="background-color: #FFB533;">
                    <h3 class="card-title" style="text-align:center;">Login Form</h3>
                </div>
             <div class="card-body">
                    <form action="{{url('/login')}}" method="post">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                       
                        <button class="btn btn-primary" type="submit">Login</button>
                </form>
             </div>
         </div>
    </div>
</div>


@stop