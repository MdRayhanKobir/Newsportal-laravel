@extends('main.home_master')

@section('content')
<section>
    <div class="container">
<div class="row">
    <div class="col-md-5" style="border: 1px solid red;margin-right:3px">
        <div class="card" style="width:100%">
            <div class="card-header text-center">
              REGISTER
            </div>
            @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li style="list-style: none">{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
           <form action="{{ route('user.registration') }}" method="POST">
            @csrf

            <div class="form-group" >
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="user_name" >
                @error('user_name')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
               </div>

               <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="user_email">
                @error('user_email')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror

               </div>

               <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" class="form-control" name="user_pass">
                @error('user_pass')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
               </div>

               <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
               </div>
           </form>

          </div>
    </div>


    <div class="col-md-6" style="border: 1px solid red">
        <div class="card" style="width:100%;">
            <div class="card-header text-center">
              LOGIN
            </div>

         <form action="{{ route('user.reg.login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="user_email">
                @error('user_email')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror

               </div>

               <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" class="form-control" name="user_pass">
                @error('user_pass')
                <div class="alert text-danger">{{ $message }}</div>
            @enderror
               </div>

               <div class="form-group" >
                <label for="exampleInputEmail1" class="form-label"></label>
                <button type="submit" class="btn btn-primary">Login</button>
               </div>
         </form>

          </div>
    </div>
</div>
    </div>
</section>

@endsection

