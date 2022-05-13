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
                            <h4 class="card-title">New Ad's</h4>
                            <form class="forms-sample" action="{{ route('store.adslist') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group ">
                                    <label for="exampleInputName1">Ad's Link</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="link">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Ad's Upload</label>
                                    <input type="file" name="ads" class="form-control" id="exampleFormControlFile1">
                                </div>

                                <div class="form-group ">
                                    <label for="exampleInputName1">Type</label>
                                    <select class="form-control" id="exampleSelectGender" name="type">
                                        <option disabled="" selected="">--Select Type Number--</option>
                                        <option value="1">Vertically ad's</option>
                                        <option value="0">Horizontally ad's</option>
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
