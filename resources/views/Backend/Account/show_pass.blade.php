@extends('admin.admin_master')
@section('content')
@section('title')
    Create Ad's Page
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('content')
    <section>
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card corona-gradient-card">
                        <div class="card-body py-0 px-0 px-sm-3">
                            <div class="row align-items-center">
                                <div class="col-4 col-sm-3 col-xl-2">
                                    <img src="{{ asset('backend/assets/images/dashboard/Group126@2x.png') }}"
                                        class="gradient-corona-img img-fluid" alt="">
                                </div>
                                <div class="col-5 col-sm-7 col-xl-8 p-0">
                                    <h4 class="mb-1 mb-sm-0">Welcome to Newsportal </h4>
                                </div>
                                <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                                    <span>
                                        <a href=" {{ url('/') }} " target="_blank"
                                            class="btn btn-outline-light btn-rounded get-started-btn">Vist Fontend ? </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Password</h4>
                            <form class="forms-sample" action="{{ route('change.password') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group ">
                                    <label for="current_password">Current Password</label>
                                    <input type="password" class="form-control" id="current_password" name="oldpassword">
                                    @error('oldpassword')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group ">
                                    <label for="password">New Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    @error('password')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group ">
                                    <label for="password_confirmation">Confirmation Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                    @error('password_confirmation')
                                    <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
