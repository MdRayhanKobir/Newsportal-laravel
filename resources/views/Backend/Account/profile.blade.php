@extends('admin.admin_master')
@section('content')
@section('title')
User Profile Page
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
                            <h4 class="card-title">User Profile</h4>
                            <a href="{{ route('profile.edit') }}"class="btn btn-success" style="float:right">Edit Profile</a>
                            <div class="card" style="width: 18rem;">
                                <img src="{{ (!empty($editProfile->image))?url('upload/user_images/'.$editProfile->image):url('upload/no-image.jpg') }}" class="card-img-top " alt="..." style="width: 200px; height:200px;">
                                <div class="card-body">
                                  <h5 class="card-title">User Name   :{{$editProfile->name }}</h5>
                                  <p class="card-text">User Email    :{{$editProfile->email }}</p>
                                  <p class="card-text">User Mobile   :{{$editProfile->mobile }}</p>
                                  <p class="card-text">User Gender   :{{$editProfile->gender }}</p>
                                  <p class="card-text">User Address  :{{$editProfile->address }}</p>
                                  <p class="card-text">User Position :{{$editProfile->position }}</p>

                                </div>
                              </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
