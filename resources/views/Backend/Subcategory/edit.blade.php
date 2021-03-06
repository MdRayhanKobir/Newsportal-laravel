@extends('admin.admin_master')
@section('title')
    Edit SubCategory Page
@endsection
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
                                    <h4 class="mb-1 mb-sm-0">Welcome our newsportal</h4>
                                </div>
                                <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                                    <span>
                                        <a href="{{ url('/') }}" target="_blank"
                                            class="btn btn-outline-light btn-rounded get-started-btn">Visit Frontend?</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Sub-Category</h4>
                            <form class="forms-sample" action="{{ route('update.subcategories',['id'=>$subcategory->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Sub-Category English</label>
                                    <input type="text" class="form-control" name="subcategory_eng"
                                        placeholder="subcategory english..." value="{{ $subcategory->subcategory_eng }}">
                                    @error('category_eng')
                                        <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sub-Category Bangla</label>
                                    <input type="text" class="form-control" name="subcategory_bang"
                                        placeholder="subcategory bangla..." value="{{ $subcategory->subcategory_bang }}">
                                    @error('category_bang')
                                        <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Select Category</label>
                                    <select class="form-control" id="exampleFormControlSelect2" name="category_id">
                                        <option disabled="" selected="">--select category</option>
                                        @foreach ($category as $category)
                                            <option value="{{ $category->id }}" <?php
                                        if ($category->id == $subcategory->category_id) {
                                            echo 'selected';
                                        }
                                            ?>>
                                                {{ $category->category_eng }} | {{ $category->category_bang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection
