@extends('admin.admin_master')
@section('content')
@section('title')
    Profile Update Page
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
                            <h4 class="card-title">Profile Update</h4>
                            <form class="forms-sample" action="{{ route('store.profile',['id'=>$editProfile->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group ">
                                    <label for="exampleInputName1">User Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{ $editProfile->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">User Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlFile1"value="{{ $editProfile->email }}">
                                </div>
                                <div class="form-group ">
                                    <label for="exampleInputName1">User Mobile Number</label>
                                    <input type="number" class="form-control" id="exampleInputName1" name="mobile" value="{{ $editProfile->mobile }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">User Address</label>
                                    <input type="tet" name="address" class="form-control" id="exampleFormControlFile1"value="{{ $editProfile->address }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">User Position</label>
                                    <input type="tet" name="position" class="form-control" id="exampleFormControlFile1" value="{{ $editProfile->position }}">
                                </div>

                                <div class="form-group ">
                                    <label for="exampleInputName1">Gender</label>
                                    <select class="form-control" id="exampleSelectGender" name="gender">
                                        <option disabled="" selected="">--Select Gender--</option>
                                        <option value="Male" {{ $editProfile->gender=='Male'?'selected':''}}>Male</option>
                                        <option value="Female" {{ $editProfile->gender=='Female'?'selected':''}}>Female</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <label for="exampleInputName1">Image</label>
                                        <input type="file" name="image" class="form-control" id="image">
                                    </div>
                                    <div class="form-group col-md-4">
                                        {{-- <label for="exampleInputName1" class="">Present Image</label> --}}
                                        <input type="hidden" name="oldimg" value="{{ $editProfile->image }}">
                                        <img id="showImage" src="{{ (!empty($editProfile->image))?url('upload/user_images/'.$editProfile->image):url('upload/no-image.jpg') }}" alt="" style="width:80px;height:80px;">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">

        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload=function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

        </script>



    @endsection
