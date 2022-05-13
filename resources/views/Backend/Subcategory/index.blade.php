@extends('admin.admin_master')
@section('title')
    SubCategory Page
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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">SubCategory Table</h4>
                            <div class="template-demo">
                                <a href="{{ route('add.subcategories') }}"><button type="button"
                                        class="btn btn-outline-primary btn-fw mb-2" style="float:right">Add
                                        SubCategory</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th> SL </th>
                                            <th> Category English</th>
                                            <th> Category Bangla </th>
                                            <th> Category Name </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($subcategory as $subcategories)
                                            <tr>
                                                <td>{{ $subcategory->firstItem() + $loop->index }}</td>
                                                <td>{{ $subcategories->subcategory_eng }}</td>
                                                <td>{{ $subcategories->subcategory_bang }}</td>
                                                <td>{{ $subcategories->category_eng }} | {{ $subcategories->category_bang }}</td>
                                                <td>
                                                    <a href="{{ route('edit.subcategories',['id'=> $subcategories->id]) }}" class="btn btn-info">Edit</a>
                                                    <a href="{{ route('delete.subcategories',['id'=>$subcategories->id]) }}" class="btn btn-danger"
                                                        onclick=" return confirm('are you sure deleted?')">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $subcategory->links('pagination-link') }}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection
