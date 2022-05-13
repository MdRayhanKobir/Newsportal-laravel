@extends('admin.admin_master')
@section('title')
    User role index Page
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
                            <img src="{{ asset('backend/assets/images/dashboard/Group126@2x.png') }}" class="gradient-corona-img img-fluid" alt="">
                          </div>
                          <div class="col-5 col-sm-7 col-xl-8 p-0">
                            <h4 class="mb-1 mb-sm-0">Welcome our newsportal</h4>
                          </div>
                          <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                            <span>
                              <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Visit Frontend?</a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Category Table</h4>
                            <div class="template-demo">
                                <a href="{{ route('add.writter') }}"><button type="button" class="btn btn-outline-primary btn-fw mb-2" style="float:right">Add User Role</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th> SL </th>
                                            <th> User Name</th>
                                            <th> User Role </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i=1;
                                        @endphp
                                       @foreach ($writter as $writter )
                                       <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{  $writter->name}}</td>
                                        <td>
                                            @if ($writter->category==1)
                                            <span class="badge badge-success">Category</span>
                                            @else
                                            @endif

                                            @if ($writter->district==1)
                                            <span class="badge badge-info">Distric</span>
                                            @else
                                            @endif

                                            @if ($writter->setting==1)
                                            <span class="badge badge-danger">Setting</span>
                                            @else
                                            @endif

                                            @if ($writter->post==1)
                                            <span class="badge badge-primary">Post</span>
                                            @else
                                            @endif

                                            @if ($writter->ads==1)
                                            <span class="badge badge-success">Ad's</span>
                                            @else
                                            @endif

                                            @if ($writter->gallery==1)
                                            <span class="badge badge-info">Gallery</span>
                                            @else
                                            @endif

                                            @if ($writter->role==1)
                                            <span class="badge badge-success">Role</span>
                                            @else
                                            @endif

                                            @if ($writter->website==1)
                                            <span class="badge badge-danger">Website</span>
                                            @else
                                            @endif


                                    </td>
                                        <td>
                                            <a href="{{ route('edit.writter',['id'=>$writter->id]) }}"class="btn btn-info">Edit</a>
                                            <a href="{{ route('delete.writter',['id'=>$writter->id]) }}"class="btn btn-danger" onclick=" return confirm('are you sure deleted?')">Delete</a>
                                        </td>
                                    </tr>
                                       @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection
