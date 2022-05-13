@extends('admin.admin_master')
@section('content')
@section('title')
    Update Photo gallery Page
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
                            <h4 class="card-title">Update Photo Gallery</h4>
                            <form class="forms-sample" action="{{ route('update.photogallery',['id'=>$photo->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group ">
                                    <label for="exampleInputName1">Photo Title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="photo_title" value="{{ $photo->photo_title }}">
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-10">
                                        <label for="exampleInputName1">Photo Upload</label>
                                        <input type="file" name="photo" class="form-control" id="exampleFormControlFile1">
                                    </div>
                                    <div class="form-group col-md-2">
                                        {{-- <label for="exampleInputName1" class="">Present Image</label> --}}
                                        <img src="{{ asset($photo->photo) }}" alt="" style="width:60px;height:60px; border-radius: 50%;">
                                        <input type="hidden" name="oldimg" value="{{ $photo->photo }}">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="exampleInputName1">Type</label>
                                    <select class="form-control" id="exampleSelectGender" name="type">
                                        <option disabled="" selected="">--Select Type Number--</option>
                                        <option value="1"<?php  if($photo->type==1) {echo"selected";} ?>>Big Photo</option>
                                        <option value="0"<?php  if($photo->type==0) {echo"selected";} ?>>samll Photo</option>
                                    </select>
                                </div>



                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
