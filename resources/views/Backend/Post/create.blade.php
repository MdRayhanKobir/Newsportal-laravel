@extends('admin.admin_master')
@section('content')
@section('title')
    Category Page
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
                                    <h4 class="mb-1 mb-sm-0">Welcome to  Newsportal </h4>
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
                            <h4 class="card-title">New Post Insert</h4>
                            <form class="forms-sample" action="{{ route('store.posts') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">Title English</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name=" title_eng">
                                        @error('title_eng')
                                        <div class="alert text-danger">{{ $message }}</div>
                                         @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">Title Bangla</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="title_bang">
                                        @error('title_bang')
                                        <div class="alert text-danger">{{ $message }}</div>
                                         @enderror
                                    </div>
                                </div> <!-- End Row  -->




                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">Category</label>
                                        <select class="form-control" id="exampleSelectGender" name="category_id">
                                            <option disabled="" selected="">--Select Category--</option>
                                            @foreach ($category as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_eng }} |
                                                    {{ $category->category_bang }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <div class="alert text-danger">{{ $message }}</div>
                                         @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">SubCategory</label>
                                        <select class="form-control" name="subcategory_id" id="subcategory_id">
                                            <option disabled="" selected="">--Select SubCategory--</option>

                                        </select>
                                    </div>
                                </div> <!-- End Row  -->


                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">District</label>
                                        <select class="form-control" id="exampleSelectGender" name="district_id">
                                            <option disabled="" selected="">--Select District--</option>
                                            @foreach ($district as $district)
                                                <option value="{{ $district->id }}">{{ $district->district_eng }} |
                                                    {{ $district->district_bang }}</option>
                                            @endforeach
                                        </select>
                                        @error('district_id')
                                        <div class="alert text-danger">{{ $message }}</div>
                                    @enderror

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">Sub-District</label>
                                        <select class="form-control" name="subdistrict_id" id="subdistrict_id">
                                            <option disabled="" selected="">--Select SubDistrict--</option>
                                        </select>
                                    </div>
                                </div> <!-- End Row  -->

                                <div class="form-group">
                                    <label for="exampleInputName1">News Image Upload</label>
                                    <input type="file" name="image" class="form-control" id="exampleFormControlFile1">
                                </div>



                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">Tags English</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="tags_eng">
                                        @error('tags_eng')
                                        <div class="alert text-danger">{{ $message }}</div>
                                         @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">Tags Bangla</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="tags_bang">
                                        @error('tags_bang')
                                        <div class="alert text-danger">{{ $message }}</div>
                                         @enderror
                                    </div>
                                </div> <!-- End Row  -->


                                <div class="form-group">
                                    <label for="exampleTextarea1">Details English</label>
                                    <textarea class="form-control" name="details_eng" id="summernote"></textarea>
                                </div>


                                <div class="form-group">
                                    <label for="exampleTextarea1">Details Bangla</label>
                                    <textarea class="form-control" name="details_bang" id="summernote1"></textarea>
                                </div>



                                <hr>
                                <h4 class="text-center">Extra Opions </h4>
                                <br>

                                <div class="row ml-2">
                                    <label class="form-check-label col-md-3">
                                        <input type="checkbox" name="headline" class="form-check-input" value="1"> Headline
                                        <i class="input-helper"></i></label>

                                    <label class="form-check-label col-md-3">
                                        <input type="checkbox" name="bigthumnail" class="form-check-input" value="1">
                                        General Big Thhumbnail <i class="input-helper"></i></label>

                                    <label class="form-check-label col-md-3">
                                        <input type="checkbox" name="first_section" class="form-check-input" value="1">
                                        First Section <i class="input-helper"></i></label>

                                    <label class="form-check-label col-md-3">
                                        <input type="checkbox" name="first_section_thumnail" class="form-check-input"
                                            value="1"> First Section BigThumbnail <i class="input-helper"></i></label>
                                </div> <!-- End Row  -->

                                <br><br>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
    This is for Category  -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="category_id"]').on('change', function() {
                    var category_id = $(this).val();
                    if (category_id) {
                        $.ajax({
                            url: "{{ url('/get/subcategory/') }}/" + category_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $("#subcategory_id").empty();
                                $.each(data, function(key, value) {
                                    $("#subcategory_id").append('<option value="' + value
                                        .id + '">' + value.subcategory_eng + ' | ' + value.subcategory_bang + '</option>'
                                        );
                                });

                            },

                        });
                    } else {
                        alert('danger');
                    }
                });
            });
        </script>


        <!--
    This is for District  -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="district_id"]').on('change', function() {
                    var district_id = $(this).val();
                    if (district_id) {
                        $.ajax({
                            url: "{{ url('/get/subdistrict/') }}/" + district_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $("#subdistrict_id").empty();
                                $.each(data, function(key, value) {
                                    $("#subdistrict_id").append('<option value="' + value
                                        .id + '">' + value.subdistrict_eng + ' | ' + value.subdistrict_bang + '</option>'
                                        );
                                });


                            },

                        });
                    } else {
                        alert('danger');
                    }
                });
            });
        </script>




    @endsection
