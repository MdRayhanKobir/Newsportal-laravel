@extends('admin.admin_master')
@section('title')
    All Post Page
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
                            <h4 class="card-title">Post Table</h4>
                            <div class="template-demo">
                                <a href="{{ route('create.posts') }}"><button type="button" class="btn btn-outline-primary btn-fw mb-2" style="float:right">Add Post</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th> SL </th>
                                            <th> Title English</th>
                                            <th> Title Bangla </th>
                                            <th> Category  </th>
                                            <th> District </th>
                                            <th> Image </th>
                                            <th> Post Date </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       @foreach ($post as $posts )
                                       <tr>
                                        <td>{{ $post->firstItem()+$loop->index }}</td>
                                        <td> {{Str::limit($posts->title_eng ,10) }}</td>
                                        <td>{{Str::limit($posts->title_bang ,10) }} </td>
                                        <td>{{ $posts->category_eng }} | {{ $posts->category_bang }}</td>
                                        <td>{{ $posts->district_eng }} | {{ $posts->district_bang }}</td>
                                        <td><img src="{{ asset($posts->image) }}" alt="" style="width:50px; height:50px;"> </td>
                                        <td>{{ Carbon\Carbon::parse($posts->post_date)->diffForhumans() }} </td>

                                        <td>
                                            <a href="{{ route('edit.posts',['id'=>$posts->id]) }}"class="btn btn-info">Edit</a>
                                            <a href="{{ route('delete.posts',['id'=>$posts->id]) }}"class="btn btn-danger" onclick=" return confirm('are you sure deleted?')">Delete</a>
                                        </td>
                                    </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                                {{ $post->links('pagination-link') }}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection
